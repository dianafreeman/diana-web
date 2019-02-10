<?php
/**
 * Diana Simple functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package diana_simple
 */

if ( ! function_exists( 'diana_simple_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function diana_simple_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Diana Simple, use a find and replace
		 * to change 'diana-simple' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'diana-simple', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'diana-simple' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'diana_simple_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'diana_simple_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function diana_simple_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'diana_simple_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'diana_simple_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function diana_simple_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'diana-theme' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
   ) );

    // First Top Widget 
  register_sidebar( array(
    'name'          => __( 'Top Widget 1', 'diana-theme' ),
    'description'   => __( 'First Top Widget Column', 'diana-theme' ),
    'id'            => 'top-widget-first',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );


    // Second Top Widget 
  register_sidebar( array(
    'name'          => __( 'Top Widget 2', 'diana-theme' ),
    'description'   => __( 'Second Top Widget Column', 'diana-theme' ),
    'id'            => 'top-widget-second',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

    // Third Top Widget 
  register_sidebar( array(
    'name'          => __( 'Top Widget 3', 'diana-theme' ),
    'description'   => __( 'Third Top Widget Column', 'diana-theme' ),
    'id'            => 'top-widget-third',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );


    // First Footer 
  register_sidebar( array(
    'name'          => __( 'Footer 1', 'diana-theme' ),
    'description'   => __( 'First footer column', 'diana-theme' ),
    'id'            => 'footer-first',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

	// Second Footer 
  register_sidebar( array(
    'name'          => __( 'Footer 2', 'diana-theme' ),
    'description'   => __( 'Second footer column', 'diana-theme' ),
    'id'            => 'footer-second',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

	// Third Footer 
  register_sidebar( array(
    'name'          => __( 'Footer 3', 'diana-theme' ),
    'description'   => __( 'Third footer column', 'diana-theme' ),
    'id'            => 'footer-third',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

}
add_action( 'widgets_init', 'diana_simple_theme_widgets_init' );

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
	wp_enqueue_style( 'fa-css', get_stylesheet_directory_uri().'/vendor/font-awesome/css/font-awesome.min.css' );

	/* Google Font API */
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Space+Mono:400,500|Playball');

	/* Magnific PopUp */
	wp_enqueue_style( 'magnific-popup-style', get_stylesheet_directory_uri().'/vendor/magnific-popup/magnific-popup.css' );


}

add_action( 'wp_enqueue_scripts', 'library_scripts' );



function diana_simple_theme_scripts() {
	//wp_enqueue_style( 'diana-simple-style', get_stylesheet_uri() );

	wp_enqueue_style( 'dsf-main', get_stylesheet_directory_uri().'/css/main.css' );
	wp_enqueue_style( 'local-animations', get_stylesheet_directory_uri().'/css/local-anims.css' );
	wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri().'/css/animate.css' );
	wp_enqueue_script( 'typed-js', 'https://cdn.jsdelivr.net/npm/typed.js@2.0.9', array(), '20151215', true );
	
	wp_enqueue_script( 'typed-actions', get_template_directory_uri() . '/js/type-index.js', array('jquery','typed-js'), '', true );

	/* Magnific PopUp */
	wp_enqueue_script( 'magnific-popup-js', get_stylesheet_directory_uri().'/vendor/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '', true);

	 wp_enqueue_script( 'freelancer-main', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true );


	 wp_enqueue_script( 'diana-simple-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'diana_simple_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom Nav Walker (using bootstrap) for this theme.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/understrap-includes.php';

