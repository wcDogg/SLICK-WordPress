<?php
/**
 * offer/part-meta.php
 * Displays offer brand and dates
 * 
 * @package slick
 * @since slick 1.0
 */

$related_reviews = get_field( 'related_reviews' );

if ( $related_reviews ) :

    global $post; // required

	echo '<section class="section cards cards--multi">'; 
		echo '<div class="section__inner">';

            echo '<div class="section__title-wrap">';
			    echo '<h1 class="section__title">Related Product Reviews</h1>';
            echo '</div>';
                
			echo '<div class="section__cards">';

				foreach ( $related_reviews as $post ) : // Must be called $post. 
					setup_postdata( $post ); 
					get_template_part( 'parts/card/card', get_post_type() );
				endforeach;

				wp_reset_postdata();

			echo '</div><!-- .section__cards -->';

		echo '</div><!-- .section__inner -->';
	echo '</section><!-- .section --> ';
	
endif;