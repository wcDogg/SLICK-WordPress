<?php
/**
 * Thme Relevanssi Plugin (search plugin)
 * Separates results by post type
 *
 * @package slick
 * @since slick 1.0
 */


 // Break results into post_type arrays
function slick_relevanssi_comparison_order($order) {
	$order = array( 'post' => 0, 'page' => 1, );
	return $order;
}
add_filter('relevanssi_comparison_order', 'slick_relevanssi_comparison_order');

// Order by post_type array
function slick_relevanssi_orderby( $query ) {
	$query->set( 'orderby', 'post_type' );
	// Why? Shouldn't this default to $order above?
	$query->set('order', 'ASC' ); // low -> high
    return $query;
}
add_filter( 'relevanssi_modify_wp_query', 'slick_relevanssi_orderby' );
