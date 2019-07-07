<?php
/**************************************************************************
Plugin Name:	Slick CPT - Offer
Description:	Offer custom post type
Version:		2019-04-10
Author:			Lisa Burton - https://slick.sexy
**************************************************************************/


if ( ! function_exists('slick_cpt_offer') ) {

    // Register Custom Post Type
    function slick_cpt_offer() {

        $labels = array(
        'name'                  => _x( 'Offers', 'Post Type General Name', 'slick' ),
        'singular_name'         => _x( 'Offer', 'Post Type Singular Name', 'slick' ),
        'menu_name'             => __( 'Offers', 'slick' ),
        'name_admin_bar'        => __( 'Offer', 'slick' ),
        'archives'              => __( 'Offer Archives', 'slick' ),
        'attributes'            => __( 'Offer Attributes', 'slick' ),
        'parent_item_colon'     => __( 'Parent Offer:', 'slick' ),
        'all_items'             => __( 'All Offers', 'slick' ),
        'add_new_item'          => __( 'Add New Offer', 'slick' ),
        'add_new'               => __( 'Add New', 'slick' ),
        'new_item'              => __( 'New Offer', 'slick' ),
        'edit_item'             => __( 'Edit Offer', 'slick' ),
        'update_item'           => __( 'Update Offer', 'slick' ),
        'view_item'             => __( 'View Offer', 'slick' ),
        'view_items'            => __( 'View Offers', 'slick' ),
        'search_items'          => __( 'Search Offers', 'slick' ),
        'not_found'             => __( 'Offer Not found', 'slick' ),
        'not_found_in_trash'    => __( 'Offer Not found in Trash', 'slick' ),
        'featured_image'        => __( 'Featured Image', 'slick' ),
        'set_featured_image'    => __( 'Set Featured Image', 'slick' ),
        'remove_featured_image' => __( 'Remove Featured Image', 'slick' ),
        'use_featured_image'    => __( 'Use as Featured Image', 'slick' ),
        'insert_into_item'      => __( 'Insert into Offer', 'slick' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Offer', 'slick' ),
        'items_list'            => __( 'Offers List', 'slick' ),
        'items_list_navigation' => __( 'Offers List Navigation', 'slick' ),
        'filter_items_list'     => __( 'Filter Offers List', 'slick' ),
        );

        $args = array(
        'label'                 => __( 'Offer', 'slick' ),
        // 'description'           => __( 'Offers and promotions', 'slick' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'excerpt', 'trackbacks', 'revisions',  ),
        // 'taxonomies'            => array( 'brands'),
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

        register_post_type( 'offer', $args );

    }
    
    add_action( 'init', 'slick_cpt_offer', 0 );

}