<?php

 // Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array( 
	'post_type' => 'post',
	// Optimize - only get the needed fields. Note this is plural 'ids'.
	'fields' => 'ids',
	// Optimize - don't cache the query
	'cache_results'  => false,
	'update_post_meta_cache' => false, 
	'update_post_term_cache' => false, 
	// Set number of posts to display per page
	// Feeds max_num_pages calc
	'posts_per_page' => 10,	
    'paged' => $paged,
 	// Enable FacetWP 
	'facetwp' => true,    
);

// Must be $query for navigation to work
$custom_query = new WP_Query( $args );


get_header();

echo '<article id="post-'.esc_attr( get_the_ID() ).'>" class="home landing">';

    get_template_part('parts/headers/header', get_post_type() ); 

    $highlight = get_terms( array(
        'taxonomy' => 'highlight',
        'hide_empty' => false, 
        'fields' => 'all',
    ) );

    if($highlight) :
        echo '<section class="section section--blocks section--popular">';

            echo '<h1 class="section__title section--blocks">Popular</h1>';

            $popular = wp_get_nav_menu_name('menu-popular');

            if ( $popular ) : 
                echo '<nav id="nav-popular" class="nav--horizontal nav--text" role="navigation" aria-label="'.esc_attr($popular).'">';
                    wp_nav_menu( array(
                        'theme_location' => 'menu-popular',	
                    ) );
                echo '</nav>';
            endif;

            get_template_part('parts/blocks/blocks', 'highlight');    

        echo '</section> <!-- .section--blocks -->';
    endif;

    $formulas = get_terms( array(
        'taxonomy' => 'formulas',
        'hide_empty' => false, 
        'fields' => 'all',
    ) );

    if($formulas) :
        echo '<section class="section section--blocks section--formulas">';
            echo '<h1 class="section__title">Base Formulas</h1>';
            get_template_part('parts/blocks/blocks', 'formulas');
        echo '</section><!-- .section--blocks -->';
    endif;

    $recommended = get_terms( array(
        'taxonomy' => 'recommended-for',
        'hide_empty' => false, 
        'fields' => 'all',
    ) );

    if($recommended) :
        echo '<section class="section section--blocks section--recommended">';
            echo '<h1 class="section__title">Recommended For</h1>';
            get_template_part('parts/blocks/blocks', 'recommended');
        echo '</section> <!-- .section--blocks -->';
    endif;   
	


echo '</article><!-- #post-'.esc_html( get_the_ID() ).' -->';

get_footer();