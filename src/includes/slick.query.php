<?php
/**************************************************************************
Plugin Name:	Slick Queries
Description:	Define post types included with the main, search, and RSS queires
Version:		2019-04-10
Author:			Lisa Burton - https://slick.sexy
**************************************************************************/


// Main Query
// if ( ! function_exists('slick_cpt_lubricant') ) {

//     function slick_cpt_main_query( $query ) {
//         if ( is_home() && $query->is_main_query() )
//             $query->set( 'post_type', array( 'post', 'page', 'lubricants' ) );
//         return $query;
//     }

//     add_action( 'pre_get_posts', 'slick_cpt_main_query' );  

// }


// Search Results
if ( ! function_exists('slick_cpt_lubricant') ) {

    function slick_cpt_search( $query ) { 
        if ( $query->is_search ) {
            $query->set( 'post_type', array( 'post', 'page', 'lubricants') );
        }   
        return $query;    
    }

    add_filter( 'pre_get_posts', 'slick_cpt_search' );

}


// RSS Feeds
if ( ! function_exists('slick_cpt_rss') ) {

    function slick_cpt_rss($qv) {
        if (isset($qv['feed']) && !isset($qv['post_type']))
            $qv['post_type'] = array('post', 'lubricants');
        return $qv;
    }

    add_filter('request', 'slick_cpt_rss');  

}

