<?php

get_header();

echo '<article class="archive">';

	get_template_part('parts/headers/header', 'archive');

	if ( have_posts() ) : 

		echo '<section class="section section--cards">';	
			echo '<div class="section__inner">';
				echo '<div class="section__grid facetwp-template">';			
					/* Start the Loop */
					while ( have_posts() ) :					
						the_post();	
						get_template_part( 'parts/card', get_post_type() );	
					endwhile;
				echo '</div><!-- .section__grid -->';

				if ( $wp_query->max_num_pages >= 2 ) :
					echo '<button class="button fwp-load-more">Show More</button>';
				endif;
				
			echo '</div><!-- .section__inner -->';
		echo '</section><!-- .section -->';	
		
	else :

		get_template_part( 'parts/content', 'none' );

	endif;

echo '</article><!-- .archive -->';

get_footer();
