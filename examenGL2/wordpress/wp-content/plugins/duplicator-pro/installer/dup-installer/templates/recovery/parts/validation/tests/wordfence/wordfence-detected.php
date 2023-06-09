<?php
/**
 *
 * @package templates/default
 * @var $wordFencePath
 */
defined('ABSPATH') || defined('DUPXABSPATH') || exit;
?>
<div class="sub-title">STATUS</div>
<p class="red"> A Wordfence firewall instance was detected at <b><?php echo DUPX_U::esc_html($wordFencePath); ?></b>. </p>

<div class="sub-title">DETAILS</div>
<p>
    The Wordfence Web Application Firewall is a PHP based, application level firewall that filters out malicious
    requests to your site. Sometimes Wordfence returns false positives on requests done during the installation process,
    because of which it might fail.
</p>

<div class="sub-title">TROUBLESHOOT</div>
<p>
    We recommend turning off the Wordfence firewall of the WordPress instance located at "<?php echo DUPX_U::esc_html($wordFencePath); ?>"
    during the installation process and reactivate it after the migration is completed. To deactivate the firewall follow these steps:
</p>
<ol>
    <li>Login to the WordPress Admin Dashboard</li>
    <li>Navigate to Wordfence > Firewall</li>
    <li>Click on "All Firewall Options" </li>
    <li>Click on "Remove Extended Protection" </li>
    <li>Download a copy of the configuration file and click "Continue"</li>
    <li>Wait for the changes to take place</li>
</ol>
<p>
    If there is no WordPress installation present at that location please remove all of the following files from that directory:
</p>
<ol>
    <li>.htaccess</li>
    <li>.user.ini</li>
    <li>.php.ini</li>
    <li>wordfence-waf.php</li>
</ol>
