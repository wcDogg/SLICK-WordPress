<?php

// [zotpress userid="4352520"]
$zotaro_shortcode = get_field('zotaro_shortcode');

if ( $zotaro_shortcode ) :

    echo '<section class="section sextion--toggle">';         
        echo '<div class="section__inner">';

            echo '<div data-toggle>';                         
                echo '<h2 data-toggle-title>Research</h2>';
                echo '<div data-toggle-content>';
                    echo do_shortcode( $zotaro_shortcode ); 
                echo '</div>';
            echo '</div><!-- [data-toggle] -->';          

        echo '</div><!-- .section__inner -->';
    echo '</section><!-- .section__section -->';

endif;
