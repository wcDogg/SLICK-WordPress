<?php
/**************************************************************************
Plugin Name:	Slick Taxonomies
Description:	CPT and shared taxonomies
Version:		2019-04-10
Author:			Lisa Burton - https://slick.sexy
**************************************************************************/

// Highlight
if ( ! function_exists( 'taxonomy_highlight' ) ) {

    function taxonomy_highlight() {

        $labels = array(
            'name'                       => _x( 'Highlights', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Highlight', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Highlight', 'text_domain' ),
            'all_items'                  => __( 'All Highlights', 'text_domain' ),
            'parent_item'                => __( 'Parent Highlight', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Highlight:', 'text_domain' ),
            'new_item_name'              => __( 'New Highlight Namee', 'text_domain' ),
            'add_new_item'               => __( 'Add New Highlight', 'text_domain' ),
            'edit_item'                  => __( 'Edit Highlight', 'text_domain' ),
            'update_item'                => __( 'Update Highlight', 'text_domain' ),
            'view_item'                  => __( 'View Highlight', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate Highlights with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or Remove Highlight', 'text_domain' ),
            'choose_from_most_used'      => __( 'Most Used Highlights', 'text_domain' ),
            'popular_items'              => __( 'Popular Highlights', 'text_domain' ),
            'search_items'               => __( 'Search Highlights', 'text_domain' ),
            'not_found'                  => __( 'Highlight Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No Highlight Terms', 'text_domain' ),
            'items_list'                 => __( 'Highlight List', 'text_domain' ),
            'items_list_navigation'      => __( 'Highlight List Navigation', 'text_domain' ),
        );

        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'update_count_callback'      => 'taxonomy_highlight_update_count',
            'show_in_rest'               => true,
        );

        register_taxonomy( 'highlight', array( 'post', 'lubricant' ), $args );

    }

    add_action( 'init', 'taxonomy_highlight', 0 );

}


// Brands
if ( ! function_exists( 'taxonomy_brands' ) ) {

    function taxonomy_brands() {

        $labels = array(
            'name'                       => _x( 'Brands', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Brand', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Brands', 'text_domain' ),
            'all_items'                  => __( 'All Brands', 'text_domain' ),
            'parent_item'                => __( 'Parent Brand', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Brand:', 'text_domain' ),
            'new_item_name'              => __( 'New Brand Name', 'text_domain' ),
            'add_new_item'               => __( 'Add New Brand', 'text_domain' ),
            'edit_item'                  => __( 'Edit Brand', 'text_domain' ),
            'update_item'                => __( 'Update Brand', 'text_domain' ),
            'view_item'                  => __( 'View Brand', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate Brands with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or Remove Brands', 'text_domain' ),
            'choose_from_most_used'      => __( 'Most Used Brands', 'text_domain' ),
            'popular_items'              => __( 'Popular Brands', 'text_domain' ),
            'search_items'               => __( 'Search Brands', 'text_domain' ),
            'not_found'                  => __( 'Brand Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No Brands', 'text_domain' ),
            'items_list'                 => __( 'Brands List', 'text_domain' ),
            'items_list_navigation'      => __( 'Brands List Navigation', 'text_domain' ),
        );

        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            // 'update_count_callback'      => 'taxonomy_brand_update_count',
            'show_in_rest'               => true,
        );

        register_taxonomy( 'brands', array( 'post', 'lubricant', 'offer' ), $args );

    }

    add_action( 'init', 'taxonomy_brands', 0 );

}


// Recommended For
if ( ! function_exists( 'taxonomy_recommended_for' ) ) {

    function taxonomy_recommended_for() {

        $labels = array(
            'name'                       => _x( 'Recommended For', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Recommended For', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Recommended For', 'text_domain' ),
            'all_items'                  => __( 'All Recommended For', 'text_domain' ),
            'parent_item'                => __( 'Parent Recommended For', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Recommended For:', 'text_domain' ),
            'new_item_name'              => __( 'New Recommended For Name', 'text_domain' ),
            'add_new_item'               => __( 'Add New Recommended For', 'text_domain' ),
            'edit_item'                  => __( 'Edit Recommended For', 'text_domain' ),
            'update_item'                => __( 'Update Recommended For', 'text_domain' ),
            'view_item'                  => __( 'View Recommended For', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate Recommended For with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or Remove Recommended For', 'text_domain' ),
            'choose_from_most_used'      => __( 'Most Used Recommended For', 'text_domain' ),
            'popular_items'              => __( 'Popular Recommended For', 'text_domain' ),
            'search_items'               => __( 'Search Recommended For', 'text_domain' ),
            'not_found'                  => __( 'Recommended For Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No Recommended For Terms', 'text_domain' ),
            'items_list'                 => __( 'Recommended For List', 'text_domain' ),
            'items_list_navigation'      => __( 'Recommended For List Navigation', 'text_domain' ),
        );

        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            // 'update_count_callback'      => 'taxonomy_recommended_for_update_count',
            'show_in_rest'               => true,
        );

        register_taxonomy( 'recommended-for', array( 'post', 'lubricant' ), $args );

    }

    add_action( 'init', 'taxonomy_recommended_for', 0 );

}


// Formula
if ( ! function_exists( 'taxonomy_formula' ) ) {

    function taxonomy_formula() {

        $labels = array(
            'name'                       => _x( 'Formula', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Formula', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Formula', 'text_domain' ),
            'all_items'                  => __( 'All Formulas', 'text_domain' ),
            'parent_item'                => __( 'Parent Formula', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Formula:', 'text_domain' ),
            'new_item_name'              => __( 'New Formula Name', 'text_domain' ),
            'add_new_item'               => __( 'Add New Formula', 'text_domain' ),
            'edit_item'                  => __( 'Edit Formula', 'text_domain' ),
            'update_item'                => __( 'Update Formula', 'text_domain' ),
            'view_item'                  => __( 'View Formula', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate Formulas with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or Remove Formula', 'text_domain' ),
            'choose_from_most_used'      => __( 'Most Used Formulas', 'text_domain' ),
            'popular_items'              => __( 'Popular Formulas', 'text_domain' ),
            'search_items'               => __( 'Search Formulas', 'text_domain' ),
            'not_found'                  => __( 'Formula Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No Formulas', 'text_domain' ),
            'items_list'                 => __( 'Formulas List', 'text_domain' ),
            'items_list_navigation'      => __( 'Formulas List Navigation', 'text_domain' ),
        );

        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            // 'update_count_callback'      => 'taxonomy_formula_update_count',
            'show_in_rest'               => true,
        );

        register_taxonomy( 'formulas', array('post', 'lubricant'), $args );

    }

    add_action( 'init', 'taxonomy_formula', 0 );

}


// Ingredients
if ( ! function_exists( 'taxonomy_ingredients' ) ) {

    function taxonomy_ingredients() {

        $labels = array(
            'name'                       => _x( 'Ingredients', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Ingredient', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Ingredients', 'text_domain' ),
            'all_items'                  => __( 'All Ingredients', 'text_domain' ),
            'parent_item'                => __( 'Parent Ingredient', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Ingredient:', 'text_domain' ),
            'new_item_name'              => __( 'New Ingredient Name', 'text_domain' ),
            'add_new_item'               => __( 'Add New Ingredient', 'text_domain' ),
            'edit_item'                  => __( 'Edit Ingredient', 'text_domain' ),
            'update_item'                => __( 'Update Ingredient', 'text_domain' ),
            'view_item'                  => __( 'View Ingredient', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate Ingredients with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or Remove Ingredients', 'text_domain' ),
            'choose_from_most_used'      => __( 'Most Used Ingredients', 'text_domain' ),
            'popular_items'              => __( 'Popular Ingredients', 'text_domain' ),
            'search_items'               => __( 'Search Ingredients', 'text_domain' ),
            'not_found'                  => __( 'Ingredient Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No Ingredients', 'text_domain' ),
            'items_list'                 => __( 'Ingredients List', 'text_domain' ),
            'items_list_navigation'      => __( 'Ingredients List Navigation', 'text_domain' ),
        );

        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            // 'update_count_callback'      => 'taxonomy_ingredients_update_count',
            'show_in_rest'               => true,
        );

        register_taxonomy( 'ingredients', array( 'post', 'lubricant' ), $args );

    }

    add_action( 'init', 'taxonomy_ingredients', 0 );

}


// Condom & Material Safety
if ( ! function_exists( 'taxonomy_material_safety' ) ) {

    function taxonomy_material_safety() {

        $labels = array(
            'name'                       => _x( 'Material Safety', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Material Safety', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Material Safety', 'text_domain' ),
            'all_items'                  => __( 'All Material Safety', 'text_domain' ),
            'parent_item'                => __( 'Parent Material Safety', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Material Safety:', 'text_domain' ),
            'new_item_name'              => __( 'New Material Safety Name', 'text_domain' ),
            'add_new_item'               => __( 'Add New Material Safety', 'text_domain' ),
            'edit_item'                  => __( 'Edit Material Safety', 'text_domain' ),
            'update_item'                => __( 'Update Material Safety', 'text_domain' ),
            'view_item'                  => __( 'View Material Safety', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate Materials with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or Remove Material', 'text_domain' ),
            'choose_from_most_used'      => __( 'Most Used Material Safety', 'text_domain' ),
            'popular_items'              => __( 'Popular Material Safety', 'text_domain' ),
            'search_items'               => __( 'Search Material Safety', 'text_domain' ),
            'not_found'                  => __( 'Material Safety Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No Material Safety Terms', 'text_domain' ),
            'items_list'                 => __( 'Material Safety List', 'text_domain' ),
            'items_list_navigation'      => __( 'Material Safety List Navigation', 'text_domain' ),
        );

        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            // 'update_count_callback'      => 'taxonomy_material_safety_update_count',
            'show_in_rest'               => true,
        );

        register_taxonomy( 'safe-for', array( 'post', 'lubricant' ), $args );

    }

    add_action( 'init', 'taxonomy_material_safety', 0 );

}


// Consistency
if ( ! function_exists( 'taxonomy_consistency' ) ) {

    function taxonomy_consistency() {

        $labels = array(
            'name'                       => _x( 'Consistency', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Consistency', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Consistency', 'text_domain' ),
            'all_items'                  => __( 'All Consistencies', 'text_domain' ),
            'parent_item'                => __( 'Parent Consistency', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Consistency:', 'text_domain' ),
            'new_item_name'              => __( 'New Consistency Name', 'text_domain' ),
            'add_new_item'               => __( 'Add New Consistency', 'text_domain' ),
            'edit_item'                  => __( 'Edit Consistency', 'text_domain' ),
            'update_item'                => __( 'Update Consistency', 'text_domain' ),
            'view_item'                  => __( 'View Consistency', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate Consistencies with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or Remove Consistencies', 'text_domain' ),
            'choose_from_most_used'      => __( 'Most Used Consistencies', 'text_domain' ),
            'popular_items'              => __( 'Popular Consistencies', 'text_domain' ),
            'search_items'               => __( 'Search Consistencies', 'text_domain' ),
            'not_found'                  => __( 'Consistency Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No Consistencies', 'text_domain' ),
            'items_list'                 => __( 'Consistency List', 'text_domain' ),
            'items_list_navigation'      => __( 'Consistency List Navigation', 'text_domain' ),
        );

        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            // 'update_count_callback'      => 'taxonomy_consistency_update_count',
            'show_in_rest'               => true,
        );

        register_taxonomy( 'consistency', array( 'post', 'lubricant' ), $args );

    }

    add_action( 'init', 'taxonomy_consistency', 0 );

}


// Lasting Power
if ( ! function_exists( 'taxonomy_lasting' ) ) {

    function taxonomy_lasting() {

        $labels = array(
            'name'                       => _x( 'Lasting Power', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Lasting Power', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Lasting Power', 'text_domain' ),
            'all_items'                  => __( 'All Lasting Powers', 'text_domain' ),
            'parent_item'                => __( 'Parent Lasting Power', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Lasting Power:', 'text_domain' ),
            'new_item_name'              => __( 'New Lasting Power Name', 'text_domain' ),
            'add_new_item'               => __( 'Add New Lasting Power', 'text_domain' ),
            'edit_item'                  => __( 'Edit Lasting Power', 'text_domain' ),
            'update_item'                => __( 'Update Lasting Power', 'text_domain' ),
            'view_item'                  => __( 'View Lasting Power', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate Lasting Powers with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or Remove Lasting Powers', 'text_domain' ),
            'choose_from_most_used'      => __( 'Most Used Lasting Powers', 'text_domain' ),
            'popular_items'              => __( 'Popular Lasting Powers', 'text_domain' ),
            'search_items'               => __( 'Search Lasting Powers', 'text_domain' ),
            'not_found'                  => __( 'Lasting Power Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No Lasting Powers', 'text_domain' ),
            'items_list'                 => __( 'Lasting Power List', 'text_domain' ),
            'items_list_navigation'      => __( 'Lasting Power List Navigation', 'text_domain' ),
        );

        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            // 'update_count_callback'      => 'taxonomy_lasting_update_count',
            'show_in_rest'               => true,
        );

        register_taxonomy( 'lasting-power', array( 'post', 'lubricant' ), $args );

    }

    add_action( 'init', 'taxonomy_lasting', 0 );

}

