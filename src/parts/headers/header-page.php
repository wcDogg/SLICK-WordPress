<?php

$page_title = get_the_title();
$page_subtitle = get_field('page_subtitle');
$page_summary = get_field('page_summary');  
$page_image_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

echo '<section class="section section--header" aria-label="Page header">';

    echo '<div class="page__title-grid" style="background-image: url('.esc_url($page_image_url).');" >';
    
        echo '<div class="page__title-wrap">';
            echo '<h1 class="page__title">'.$page_title.'</h1>';
            if ($page_subtitle) :
                echo '<h2 class="page__subtitle">'. $page_subtitle .'</h2>';  
            endif; 
        echo '</div>';  

    echo '</div>';  

    if ( !is_front_page() ) :

        echo '<div class="section__inner">';   

            get_template_part('parts/headers/part', 'share');

            if ($page_summary) :
                echo '<div class="page__summary">';
                    echo $page_summary;
                echo '</div><!-- .page__summary -->';
            endif; 
    
            if ( $post->ID == 690 ) : 
                get_template_part('parts/headers/part', 'filters');
            endif;

        echo '</div><!-- .sextion__inner -->'; 

    endif;

echo '</section><!-- .section--header -->';
    
