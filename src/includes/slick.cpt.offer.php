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
        'name'                  => _x( 'Offers', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Offer', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Offers', 'text_domain' ),
        'name_admin_bar'        => __( 'Offer', 'text_domain' ),
        'archives'              => __( 'Offer Archives', 'text_domain' ),
        'attributes'            => __( 'Offer Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Offer:', 'text_domain' ),
        'all_items'             => __( 'All Offers', 'text_domain' ),
        'add_new_item'          => __( 'Add New Offer', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Offer', 'text_domain' ),
        'edit_item'             => __( 'Edit Offer', 'text_domain' ),
        'update_item'           => __( 'Update Offer', 'text_domain' ),
        'view_item'             => __( 'View Offer', 'text_domain' ),
        'view_items'            => __( 'View Offers', 'text_domain' ),
        'search_items'          => __( 'Search Offers', 'text_domain' ),
        'not_found'             => __( 'Offer Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Offer Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set Featured Image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove Featured Image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as Featured Image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into Offer', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Offer', 'text_domain' ),
        'items_list'            => __( 'Offers List', 'text_domain' ),
        'items_list_navigation' => __( 'Offers List Navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Offers List', 'text_domain' ),
        );

        $args = array(
        'label'                 => __( 'Offer', 'text_domain' ),
        'description'           => __( 'Offers and promotions', 'text_domain' ),
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
        'has_archive'           => 'offers',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        );

        register_post_type( 'offer', $args );

    }
    
    add_action( 'init', 'slick_cpt_offer', 0 );

}



