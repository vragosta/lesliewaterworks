<?php
/**
 * This file contains the necessary theme configuration functions.
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since   0.1.0
 */

namespace lesliewaterworks_com\Twenty_Seventeen\Core;

/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @since  0.1.0
 * @uses   add_action()
 * @return void
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme',     $n( 'lesliewaterworks_setup' ) );
	add_action( 'wp_enqueue_scripts',    $n( 'scripts' ) );
	add_action( 'wp_enqueue_scripts',    $n( 'styles' ) );
	add_action( 'admin_enqueue_scripts', $n( 'admin_styles' ) );
	add_action( 'admin_enqueue_scripts', $n( 'admin_scripts' ) );
	add_action( 'widgets_init',          $n( 'sidebars' ) );
	add_action( 'widgets_init',          $n( 'widgets' ) );
}

/**
 * Declare theme support.
 *
 * @since  0.1.0
 * @uses   add_theme_support(), set_post_thumbnail_size(), add_image_size(), and add_post_type_support(), show_admin_bar()
 * @return void
 */
function lesliewaterworks_setup() {

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );

	// TODO is this necessary?
	set_post_thumbnail_size( 672, 372, true );

	/**
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

	// Add excerpt support to...
	add_post_type_support( 'page', 'excerpt' );

	// If set to 'false', the admin bar will not display on front end.
	show_admin_bar( false );
}

/**
 * Enqueue scripts for front-end.
 *
 * @since  0.1.0
 * @uses   wp_register_script(), p_enqueue_script(), wp_localize_script()
 * @return void
 */
function scripts() {
	wp_register_script(
		'bootstrap',
		LESLIEWATERWORKS_COM_TEMPLATE_URL . "/assets/lib/bootstrap/dist/js/bootstrap.min.js",
		array( 'jquery' ),
		LESLIEWATERWORKS_COM_VERSION,
		true
	);

	wp_register_script(
		'slick',
		'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js',
		array( 'jquery' ),
		STORYCORPS_ORG_VERSION,
		true
	);

	wp_enqueue_script(
		'lesliewaterworks_com',
		LESLIEWATERWORKS_COM_TEMPLATE_URL . "/assets/js/lesliewaterworks---twenty-seventeen.js",
		array( 'jquery', 'bootstrap', 'slick' ),
		LESLIEWATERWORKS_COM_VERSION,
		true
	);

	wp_localize_script( 'lesliewaterworks_com', 'themeUrl', LESLIEWATERWORKS_COM_TEMPLATE_URL );
}

/**
 * Enqueue styles for front-end.
 *
 * @since  0.1.0
 * @uses   wp_register_style(), wp_enqueue_style()
 * @return void
 */
function styles() {
	wp_register_style(
		'fontawesome',
		LESLIEWATERWORKS_COM_TEMPLATE_URL . "/assets/lib/fontawesome/css/font-awesome.min.css",
		array(),
		LESLIEWATERWORKS_COM_VERSION
	);

	wp_register_style(
		'ionicons',
		LESLIEWATERWORKS_COM_TEMPLATE_URL . "/assets/lib/ionicons/css/ionicons.min.css",
		array(),
		LESLIEWATERWORKS_COM_VERSION
	);

	wp_register_style(
		'bootstrap',
		LESLIEWATERWORKS_COM_TEMPLATE_URL . "/assets/lib/bootstrap/dist/css/bootstrap.min.css",
		array( 'fontawesome' ),
		LESLIEWATERWORKS_COM_VERSION
	);

	wp_register_style(
		'sanitize',
		LESLIEWATERWORKS_COM_TEMPLATE_URL . "/assets/lib/sanitize/sanitize.min.css",
		array(),
		LESLIEWATERWORKS_COM_VERSION
	);

	wp_register_style(
		'slick',
		'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css',
		array(),
		STORYCORPS_ORG_VERSION
	);

	wp_register_style(
		'slick-theme',
		'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css',
		array( 'slick' ),
		STORYCORPS_ORG_VERSION
	);

	wp_enqueue_style(
		'lesliewaterworks_com',
		LESLIEWATERWORKS_COM_TEMPLATE_URL . "/assets/css/lesliewaterworks---twenty-seventeen.css",
		array( 'bootstrap', 'fontawesome', 'ionicons', 'sanitize', 'slick-theme' ),
		LESLIEWATERWORKS_COM_VERSION
	);
}

/**
 * Create sidebars for back-end.
 *
 * @since  0.1.0
 * @uses   register_sidebar()
 * @return void
 */
function sidebars() {
	$homepage_1 = array(
		'name'          => __( 'Homepage 1', 'theme_text_domain' ),
		'id'            => 'homepage-1',
		'description'   => 'The first CTA sidebar on the homepage.',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	);

	$homepage_2 = array(
		'name'          => __( 'Homepage 2', 'theme_text_domain' ),
		'id'            => 'homepage-2',
		'description'   => 'The second CTA sidebar on the homepage.',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	);

	register_sidebar( $homepage_1 );
	register_sidebar( $homepage_2 );
}
