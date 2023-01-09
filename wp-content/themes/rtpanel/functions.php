<?php
/**
 * RTPanel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RTPanel
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
function rtpanel_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on RTPanel, use a find and replace
		* to change 'rtpanel' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rtpanel', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'rtpanel' ),
			'menu-2' => esc_html__( 'Secondary', 'rtpanel' ),
			'menu-mobile' => esc_html__( 'Primary Mobile Menu', 'rtpanel' ),			
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
			'rtpanel_custom_background_args',
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
add_action( 'after_setup_theme', 'rtpanel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rtpanel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rtpanel_content_width', 640 );
}
add_action( 'after_setup_theme', 'rtpanel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rtpanel_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rtpanel' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rtpanel' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	/* Register the 'latest tweets' sidebar. */
	register_sidebar(
		array(
			'id'            => 'latest-tweets',
			'name'          => __( 'Latest Tweets' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
	/* Register the 'follow on facebook' sidebar. */
	register_sidebar(
		array(
			'id'            => 'follow-fb',
			'name'          => __( 'Follow Facebook' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
	/* Register the 'weather' sidebar. */
	register_sidebar(
		array(
			'id'            => 'weather',
			'name'          => __( 'Weather Widget' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
	/* Register the 'footer menu 1' sidebar. */
	register_sidebar(
		array(
			'id'            => 'footer-1',
			'name'          => __( 'Footer Menu First' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		)
	);
	/* Register the 'footer menu 2' sidebar. */
	register_sidebar(
		array(
			'id'            => 'footer-2',
			'name'          => __( 'Footer Menu Second' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		)
	);
}
add_action( 'widgets_init', 'rtpanel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rtpanel_scripts() {
	wp_enqueue_style( 'rtpanel-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'rtpanel-style', 'rtl', 'replace' );

	wp_enqueue_script( 'rtpanel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rtpanel_scripts' );

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



// acf option page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => __('Theme Options', 'sage'),
        'capability'    => 'manage_options',
        'position'      => '62'
    ));
}

/** create our CPT **/
include get_template_directory() . '/inc/custom-posttype.php';


// shortcode [rt-link url="#" title="term"]
function link_callback( $atts, $content ) {
	// It's a default value.
	$default = array(
		'url' => '',
		'title' => '',
	);
	// You will pass default value after that user define values.
	$link_attrs = shortcode_atts( $default, $atts );

	return sprintf( '<a href="%s">%s</a>', $link_attrs['url'], $link_attrs['title'] );
}

add_shortcode( 'rt-link', 'link_callback' );
