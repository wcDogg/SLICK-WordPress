<article id="post-<?php the_ID(); ?>" class="card lubricant">
 
<?php

    $formulas = get_the_terms( get_the_ID(), 'formulas', array("fields" => "all"));
    $consistency = get_the_terms( get_the_ID(), 'consistency', array("fields" => "all")); 
    $lasting = get_the_terms( get_the_ID(), 'lasting-power', array("fields" => "all"));

    $icon_formula = '<i class="far fa-fw fa-flask"></i>';
    $icon_consistency = '<i class="far fa-fw fa-hand-holding-water"></i>';
    $icon_lasting = '<i class="far fa-fw fa-stopwatch"></i>';

    get_template_part('parts/headers/part', 'card-thumb');

    echo '<header class="card__header">';
        get_template_part('parts/headers/part', 'card-title');       	
    echo '</header>';
 
    echo '<main class="card__main">';

        echo '<div class="card__meta">';

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

        echo '</div>';
        
        slick_buy_bar();
        
    echo '</main>';

?>

</article><!-- .card -->