<?php
/**
 * slick functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package slick
 */


//
// Sets up theme defaults and registers support for various WordPress features.
// 
if ( ! function_exists( 'slick_setup' ) ) :
	function slick_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'slick', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );
		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
		// Add excerpts for Page type
		add_post_type_support( 'page', 'excerpt' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
				
			// 'menu-hero' => esc_html__( 'Hero Menu', 'slick' ),
			'menu-popular' => esc_html__( 'Popular Menu', 'slick' ),
			'menu-main' => esc_html__( 'Main Menu', 'slick' ),
			'menu-mobile' => esc_html__( 'Mobile Menu', 'slick' ),
			// 'menu-header-01' => esc_html__( 'Mobile Menu 1', 'slick' ),
			// 'menu-header-02' => esc_html__( 'Mobile Menu 2', 'slick' ),	
			// 'menu-header-03' => esc_html__( 'Mobile Menu 3', 'slick' ),	
			// 'menu-header-04' => esc_html__( 'Mobile Menu 4', 'slick' ),	
			// 'menu-header-05' => esc_html__( 'Mobile Menu 5', 'slick' ),	
			// 'menu-header-06' => esc_html__( 'Mobile Menu 6', 'slick' ),				

		) );

		// Output valid HTML5 for search and comments
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'slick_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'slick_setup' );


// 
// Remove Supports by Post Type
// 
function slick_remove_supports() {
	// Replaced with ACF Flexible Content 
	remove_post_type_support( 'post', 'editor' );
	remove_post_type_support( 'page', 'editor' );
}
add_action( 'init', 'slick_remove_supports' );


// 
// Set the content width in pixels, based on the theme's design and stylesheet.
// @global int $content_width
// 
// function slick_content_width() {
// 	// This variable is intended to be overruled from themes.
// 	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
// 	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
// 	$GLOBALS['content_width'] = apply_filters( 'slick_content_width', 840 );
// }
// add_action( 'after_setup_theme', 'slick_content_width', 0 );


// 
// Register widget area.
// 
function slick_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'slick' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'slick' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'slick_widgets_init' );


// 
// slick Scripts + Styles
// 

// Register
function slick_register_scripts() {

	wp_register_script( 'slick-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_register_script( 'sticky-header', get_template_directory_uri() . '/js/StickyHeader.js', array(), '', true );

	wp_register_script( 'toggle-content', get_template_directory_uri() . '/js/ToggleContent.js', array(), '', true );

	wp_register_script( 'toggle-filters', get_template_directory_uri() . '/js/ToggleFilters.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'slick_register_scripts' );

// Enqueue 
function slick_scripts_enqueue() {

	wp_enqueue_script( 'sticky-header' );
	wp_enqueue_script( 'toggle-content' );
	wp_enqueue_script( 'toggle-filters' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) :
		wp_enqueue_script( 'comment-reply' );
	endif;

	wp_enqueue_style( 'slick-style', get_stylesheet_uri());

}
add_action( 'wp_enqueue_scripts', 'slick_scripts_enqueue' );

// 
// Theme enhancements
// 
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/slick-nav-menu.php';
require get_template_directory() . '/inc/slick-relevanssi.php';
// require get_template_directory() . '/inc/slick-favorites.php';


// 
// Slick Options
// 
require get_template_directory() . '/inc/slick-social.php';
require get_template_directory() . '/inc/slick-ga.php';

// 
// Slick CPT and Taxonomies 
// 
require get_template_directory() . '/inc/slick-lubricant.php';
require get_template_directory() . '/inc/slick-offer.php';
require get_template_directory() . '/inc/slick-taxonomy.php';

// 
// Customizer 
// 
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom-header.php';

// 
// Shortcodes
//

function slick_register_shortcodes() {
   add_shortcode( 'ga_opt_out', 'slick_ga_opt_out_button' ); 
}

add_action( 'init', 'slick_register_shortcodes');


// 
// slick Comments
// 

// Custom comments list
require get_template_directory() . '/inc/slick-comments-list.php';

// Remove "Website" field from form
function remove_cooment_form_fields($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'remove_cooment_form_fields');


// 
// Redirect 'subscribe-win" term to 'win' page
//
function slick_term_to_page( $url, $term, $taxonomy ) {
	if ( $term->term_id != 42 ) :
		return $url;
	else :
		$url = home_url( '/win' ); 
		return $url;
	endif;
}
add_filter( 'term_link', 'slick_term_to_page', 10, 3 );


// 
// Archive Sort by post type
// 
function slick_archive_sort($query){
	if(is_archive()):
		$query->set( 'orderby', 'post_type' );
		$query->set( 'order', 'DESC' );
	endif;    
};
add_action( 'pre_get_posts', 'slick_archive_sort'); 


// 
// Jetpack compatibility file
//
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }
