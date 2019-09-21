<?php
/**
 * card-formula.php
 * Displays single taxonomy card for formulas
 * 
 * @package slick
 * @since slick 1.0
 */


$formula = get_terms( array(
    'taxonomy' => 'formulas',
    'hide_empty' => false, 
    'fields' => 'all',
) );

foreach ($formula as $term) :

    $term_url = get_term_link( $term );            
    $term_name = $term->name;   
    // $term_subtitle = get_field('tax_subtitle', $term);    
    $image_object = get_field('tax_image', $term);
    $image_url = $image_object['sizes']['medium']; 

    ?>

    <div class="card card--taxonomy">
        <div class="overlay__wrap">
            <div class="overlay"></div>

            <?php
                echo '<img class="overlay__img" src="'.esc_url($image_url).'" alt="'.esc_attr($term_name).'" />';
                echo '<a class="overlay__content" rel="bookmark" href="'.esc_url($term_url).'" title="View all lubricants recommended for '.esc_attr($term_name).'">';
                    echo '<h2 class="card__title">'.$term_name.'</h2>';
                echo '</a>';   
            ?>

        </div><!-- .overlay__wrap -->
    </div><!-- .card -->  

    <?php

endforeach;

