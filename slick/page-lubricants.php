<?php 

 // Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array( 
	'post_type' => 'lubricant',
	// Optimize - only get the needed fields. Note this is plural 'ids'.
	'fields' => 'ids',
	// Optimize - don't cache the query
	'cache_results'  => false,
	'update_post_meta_cache' => false, 
	'update_post_term_cache' => false, 
	// Set number of posts to display per page
	// Feeds max_num_pages calc
	'posts_per_page' => 20,	
	'paged' => $paged,
	// Enable FacetWP 
	'facetwp' => true, 
);

// Must be $query for navigation to work
$custom_query = new WP_Query( $args );

get_header();

echo '<article id="post-'.esc_attr( get_the_ID() ).'>" class="landing">';

	get_template_part('parts/headers/header', get_post_type() );

	if ( $custom_query->have_posts() ) : 

		get_template_part('parts/headers/part', 'filters');

		echo '<section class="section section--cards">';	
			echo '<div class="section__inner">';
				echo '<div class="section__grid">';	

					while ( $custom_query->have_posts() ) : 

						$custom_query->the_post(); 
						get_template_part( 'parts/card', get_post_type() );
											
					endwhile;

					// Query Navigation 
					// Is there a way to make this a part or function?
					if ( $custom_query->max_num_pages >= 2 ) : 						

						$icon_next = '<i class="fas fa-chevron-right"></i>';
						$icon_prev = '<i class="fas fa-chevron-left"></i>';	
											
						echo '<nav class="pagination" role="navigation" aria-label="Lubricants Navigation">';
							echo paginate_links( array(
								'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
								'format'       => '?paged=%#%',    
								'total'        => $custom_query->max_num_pages,   
								'current'      => max( 1, get_query_var( 'paged' ) ),
								'type'         => 'list', // 'plain' 'array' 'list'
								'show_all'     => false,						
								'end_size'     => 2,
								'mid_size'     => 1,
								'prev_next'    => true,
								'prev_text'    => sprintf( $icon_prev, __( 'Newer Posts', 'slick' ) ),
								'next_text'    => sprintf( $icon_next, __( 'Older Posts', 'slick' ) ),
								'screen_reader_text' => __( 'Achive Navigation', 'slick' ),
								'add_args'     => false,
								'add_fragment' => '',   
							) );
						echo '</nav>';

						else : // do nothing needed for this to work, but not sure why?

					endif;

				echo '</div><!-- .section__grid -->';
			echo '</div><!-- .section__inner -->';
		echo '</section><!-- .section -->';	
		
	else :
		get_template_part( 'parts/content', 'none' );
	endif;

	wp_reset_query();

echo '</article><!-- #post-'.esc_html( get_the_ID() ).' -->';

get_footer();
