<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}
$path=plugin_dir_path(__FILE__);
include_once($path . "cf7-mailchimp-pro.php");
include_once($path . "includes/install.php");
$install=new vxcf_mailchimp_install();
$settings=get_option($install->id.'_settings',array());
wp_clear_scheduled_hook($install->id.'_prune_logs');
if(empty($install->other_plugin_version())){
    $install->remove_roles();
    delete_option($install->id.'_msgs');
    delete_option($install->id.'_debug');
    delete_option($install->id.'_meta');
}
if(!empty($settings['plugin_data'])){
  $install->remove_data();
}
