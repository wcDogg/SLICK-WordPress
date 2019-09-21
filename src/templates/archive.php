<?php
/**
 * archive.php
 * Displays categores, tags, and other taxonomies
 * 
 * @package slick
 * @since slick 1.0
 */
?>


<?php get_header(); ?>

<article class="archive">

    <?php get_template_part('parts/archive/header', 'archive'); ?>
    
    <?php if ( have_posts() ) : ?>

		<section class="section cards cards--multi facetwp-template">	
			<div class="section__inner">				
				<div class="section__cards ">

					<?php while ( have_posts() ) :					
						the_post();	
						get_template_part( 'parts/card/card', get_post_type() );	
                    endwhile; ?>
                    
				</div><!-- .section__cards -->

				<?php 		
					if ( is_tax('highlight', '') ||
						is_tax('recommended-for', '') ||
						is_tax('formulas', '') ||
						is_tax('ingredients', '') ||
						is_tax('key-ingredients', '') ||
						is_tax('safe-for', '') ||  
						is_tax('consistency', '') ||
						is_tax('lasting-power', '') ) :

						echo '<button class="button fwp-load-more">Show More</button>';
					endif;				
				?>

				<?php
					// if ( $wp_query->max_num_pages >= 2 ) :
					// 	echo '<button class="button fwp-load-more">Show More</button>';
					// endif;
				?>

			</div><!-- .section__inner -->
		</section><!-- .section -->
		
	<?php else :
		get_template_part( 'parts/section/section', 'none' );
	endif; ?>

</article><!-- #index  -->

<?php get_footer(); ?>

