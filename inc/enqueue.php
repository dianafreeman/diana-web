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
	 wp_enqueue_script( 'jquery-easing', get_stylesheet_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), '', true );

	/* Bootstrap */
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css' );

	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.js', array(), true );

	/* Font Awesome */
	wp_enqueue_style( 'fa-css', "https://use.fontawesome.com/releases/v5.7.1/css/all.css" );

	/* Animate on Scroll*/
	wp_enqueue_style( 'aos-css', get_stylesheet_directory_uri().'/vendor/aos/aos.css' );
	wp_enqueue_script( 'aos-js', get_stylesheet_directory_uri().'/vendor/aos/aos.js', array(), true );

	/* Slick  */
	wp_enqueue_style( 'carousel',get_stylesheet_directory_uri().'/vendor/slick/slick.css' );

	wp_enqueue_style( 'carousel-style',get_stylesheet_directory_uri().'/vendor/slick/slick-theme.css' );

	wp_enqueue_script( 'carousel-js', get_stylesheet_directory_uri().'/vendor/slick/slick.min.js', array('jquery'), true );


	/* Google Font API */
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Space+Mono:400,500|Playball|Lato');


}

add_action( 'wp_enqueue_scripts', 'library_scripts' );



function diana_simple_theme_scripts() {

	wp_enqueue_style( 'dsf-main', get_stylesheet_directory_uri().'/assets/css/main.css' );
	wp_enqueue_style( 'local-animations', get_stylesheet_directory_uri().'/assets/css/local-anims.css' );
	wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri().'/assets/css/animate.css' );
	wp_enqueue_script( 'typed-js', 'https://cdn.jsdelivr.net/npm/typed.js@2.0.9', array('jquery'), '20151215', true );
	
	wp_enqueue_script( 'typed-actions', get_stylesheet_directory_uri() . '/assets/js/type-index.js', array('jquery','typed-js'), '', true );
	
	 wp_enqueue_script( 'diana-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery','carousel-js'), '', true );



	 wp_enqueue_script( 'diana-simple-skip-link-focus-fix', get_stylesheet_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'diana_simple_theme_scripts' );

