<?php

$tax = get_queried_object(); 

$tax_title = get_the_archive_title();
$tax_subtitle = get_field('tax_subtitle', $tax);
$tax_description = get_the_archive_description($tax);
$tax_image = get_field('tax_image', $tax);
$tax_image_url = $tax_image['url'];


if ( is_tax('brands', '') ) : 
    
    get_template_part('parts/headers/header', 'brand');
                    
elseif ( $tax_image ) :

    echo '<section class="section section--header">';

        echo '<div class="page__bg-image" style="background-image: url('.esc_url($tax_image_url).'); background-attachment: fixed; background-position: center center; background-size: cover;">';
            echo '<div class="page__title-wrap">';
                echo '<h1 class="page__title">'.$tax_title.'</h1>';
                if ($tax_subtitle) :
                echo '<h2 class="page__subtitle">'.$tax_subtitle.'</h2>';
                endif;
            echo '</div><!-- .page__title-wrap -->';		
        echo '</div><!-- .page__bg-iamge -->';

        if ( $tax_description ) :
            echo '<div class="page__summary">';
                echo $tax_description;
            echo '</div><!-- .page__summary -->';
        endif;	    

    echo '</section><!-- .section--header -->';

else :

    echo '<section class="section section--header">';

        echo '<div class="page__bg-image">';
            echo '<div class="page__title-wrap">';
                echo '<h1 class="page__title">'.$tax_title.'</h1>';
                if ($tax_subtitle) :
                    echo '<h2 class="page__subtitle">'.$tax_subtitle.'</h2>';
                endif;
            echo '</div><!-- .page__title-wrap -->';
        echo '</div><!-- .page__bg-image -->';

        if ( $tax_description ) :
            echo '<div class="page__summary">';
                echo $tax_description;
            echo '</div><!-- .page__summary -->';
        endif;	    

    echo '</section><!-- .section--header -->';       
    
endif;


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

