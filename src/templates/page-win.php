<?php

$args = array( 
	'post_type' => 'lubricant',
	// Optimize - only get the needed fields. Note this is plural 'ids'.
    'fields' => 'ids',
	'posts_per_page' => -1,	    
    'tax_query' => array(
        array(
            'taxonomy' => 'highlight',
            'terms'    => 42,
        ),
    ),   

	// Optimize - don't cache the query
	'cache_results'  => false,
	'update_post_meta_cache' => false, 
	'update_post_term_cache' => false, 

);

// Must be $query for navigation to work
$custom_query = new WP_Query( $args );

get_header();

echo '<article id="post-'.esc_attr( get_the_ID() ).'>" class="landing">';

	get_template_part('parts/headers/header', 'win' );

	if ( $custom_query->have_posts() ) : 

		echo '<section class="section section--cards">';	
			echo '<div class="section__inner">';
				echo '<h1 class="section__title">This Month\'s Lubricants</h1>';
				echo '<div class="section__grid">';	

					while ( $custom_query->have_posts() ) : 

						$custom_query->the_post(); 
						get_template_part( 'parts/card', get_post_type() );
											
					endwhile;

				echo '</div><!-- .section__grid -->';
			echo '</div><!-- .section__inner -->';
		echo '</section><!-- .section -->';	
		
	else :
		// do nothing
	endif;

	wp_reset_query();

echo '</article><!-- #post-'.esc_html( get_the_ID() ).' -->';

get_footer();
