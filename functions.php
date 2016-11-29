<?php
/**
 * Maitake functions and definitions
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 * @link https://codex.wordpress.org/Plugin_API
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */

/**
 * Theme Setup
 *
 * @since 1.0.0
 * @link  https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
 */
function maitake_setup() {
	// Add thumbnail.
	add_theme_support( 'post-thumbnails' );

	// Add post-feed, comment-feed.
	add_theme_support( 'automatic-feed-links' );

	// Add title element.
	add_theme_support( 'title-tag' );

	/**
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	) );

	/**
	 * Post Formats Support
	 * @see: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat'
	) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Custom Header Support
	 * @see: https://codex.wordpress.org/Custom_Headers
	 */
	$args = array(
		'default-image'          => '',
		'random-default'         => false,
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '__return_false',
		'admin-head-callback'    => '__return_false',
		'admin-preview-callback' => '__return_false',
	);
	add_theme_support( 'custom-header', $args );

	/**
	 * Custom Background Support
	 * @see: https://codex.wordpress.org/Custom_Backgrounds
	 */
	$args = array(
		'default-color'          => 'ffffff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'default-attachment'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '__return_false',
		'admin-preview-callback' => '__return_false'
	);
	add_theme_support( 'custom-background', $args );

	/**
	 * Theme Logo Support
	 * @see: https://codex.wordpress.org/Theme_Logo
	 */
	$args = array(
	 	'height'      => 0,
	 	'width'       => 0,
	 	'flex-height' => true,
	 	'flex-width'  => true,
	 	'header-text' => array( 'site-title', 'site-description' )
	);
	add_theme_support( 'custom-logo', $args );

	/**
	 * Content Width Support
	 * @see: https://codex.wordpress.org/Content_Width
	 */
	if ( ! isset( $content_width ) ) {
		$content_width = 780;
	}

	// Add editor style.
	add_editor_style();

	// Set thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => 'Primary Menu'
	) );
}
add_action( 'after_setup_theme', 'maitake_setup' );

/**
 * wp_head() remove
 *
 * @since 1.0.0
 */
function maitake_remove_action_head() {
	// Remove WordPress version information.
	remove_action( 'wp_head', 'wp_generator' );

	// Remove wlwmanifest address.（ Windows Live Writer for WordPress ）
	remove_action( 'wp_head', 'wlwmanifest_link' );

	// Remove EditURI address.
	remove_action( 'wp_head', 'rsd_link' );

	// Remove REST API URL.
	remove_action( 'wp_head', 'rest_output_link_wp_head');

	// Remove emoji DNS prefetch.
	add_filter( 'emoji_svg_url', '__return_false' );

	// Remove emoji script and style remove.
	remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles',     'print_emoji_styles' );
	remove_action( 'admin_print_styles',  'print_emoji_styles' );

	// Remove oEmbed.
	remove_action( 'wp_head', 'rest_output_link_wp_head' );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
}
add_action( 'after_setup_theme', 'maitake_remove_action_head' );

/**
 * Widget Area Register
 *
 * @since 1.0.0
 * @link  https://developer.wordpress.org/reference/functions/register_sidebar/
 */
function maitake_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets here to appear in your sidebar.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'maitake_widgets_init' );

/**
 * scripts and styles add
 *
 * @since 1.0.0
 */
function maitake_scripts() {
	// WordPress Dash Icon.
	wp_enqueue_style( 'dashicons' );

	// Theme stylesheet.
	wp_enqueue_style( 'maitake-style', get_stylesheet_uri() );

	// Comment Reply.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Menu Script
	wp_enqueue_script( 'maitake-menu-script', get_template_directory_uri() . '/js/menu.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'maitake_scripts' );

/**
 * hentry microformats.org remove.
 *
 * @since 1.0.0
 */
function theme_remove_hentry( $classes ) {
	$classes = array_diff( $classes, array( 'hentry' ) );
	return $classes;
}
add_filter( 'post_class','theme_remove_hentry' );