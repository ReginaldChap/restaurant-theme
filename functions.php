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
    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css',false,'6.4','all');
    wp_enqueue_style( 'app', get_template_directory_uri() . '/css/app.css' );
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', false ,  '1' , true );
    wp_register_script( 'what-input', get_template_directory_uri() . '/js/vendor/what-input.js', false , '1', true );
    wp_register_script( 'foundation', get_template_directory_uri() . '/js/vendor/foundation.js', false , '1', true );
    wp_register_script( 'app', get_template_directory_uri() . '/js/app.js', array( 'jquery' ) , '1', true );    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'what-input' );
    wp_enqueue_script( 'foundation' );
    wp_enqueue_script( 'app' );    
}
add_action( 'wp_enqueue_scripts', 'jessesrestauranttheme_scripts_and_styles');


