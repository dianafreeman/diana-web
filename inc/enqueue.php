<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Enqueue scripts and styles.
 */


function library_scripts() {
	/* JQuery Easing */
	 wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), '', true );

	/* Bootstrap */
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css' );

	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.js', array(), true );

	/* Font Awesome */
	wp_enqueue_style( 'fa-css', "https://use.fontawesome.com/releases/v5.7.1/css/all.css" );

	/* Google Font API */
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Space+Mono:400,500|Playball|Lato');

	/* Magnific PopUp */
	wp_enqueue_style( 'magnific-popup-style', get_stylesheet_directory_uri().'/vendor/magnific-popup/magnific-popup.css' );


}

add_action( 'wp_enqueue_scripts', 'library_scripts' );



function diana_simple_theme_scripts() {

	wp_enqueue_style( 'dsf-main', get_stylesheet_directory_uri().'/css/main.css' );
	wp_enqueue_style( 'local-animations', get_stylesheet_directory_uri().'/css/local-anims.css' );
	wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri().'/css/animate.css' );
	wp_enqueue_script( 'typed-js', 'https://cdn.jsdelivr.net/npm/typed.js@2.0.9', array(), '20151215', true );
	
	if (is_front_page()){
	wp_enqueue_script( 'typed-actions', get_template_directory_uri() . '/js/type-index.js', array('jquery','typed-js'), '', true );
};
	/* Magnific PopUp */
	wp_enqueue_script( 'magnific-popup-js', get_stylesheet_directory_uri().'/vendor/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '', true);

	 wp_enqueue_script( 'diana-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );



	 wp_enqueue_script( 'diana-simple-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'diana_simple_theme_scripts' );

