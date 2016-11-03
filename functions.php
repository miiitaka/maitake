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
 * テーマのセットアップ
 *
 * @since 1.0.0
 * @link  https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
 */
function maitake_setup() {
	// 投稿・固定ページなどにサムネイルを登録できるようにする
	add_theme_support( 'post-thumbnails' );

	// head 要素内に投稿とコメントの feed URL を追加する
	add_theme_support( 'automatic-feed-links' );

	// title 要素を head 要素に追加する
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
	 * 投稿フォーマットのサポート
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

	// 投稿・固定ページなどにサムネイルを登録できる画像サイズを指定
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => 'Primary Menu'
	) );
}
add_action( 'after_setup_theme', 'maitake_setup' );

/**
 * wp_head() で自動追加される要素を削除
 *
 * @since 1.0.0
 */
function maitake_remove_action_head() {
	// WordPress のバージョン情報
	remove_action( 'wp_head', 'wp_generator' );

	// wlwmanifest のアドレス（ Windows Live Writer を使用して WordPress に記事を投稿するときのアドレス）
	remove_action( 'wp_head', 'wlwmanifest_link' );

	// EditURI のアドレス（外部ツールを使用して WordPress に記事を投稿するときのアドレス）
	remove_action( 'wp_head', 'rsd_link' );

	// REST API 用 URL
	remove_action( 'wp_head', 'rest_output_link_wp_head');

	// 絵文字の DNS prefetch 指定を削除
	add_filter( 'emoji_svg_url', '__return_false' );

	// 絵文字の script 要素と style 要素を削除
	remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles',     'print_emoji_styles' );
	remove_action( 'admin_print_styles',  'print_emoji_styles' );

	// oEmbed 埋め込み機能
	remove_action( 'wp_head', 'rest_output_link_wp_head' );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
}
add_action( 'after_setup_theme', 'maitake_remove_action_head' );

/**
 * ウィジェットエリアの登録
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
 * scripts 要素 styles 要素の追加
 *
 * @since 1.0.0
 */
function maitake_scripts() {
	// WordPress Dash Icon
	wp_enqueue_style( 'dashicons' );

	// Theme stylesheet.
	wp_enqueue_style( 'maitake-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'maitake_scripts' );