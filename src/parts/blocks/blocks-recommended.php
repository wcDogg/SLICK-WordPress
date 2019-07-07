<?php

$recommended = get_terms( array(
    'taxonomy' => 'recommended-for',
    'hide_empty' => false, 
    'fields' => 'all',
) );

echo '<div class="section__grid">';
    foreach ($recommended as $term) :

        $term_url = get_term_link( $term ); 
        $term_name = $term->name;
        $term_subtitle = get_field('tax_subtitle', $term);           
        $image_object = get_field('tax_image', $term);
        $image_url = $image_object['sizes']['medium']; 

        echo '<div class="block block--recommended">';
            echo '<img class="block__image" src="'.esc_url($image_url).'"/>';
            echo '<a class="block__title" rel="bookmark" href="'.esc_url($term_url).'" title="View all lubricants recommended for '.esc_attr($term_name).'">';
                echo '<h1>'.$term_name.'</h1>';
                if ($term_subtitle) :
                    echo '<h2>'.$term_subtitle.'</h2>';        
                endif;
            echo '</a>';                
        echo '</div><!-- .block -->';

    endforeach;
echo '</div><!-- .section__grid -->'; 