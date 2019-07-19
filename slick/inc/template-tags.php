<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package slick
 */


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

if ( ! function_exists( 'slick_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
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

		echo '<span class="meta meta--date">' . $time_string . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'slick_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function slick_posted_by() {
		$byline = sprintf(
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="meta meta--byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'slick_buy_bar' ) ) :

	function slick_buy_bar() {

		$url_manufacturer = get_field('buy_manufacturer_url');
		$text_manufacturer = 'Manufacturer';
		$icon_manufacturer = '<i class="fas fa-link"></i>';		

		$url_cheap = get_field('buy_cheap_url');
		$text_cheap = 'CheapLubes';
		$icon_cheap = '<i class="far fa-tint"></i>';
		
		$url_amazon = get_field('buy_amazon_url');
		$text_amazon = 'Amazon';
		$icon_amazon = '<i class="fab fa-amazon"></i>';

		if ( $url_amazon || $url_cheap || $url_manufacturer ) :				

			echo '<nav class="buy" aria-label="Purchase this lubricant">';
				echo '<ul role="menu">';

					if ($url_manufacturer) :
						echo '<li role="none"><a class="link link--manufacturer" rel="nofollow nonopener" data-google="manufacturer" title="Shop '.esc_attr($text_manufacturer).'" role="menuitem" href="'.esc_url($url_manufacturer).'" >'.$icon_manufacturer.'</a></li>';
					endif;

					if ($url_cheap) :
						echo '<li role="none"><a class="link link--cheap" rel="nofollow nonopener" data-google="cheaplubes" title="Shop CheapLubes.com" role="menuitem" href="'.esc_url($url_cheap).'" >'.$icon_cheap.'</a></li>';
					endif;

					if ($url_amazon) :
						echo '<li role="none"><a class="link link--amazon" rel="nofollow nonopener" data-google="amazon" title="Shop Amazon" role="menuitem" href="'.esc_url($url_amazon).'" >'.$icon_amazon.'</a></li>';
					endif;
				echo '</ul>';
			echo '</nav><!-- .buy -->';   	

		endif; // End if($url). 	
	}

endif;

