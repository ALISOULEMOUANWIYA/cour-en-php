<?php

/**
 * Class used to update and edit web server configuration files
 * for .htaccess, web.config and user.ini
 *
 * Standard: PSR-2
 * @link http://www.php-fig.org/psr/psr-2 Full Documentation
 *
 * @package SC\DUPX\ServerConfig
 *
 */
defined('ABSPATH') || defined('DUPXABSPATH') || exit;

class DUPX_ServerConfig
{
    const INSTALLER_HOST_ENTITY_PREFIX                 = 'installer_host_';
    const CONFIG_ORIG_FILE_USERINI_ID                  = 'userini';
    const CONFIG_ORIG_FILE_HTACCESS_ID                 = 'htaccess';
    const CONFIG_ORIG_FILE_WPCONFIG_ID                 = 'wpconfig';
    const CONFIG_ORIG_FILE_PHPINI_ID                   = 'phpini';
    const CONFIG_ORIG_FILE_WEBCONFIG_ID                = 'webconfig';
    const CONFIG_ORIG_FILE_USERINI_ID_OVERWRITE_SITE   = 'installer_host_userini';
    const CONFIG_ORIG_FILE_HTACCESS_ID_OVERWRITE_SITE  = 'installer_host_htaccess';
    const CONFIG_ORIG_FILE_WPCONFIG_ID_OVERWRITE_SITE  = 'installer_host_wpconfig';
    const CONFIG_ORIG_FILE_PHPINI_ID_OVERWRITE_SITE    = 'installer_host_phpini';
    const CONFIG_ORIG_FILE_WEBCONFIG_ID_OVERWRITE_SITE = 'installer_host_webconfig';

    /**
     * Common timestamp of all members of this class
     * 
     * @staticvar type $time
     * @return type
     */
    public static function getFixedTimestamp()
    {
        static $time = null;

        if (is_null($time)) {
            $time = date("ymdHis");
        }

        return $time;
    }

    /**
     * Creates a copy of the original server config file and resets the original to blank
     *
     * @param string $rootPath The root path to the location of the server config files
     *
     * @return null
     * @throws Exception
     */
    public static function reset($rootPath)
    {
        $rootPath      = DupProSnapLibIOU::trailingslashit($rootPath);
        $paramsManager = DUPX_Params_Manager::getInstance();

        DUPX_Log::info("\n*** RESET CONFIG FILES IN CURRENT HOSTING");

        switch ($paramsManager->getValue(DUPX_Params_Manager::PARAM_WP_CONFIG)) {
            case 'modify':
            case 'new':
                if (self::runReset($rootPath . 'wp-config.php', self::CONFIG_ORIG_FILE_WPCONFIG_ID) === false) {
                    $paramsManager->setValue(DUPX_Params_Manager::PARAM_WP_CONFIG, 'nothing');
                }
                break;
            case 'nothing':
                break;
        }

        switch ($paramsManager->getValue(DUPX_Params_Manager::PARAM_HTACCESS_CONFIG)) {
            case 'new':
            case 'original':
                if (self::runReset($rootPath . '.htaccess', self::CONFIG_ORIG_FILE_HTACCESS_ID) === false) {
                    $paramsManager->setValue(DUPX_Params_Manager::PARAM_HTACCESS_CONFIG, 'nothing');
                }
                break;
            case 'nothing':
                break;
        }

        switch ($paramsManager->getValue(DUPX_Params_Manager::PARAM_OTHER_CONFIG)) {
            case 'new':
            case 'original':
                if (self::runReset($rootPath . 'web.config', self::CONFIG_ORIG_FILE_WEBCONFIG_ID) === false) {
                    $paramsManager->setValue(DUPX_Params_Manager::PARAM_OTHER_CONFIG, 'nothing');
                }
                if (self::runReset($rootPath . '.user.ini', self::CONFIG_ORIG_FILE_USERINI_ID) === false) {
                    $paramsManager->setValue(DUPX_Params_Manager::PARAM_OTHER_CONFIG, 'nothing');
                }
                if (self::runReset($rootPath . 'php.ini', self::CONFIG_ORIG_FILE_PHPINI_ID) === false) {
                    $paramsManager->setValue(DUPX_Params_Manager::PARAM_OTHER_CONFIG, 'nothing');
                }
                break;
            case 'nothing':
                break;
        }

        $paramsManager->save();
        DUPX_Log::info("*** RESET CONFIG FILES END");
    }

    public static function setFiles($rootPath)
    {
        $paramsManager = DUPX_Params_Manager::getInstance();
        $origFiles     = DUPX_Orig_File_Manager::getInstance();
        DUPX_Log::info("SET CONFIG FILES");

        $entryKey = self::CONFIG_ORIG_FILE_WPCONFIG_ID;
        switch ($paramsManager->getValue(DUPX_Params_Manager::PARAM_WP_CONFIG)) {
            case 'new':
                if (DupProSnapLibIOU::copy(DUPX_Package::getWpconfigSamplePath(), DUPX_WPConfig::getWpConfigPath()) === false) {
                    DUPX_NOTICE_MANAGER::getInstance()->addFinalReportNotice(array(
                        'shortMsg'    => 'Can\' reset wp-config to wp-config-sample',
                        'level'       => DUPX_NOTICE_ITEM::CRITICAL,
                        'longMsgMode' => DUPX_NOTICE_ITEM::MSG_MODE_DEFAULT,
                        'longMsg'     => 'Target file entry ' . DUPX_Log::varToString(DUPX_WPConfig::getWpConfigPath()),
                        'sections'    => 'general'
                    ));
                } else {
                    DUPX_Log::info("Copy wp-config-sample.php to target:" . DUPX_WPConfig::getWpConfigPath());
                }
                break;
            case 'modify':
                if (DupProSnapLibIOU::copy($origFiles->getEntryStoredPath($entryKey), DUPX_WPConfig::getWpConfigPath()) === false) {
                    DUPX_NOTICE_MANAGER::getInstance()->addFinalReportNotice(array(
                        'shortMsg'    => 'Can\' restore oirg file entry ' . $entryKey,
                        'level'       => DUPX_NOTICE_ITEM::CRITICAL,
                        'longMsgMode' => DUPX_NOTICE_ITEM::MSG_MODE_DEFAULT,
                        'longMsg'     => 'Target file entry ' . DUPX_Log::varToString(DUPX_WPConfig::getWpConfigPath()),
                        'sections'    => 'general'
                    ));
                } else {
                    DUPX_Log::info("Retained original entry " . $entryKey . " target:" . DUPX_WPConfig::getWpConfigPath());
                }
                break;
            case 'nothing':
                break;
        }

        $entryKey = self::CONFIG_ORIG_FILE_HTACCESS_ID;
        switch ($paramsManager->getValue(DUPX_Params_Manager::PARAM_HTACCESS_CONFIG)) {
            case 'new':
                $targetHtaccess = self::getHtaccessTargetPath();
                if (DupProSnapLibIOU::touch($targetHtaccess) === false) {
                    DUPX_NOTICE_MANAGER::getInstance()->addFinalReportNotice(array(
                        'shortMsg'    => 'Can\'t create new htaccess file',
                        'level'       => DUPX_NOTICE_ITEM::CRITICAL,
                        'longMsgMode' => DUPX_NOTICE_ITEM::MSG_MODE_DEFAULT,
                        'longMsg'     => 'Target file entry ' . $targetHtaccess,
                        'sections'    => 'general'
                    ));
                } else {
                    DUPX_Log::info("New htaccess file created:" . $targetHtaccess);
                }
                break;
            case 'original':
                if (($storedHtaccess = $origFiles->getEntryStoredPath($entryKey)) === false) {
                    DUPX_Log::info("Retained original entry. htaccess doesn\'t exist in original site");
                    break;
                }

                $targetHtaccess = self::getHtaccessTargetPath();
                if (DupProSnapLibIOU::copy($storedHtaccess, $targetHtaccess) === false) {
                    DUPX_NOTICE_MANAGER::getInstance()->addFinalReportNotice(array(
                        'shortMsg'    => 'Can\' restore oirg file entry ' . $entryKey,
                        'level'       => DUPX_NOTICE_ITEM::HARD_WARNING,
                        'longMsgMode' => DUPX_NOTICE_ITEM::MSG_MODE_DEFAULT,
                        'longMsg'     => 'Target file entry ' . DUPX_Log::varToString($targetHtaccess),
                        'sections'    => 'general'
                    ));
                } else {
                    DUPX_Log::info("Retained original entry " . $entryKey . " target:" . $targetHtaccess);
                }
                break;
            case 'nothing':
                break;
        }

        switch ($paramsManager->getValue(DUPX_Params_Manager::PARAM_OTHER_CONFIG)) {
            case 'new':
                if ($origFiles->getEntry(self::CONFIG_ORIG_FILE_WEBCONFIG_ID_OVERWRITE_SITE)) {
                    //IIS: This is reset because on some instances of IIS having old values cause issues
                    //Recommended fix for users who want it because errors are triggered is to have
                    //them check the box for ignoring the web.config files on step 1 of installer
                    $xml_contents = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
                    $xml_contents .= "<!-- Reset by Duplicator Installer.  Original can be found in the original_files_ folder-->\n";
                    $xml_contents .= "<configuration></configuration>\n";
                    if (file_put_contents($rootPath . "/web.config", $xml_contents) === false) {
                        DUPX_Log::info('RESET: can\'t create a new empty web.config');
                    }
                }
                break;
            case 'original':
                $entries = array(
                    self::CONFIG_ORIG_FILE_USERINI_ID,
                    self::CONFIG_ORIG_FILE_WEBCONFIG_ID,
                    self::CONFIG_ORIG_FILE_PHPINI_ID
                );
                foreach ($entries as $entryKey) {
                    if ($origFiles->getEntry($entryKey) !== false) {
                        if (DupProSnapLibIOU::copy($origFiles->getEntryStoredPath($entryKey), $origFiles->getEntryTargetPath($entryKey, false)) === false) {
                            DUPX_NOTICE_MANAGER::getInstance()->addFinalReportNotice(array(
                                'shortMsg'    => 'Can\' restore oirg file entry ' . $entryKey,
                                'level'       => DUPX_NOTICE_ITEM::HARD_WARNING,
                                'longMsgMode' => DUPX_NOTICE_ITEM::MSG_MODE_DEFAULT,
                                'longMsg'     => 'Target file entry ' . DUPX_Log::varToString($origFiles->getEntryTargetPath($entryKey, false)),
                                'sections'    => 'general'
                            ));
                        } else {
                            DUPX_Log::info("Retained original entry " . $entryKey . " target:" . $origFiles->getEntryTargetPath($entryKey, false));
                        }
                    }
                }
                break;
            case 'nothing':
                break;
        }

        DUPX_NOTICE_MANAGER::getInstance()->saveNotices();
    }

    public static function getHtaccessTargetPath()
    {
        if (($targetEnty = DUPX_Orig_File_Manager::getInstance()->getEntryTargetPath(self::CONFIG_ORIG_FILE_HTACCESS_ID, false)) !== false) {
            return $targetEnty;
        } else {
            return DUPX_Params_Manager::getInstance()->getValue(DUPX_Params_Manager::PARAM_PATH_NEW) . '/.htaccess';
        }
    }

    /**
     * Creates a copy of the original server config file and resets the original to blank per file
     *
     * @param string $filePath file path to store
     * @param string if not false rename
     * @return bool        Returns true if the file was backed-up and reset or there was no file to reset
     * @throws Exception
     */
    private static function runReset($filePath, $storedName)
    {
        $fileName = basename($filePath);

        try {
            if (file_exists($filePath)) {
                if (!DupProSnapLibIOU::chmod($filePath, 'u+rw') || !is_readable($filePath) || !is_writable($filePath)) {
                    throw new Exception("RESET CONFIG FILES: permissions error on file config path " . $filePath);
                }

                $origFiles = DUPX_Orig_File_Manager::getInstance();
                $filePath  = DupProSnapLibIOU::safePathUntrailingslashit($filePath);

                DUPX_Log::info("RESET CONFIG FILES: I'M GOING TO MOVE CONFIG FILE " . DUPX_LOG::varToString($fileName) . " IN ORIGINAL FOLDER");

                if ($origFiles->addEntry(self::INSTALLER_HOST_ENTITY_PREFIX . $storedName, $filePath, DUPX_Orig_File_Manager::MODE_MOVE, self::INSTALLER_HOST_ENTITY_PREFIX . $storedName)) {
                    DUPX_Log::info("\tCONFIG FILE HAS BEEN RESET");
                } else {
                    throw new Exception("can\'t stored file " . DUPX_LOG::varToString($fileName) . " in orginal file folder");
                }
            } else {
                DUPX_Log::info("RESET CONFIG FILES: " . DUPX_LOG::varToString($fileName) . " does not exist, no need for rest", DUPX_Log::LV_DETAILED);
            }
        } catch (Exception $e) {
            DUPX_Log::logException($e, DUPX_Log::LV_DEFAULT, 'RESET CONFIG FILES ERROR: ');
            DUPX_NOTICE_MANAGER::getInstance()->addBothNextAndFinalReportNotice(array(
                'shortMsg'    => 'Can\'t reset config file ' . DUPX_LOG::varToString($fileName) . ' so it will not be modified.',
                'level'       => DUPX_NOTICE_ITEM::HARD_WARNING,
                'longMsgMode' => DUPX_NOTICE_ITEM::MSG_MODE_DEFAULT,
                'longMsg'     => 'Message: ' . $e->getMessage(),
                'sections'    => 'general'
            ));
            return false;
        } catch (Error $e) {
            DUPX_Log::logException($e, DUPX_Log::LV_DEFAULT, 'RESET CONFIG FILES ERROR: ');
            DUPX_NOTICE_MANAGER::getInstance()->addBothNextAndFinalReportNotice(array(
                'shortMsg'    => 'Can\'t reset config file ' . DUPX_LOG::varToString($fileName) . ' so it will not be modified.',
                'level'       => DUPX_NOTICE_ITEM::HARD_WARNING,
                'longMsgMode' => DUPX_NOTICE_ITEM::MSG_MODE_DEFAULT,
                'longMsg'     => 'Message: ' . $e->getMessage(),
                'sections'    => 'general'
            ));
            return false;
        }

        return true;
    }

    /**
     * 
     * @return boolean|string false if loca config don't exists or path of store local config
     */
    public static function getWpConfigLocalStoredPath()
    {
        $origFiles = DUPX_Orig_File_Manager::getInstance();
        $entry     = self::CONFIG_ORIG_FILE_WPCONFIG_ID_OVERWRITE_SITE;
        if ($origFiles->getEntry($entry)) {
            return $origFiles->getEntryStoredPath($entry);
        } else {
            return false;
        }
    }

    /**
     * Get AddHandler line from existing WP .htaccess file
     *
     * @return string
     * @throws Exception
     */
    private static function getOldHtaccessAddhandlerLine()
    {
        $origFiles          = DUPX_Orig_File_Manager::getInstance();
        $backupHtaccessPath = $origFiles->getEntryStoredPath(self::CONFIG_ORIG_FILE_HTACCESS_ID_OVERWRITE_SITE);
        DUPX_Log::info("Installer Host Htaccess path: " . $backupHtaccessPath, DUPX_Log::LV_DEBUG);

        if ($backupHtaccessPath !== false && file_exists($backupHtaccessPath)) {
            $htaccessContent = file_get_contents($backupHtaccessPath);
            if (!empty($htaccessContent)) {
                // match and trim non commented line  "AddHandler application/x-httpd-XXXX .php" case insenstive
                $re      = '/^[\s\t]*[^#]?[\s\t]*(AddHandler[\s\t]+.+\.php[ \t]?.*?)[\s\t]*$/mi';
                $matches = array();
                if (preg_match($re, $htaccessContent, $matches)) {
                    return "\n" . $matches[1];
                }
            }
        }
        return '';
    }

    /**
     * Sets up the web config file based on the inputs from the installer forms.
     *
     * @param int $mu_mode		Is this site a specific multi-site mode
     * @param object $dbh		The database connection handle for this request
     * @param string $path		The path to the config file
     *
     * @return null
     */
    public static function setup($dbh, $path)
    {
        DUPX_Log::info("\nWEB SERVER CONFIGURATION FILE UPDATED:");

        $paramsManager = DUPX_Params_Manager::getInstance();
        $htAccessPath  = "{$path}/.htaccess";
        $mu_generation = DUPX_ArchiveConfig::getInstance()->mu_generation;

        // SKIP HTACCESS
        $skipHtaccessConfigVals = array('nothing', 'original');
        if (in_array($paramsManager->getValue(DUPX_Params_Manager::PARAM_HTACCESS_CONFIG), $skipHtaccessConfigVals)) {
            if (!$paramsManager->getValue(DUPX_Params_Manager::PARAM_RESTORE_BACKUP_MODE) && !DUPX_InstallerState::isAddSiteOnMultisite()) {
                // on restore packup mode no warning needed
                $longMsg = 'Retaining the original .htaccess files may cause '
                    . 'issues with the initial setup of your site. '
                    . 'If you encounter any problems, check the contents of the configuration files manually or '
                    . 'reinstall the site again by changing the configuration file settings.';

                DUPX_NOTICE_MANAGER::getInstance()->addFinalReportNotice(array(
                    'shortMsg'    => 'Can\'t update new htaccess file',
                    'level'       => DUPX_NOTICE_ITEM::NOTICE,
                    'longMsgMode' => DUPX_NOTICE_ITEM::MSG_MODE_DEFAULT,
                    'longMsg'     => $longMsg,
                    'sections'    => 'general'
                ));
            }
            return;
        }

        $timestamp    = date("Y-m-d H:i:s");
        $post_url_new = $paramsManager->getValue(DUPX_Params_Manager::PARAM_URL_NEW);
        $newdata      = parse_url($post_url_new);
        $newpath      = DUPX_U::addSlash(isset($newdata['path']) ? $newdata['path'] : "");
        $update_msg   = "# This file was updated by Duplicator Pro on {$timestamp}.\n";
        $update_msg   .= "# See the original_files_ folder for the original source_site_htaccess file.";
        $update_msg   .= self::getOldHtaccessAddhandlerLine();

        switch (DUPX_InstallerState::getInstType()) {
            case DUPX_InstallerState::INSTALL_SINGLE_SITE:
            case DUPX_InstallerState::INSTALL_STANDALONE:
                $tmp_htaccess = self::htAcccessNoMultisite($update_msg, $newpath, $dbh);
                DUPX_Log::info("- Preparing .htaccess file with basic setup.");
                break;
            case DUPX_InstallerState::INSTALL_MULTISITE_SUBDOMAIN:
                if ($mu_generation == 1) {
                    $tmp_htaccess = self::htAccessSubdomainPre53($update_msg, $newpath);
                } else {
                    $tmp_htaccess = self::htAccessSubdomain($update_msg, $newpath);
                }
                DUPX_Log::info("- Preparing .htaccess file with multisite subdomain setup.");
                break;
            case DUPX_InstallerState::INSTALL_MULTISITE_SUBFOLDER:
                if ($mu_generation == 1) {
                    $tmp_htaccess = self::htAccessSubdirectoryPre35($update_msg, $newpath);
                } else {
                    $tmp_htaccess = self::htAccessSubdirectory($update_msg, $newpath);
                }
                DUPX_Log::info("- Preparing .htaccess file with multisite subdirectory setup.");
                break;
            case DUPX_InstallerState::INSTALL_SINGLE_SITE_ON_SUBDOMAIN:
            case DUPX_InstallerState::INSTALL_SINGLE_SITE_ON_SUBFOLDER:
            case DUPX_InstallerState::INSTALL_SUBSITE_ON_SUBDOMAIN:
            case DUPX_InstallerState::INSTALL_SUBSITE_ON_SUBFOLDER:
            case DUPX_InstallerState::INSTALL_NOT_SET:
                throw new Exception('Cannot change setup with current installation type [' . DUPX_InstallerState::getInstType() . ']');
            default:
                throw new Exception('Unknown mode');
        }

        if (file_exists($htAccessPath) && DupProSnapLibIOU::chmod($htAccessPath, 'u+rw') === false) {
            DUPX_Log::info("WARNING: Unable to update htaccess file permessition.");
            DUPX_NOTICE_MANAGER::getInstance()->addFinalReportNotice(array(
                'shortMsg'    => 'Can\'t update new htaccess file',
                'level'       => DUPX_NOTICE_ITEM::CRITICAL,
                'longMsgMode' => DUPX_NOTICE_ITEM::MSG_MODE_DEFAULT,
                'longMsg'     => 'Unable to update the .htaccess file! Please check the permission on the root directory and make sure the .htaccess exists.',
                'sections'    => 'general'
            ));
        } else if (file_put_contents($htAccessPath, $tmp_htaccess) === false) {
            DUPX_Log::info("WARNING: Unable to update the .htaccess file! Please check the permission on the root directory and make sure the .htaccess exists.");
            DUPX_NOTICE_MANAGER::getInstance()->addFinalReportNotice(array(
                'shortMsg'    => 'Can\'t update new htaccess file',
                'level'       => DUPX_NOTICE_ITEM::CRITICAL,
                'longMsgMode' => DUPX_NOTICE_ITEM::MSG_MODE_DEFAULT,
                'longMsg'     => 'Unable to update the .htaccess file! Please check the permission on the root directory and make sure the .htaccess exists.',
                'sections'    => 'general'
            ));
        } else {
            DUP_PRO_Extraction::setPermsFromParams($htAccessPath);
            DUPX_Log::info("HTACCESS FILE - Successfully updated the .htaccess file setting.");
        }
    }

    private static function htAcccessNoMultisite($update_msg, $newpath, $dbh)
    {
        $result         = '';
        // no multisite
        $empty_htaccess = false;
        $optonsTable    = mysqli_real_escape_string($dbh, DUPX_DB_Functions::getOptionsTableName());
        $query_result   = DUPX_DB::mysqli_query($dbh, "SELECT option_value FROM `" . $optonsTable . "` WHERE option_name = 'permalink_structure' ");

        if ($query_result) {
            $row = @mysqli_fetch_array($query_result);
            if ($row != null) {
                $permalink_structure = trim($row[0]);
                $empty_htaccess      = empty($permalink_structure);
            }
        }

        if ($empty_htaccess) {
            DUPX_Log::info('NO PERMALINK STRUCTURE FOUND: set htaccess without directives');
            $result = <<<EMPTYHTACCESS
{$update_msg}
# BEGIN WordPress
# The directives (lines) between `BEGIN WordPress` and `END WordPress` are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.

# END WordPress
EMPTYHTACCESS;
        } else {
            $result = <<<HTACCESS
{$update_msg}
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase {$newpath}
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . {$newpath}index.php [L]
</IfModule>
# END WordPress
HTACCESS;
        }

        return $result;
    }

    private static function htAccessSubdomainPre53($update_msg, $newpath)
    {
        // Pre wordpress 3.5
        $result = <<<HTACCESS
{$update_msg}
# BEGIN WordPress (Pre 3.5 Multisite Subdomain)
RewriteEngine On
RewriteBase {$newpath}
RewriteRule ^index\.php$ - [L]

# uploaded files
RewriteRule ^files/(.+) wp-includes/ms-files.php?file=$1 [L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule . index.php [L]
# END WordPress
HTACCESS;
        return $result;
    }

    private static function htAccessSubdomain($update_msg, $newpath)
    {
        // 3.5+
        $result = <<<HTACCESS
{$update_msg}
# BEGIN WordPress (3.5+ Multisite Subdomain)
RewriteEngine On
RewriteBase {$newpath}
RewriteRule ^index\.php$ - [L]

# add a trailing slash to /wp-admin
RewriteRule ^wp-admin$ wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^(wp-(content|admin|includes).*) $1 [L]
RewriteRule ^(.*\.php)$ $1 [L]
RewriteRule . index.php [L]
# END WordPress
HTACCESS;
        return $result;
    }

    private static function htAccessSubdirectoryPre35($update_msg, $newpath)
    {
        // Pre 3.5
        $result = <<<HTACCESS
{$update_msg}
# BEGIN WordPress (Pre 3.5 Multisite Subdirectory)
RewriteEngine On
RewriteBase {$newpath}
RewriteRule ^index\.php$ - [L]

# uploaded files
RewriteRule ^([_0-9a-zA-Z-]+/)?files/(.+) wp-includes/ms-files.php?file=$2 [L]

# add a trailing slash to /wp-admin
RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^[_0-9a-zA-Z-]+/(wp-(content|admin|includes).*) $1 [L]
RewriteRule ^[_0-9a-zA-Z-]+/(.*\.php)$ $1 [L]
RewriteRule . index.php [L]
# END WordPress
HTACCESS;
        return $result;
    }

    private static function htAccessSubdirectory($update_msg, $newpath)
    {
        $result = <<<HTACCESS
{$update_msg}
# BEGIN WordPress (3.5+ Multisite Subdirectory)
RewriteEngine On
RewriteBase {$newpath}
RewriteRule ^index\.php$ - [L]

# add a trailing slash to /wp-admin
RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(wp-(content|admin|includes).*) $2 [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ $2 [L]
RewriteRule . index.php [L]
# END WordPress
HTACCESS;
        return $result;
    }
}
