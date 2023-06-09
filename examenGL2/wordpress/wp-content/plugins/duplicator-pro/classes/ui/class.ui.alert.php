<?php
/**
 * Used to generate a alert in the main WP admin screens
 *
 * Standard: PSR-2
 * @link http://www.php-fig.org/psr/psr-2
 *
 * @package DUP_PRO
 * @subpackage classes/ui
 * @copyright (c) 2017, Snapcreek LLC
 * @license	https://opensource.org/licenses/GPL-3.0 GNU Public License
 * @since 2.0.0
 *
 */

defined("ABSPATH") or die("");

class DUP_PRO_UI_Alert
{

    /**
     *  Shows corrupted tables alert
     */
    public static function showTablesCorrupted()
    {
        if (!current_user_can('export')) {
            return;
        }
        
        if (is_multisite() && !is_super_admin()) {
            return;
        }

        $img_url           = plugins_url('duplicator-pro/assets/img/warning.png');

        echo "<div class='update-nag dpro-admin-notice'><p><img src='{$img_url}' style='float:left; padding:0 10px 0 5px;' /> ".
            sprintf(DUP_PRO_U::esc_html__('%sWarning! Duplicator Pro has shut down.%s'), '<b>', '</b> <br/>').
            DUP_PRO_U::__("Some of the Duplicator tables have been corrupted!")."</br>".
            DUP_PRO_U::__("Please fix the issue.").
            "</p></div>";
    }

    /**
     * Shows install deactivated function
     */
    public static function activatePluginsAfterInstall()
    {
        $pluginsToActive = get_option(DUP_PRO_UI_Notice::OPTION_KEY_ACTIVATE_PLUGINS_AFTER_INSTALL, false);
        if (!is_array($pluginsToActive) || empty($pluginsToActive)) {
            return false;
        }

        $shouldBeActivated = array();
        $allPlugins        = get_plugins();
        foreach ($pluginsToActive as $pluginSlug) {
            if (!isset($allPlugins[$pluginSlug])) {
                continue;
            }

            if (is_multisite()) {
                if (!is_plugin_active_for_network($pluginSlug)) {
                    $shouldBeActivated[$pluginSlug] = $allPlugins[$pluginSlug]['Name'];
                }
            } else {
                if (!is_plugin_active($pluginSlug)) {
                    $shouldBeActivated[$pluginSlug] = $allPlugins[$pluginSlug]['Name'];
                }
            }
        }

        if (empty($shouldBeActivated)) {
            return false;
        }

        $html = "<img src='" . esc_url(plugins_url('duplicator-pro/assets/img/warning.png')) . "' style='float:left; padding:0 10px 0 5px' />".
                "<div style='margin-left: 70px;'><p><b>".DUP_PRO_U::__('Warning!')."</b> ".DUP_PRO_U::__('Migration Almost Complete!')."<br/>".
                DUP_PRO_U::__('Plugin(s) listed here must be activated, Please activate them:')."</p><ul>";

        foreach ($shouldBeActivated as $slug => $title) {
            if (is_multisite()) {
                $activateURL = network_admin_url('plugins.php?action=activate&plugin='.$slug);
            } else {
                $activateURL = admin_url('plugins.php?action=activate&plugin='.$slug);
            }
            $activateURL = wp_nonce_url($activateURL, 'activate-plugin_'.$slug);
            $anchorTitle = sprintf(DUP_PRO_U::__('Activate %s'), $title);
            $html .= '<li><a href="'.DUP_PRO_U::esc_attr__($activateURL).'" title="'.DUP_PRO_U::esc_attr__($anchorTitle).'">'.DUP_PRO_U::esc_attr__($title). '</a></li>';
        }

        $html .= "</ul></div>";

        DUP_PRO_UI_Notice::displayGeneralAdminNotice(
            $html,
            DUP_PRO_UI_Notice::GEN_WARNING_NOTICE,
            true,
            array(
                'duplicator-pro-admin-notice',
                'dpro-admin-notice',
                'dpro-yellow-border'
            ),
            array(
                'data-to-dismiss' => DUP_PRO_UI_Notice::OPTION_KEY_ACTIVATE_PLUGINS_AFTER_INSTALL
            ),
            true
        );
    }
}