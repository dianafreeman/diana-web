<?php
/**
 * Understrap Theme Customizer
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'diana_simple_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function diana_simple_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'diana_simple_customize_register' );

if ( ! function_exists( 'diana_simple_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function diana_simple_theme_customize_register( $wp_customize ) {

		// Theme layout settings.
		$wp_customize->add_section(
			'diana_simple_theme_layout_options',
			array(
				'title'       => __( 'Theme Layout Settings', 'diana-simple' ),
				'capability'  => 'edit_theme_options',
				'description' => __( 'Container width and sidebar defaults', 'diana-simple' ),
				'priority'    => 160,
			)
		);



		// Theme layout settings.
		$wp_customize->add_section(
			'diana_simple_theme_homepage_sections',
			array(
				'title'       => __( 'Homepage Section Settings', 'diana-simple' ),
				'capability'  => 'edit_theme_options',
				'description' => __( 'Settings for Homepage Sections', 'diana-simple' ),
				'priority'    => 160,
			)
		);

		/**
		 * Select sanitization function
		 *
		 * @param string               $input   Slug to sanitize.
		 * @param WP_Customize_Setting $setting Setting instance.
		 * @return string Sanitized slug if it is a valid choice; otherwise, the setting default.
		 */
		function diana_simple_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );

  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

		function diana_simple_theme_slug_sanitize_select( $input, $setting ) {

			// Ensure input is a slug (lowercase alphanumeric characters, dashes and underscores are allowed only).
			$input = sanitize_key( $input );

			// Get the list of possible select options.
			$choices = $setting->manager->get_control( $setting->id )->choices;

				// If the input is a valid key, return it; otherwise, return the default.
				return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

		}

		$wp_customize->add_setting(
			'diana_simple_container_type',
			array(
				'default'           => 'container',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'diana_simple_theme_slug_sanitize_select',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'diana_simple_container_type',
				array(
					'label'       => __( 'Container Width', 'diana-simple' ),
					'description' => __( 'Choose between Bootstrap\'s container and container-fluid', 'diana-simple' ),
					'section'     => 'diana_simple_theme_layout_options',
					'settings'    => 'diana_simple_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'diana-simple' ),
						'container-fluid' => __( 'Full width container', 'diana-simple' ),
					),
					'priority'    => '10',
				)
			)
		);

		$wp_customize->add_setting(
			'diana_simple_sidebar_position',
			array(
				'default'           => 'right',
				'type'              => 'theme_mod',
				'sanitize_callback' => 'sanitize_text_field',
				'capability'        => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'diana_simple_sidebar_position',
				array(
					'label'             => __( 'Sidebar Positioning', 'diana-simple' ),
					'description'       => __(
						'Set sidebar\'s default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.',
						'understrap'
					),
					'section'           => 'homepage_settings',
					'settings'          => 'diana_simple_sidebar_position',
					'type'              => 'select',
					'sanitize_callback' => 'diana_simple_theme_slug_sanitize_select',
					'choices'           => array(
						'right' => __( 'Right sidebar', 'diana-simple' ),
						'left'  => __( 'Left sidebar', 'diana-simple' ),
						'both'  => __( 'Left & Right sidebars', 'diana-simple' ),
						'none'  => __( 'No sidebar', 'diana-simple' ),
					),
					'priority'          => '20',
				)
			)
		);
	$wp_customize->add_setting(
			'diana_simple_construction_mode',
			array(
				'default'           => 'false',
				'type'              => 'select',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'diana_simple_theme_slug_sanitize_select'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'diana_simple_construction_mode',
				array(
					'label'             => __( 'Construction Mode', 'diana-simple' ),
					'description'       => __(
						'Set construction mode to ENABLED or DISABLED.',
						'diana-simple'
					),
					'section'           => 'diana_simple_theme_layout_options',
					'settings'          => 'diana_simple_construction_mode',
					'type'              => 'select',
					'sanitize_callback' => 'diana_simple_theme_slug_sanitize_select',
					'choices'           => array(
						'false' => __( 'Construction Mode Disabled', 'diana-simple' ),
						'true'  => __( 'Construction Mode Enabled', 'diana-simple' )
					),
					'priority'          => '1',
				)
			)
		);

		$wp_customize->add_setting(
			'diana_simple_about_page_slug',
			array(
				'default'           => 37,
				'type'     => 'dropdown-pages',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'diana_simple_sanitize_dropdown_pages'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'diana_simple_about_page_slug',
				array(
					'label'             => __( 'About Page', 'diana-simple' ),
					'description'       => __(
						'Set the destination for the "Tell Me More" button.',
						'diana-simple'
					),
					'section'           => 'diana_simple_theme_homepage_sections',
					'settings'          => 'diana_simple_about_page_slug',
					'type'              => 'dropdown-pages',
					'sanitize_callback' => 'diana_simple_sanitize_dropdown_pages',

					
				)
			)
		);
	}
} // endif function_exists( 'diana_simple_theme_customize_register' ).
add_action( 'customize_register', 'diana_simple_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'diana_simple_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function diana_simple_customize_preview_js() {
		wp_enqueue_script(
			'diana_simple_customizer',
			get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ),
			'20130508',
			true
		);
	}
}
add_action( 'customize_preview_init', 'diana_simple_customize_preview_js' );
