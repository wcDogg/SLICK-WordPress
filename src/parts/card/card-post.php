<?php
/**
 * card-post.php
 * Displays single post card
 * 
 * @package slick
 * @since slick 1.0
 */

$page_excerpt = get_the_excerpt();
$page_summary = get_field('page_summary');  //slick

?>

<div class="card card--post">

    <?php get_template_part('parts/card/part', 'card-thumb'); ?>

    <div class="card__header">
          <?php get_template_part('parts/card/part', 'card-title'); ?>    
    </div>

    <div class="card__main">
        <div class="card__text">
            <?php 
                if ($page_summary) :
                    echo $page_summary;
                else :
                    echo $page_excerpt;
                endif;          
            ?>
        </div>
    </div>

</div><!-- .card -->