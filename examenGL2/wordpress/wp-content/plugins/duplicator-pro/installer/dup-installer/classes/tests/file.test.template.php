<?php die(); /* * * don\'t remove this in the first line * * */ ?>
<?php
if (!defined('DUPXABSPATH')) {
    define('DUPXABSPATH', dirname(__FILE__));
}

$GLOBALS["NOTICES_FILE_PATH"] = '$_$_NOTICES_FILE_PATH_$_$';
require_once('$_$_DUPX_INIT_$_$/lib/snaplib/snaplib.all.php');
require_once('$_$_DUPX_INIT_$_$/classes/utilities/class.u.notices.manager.php');
require_once('$_$_DUPX_INIT_$_$/classes/tests/class.error.handler.script.exec.php');

$GLOBALS["TEST_SCRIPT"] = filter_input(INPUT_GET, 'dpro_test_script_name', FILTER_SANITIZE_STRING);

ob_start();
DUPX_error_handler_script_exec::register();
DUPX_error_handler_script_exec::setShutdownCallabck(function ($errors) {
    $nManager = $nManager = DUPX_NOTICE_MANAGER::getInstance();

    $scriptName   = basename($GLOBALS["TEST_SCRIPT"]);
    $scriptNameId = str_replace(array('.', '-', '#'), '_', $scriptName);

    $firstFatal  = true;
    $firstNotice = true;

    if ($scriptName == 'index.php') {
        $shortMessageFatal  = 'Fatal error on wordpress frontend tests';
        $shortMessageNotice = 'Warnings or notices on wordpress frontend tests';
        $fatalErrorLevel    = DUPX_NOTICE_ITEM::CRITICAL;
    } else if ($scriptName == 'wp-login.php') {
        $shortMessageFatal  = 'Fatal error on wordpress login tests';
        $shortMessageNotice = 'Warnings or notices on wordpress backend tests';
        $fatalErrorLevel    = DUPX_NOTICE_ITEM::FATAL;
    } else {
        $shortMessageFatal  = 'Fatal error on php script '.$scriptName;
        $shortMessageNotice = 'Warnings or notices on php script '.$scriptName;
        $fatalErrorLevel    = DUPX_NOTICE_ITEM::CRITICAL;
    }

    foreach ($errors as $error) {
        $addBeforeNotice = false;
        switch ($error['error_cat']) {
            case DUPX_error_handler_script_exec::ERR_TYPE_ERROR:
                $noticeId     = 'wptest_fatal_error_'.$scriptNameId;
                $errorLevel   = $fatalErrorLevel;
                $shortMessage = $shortMessageFatal;

                if ($firstFatal) {
                    $addBeforeNotice = true;
                    $firstFatal      = false;
                }
                break;
            case DUPX_error_handler_script_exec::ERR_TYPE_NOTICE:
            case DUPX_error_handler_script_exec::ERR_TYPE_DEPRECATED:
            case DUPX_error_handler_script_exec::ERR_TYPE_WARNING:
            default:
                $noticeId     = 'wptest_notice_'.$scriptNameId;
                $errorLevel   = DUPX_NOTICE_ITEM::NOTICE;
                $shortMessage = $shortMessageNotice;

                if ($firstNotice) {
                    $addBeforeNotice = true;
                    $firstNotice     = false;
                }

                break;
        }

        if ($addBeforeNotice) {
            $longMessage = 'SCRIPT FILE TEST: '.$GLOBALS["TEST_SCRIPT"]."\n\n";
        } else {
            $longMessage = '';
        }
        $longMessage .= DUPX_error_handler_script_exec::errorToString($error)."\n-----\n\n";

        $data = array(
            'shortMsg'    => $shortMessage,
            'level'       => $errorLevel,
            'longMsgMode' => DUPX_NOTICE_ITEM::MSG_MODE_PRE,
            'longMsg'     => $longMessage,
            'sections'    => 'general'
        );

        if ($errorLevel == DUPX_NOTICE_ITEM::FATAL) {
            $nManager->addBothNextAndFinalReportNotice($data, DUPX_NOTICE_MANAGER::ADD_UNIQUE_APPEND, $noticeId);
        } else {
            $nManager->addFinalReportNotice($data, DUPX_NOTICE_MANAGER::ADD_UNIQUE_APPEND, $noticeId);
        }
    }

    if ($nManager->saveNotices()) {
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
});

$_SERVER['REQUEST_URI'] = '/';
if (file_exists($GLOBALS["TEST_SCRIPT"])) {
    require_once($GLOBALS["TEST_SCRIPT"]);
} else {
    throw new Exception('test script file '.$GLOBALS["TEST_SCRIPT"].' doesn\'t exist');
}