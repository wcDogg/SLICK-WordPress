<?php

$brands = get_terms( array(
    'taxonomy' => 'brands',
    'hide_empty' => true, 
    'fields' => 'all',
) );

echo '<div class="section__grid">';
    foreach ($brands as $term) :

        $term_url = get_term_link( $term );            
        $term_name = $term->name;  
        $term_subtitle = get_field('tax_subtitle', $term);
        $image_object = get_field('tax_image', $term);
        $image_url = $image_object['sizes']['thumbnail'];
        
        $buy_manufacturer_icon = '<i class="fas fa-link"></i>';
        $buy_manufacturer_url = get_field('buy_manufacturer_url', $term);

        $buy_amazon_icon = '<i class="fab fa-amazon"></i>';
        $buy_amazon_url = get_field('buy_amazon_url', $term);

        $buy_cheap_icon = '<i class="far fa-tint"></i>';
        $buy_cheap_url = get_field('buy_cheap_url', $term);       

        echo '<article class="card brand">';

            echo '<div class="card__image">';
                echo '<a class="" rel="bookmark" href="'.esc_url($term_url).'" title="' .esc_attr($term_name).'">';

                    echo '<div class="card__overlay"></div>';

                    echo '<img src="' .esc_url($image_url). '"/>';

                    echo '<div class="card__overlay-text">';
                        echo '<h1>'.$term_name.'</h1>';
                        echo '<h2>Reviews</h2>';
                    echo '</div>';

                echo '</a>';  
            echo '</div>';

            echo '<main class="card__main">';
                echo '<nav class="buy buy--brand" aria-label="Shop and follow this brand">';
                    echo '<ul role="menu">';

                        if ( $buy_amazon_url ) :
                            echo '<li role="none">';
                                echo '<a class="link--amazon" href="'.esc_url($buy_amazon_url).'" title="Shop brand on Amazon" rel="nofollow nonopener" data-google="amazon" role="menuitem">'.$buy_amazon_icon.'</a>';
                            echo '</li>';
                        endif;

                        if ( $buy_cheap_url ) :
                            echo '<li role="none">';
                                echo '<a class="link--cheap" href="'.esc_url($buy_cheap_url).'" title="Shop brand on Cheaplubes.com" rel="nofollow nonopener" data-google="cheaplubes" role="menuitem">'.$buy_cheap_icon.'</a>';
                            echo '</li>';
                        endif;

                        if ( $buy_manufacturer_url ) :
                            echo '<li role="none">';
                                echo '<a class="link--manufacturer" href="'.esc_url($buy_manufacturer_url).'" title="Shop brand\'s official website" rel="nofollow nonopener" data-google="manufacturer" role="menuitem">'.$buy_manufacturer_icon.'</a>';
                            echo '</li>';
                        endif;                    

                    echo '</ul>';
                echo '</nav>';
            echo '</main>';

        echo '</article><!-- .card -->';

    endforeach;
echo '</div><!-- .section__grid -->'; 

