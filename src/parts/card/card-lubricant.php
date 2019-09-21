<?php
/**
 * card-lubricant.php
 * Displays single lubricant card
 * 
 * @package slick
 * @since slick 1.0
 */
?>

<?php

    $formulas = get_the_terms( get_the_ID(), 'formulas', array("fields" => "all"));
    $consistency = get_the_terms( get_the_ID(), 'consistency', array("fields" => "all")); 
    $lasting = get_the_terms( get_the_ID(), 'lasting-power', array("fields" => "all"));

    $icon_formula = '<i class="far fa-fw fa-flask"></i>';
    $icon_consistency = '<i class="far fa-fw fa-hand-holding-water"></i>';
    $icon_lasting = '<i class="far fa-fw fa-stopwatch"></i>'; 

?>

<div class="card card--lubricant">

    <?php get_template_part('parts/card/part', 'card-thumb'); ?>

    <div class="card__header">
          <?php get_template_part('parts/card/part', 'card-title'); ?>    
    </div>

    <div class="card__main">
        <div class="card__meta">
        <?php

            // Formula
            foreach($formulas as $term) :
                echo '<span class="meta meta--formula">'.$icon_formula.'<span class="meta__value">'.$term->name.'</span></span>';
            endforeach; 

            // Consistency
            if($consistency) : 
                foreach($consistency as $term) :
                    echo '<span class="meta meta--consistency">'.$icon_consistency.'<span class="meta__value">'.$term->name.'</span></span>';
                endforeach; 
            endif; 

            // Lasting Power
            if($lasting) : 
                foreach($lasting as $term) :
                    echo '<span class="meta meta--lasting">'.$icon_lasting.'<span class="meta__value">'.$term->name.'</span></span>';
                endforeach; 
            endif; 

        ?>
        </div><!-- .card__meta -->

        <div class="card__action">
            <?php get_template_part('parts/lubricant/part', 'action'); ?>
        </div>

    </div><!-- .card__main -->

</div><!-- .card -->