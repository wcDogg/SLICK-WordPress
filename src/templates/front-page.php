 <?php
/**
 * front-page.php
 * 
 * 
 * @package slick
 * @since slick 1.0
 */


 // Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array( 
	'post_type' => 'lubricant',
    'tax_query' => array(
        array(
            'taxonomy' => 'highlight',
            'field'    => 'slug',
            'terms'    => 'all-around-best',
        ),
    ),
	// Optimize - only get the needed fields. Note this is plural 'ids'.
	'fields' => 'ids',
	// Optimize - don't cache the query
	'cache_results'  => false,
	'update_post_meta_cache' => false, 
	'update_post_term_cache' => false, 
	// Set number of posts to display per page
	// Feeds max_num_pages calc
	'posts_per_page' => -1,	
    // 'paged' => $paged,
 	// Enable FacetWP 
	// 'facetwp' => true,    
);

// Must be $query for navigation to work
$custom_query = new WP_Query( $args );

?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part('parts/header/header', get_post_type() ); ?>

	<section class="section cards cards--highlight">
		<div class="section__inner">
	
			<div class="section__title-wrap">
				<h1 class="section__title">Popular</h1>
			</div><!-- .section__title-wrap -->

			<?php get_template_part('parts/nav/nav', 'popular') ?>

			<div class="section__cards">
				<?php get_template_part('parts/card/card', 'highlight'); ?>
			</div><!-- .section__cards-->   

		</div><!-- .section__inner -->
	</section>

	<?php if ( $custom_query->have_posts() ) :  ?>
		<section class="section cards cards--multi">
			<div class="section__inner">
		
				<div class="section__title-wrap">
					<h1 class="section__title">All Around Best</h1>
				</div><!-- .section__title-wrap -->
			
				<div class="section__cards">

					<?php while ( $custom_query->have_posts() ) : 

						$custom_query->the_post(); 
						get_template_part( 'parts/card/card', get_post_type() );
											
					endwhile; ?>		

				</div><!-- .section__cards-->   

			</div><!-- .section__inner -->
		</section>
	<?php endif; ?>

	<section class="section cards cards--recommended">
		<div class="section__inner">
	
			<div class="section__title-wrap">
				<h1 class="section__title">Recommended For</h1>
			</div><!-- .section__title-wrap -->
	
			<div class="section__cards">
				<?php get_template_part('parts/card/card', 'recommended'); ?>
			</div><!-- .section__cards-->   
			
		</div><!-- .section__inner -->
	</section>

	<section class="section cards cards--formula">
		<div class="section__inner">
	
			<div class="section__title-wrap">
				<h1 class="section__title">Base Formulas</h1>
			</div><!-- .section__title-wrap -->
	
			<div class="section__cards">
				<?php get_template_part('parts/card/card', 'formula'); ?>
			</div><!-- .section__cards--> 

		</div><!-- .section__inner -->
	</section>

</article><!-- #post-<?php the_ID(); ?> -->

<?php get_footer(); ?>