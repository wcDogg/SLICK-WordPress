<?php

$page_img = get_the_post_thumbnail_url();
$page_title = get_the_title();
$page_subtitle = get_field('page_subtitle');
$page_summary = get_field('page_summary'); 

if ( $page_img ) :

    echo '<section class="section section--header">';

        echo '<div class="page__bg-image" style=" background-image: url('.esc_url($page_img).'); background-attachment: fixed; background-position: center center; background-size: cover;">';

            echo '<div class="page__title-wrap">';
                echo '<h1 class="page__title">'.$page_title.'</h1>';
                if ($page_subtitle) :
                    echo '<h2 class="page__subtitle">'. $page_subtitle .'</h2>';  
                endif; 
            echo '</div>';            

        echo '</div><!-- .page__bg-image -->';

        get_template_part('parts/headers/part', 'share');
        
        if ($page_summary) :
            echo '<div class="section__inner">';
                echo '<div class="page__summary">';
                    echo $page_summary;
                echo '</div><!-- .page__summary -->';
            echo '</div><!-- .section__inner -->';
        endif; 

    echo '</section><!-- .section--header -->';
    
else : 

    echo '<section class="section section--header">';

        echo '<div class="page__bg-image">';

            echo '<div class="page__title-wrap">';
                echo '<h1 class="page__title">'.$page_title.'</h1>';
                if ($page_subtitle) :
                    echo '<h2 class="page__subtitle">'. $page_subtitle .'</h2>';  
                endif; 
            echo '</div>';            

        echo '</div><!-- .page__bg-image';

        get_template_part('parts/headers/part', 'share');

        if ($page_summary) :
            echo '<div class="section__inner">';
                echo '<div class="page__summary">';
                    echo $page_summary;
                echo '</div><!-- .page__summary -->';
            echo '</div><!-- .section__inner -->';
        endif; 

    echo '</section><!-- .section--header -->';
        
endif;
