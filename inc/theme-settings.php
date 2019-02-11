<?php
/**
 * Check and setup theme's default settings
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'diana_simple_setup_theme_default_settings' ) ) {
	function diana_simple_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$diana_simple_posts_index_style = get_theme_mod( 'diana_simple_posts_index_style' );
		if ( '' == $diana_simple_posts_index_style ) {
			set_theme_mod( 'diana_simple_posts_index_style', 'default' );
		}

		// Sidebar position.
		$diana_simple_sidebar_position = get_theme_mod( 'diana_simple_sidebar_position' );
		if ( '' == $diana_simple_sidebar_position ) {
			set_theme_mod( 'diana_simple_sidebar_position', 'right' );
		}

		// Container width.
		$diana_simple_container_type = get_theme_mod( 'diana_simple_container_type' );
		if ( '' == $diana_simple_container_type ) {
			set_theme_mod( 'diana_simple_container_type', 'container' );
		}
	}
}
