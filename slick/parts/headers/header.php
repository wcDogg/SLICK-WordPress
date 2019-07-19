<?php

$page_title = get_the_title();
$page_subtitle = get_field('page_subtitle');
$page_summary = get_field('page_summary'); 

echo '<section class="section section--header">';
   echo '<div class="section__inner">';

        echo '<div class="page__meta">';

            if ( has_term( '', 'category' ) ) :
                echo '<span class="meta meta--categories">';
                    the_terms( get_the_ID(), 'category', '', ', ' );
                echo '</span>';	    
            endif;

            if ( has_term( '', 'formulas' ) ) :
                echo '<span class="meta meta--formulas">';
                    the_terms( get_the_ID(), 'formulas', '', ', ' );
                echo '</span>';	    
            endif;
            
            if ( has_term( '', 'brands' ) ) :
                echo '<span class="meta meta--brands">';
                    the_terms( get_the_ID(), 'brands', '', ', ' );
                echo '</span>';	    
            endif;

            slick_posted_on(); 

        echo '</div><!-- .page__meta -->';

        echo '<div class="page__title-wrap">';
            echo '<h1 class="page__title">'.$page_title.'</h1>';
            if ($page_subtitle) :
                echo '<h2 class="page__subtitle">'. $page_subtitle .'</h2>';  
            endif; 
        echo '</div><!-- .page__title-wrap -->';

        echo '<div class="page__image">';
            the_post_thumbnail('medium_large');
        echo "</div><!-- .page__image -->";	

        get_template_part('parts/headers/part', 'share');

        if ($page_summary) :
            echo '<div class="section__inner">';
                echo '<div class="page__summary">';
                    echo $page_summary;
                echo '</div><!-- .page__summary -->';
            echo '</div><!-- .section__inner -->';
        endif; 


    echo '</div><!-- .section__inner  -->';
echo '</section><!-- .section--header -->'; 