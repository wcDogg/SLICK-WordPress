<?php

$args = array( 
    'post_type' => 'lubricant',
    'fields' => 'ids',
);

$custom_query = new WP_Query( $args );

if ( $custom_query->have_posts() ) :  
    while ( $custom_query->have_posts() ) : 
        $custom_query->the_post(); 
        the_title();
    endwhile;
else : 
    // do something else
endif; 

wp_reset_query();

