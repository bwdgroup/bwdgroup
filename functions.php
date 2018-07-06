<?php
/**
 * bwdgroup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bwdgroup
 */

if ( ! function_exists( 'bwdgroup_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bwdgroup_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bwdgroup, use a find and replace
		 * to change 'bwdgroup' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bwdgroup', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'bwdgroup' ),
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
		add_theme_support( 'custom-background', apply_filters( 'bwdgroup_custom_background_args', array(
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
add_action( 'after_setup_theme', 'bwdgroup_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bwdgroup_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bwdgroup_content_width', 640 );
}
add_action( 'after_setup_theme', 'bwdgroup_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bwdgroup_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bwdgroup' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bwdgroup' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bwdgroup_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bwdgroup_scripts() {

	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/style.css');

	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.css');

	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/css/font-awesome.css');

	wp_enqueue_script( 'bwdgroup-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bwdgroup-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAWOOgXUEr8tKTliyIwZZcAuAjWbFZ8DZk');

}

add_action( 'wp_enqueue_scripts', 'bwdgroup_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 *  Template Clean Up
 */

/**
 *  Remove Javascript / CSS Versions
 */

 function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

/**
 * Remove Emoji / Version Number
 */
 
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_generator' );

/** 
 * Remove Javascript Type Attribute 
 */

add_filter( 'style_loader_tag',  'clean_style_tag'  );
add_filter( 'script_loader_tag', 'clean_script_tag'  );

/**
 * Clean up output of stylesheet <link> tags
 */

function clean_style_tag( $input ) {
    preg_match_all( "!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches );
    if ( empty( $matches[2] ) ) {
        return $input;
    }
    // Only display media if it is meaningful
    $media = $matches[3][0] !== '' && $matches[3][0] !== 'all' ? ' media="' . $matches[3][0] . '"' : '';

    return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
}

/**
 * Clean up output of <script> tags
 */

function clean_script_tag( $input ) {
    $input = str_replace( "type='text/javascript' ", '', $input );

    return str_replace( "'", '"', $input );
}

/**
 * Remove Recent Comments Styling
 */

function bwdgroup_remove_recent_comments_style() {  
        global $wp_widget_factory;  
        remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );  
}  

add_action( 'widgets_init', 'bwdgroup_remove_recent_comments_style' );

/**
 *  Security Override
 */

define('DISALLOW_FILE_EDIT',true);


