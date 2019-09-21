<?php

$args = array(
    'post_type' => 'offer',
    'meta_query' => array(
        array(
            // name of custom field
            'key' => 'related_reviews', 
            // matches exactly "123", not just 123. This prevents a match for "1234"
            'value' => '"' . get_the_ID() . '"', 
            'compare' => 'LIKE',
        )
    )
);

$offers = get_posts( $args );

if ( $offers ) :

    echo '<section id="offers" class="section cards cards--offer">';	
        echo '<div class="section__inner">';
        
            echo '<div class="section__cards">';	

            foreach ( $offers as $post ) :
                setup_postdata( $post );
                get_template_part( 'parts/card/card', get_post_type() );
            endforeach; 
            wp_reset_postdata();    

            echo '</div><!-- .section__cards -->';

            get_template_part('parts/lubricant/part', 'action');

        echo '</div><!-- .section__inner -->';
    echo '</section><!-- #offers -->';	

endif;

