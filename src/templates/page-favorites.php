<?php
/**
 * page-formula.php
 * Displays the Base Formulas landing page
 * 
 * @package slick
 * @since slick 1.0
 */

get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <?php get_template_part('parts/header/header', get_post_type() ); ?>
       
		<?php

			if( function_exists('get_user_favorites') ) :	

				echo '<section class="section cards cards--favorites ">';	
					echo '<div class="section__inner">';

						$post_ids = get_user_favorites();				
						$favorites_clear = get_clear_favorites_button();

						// .section__grid added via plugin settings
						the_user_favorites_list($user_id = null, $site_id = null, $include_links = true, $filters = null, $include_button = true, $include_thumbnails = true, $thumbnail_size = 'thumbnail', $include_excerpt = false);

						if ( $post_ids ) :
							echo $favorites_clear;
						endif;

					echo '</div><!-- .section__inner -->';
				echo '</section><!-- .section -->';	 

			else :
					
				get_template_part('parts/content', 'none');

			endif;
			
		?>

</article><!-- #post-<?php the_ID(); ?> --> 

<?php get_footer(); ?>




	


