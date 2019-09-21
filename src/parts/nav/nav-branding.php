<?php
/**
 * nav-branding.php
 * 
 * @package slick
 * @since slick 1.0
 */
?>


<div class="branding">

    <?php the_custom_logo(); ?>

    <a class="branding__title" 
        rel="bome" 
        title="<?php bloginfo( 'name' ); ?> Home"
        href="<?php echo esc_url( home_url( '/' ) ); ?>" >

            <?php bloginfo( 'name' ); ?>
    </a>

</div><!-- .branding -->
