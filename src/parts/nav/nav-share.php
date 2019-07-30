<?php

echo '<div class="page__share" aria-label="Share this page">';

    if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) : 
        ADDTOANY_SHARE_SAVE_KIT();
    endif;

    $url = wp_get_shortlink();
    $title = get_the_title();       

    echo '<a class="meta meta--short" href="'.$url.'" title="'.$title.'" rel="bookmark"><i class="fas fa-link"></i> Short URL</a>';

echo '</div><!-- .page__share -->';