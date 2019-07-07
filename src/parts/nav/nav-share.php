<?php

echo '<div class="page__share">';

    if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) : 
        ADDTOANY_SHARE_SAVE_KIT();
    endif;

    if (is_singular()) :
        $url = wp_get_shortlink();
        $title = get_the_title();       

    elseif ( is_tax() ) : 
        $url = get_term_link( get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
        $title = get_the_archive_title();

    elseif ( is_post_type_archive() ) :
        $url = get_post_type_archive_link( get_query_var('post_type') );
        $title = get_the_archive_title();

    else :
        $url = get_permalink();
        $title = get_the_title();
    endif;

    echo '<a class="meta meta--short" href="'.$url.'" title="'.$title.'" rel="bookmark"><i class="fas fa-link"></i> Short URL</a>';

echo '</div><!-- .page__share -->';