<?php
/**
 * Mak Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mak_Blog
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mak_blog_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Mak Blog, use a find and replace
		* to change 'mak-blog' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mak-blog', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'mak-blog' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'mak_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mak_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mak_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'mak_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mak_blog_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mak-blog' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mak-blog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mak_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mak_blog_scripts() {
	wp_enqueue_style( 'mak-blog-plugins', get_template_directory_uri() . '/assets/css/plugins.css', array(), _S_VERSION );
	wp_enqueue_style( 'mak-blog-styles', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'mak-blog-color', get_template_directory_uri() . '/assets/css/color.css', array(), _S_VERSION );
	wp_enqueue_style( 'mak-blog-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	wp_deregister_script('jquery');
	wp_enqueue_script( 'mak-blog-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mak-blog-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mak-blog-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mak_blog_scripts' );

require_once get_template_directory() . '/inc/Custom_nav_walker.php';
require_once get_template_directory() . '/inc/template-functions.php';
require_once get_template_directory() . '/inc/template-tags.php';

function clean_empty_p_tags($content) {
    // Remove <p> tags that are empty or contain only <br> tags
    return preg_replace('/<p>\s*(<br\s*\/?>)?\s*<\/p>/i', '', $content);
}

// Apply the filter to clean the_content
add_filter('the_content', 'clean_empty_p_tags', 20);

show_admin_bar(false);
