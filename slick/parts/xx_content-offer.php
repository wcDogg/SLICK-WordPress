<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 

	// Array ( [0] => 395 [1] => 120 [2] => 388 [3] => 391 )
	$related_reviews = get_field('related_reviews');

	$args = array( 
		'post_type' => 'lubricant',
		'post__in' => $related_reviews,	
		'fields' => 'ids',
		'cache_results'  => false,
		'update_post_meta_cache' => false, 
		'update_post_term_cache' => false, 
		'posts_per_page' => -1,	
		'paged' => false,
	);

	$custom_query = new WP_Query( $args );

	get_template_part('parts/headers/header', get_post_type() ); 

	// print_r($related_reviews);

	if ( $custom_query->have_posts() ) :  
		echo '<section class="section section--cards">'; 
			echo '<div class="section__inner">';
				echo '<h1 class="section__title">Related Product Reviews</h1>';
				
				echo '<div class="section__grid">';
					while ( $custom_query->have_posts() ) : 
						$custom_query->the_post(); 
						get_template_part( 'parts/card', get_post_type() );
					endwhile;
				echo '</div><!-- .section__cards -->';
			echo '</div><!-- .section__inner -->';
		echo '</section><!-- .section--cards --> ';
	else : 
		// do nothing
	endif; 
	wp_reset_query();

?>
</article><!-- #post-<?php the_ID(); ?> -->
