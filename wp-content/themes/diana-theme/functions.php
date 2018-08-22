<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


function add_diana_styles(){
wp_register_style( 'bootstrap-sandstone', get_stylesheet_directory_uri().'/assets/css/bootstrap-sandstone.css' );

wp_enqueue_style('bootstrap-sandstone');
}
add_action('wp_enqueue_scripts', 'add_diana_styles');

function add_diana_scripts(){
wp_register_script( 'bootstrap-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js");
wp_register_script( 'bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js");


wp_enqueue_script('bootstrap-popper');
wp_enqueue_script('bootstrap-js');

}
add_action('wp_enqueue_scripts', 'add_diana_scripts');