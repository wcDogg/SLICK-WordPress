<?php
/**************************************************************************
Plugin Name:	Slick CPT - Lubricant
Description:	Lubricant custom post type
Version:		2019-04-10
Author:			Lisa Burton - https://slick.sexy
**************************************************************************/


if ( ! function_exists('slick_cpt_lubricant') ) {

    // Register Custom Post Type
    function slick_cpt_lubricant() {

        $labels = array(
        'name'                  => _x( 'Lubricants', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Lubricant', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Lubricants', 'text_domain' ),
        'name_admin_bar'        => __( 'Lubricant', 'text_domain' ),
        'archives'              => __( 'Lubricant Archives', 'text_domain' ),
        'attributes'            => __( 'Lubricant Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Lubricant:', 'text_domain' ),
        'all_items'             => __( 'All Lubricants', 'text_domain' ),
        'add_new_item'          => __( 'Add New Lubricant', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Lubricant', 'text_domain' ),
        'edit_item'             => __( 'Edit Lubricant', 'text_domain' ),
        'update_item'           => __( 'Update Lubricant', 'text_domain' ),
        'view_item'             => __( 'View Lubricant', 'text_domain' ),
        'view_items'            => __( 'View Lubricants', 'text_domain' ),
        'search_items'          => __( 'Search Lubricants', 'text_domain' ),
        'not_found'             => __( 'Lubricant Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Lubricant Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set Featured Image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove Featured Image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as Featured Image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into Lubricant', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Lubricant', 'text_domain' ),
        'items_list'            => __( 'Lubricants List', 'text_domain' ),
        'items_list_navigation' => __( 'Lubricants List Navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Lubricants List', 'text_domain' ),
        ); 

        $args = array(
        'label'                 => __( 'Lubricant', 'text_domain' ),
        // 'description'           => __( 'Lubricants and promotions', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'revisions'),
        // 'taxonomies'            => array( 'category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-post',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        );

        register_post_type( 'lubricant', $args );

    }
    
    add_action( 'init', 'slick_cpt_lubricant', 0 );

} 