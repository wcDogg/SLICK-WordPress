<?php
/**
 * page-formula.php
 * Displays the Base Formulas landing page
 * 
 * @package slick
 * @since slick 1.0
 */

get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <?php get_template_part('parts/header/header', get_post_type() ); ?>

    <section class="section cards cards--brands">
        <div class="section__inner">            
            <div class="section__cards">
            
                <?php get_template_part('parts/card/card', 'brand'); ?>

            </div><!-- .section__cards-->   
        </div><!-- .section__inner -->
    </section><!-- .section -->

</article><!-- #post-<?php the_ID(); ?> --> 

<?php get_footer(); ?>
