<?php
/**
 * page-lubricant.php
 * Displays the All Lubricants landing page
 * 
 * @package slick
 * @since slick 1.0
 */

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

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
<?php

	get_template_part('parts/header/header', get_post_type() );

	if ( $custom_query->have_posts() ) : 

		echo '<section class="section cards cards--multi ">';		
			echo '<div class="section__inner">';

				echo '<div class="section__cards facetwp-template">';
					while ( $custom_query->have_posts() ) : 
						$custom_query->the_post(); 
						get_template_part( 'parts/card/card', get_post_type() );					
					endwhile;
				echo '</div><!-- .section__cards -->';
				
				if ( $custom_query->max_num_pages >= 2 ) :
					echo '<button class="button fwp-load-more">Show More</button>';
				endif;

			echo '</div><!-- .section__inner -->';
		echo '</section><!-- .section -->';	
		
	else :
		get_template_part( 'parts/section/section', 'none' );
	endif;

	wp_reset_query();

?>	
	</article><!-- #post-<?php the_ID(); ?> --> 
<?php

get_footer();
