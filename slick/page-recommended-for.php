<?php

get_header();

echo '<article id="post-'.esc_attr( get_the_ID() ).'>" class="landing">';

    get_template_part('parts/headers/header', get_post_type() ); 

    echo '<section class="section section--blocks section--recommended">';
        get_template_part('parts/blocks/blocks', 'recommended');
    echo '</section> <!-- .section--blocks -->';

echo '</article><!-- #post-'.esc_html( get_the_ID() ).' -->';

get_footer();