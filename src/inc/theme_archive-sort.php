<?php
/**
 * theme_archive-sort.php
 * Removes the word 'Archive' from titles
 *
 * @package slick
 * @since slick 1.0
 */

 function slick_archive_sort($query){
	if(is_archive()):
		$query->set( 'orderby', 'post_type' );
		$query->set( 'order', 'DESC' );
	endif;    
};
add_action( 'pre_get_posts', 'slick_archive_sort'); 