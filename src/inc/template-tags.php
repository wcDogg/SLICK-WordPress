<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package slick
 */


// 
// Archive Titles
// 

if ( ! function_exists( 'slick_archive_title' ) ) :
	function slick_archive_title( $title ) {
		if ( is_category() ) :
			$title = single_cat_title( '', false );
		elseif ( is_tag() ) :
			$title = single_tag_title( '', false );
		elseif ( is_author() ) :
			$title = '<span class="vcard">' . get_the_author() . '</span>';
		elseif ( is_post_type_archive() ) :
			$title = post_type_archive_title( '', false );
		elseif ( is_tax() ) :
			$title = single_term_title( '', false );
		endif;
		
		return $title;
	}
	add_filter( 'get_the_archive_title', 'slick_archive_title' );
endif;


// 
// Prints HTML with meta information for the current post-date/time.
// 

if ( ! function_exists( 'slick_posted_on' ) ) :

	function slick_posted_on() {
		
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) :
			$time_string = '<time class="updated" datetime="%3$s">%4$s</time>';
		else : 
			$time_string = '<time class="published" datetime="%1$s">%2$s</time>';
		endif;

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		echo $time_string;
	}
endif;


//
// Prints HTML with meta information for the current author.
// 

if ( ! function_exists( 'slick_posted_by' ) ) :

	function slick_posted_by() {
		$byline = sprintf(
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="meta meta--byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;


if ( ! function_exists( 'slick_buy_bar' ) ) :

	function slick_buy_bar() {

		$buy_url_manufacturer = get_field('buy_manufacturer_url');
		$buy_text_manufacturer = 'Manufacturer';
		$buy_icon_manufacturer = '<i class="fas fa-link"></i>';		

		$buy_url_cheap = get_field('buy_cheap_url');
		$buy_text_cheap = 'CheapLubes';
		$buy_icon_cheap = '<i class="far fa-tint"></i>';

		$buy_url_amazon = get_field('buy_amazon_url');
		$buy_text_amazon = 'Amazon';
		$buy_icon_amazon = '<i class="fab fa-amazon"></i>';

		echo '<nav class="buy nav--horizontal nav--icons" aria-label="Purchase this lubricant">';
			echo '<ul role="menu">';

				if( function_exists('get_user_favorites') ) :
					// <a><i class="far fa-star"></i><span>Add Favorite</span></a>
					$favorite = get_favorites_button();
					echo '<li role="none">'.$favorite.'</li>';
				endif;			
				
				if ($buy_url_manufacturer) :
					echo '<li role="none"><a class="link link--manufacturer" rel="nofollow nonopener" data-google="manufacturer" title="Shop '.esc_attr($buy_text_manufacturer).'" role="menuitem" href="'.esc_url($buy_url_manufacturer).'" >'.$buy_icon_manufacturer.'</a></li>';
				endif;

				if ($buy_url_cheap) :
					echo '<li role="none"><a class="link link--cheap" rel="nofollow nonopener" data-google="cheaplubes" title="Shop CheapLubes.com" role="menuitem" href="'.esc_url($buy_url_cheap).'" >'.$buy_icon_cheap.'</a></li>';
				endif;

				if ($buy_url_amazon) :
					echo '<li role="none"><a class="link link--amazon" rel="nofollow nonopener" data-google="amazon" title="Shop Amazon" role="menuitem" href="'.esc_url($buy_url_amazon).'" >'.$buy_icon_amazon.'</a></li>';
				endif;
				
			echo '</ul>';
		echo '</nav><!-- .buy -->';   	


	}

endif;
