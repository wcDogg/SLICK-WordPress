<?php 

if ( function_exists('Zotpress_func') ) :

    // [zotpress userid="4352520"]
    // [zotpress items="{4352520:CBCZ4NUE}" style="apa"]
    
    $zotero_shortcode = get_field('zotaro_shortcode');// note mispelling in field name

    if ( $zotero_shortcode ) :

        echo '<section class="section section--toggle">';         
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

endif;    




