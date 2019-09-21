<?php
/**
 * theme_admin.php
 * Add Admin > slick Settings menu
 *
 * @package slick
 * @since slick 1.0
 */

// -----------------------------------------------------
// Duplicate top-level parent when adding sub-pages
// https://developer.wordpress.org/reference/functions/add_submenu_page/#comment-446   
// -----------------------------------------------------

if( is_admin() ) :
    add_action('admin_menu', 'slick_settings_admin_menu');
endif;

function slick_settings_admin_menu() {

    // Add: wp-admin/admin.php?page=slick-settings
    add_menu_page(
        'slick Settings',         // $page_title (browser tab, not screen)
        'slick Settings',         // $menu_title
        'manage_options',          // $capability
        'slick-settings',         // $menu_slug
        '',                        // $function set on add_submenu_page()
        'dashicons-admin-generic', // $icon_url
        90                         // $position
    );

    // Duplicate + display: wp-admin/admin.php?page=slick-settings
    add_submenu_page( 
        'slick-settings',      // $parent_slug = $menu_slug of add_menu_page()
        'slick Settings',      // $page_title of add_menu_page()
        'slick Settings',      // $menu_title of add_menu_page()
        'manage_options',       // $capability of add_menu_page()
        'slick-settings',      // $menu_slug = $menu_slug of add_menu_page()
        'slick_settings_page'  // $function to display page
    );
    
}


// -----------------------------------------------------
// $function to display Admin > slick Settings pages
// -----------------------------------------------------
function slick_settings_page() {
    echo '<div class="wrap">';   

        echo '<h2>slick Settings</h2>';

        echo '<h3><a href=" '.esc_url( admin_url('admin.php?page=slick-settings-social', 'https') ).' ">Social Menu</a></h3>';
        
        echo '<h3><a href=" '.esc_url( admin_url('admin.php?page=slick-settings-google', 'https') ).' ">Google</a></h3>';
        
    echo '</div><!-- .wrap -->';
} //