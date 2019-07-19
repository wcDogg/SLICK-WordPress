<?php

$favorites_clear = get_clear_favorites_button();

$post_ids = get_user_favorites();
// $args = array( 
// 	'post_type' => 'lubricant',
// 	'post__in' => $post_ids,	
// 	'fields' => 'ids',
// 	'cache_results'  => false,
// 	'update_post_meta_cache' => false, 
// 	'update_post_term_cache' => false, 
// 	'posts_per_page' => -1,	
// 	'paged' => false,
// );
// $custom_query = new WP_Query( $args );

get_header();

echo '<article id="post-'.esc_attr( get_the_ID() ).'>" class="favorites">';

	echo '<section class="section section--cards">';	
		echo '<div class="section__inner">';

            echo '<div class="page__title-wrap">';
                echo '<h1 class="page__title"><i class="far fa-star"></i> My Favorites</h1>';
			echo '</div>';    

			the_user_favorites_list($user_id = null, $site_id = null, $include_links = true, $filters = null, $include_button = true, $include_thumbnails = true, $thumbnail_size = 'thumbnail', $include_excerpt = false);

			if ( $post_ids ) :
				echo $favorites_clear;
			endif;
		
		echo '</div><!-- .section__inner -->';
	echo '</section><!-- .section -->';	 

	// print_r($post_ids);
	// if ( $custom_query->have_posts() ) :  
	// 	echo '<section class="section section--cards">';	
	// 		echo '<div class="section__inner">';				
	// 			echo '<div class="section__grid">';	
	// 				while ( $custom_query->have_posts() ) : 
	// 					$custom_query->the_post(); 
	// 					get_template_part( 'parts/card', get_post_type() );
	// 				endwhile;
	// 			echo '</div><!-- .section__grid -->';
	// 			echo $favorites_clear;
	// 		echo '</div><!-- .section__inner -->';
	// 	echo '</section><!-- .section -->';	 
	// else :
	// 	echo '<section class="section section--cards">';	
	// 		echo '<div class="section__inner">';
	// 			echo '<div class="section__content">';	
    //                 echo '<p class="big">Opps! No favorite lubricants yet. Go add some!</p>';
	// 			echo '</div><!-- .section__content -->';
	// 		echo '</div><!-- .section__inner -->';
	// 	echo '</section><!-- .section -->';	
	// endif;
	// wp_reset_query(); 

echo '</article><!-- #post-'.esc_html( get_the_ID() ).' -->';

get_footer();
