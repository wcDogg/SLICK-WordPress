<?php
/**
 * Theme Admin - Google
 * Add Admin > slick Settings menu
 *
 * @package slick
 * @since slick 1.0
 */


// -----------------------------------------------------
// Add Admin > slick Settings > Google
// wp-admin/admin.php?page=slick-settings-google
// -----------------------------------------------------

if( is_admin() ) :
    add_action('admin_menu', 'slick_settings_google_admin_menu');
endif;

function slick_settings_google_admin_menu() {    
    add_submenu_page( 
        'slick-settings', 
        'slick Settings: Google', 
        'Google',
        'manage_options', 
        'slick-settings-google',
        'slick_settings_google_page'
    );
} //


// -----------------------------------------------------
// $function to display Admin > slick Settings pages
// -----------------------------------------------------

function slick_settings_google_page() {
    echo '<div class="wrap">';   
        echo '<h2>slick Settings: Google</h2>';
    echo '</div><!-- .wrap -->';
} //