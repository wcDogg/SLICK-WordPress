<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 

get_template_part('parts/headers/header', get_post_type() ); 

// #fly-support - new part NOT working
get_template_part('parts/page/page', 'test' ); 

$related_reviews = get_field( 'related_reviews' );

if ( $related_reviews ) :

    global $post; // Necessary.

	echo '<section class="section section--cards">'; 
		echo '<div class="section__inner">';

			echo '<h1 class="section__title">Related Product Reviews</h1>';
			
			echo '<div class="section__grid">';

				foreach ( $related_reviews as $post ) : // Must be called $post. 
					setup_postdata( $post ); 
					get_template_part( 'parts/card', get_post_type() );
				endforeach;

				wp_reset_postdata();

			echo '</div><!-- .section__grid -->';

		echo '</div><!-- .section__inner -->';
	echo '</section><!-- .section--cards --> ';
	
endif;

?>
</article><!-- #post-<?php the_ID(); ?> -->
