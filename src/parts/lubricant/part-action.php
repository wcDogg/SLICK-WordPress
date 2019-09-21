<?php
/**
 * lubricant/part-action.php
 * Displays the buy buttons for single lubricants
 * 
 * @package slick
 * @since slick 1.0
 */

$buy_url_manufacturer = get_field('buy_manufacturer_url');
$buy_text_manufacturer = 'Manufacturer';
$buy_icon_manufacturer = '<i class="fas fa-link"></i>';		

$buy_url_cheap = get_field('buy_cheap_url');
$buy_text_cheap = 'CheapLubes';
$buy_icon_cheap = '<i class="far fa-tint"></i>';

$buy_url_amazon = get_field('buy_amazon_url');
$buy_text_amazon = 'Amazon';
$buy_icon_amazon = '<i class="fab fa-amazon"></i>';

?>

<nav class="buy-nav" aria-label="Purchase this lubricant">
    <ul class="buy-menu">
    <?php
    
        if( function_exists('get_user_favorites') ) :
            // <i class="far fa-star"></i><span>
            // $favorite = get_favorites_button($post_id, $site_id);	

            $favorite = get_favorites_button();
            // $favorite = get_favorites_button( get_the_id(), '1');
            // $favorite = get_favorites_button( $post->ID, '1');

            echo '<li>'.$favorite.'</li>';
        endif;			
        
        if ($buy_url_manufacturer) :
            echo '<li><a class="link link--manufacturer" rel="nofollow nonopener" data-google="manufacturer" title="Shop '.esc_attr($buy_text_manufacturer).'" href="'.esc_url($buy_url_manufacturer).'" >'.$buy_icon_manufacturer.'</a></li>';
        endif;

        if ($buy_url_cheap) :
            echo '<li><a class="link link--cheap" rel="nofollow nonopener" data-google="cheaplubes" title="Shop CheapLubes.com" href="'.esc_url($buy_url_cheap).'" >'.$buy_icon_cheap.'</a></li>';
        endif;

        if ($buy_url_amazon) :
            echo '<li><a class="link link--amazon" rel="nofollow nonopener" data-google="amazon" title="Shop Amazon" href="'.esc_url($buy_url_amazon).'" >'.$buy_icon_amazon.'</a></li>';
        endif;    
    
    ?>
    </ul>
</nav><!-- .buy -->