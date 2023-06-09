<?php
/**
 * Lightweight abstraction layer for common simple database routines
 *
 * Standard: PSR-2
 *
 * @package SC\DupPro\DB
 * @copyright (c) 2017, Snapcreek LLC
 * @license	https://opensource.org/licenses/GPL-3.0 GNU Public License
 *
 */
defined('ABSPATH') || defined('DUPXABSPATH') || exit;

class DUP_PRO_DB extends wpdb
{

    const BUILD_MODE_MYSQLDUMP         = 'MYSQLDUMP';
    const BUILD_MODE_PHP_SINGLE_THREAD = 'PHP';
    const BUILD_MODE_PHP_MULTI_THREAD  = 'PHPCHUNKING';

    /**
     * Get the requested MySQL system variable
     *
     * @param string $variable The database variable name to lookup
     *
     * @return string the server variable to query for
     */
    public static function getVariable($variable)
    {
        global $wpdb;
        $row = $wpdb->get_row("SHOW VARIABLES LIKE '{$variable}'", ARRAY_N);
        return isset($row[1]) ? $row[1] : null;
    }

    /**
     * 
     * @global wpdb $wpdb
     * 
     * @param string $table
     */
    public static function updateCaseSensitivePrefix($table)
    {
        global $wpdb;
        if (stripos($table, $wpdb->prefix) === 0) {
            return $wpdb->prefix.substr($table, strlen($wpdb->prefix));
        } else {
            return $table;
        }
    }

    /**
     * Gets the MySQL database version number
     *
     * @param bool $full    True:  Gets the full version if available (i.e 10.2.3-MariaDB)
     *                      False: Gets only the numeric portion i.e. (5.5.6 -or- 10.1.2)
     *
     * @return false|string 0 on failure, version number on success
     */
    public static function getVersion($full = false)
    {
        global $wpdb;

        if ($full) {
            $version = self::getVariable('version');
        } else {
            $version = preg_replace('/[^0-9.].*/', '', self::getVariable('version'));
        }

        //Fall-back for servers that have restricted SQL for SHOW statement
        //Note: For MariaDB this will report something like 5.5.5 when it is really 10.2.1.
        //This mainly is due to mysqli_get_server_info method which gets the version comment
        //and uses a regex vs getting just the int version of the value.  So while the former
        //code above is much more accurate it may fail in rare situations
        if (empty($version)) {
            $version = $wpdb->db_version();
        }

        return empty($version) ? 0 : $version;
    }

    /**
     * Try to return the mysqldump path on Windows servers
     *
     * @return boolean|string
     */
    public static function getWindowsMySqlDumpRealPath()
    {
        if (function_exists('php_ini_loaded_file')) {
            $get_php_ini_path = php_ini_loaded_file();
            if (@file_exists($get_php_ini_path)) {
                $search = array(
                    dirname(dirname($get_php_ini_path)).'/mysql/bin/mysqldump.exe',
                    dirname(dirname(dirname($get_php_ini_path))).'/mysql/bin/mysqldump.exe',
                    dirname(dirname($get_php_ini_path)).'/mysql/bin/mysqldump',
                    dirname(dirname(dirname($get_php_ini_path))).'/mysql/bin/mysqldump',
                );

                foreach ($search as $mysqldump) {
                    if (@file_exists($mysqldump)) {
                        return str_replace("\\", "/", $mysqldump);
                    }
                }
            }
        }

        unset($search);
        unset($get_php_ini_path);

        return false;
    }

    /**
     * Returns the mysqldump path if the server is enabled to execute it
     *
     * @return boolean|string
     */
    public static function getMySqlDumpPath($is_executeble = true)
    {
        $global = DUP_PRO_Global_Entity::get_instance();

        //Is shell_exec possible
        if (!DUP_PRO_Shell_U::isShellExecEnabled()) {
            return false;
        }

        $custom_mysqldump_path = (strlen($global->package_mysqldump_path)) ? $global->package_mysqldump_path : '';

        //Common Windows Paths
        if (DupProSnapLibOSU::isWindows()) {
            $paths = array(
                $custom_mysqldump_path,
                DUP_PRO_DB::getWindowsMySqlDumpRealPath(),
                'C:/xampp/mysql/bin/mysqldump.exe',
                'C:/Program Files/xampp/mysql/bin/mysqldump',
                'C:/Program Files/MySQL/MySQL Server 6.0/bin/mysqldump',
                'C:/Program Files/MySQL/MySQL Server 5.5/bin/mysqldump',
                'C:/Program Files/MySQL/MySQL Server 5.4/bin/mysqldump',
                'C:/Program Files/MySQL/MySQL Server 5.1/bin/mysqldump',
                'C:/Program Files/MySQL/MySQL Server 5.0/bin/mysqldump',
            );
        }
        //Common Linux Paths
        else {

            $paths = array(
                $custom_mysqldump_path,
                '/usr/local/bin/mysqldump',
                '/usr/local/mysql/bin/mysqldump',
                '/usr/mysql/bin/mysqldump',
                '/usr/bin/mysqldump',
                '/opt/local/lib/mysql6/bin/mysqldump',
                '/opt/local/lib/mysql5/bin/mysqldump',
                '/opt/local/lib/mysql4/bin/mysqldump',
                '/usr/bin/mysqldump',
            );


            //add possible executeable path if that exists instead of empty string
            $mysqldump = `which mysqldump`;
            if (DUP_PRO_U::isExecutable($mysqldump)) {
                $paths[] = (!empty($mysqldump)) ? $mysqldump : '';
            }

            $mysqldump = dirname(`which mysql`)."/mysqldump";
            if (DUP_PRO_U::isExecutable($mysqldump)) {
                $paths[] = (!empty($mysqldump)) ? $mysqldump : '';
            }
        }

        $exec_available = function_exists('exec');

        foreach ($paths as $path) {
            if (strlen($path) === 0) {
                continue;
            }
            
            if(@file_exists($path)) {
                 if (DUP_PRO_U::isExecutable($path)) {
                     return $path;
                 }
             } elseif ($exec_available) {
                 $out = array();
                 $rc  = -1;
                 $cmd = $path . ' --help';
                 @exec($cmd, $out, $rc);
                 if ($rc === 0) {
                     return $path;
                 }
             }
        }

        unset($paths);

        return false;
    }

    /**
     * Get Sql query to create table which is given.
     * 
     * @param string $table Table name
     * @return string mysql query create table
     */
    private static function getCreateTableQuery($table)
    {
        $row = $GLOBALS['wpdb']->get_row('SHOW CREATE TABLE `'.esc_sql($table).'`', ARRAY_N);
        return $row[1];
    }

    /**
     * Returns all collation types that are assigned to the tables in
     * the current database.  Each element in the array is unique
     *
     * @param array $tables A list of tables to include from the search
     *
     * @return array	Returns an array with all the character set being used
     */
    public static function getTableCharSetList($tables)
    {
        $charSets = array();
        try {
            foreach ($tables as $table) {
                $createTableQuery = self::getCreateTableQuery($table);
                if (preg_match('/ CHARSET=([^\s;]+)/i', $createTableQuery, $charsetMatch)) {
                    if (!in_array($charsetMatch[1], $charSets)) {
                        $charSets[] = $charsetMatch[1];
                    }
                }
            }
            return $charSets;
        }
        catch (Exception $ex) {
            return $charSets;
        }
    }

    /**
     * Returns all collation types that are assigned to the tables and colums table in
     * the current database.  Each element in the array is unique
     *
     * @param array $excludeTables A list of tables to exclude from the search
     *
     * @return array	Returns an array with all the collation types being used
     */
    public static function getTableCollationList($excludeTables)
    {
        global $wpdb;
        $collations = array();

        try {
            if (empty($excludeTables)) {
                $excludeTablesQuery = '';
            } else {
                $queryArray = array_map(function ($value) {
                    global $wpdb;
                    return "'".$wpdb->_escape($value)."'";
                }, $excludeTables);
                $excludeTablesQuery = " WHERE `Name` NOT IN (".implode(',', $queryArray).")";
            }

            $tablesResult = $wpdb->get_results("SHOW TABLE STATUS FROM `{$wpdb->dbname}`".$excludeTablesQuery);

            foreach ($tablesResult as $row) {
                if (!empty($row->Collation) && !in_array($row->Collation, $collations)) {
                    $collations[] = $row->Collation;
                }

                $colsResult = $wpdb->get_results("SHOW FULL COLUMNS FROM `{$wpdb->dbname}`.`{$row->Name}`");

                foreach ($colsResult as $colRow) {
                    if (!empty($colRow->Collation) && !in_array($colRow->Collation, $collations)) {
                        $collations[] = $colRow->Collation;
                    }
                }
            }
            sort($collations);
            return $collations;
        }
        catch (Exception $ex) {
            DUP_PRO_Log::infoTrace('GET COLLATION EXCEPTION '.$ex->getMessage());
            return $collations;
        }
    }

    /**
     * Returns the correct database build mode PHP, MYSQLDUMP, PHPCHUNKING
     *
     * @return string//Returns a string with one of theses three values PHP, MYSQLDUMP, PHPCHUNKING
     */
    public static function getBuildMode()
    {
        $global = DUP_PRO_Global_Entity::get_instance();

        if ($global->package_mysqldump) {
            $mysqlDumpPath = DUP_PRO_DB::getMySqlDumpPath();

            if (($mysqlDumpPath === false) && ($global->package_mysqldump)) {
                DUP_PRO_LOG::trace("Forcing into PHP mode - the mysqldump executable wasn't found!");
                $global->package_mysqldump = false;
                $global->save();
            }
        }

        if ($global->package_mysqldump) {
            return self::BUILD_MODE_MYSQLDUMP;
        } else if ($global->package_phpdump_mode == DUP_PRO_PHPDump_Mode::Multithreaded) {
            return self::BUILD_MODE_PHP_MULTI_THREAD;
        } else {
            return self::BUILD_MODE_PHP_SINGLE_THREAD;
        }
    }

    /**
     * Returns an escaped sql string
     *
     * @param string	$sql				The sql to escape
     * @param bool		$removePlaceholderEscape	Patch for how the default WP function works.
     *
     * @return boolean|string
     * @also see: https://make.wordpress.org/core/2017/10/31/changed-behaviour-of-esc_sql-in-wordpress-4-8-3/
     */
    public static function escSQL($sql, $removePlaceholderEscape = false)
    {
        global $wpdb;

        static $removePlMethodExists = null;
        if (is_null($removePlMethodExists)) {
            $removePlMethodExists = method_exists($wpdb, 'remove_placeholder_escape');
        }

        if ($removePlaceholderEscape && $removePlMethodExists) {
            return $wpdb->remove_placeholder_escape(esc_sql($sql));
        } else {
            return esc_sql($sql);
        }
    }

    /**
     * this function escape sql string without add and remove remove_placeholder_escape
     * don't work on array
     *
     * @global type $wpdb
     * @param mixed $sql
     * @return string
     */
    public static function escValueToQueryString($value)
    {
        global $wpdb;

        if (is_null($value)) {
            return 'NULL';
        }

        if ($wpdb->use_mysqli) {
            return '"'.mysqli_real_escape_string($wpdb->dbh, $value).'"';
        } else {
            return '"'.mysql_real_escape_string($value, $wpdb->dbh).'"';
        }
    }

    /**
     * This function returns the list of tables with the number of rows for each table. 
     * Using the count the number is the real and not approximate number of the table schema.
     * 
     * @global wpdb $wpdb
     * @param string|string[] $tables // list of tables os single table
     * @return array // key table nale val table rows
     * @throws Exception
     */
    public static function getTablesRows($tables = array())
    {
        $result = array();
        if (empty($tables)) {
            return $result;
        }

        $tables = (array) $tables;
        global $wpdb;

        $query = '';
        foreach ($tables as $index => $table) {
            $query .= ($index > 0 ? ' UNION ' : '');
            $query .= 'SELECT "'.$wpdb->_real_escape($table).'" AS `table`,  COUNT(*) AS `rows` FROM `'.$wpdb->_real_escape($table).'`';
        }
        $queryResult = $wpdb->get_results($query);
        if ($wpdb->last_error) {
            DUP_PRO_Log::info("QUERY ERROR: ".$wpdb->last_error);
            throw new Exception('SET TOTAL QUERY ERROR: '.$wpdb->last_error);
        }

        foreach ($queryResult as $tableInfo) {
            $result[self::updateCaseSensitivePrefix($tableInfo->table)] = $tableInfo->rows;
        }

        return $result;
    }

    /**
     * This function returns the total number of rows in the listed tables. 
     * It does not count the real number of rows but evaluates the number present in the table schema. 
     * This number is a rough estimate that may be different from the real number.
     * 
     * The advantage of this function is that it is instantaneous unlike the actual counting of lines that take several seconds. 
     * But the number returned by this function cannot be used for any type of line count validation in the database.
     * 
     * @global wpdb $wpdb
     * @param string|string[] $tables // list of tables os single table
     * @return int
     * @throws Exception
     */
    public static function getImpreciseTotaTablesRows($tables = array())
    {
        $tables = (array) $tables;

        if (count($tables) == 0) {
            return 0;
        }

        global $wpdb;
        $query = 'SELECT SUM(TABLE_ROWS) as "totalRows" FROM information_schema.TABLES '
            .'WHERE TABLE_SCHEMA = "'.$wpdb->_real_escape($wpdb->dbname).'" '
            .'AND TABLE_NAME IN ('.implode(',', array_map(array('DUP_PRO_DB', 'escValueToQueryString'), $tables)).')';

        $result = (int) $wpdb->get_var($query);
        if ($wpdb->last_error) {
            DUP_PRO_Log::info("QUERY ERROR: ".$wpdb->last_error);
            throw new Exception('SET TOTAL QUERY ERROR: '.$wpdb->last_error);
        }

        return $result;
    }
}
