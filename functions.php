<?php
/**
 * 
 * Jesse's Restuarant Theme functions and definitions
 * 
 * @package jessesrestauranttheme
 */

 if (! function_exists( 'jessesrestauranttheme_setup' ) ) :

    function jessesrestauranttheme_setup() {
        /**
         * Add default posts and comments RSS feed links to head
         */

         add_theme_support( 'automatic-feed-links' );

         /**
          * Enable support for Post Thumbnails
          */
        add_theme_support ( 'post-thumbnails' );

    }

endif; //jessesrestauranttheme_setup
add_action( 'after_setup_theme', 'jessesrestauranttheme_setup' ); 

/**
 * Enqueue scripts and styles
 */
/*TODO: register foundation styles */
function jessesrestauranttheme_scripts_and_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'jessesrestauranttheme_scripts_and_styles');