<?php
/**************************************************************************
Plugin Name:	Slick Post Supports
Description:	Enable excerpts and 
Version:		2019-04-10
Author:			Lisa Burton - https://slick.sexy
**************************************************************************/


function init_post_supports() {
    add_post_type_support( 'page', 'excerpt' );
    add_post_type_support( 'lubricant', 'excerpt' );
    // add_post_type_support( 'offer', 'excerpt' );
    // remove_post_type_support( 'lubricant', 'editor');
    // remove_post_type_support( 'offer', 'editor');
}

add_action('init', 'init_post_supports',100);
