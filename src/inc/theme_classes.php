<?php
/**
 * theme_classes
 * Adds custom classes to the array of body classes.
 *
 * @package slick
 * @since slick 1.0
 */


// @param array $classes Classes for the body element.
// @return array
function slick_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	// Adds a class of no-sidebar when there is no sidebar present.
	// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	// 	$classes[] = 'no-sidebar';
	// }
	return $classes;
}
add_filter( 'body_class', 'slick_body_classes' );

