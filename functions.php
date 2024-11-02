<?php
/**
 * cwt functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cwt
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *a
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cwt_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on cwt, use a find and replace
		* to change 'cwt' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'cwt', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'cwt' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'cwt_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'cwt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cwt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cwt_content_width', 640 );
}
add_action( 'after_setup_theme', 'cwt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cwt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cwt' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cwt' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cwt_widgets_init' );

/**
 * Option Page.
 */


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
		'page_title' =>'Top Bar',
		'menu_title' =>'Top Bar',
		'menu_slug' =>'top-bar',
	));
	acf_add_options_page(array(
		'page_title' =>'Footer',
		'menu_title' =>'Footer',
		'menu_slug' =>'footer',
	));
	acf_add_options_page(array(
		'page_title' =>'Other Site Head Script',
		'menu_title' =>'Other Site Head Script',
		'menu_slug' =>'other-site-head-script',
	));
	acf_add_options_page(array(
		'page_title' =>'Other Site Body Script',
		'menu_title' =>'Other Site Body Script',
		'menu_slug' =>'other-site-body-script',
	));
	acf_add_options_page(array(
		'page_title' =>'Type of header',
		'menu_title' =>'Type of header',
		'menu_slug' =>'type-of-header',
	));
}



/** Remove home page main editor */
function hide_editor() {
	remove_post_type_support('page', 'editor');
	//remove_post_type_support('post', 'editor');
}
add_action( 'admin_init', 'hide_editor' );


/** Enqueue scripts and styles */
function cwt_scripts() {
	//wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.7.2/css/all.css' );
	wp_enqueue_style( 'cwt-main-style', get_template_directory_uri() . '/css/main-style.css' );
	wp_enqueue_style( 'boostrap-style', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-style', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/lib/animate/animate.min.css' );
	wp_enqueue_style( 'ionicons-style', get_template_directory_uri() . '/lib/ionicons/css/ionicons.min.css' );
	wp_enqueue_style( 'carousel-style', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/lib/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'ionicons-style', get_template_directory_uri() . '/lib/ionicons/css/ionicons.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	//wp_enqueue_script( 'up-college-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1', true );
	//wp_enqueue_script('up-college-program-search-js', get_theme_file_uri('/js/programSearch.js'), array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'cwt_scripts' );

function mytheme_custom_excerpt_length( $length ) {
	return 20;
	}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );