<?php
/**
 * theme_pingbacks.php
 * Add a pingback url auto-discovery header for 
 * single posts, pages, or attachments.
 * 
 * @package slick
 * @since slick 1.0
 */


function slick_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'slick_pingback_header' );

