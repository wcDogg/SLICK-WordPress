<?php

$formulas = get_terms( array(
    'taxonomy' => 'formulas',
    'hide_empty' => false, 
    'fields' => 'all',
) );

echo '<div class="section__grid">';
    foreach ($formulas as $term) :

        $term_url = get_term_link( $term );            
        $term_name = $term->name;             
        $image_object = get_field('tax_image', $term);
        $image_url = $image_object['sizes']['medium']; 

        echo '<div class="block block--formula">';
            echo '<img class="block__image" src="'.esc_url($image_url).'"/>';
            echo '<a class="block__title" rel="bookmark" href="'.esc_url($term_url).'" title="View all lubricants recommended for '.esc_attr($term_name).'">';
                echo '<h1>'.$term_name.'</h1>';
            echo '</a>';   
        echo '</div><!-- .block -->';

    endforeach;
echo '</div><!-- .section__grid -->'; 