<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>

<?php

    // $summary = get_field('page_summary', $post->ID);
    $summary = get_field('page_summary');

    get_template_part('parts/headers/part', 'card-thumb');

    echo '<header class="card__header">';
        get_template_part('parts/headers/part', 'card-title');
    echo '</header>';

    if ( $summary ) :
        echo '<main class="card__main">';
            echo $summary;
        echo '</main>';
    endif;

?>

</article><!-- .card -->