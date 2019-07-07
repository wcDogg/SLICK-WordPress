<?php

echo '<div class="page__share">';

    if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) : 
        ADDTOANY_SHARE_SAVE_KIT();
    endif;

    if (is_singular()) :
        $url = wp_get_shortlink();
        $title = get_the_title(); 
    else :
        $url = get_permalink();
        $title = get_the_title();
    endif;

    echo '<a class="meta meta--short" href="'.$url.'" title="'.$title.'" rel="bookmark"><i class="fas fa-link"></i> Short URL</a>';

echo '</div><!-- .page__share -->';