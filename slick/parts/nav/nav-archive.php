<?php

$icon_next = '<i class="fas fa-chevron-right"></i>';
$icon_prev = '<i class="fas fa-chevron-left"></i>';

the_posts_pagination(array( 
    'mid_size' => 2,
    'prev_text' => __( $icon_prev, 'slick' ),
    'next_text' => __( $icon_next, 'slick' ),
    'screen_reader_text' => __( 'Achive Navigation', 'slick' ),
)); 

