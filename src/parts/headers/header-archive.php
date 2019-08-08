<?php

$tax = get_queried_object(); 
$tax_title = get_the_archive_title();
$tax_subtitle = get_field('tax_subtitle', $tax);
$tax_description = get_the_archive_description($tax);
$tax_image = get_field('tax_image', $tax);
$tax_image_url = $tax_image['url'];


// $tax_image = get_field('tax_image', $tax);
// $tax_image_url = $tax_image['url'];

if ( is_tax('brands', '') ) : 

    get_template_part('parts/headers/header', 'brand');

else:

    echo '<section class="section section--header aria-label="Page header">';

        echo '<div class="page__title-grid">';

            echo '<div class="page__title-wrap">';

                if ( is_tax('highlight', '') ) :
                    echo '<h1 class="page__title">'.$tax_title.'</h1>';
                    echo '<h2 class="page__subtitle">Lubricants &amp; Moisturizers</h2>';
                
                elseif ( is_tax('recommended-for', '') ) :
                    echo '<h2 class="page__subtitle">Lubricants Recommended For</h2>';
                    echo '<h1 class="page__title">'.$tax_title.'</h1>';                   
                
                elseif ( is_tax('formulas', '') ) :
                    echo '<h1 class="page__title">'.$tax_title.'</h1>';
                    echo '<h2 class="page__subtitle">Lubricants & Moisturizers</h2>';

                elseif ( is_tax('ingredients', '') ) :
                    echo '<h1 class="page__title">'.$tax_title.'</h1>';
                    echo '<h2 class="page__subtitle">Lubricant Ingredient</h2>';
                
                elseif ( is_tax('key-ingredients', '') ) :
                    echo '<h1 class="page__title">'.$tax_title.'</h1>';
                    echo '<h2 class="page__subtitle">Key Lubricant Ingredient</h2>';
                
                elseif ( is_tax('safe-for', '') ) :
                    echo '<h2 class="page__subtitle">Safe For</h2>';                    
                    echo '<h1 class="page__title">'.$tax_title.'</h1>';
                
                elseif ( is_tax('consistency', '') ) : 
                    echo '<h1 class="page__title">'.$tax_title.'</h1>';
                    echo '<h2 class="page__subtitle">Lubricant Consistency</h2>';
                
                elseif ( is_tax('lasting-power', '') ) :
                    echo '<h1 class="page__title">'.$tax_title.'</h1>';
                    echo '<h2 class="page__subtitle">Lubricant Lasting Power</h2>';
                else :
                    echo '<h1 class="page__title">'.$tax_title.'</h1>';
                    if ($tax_subtitle) :
                        echo '<h2 class="page__subtitle">'.$tax_subtitle.'</h2>';
                    endif;  

                endif;

            echo '</div><!-- .page__title-wrap -->';    
                
        echo '</div><!-- .page__title-grid -->';         

        echo '<div class="section__inner">';

            if ( $tax_description ) :
                echo '<div class="page__summary">';
                    echo $tax_description;
                echo '</div><!-- .page__summary -->';
            endif;	  

            if ( have_posts() ) : 
                if ( is_tax('highlight', '') || 
                    is_tax('recommended-for', '') ||
                    is_tax('formulas', '') ||
                    is_tax('key-ingredients', '') ||
                    is_tax('ingredients', '') ||
                    is_tax('safe-for', '') ||   
                    is_tax('consistency', '') || 
                    is_tax('lasting-power', '') ) :
                        get_template_part('parts/headers/part', 'filters');
                endif;		
            endif;

        echo '</div><!-- section--inner -->';

    echo '</section><!-- .section--header -->';

endif;



