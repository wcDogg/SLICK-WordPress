<?php 

$today = date('Ymd');
// $offer_dates = get_field('offer_has_dates');
// $offer_start = get_field('offer_start');
// $offer_end = get_field('offer_end');

 // Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array( 
	'post_type' => 'offer',
	'fields' => 'ids',
	'cache_results'  => false,
	'update_post_meta_cache' => false, 
	'update_post_term_cache' => false, 
	'posts_per_page' => 20,	
	'paged' => $paged,

);

// Must be $query for navigation to work
$custom_query = new WP_Query( $args );

get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

<?php

	get_template_part('parts/header/header', get_post_type() );

	if ( $custom_query->have_posts() ) :  

		echo '<section class="section cards cards--multi">';	
			echo '<div class="section__inner">';
				echo '<div class="section__cards">';	

					while ( $custom_query->have_posts() ) : 

						$custom_query->the_post(); 
						get_template_part( 'parts/card/card', get_post_type() );
											
					endwhile;

				echo '</div><!-- .section__cards -->';

				// Query Navigation 
				// Is there a way to make this a part or function?
				if ( $custom_query->max_num_pages >= 2 ) : 						

					$icon_next = '<i class="fas fa-chevron-right"></i>';
					$icon_prev = '<i class="fas fa-chevron-left"></i>';	
					
					echo '<nav class="pagination" role="navigation" aria-label="Offers Navigation">';
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

			echo '</div><!-- .section__inner -->';
		echo '</section><!-- .section -->';	
		
	else :
		get_template_part( 'parts/content', 'none' );
	endif;

	wp_reset_query();

?>

</article><!-- #post-<?php the_ID(); ?> -->
 
<?php

get_footer();
