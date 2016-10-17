<?php
/**
* Plugin Name: Facebook Footer Link
* Description: Adds a Facebook profile link to the end of posts
* Version: 1.0
* Author: Dan Zoen
*
**/

// Exit if Acessed Directly
if ( ! defined('ABSPATH')){
	exit;
}

// Global Options Variable
$ffl_options = get_option('ffl_settings');

if (array_key_exists('enable', $ffl_options) == false) {
    $ffl_options['enable'] = 0;
}
if (array_key_exists('show_in_feed', $ffl_options) == false) {
    $ffl_options['show_in_feed'] = 0;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-scripts.php');

// Load Content
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-content.php');

if(is_admin()){
// Load Settings
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-settings.php');
}
