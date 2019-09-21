<?php
/**
 * section-zotaro.php
 * 
 * @package slick
 * @since slick 1.0
 */


if ( function_exists('Zotpress_func') ) :
    
    $zotpress_shortcode = get_field('zotaro_shortcode');// note mispelling in field name

    if ( $zotpress_shortcode ) : ?>
        <section class="section main toggle">
            <div class="section__inner">

                <div data-toggle>
                    <h2 data-toggle-title>Research</h2>
                    <div data-toggle-content>
                        <?php echo do_shortcode( $zotpress_shortcode ); ?>
                    </div><!-- .section__content -->
                </div><!-- [data-toggle] -->
                
            </div><!-- .section__inner -->
        </section><!-- .toggle -->
    <?php endif;

endif;  