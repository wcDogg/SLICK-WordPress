<?php

// 
// Favorites for WordPress
// aka Simple Favorites
// https://favoriteposts.com/
// 
// `simplefavorites` cookie
// 


// NOT IMPLEMENTED

/**
* Customize the Favorites Listing HTML
*/
add_filter( 'favorites/list/listing/html', 'custom_favorites_listing_html', 10, 4 );
function custom_favorites_listing_html($html, $markup_template, $post_id, $list_options)
{

    $html = get_template_part( 'parts/card', get_post_type() );
	return $html;
}
