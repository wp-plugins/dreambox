<?php
/*
Plugin Name: Dream Box
Plugin URI: http://www.dreamwebsite.asia
Description: Make nice notes, alerts,downloads, important and many more icon with Dream Box in your post.
Version: 1.0
Author: Vivek Singh
Author URI: http://www.dreamwebsite.asia
*/

function dreambox(){
    $dreambox = get_option('dreambox');
    if($dreambox=='1'){
        if ( !defined('WP_CONTENT_URL') ) define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
        $plugin_url = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__));
        echo '<link rel="stylesheet" href="'.$plugin_url.'/style.css"'.' type="text/css" media="screen" />';
    }
}

function active_dreambox(){
        add_option('dreambox','1','active the plugin');
}

function deactive_dreambox(){
    delete_option('dreambox');
}

add_action('wp_head', 'dreambox');

register_activation_hook(__FILE__,'active_dreambox');
register_deactivation_hook(__FILE__,'deactive_dreambox');

?>