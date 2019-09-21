<?php
/**
 * theme_ga.php
 * Add Google Analytics tracking Ccode
 * Add opt-out script
 * Create shortcode for opt-out link
 * 
 * slick  UA-140000021-1
 * 
 * @package slick
 * @since slick 1.0
 */

 
//
// MONSTER `[ga_opt_out]' shortcode 
//
function slick_monster_ga_opt_out_button() {

    $return =  '<a href="javascript:__gaTrackerOptout()" onclick="alert(\'Google Analytics has been disabled for this site.\')" >Click here to opt-out of Google Analytics</a>';   

    return $return;

} // 


function slick_register_monster_ga_opt_out_short() {
   add_shortcode( 'ga_opt_out', 'slick_monster_ga_opt_out_button' ); 
}

add_action( 'init', 'slick_register_monster_ga_opt_out_short');

    
   