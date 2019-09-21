<?php
/**
 * header-page.php
 * 
 * @package slick
 * @since slick 1.0
 */

$page_title = get_the_title();
$page_subtitle = get_field('page_subtitle'); // slick 
$page_summary = get_field('page_summary');  //slick 
$page_image_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

?>

<section class="section header header--page">

    <div class="overlay__wrap">

        <div class="overlay"></div>

        <div class="header__title-wrap overlay__content">
            <h1 class="header__title"><?php echo $page_title ?></h1>
            <?php if ($page_subtitle) : ?>
                <h2 class="header__subtitle"><?php echo $page_subtitle ?></h2>
            <?php endif; ?>
        </div>  

        <?php if ( has_post_thumbnail() ) :
            echo '<div class="overlay__img" style="background-image: url( '.$page_image_url.' );"></div>';
        endif; ?> 

    </div><!-- .overlay__wrap -->

    <div class="header__inner">

        <?php 
        get_template_part('parts/header/part', 'share');       

        if ($page_summary) : 
            echo '<div class="header__summary">';
                echo $page_summary; 
            echo '</div><!-- .header__summary --> '; 
        endif;

        // All Lubricants
        if ( $post->ID == 690 ) :
            get_template_part('parts/archive/part', 'filters');
        endif;
        // Win
        if ( $post->ID == 805 ) :
            echo do_shortcode( '[ninja_form id=2]' );
        endif;
        ?>

    </div><!-- .section__inner -->

</section><!-- .header -->