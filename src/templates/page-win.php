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

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

<?php

	get_template_part('parts/header/header', get_post_type() ); 

	
	if ( $custom_query->have_posts() ) : 

		echo '<section class="section cards cards--multi">';	
			echo '<div class="section__inner">';

				echo '<div class="section__title-wrap">';
					echo '<h1 class="section__title">This Month\'s Lubricants</h1>';
				echo '</div>';

				echo '<div class="section__cards">';	
					while ( $custom_query->have_posts() ) : 

						$custom_query->the_post(); 
						get_template_part( 'parts/card/card', get_post_type() );
											
					endwhile;
				echo '</div><!-- .section__cards -->';

			echo '</div><!-- .section__inner -->';
		echo '</section><!-- .section -->';	
		
	else :
		// do nothing
	endif;

	wp_reset_query();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

<?php

get_footer();
