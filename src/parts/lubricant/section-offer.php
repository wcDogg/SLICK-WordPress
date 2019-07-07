<?php

$args = array(
    'post_type' => 'offer',
    'meta_query' => array(
        array(
            // name of custom field
            'key' => 'related_reviews', 
            // matches exactly "123", not just 123. This prevents a match for "1234"
            'value' => '"' . get_the_ID() . '"', 
            'compare' => 'LIKE'
        )
    )
);

$offers = get_posts( $args );

if ( $offers ) :
    echo '<section class="section section--cards">';	
        echo '<div class="section__inner">';
            echo '<div class="section__grid">';	

            foreach ( $offers as $post ) :
                setup_postdata( $post );
                get_template_part( 'parts/card', get_post_type() );
            endforeach; 
            wp_reset_postdata();    

            echo '</div><!-- .section__grid -->';
        echo '</div><!-- .section__inner -->';
    echo '</section><!-- .section -->';	
endif;

