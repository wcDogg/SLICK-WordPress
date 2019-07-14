<?php

get_header();

$upload_dir = wp_upload_dir();
$img_home = $upload_dir['baseurl'] . '/page_home.jpg';

echo '<article id="home" class="home">';

    echo '<section class="section section--header">';

            echo '<div class="page__bg-image" style="background-image: url('.esc_url($img_home).'); background-attachment: fixed; background-position: center center; background-size: cover;">';

                echo '<div class="page__title-wrap">';

                    echo '<h1 class="page__title">What\'s in your lube?</h1>';
                    echo '<h2 class="page__subtitle">Ingredients Matter</h2>';     
                    echo '<nav id="nav-hero" class="nav nav--horizontal" role="navigation" aria-label="Popular Pages">';
                        wp_nav_menu( array(
                            'theme_location' => 'menu-hero',	
                        ) ); 
                    echo '</nav>';

                echo '</div><!-- .page__title-wrap -->'; 

            echo '</div><!-- .page__bg-image -->';

    echo '</section><!-- .section--header -->';

    $highlight = get_terms( array(
        'taxonomy' => 'highlight',
        'hide_empty' => false, 
        'fields' => 'all',
    ) );

    if($highlight) :
        echo '<section class="section section--blocks section--popular">';
            echo '<h1 class="section__title section--blocks">Popular</h1>';
                    echo '<nav id="nav-popular" class="nav nav--horizontal" role="navigation" aria-label="Popular Pages">';
                        wp_nav_menu( array(
                            'theme_location' => 'menu-popular',	
                        ) ); 
                    echo '</nav>';           
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