<article id="post-<?php the_ID(); ?>" class="card post">

<?php

    $page_summary = get_field('page_summary');
    $page_excerpt = get_the_excerpt();

    get_template_part('parts/headers/part', 'card-thumb');

    echo '<header class="card__header">';
        get_template_part('parts/headers/part', 'card-title');
    echo '</header>';

    echo '<main class="card__main">';
        if ( $page_summary ) :
            echo $page_summary;
            // echo '<div class="meta meta--categories">';
            //     the_category( '&nbsp;&bull;&nbsp;' );
            // echo '</div>';	
        elseif ( $page_excerpt ) :
            echo '<p>'.$page_excerpt.'</p>';
        endif;    
    echo '</main>';
    
?>

</article><!-- .card -->