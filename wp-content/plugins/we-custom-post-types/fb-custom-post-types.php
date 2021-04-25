<?php
/*
Plugin Name: SG Custom Post Types
Plugin URI: https://Forgebit.com
Description: Custom Post Types
Version: 1.0
Author: Simon Glavan
Author URI: https://Forgebit.com
Text Domain: fbcpt
Domain Path: /languages
*/

if ( ! function_exists('fb_custom_post_types') ) {

    // Register Custom Post Type
    function fb_custom_post_types() {
    
        require 'post-types/implementations.php';  

    }
        
    add_action( 'init', 'fb_custom_post_types', 0 );
    
}

