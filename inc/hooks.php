<?php
/**
 * Custom hooks.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'diana_simple_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function diana_simple_site_info() {
		do_action( 'diana_simple_site_info' );
	}
}

if ( ! function_exists( 'diana_simple_add_site_info' ) ) {
	add_action( 'diana_simple_site_info', 'diana_simple_add_site_info' );

	/**
	 * Add site info content.
	 */
	function diana_simple_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'http://wordpress.org/', 'diana-simple' ) ),
			sprintf(
				/* translators:*/
				esc_html__( 'Proudly powered by %s', 'diana-simple' ),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Theme: %1$s by %2$s.', 'diana-simple' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'http://understrap.com', 'diana-simple' ) ) . '">understrap.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Version: %1$s', 'diana-simple' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'diana_simple_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}

