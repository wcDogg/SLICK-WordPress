<?php

$page_title = get_the_title();
$page_subtitle = get_field('page_subtitle');

echo '<a class="card__title-wrap" rel="bookmark" title="'.esc_attr(get_the_title()).'" href="'.esc_url(get_the_permalink()).'">';
    echo '<h1 class="page__title">'.$page_title.'</h1>';
    if ($page_subtitle) :
        echo '<h2 class="page__subtitle">'. $page_subtitle .'</h2>';  
    endif; 				
echo "</a><!-- .card__title-wrap -->";	