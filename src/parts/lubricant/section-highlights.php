<?php

$formulas = get_the_terms($post->ID, 'formulas', array("fields" => "all"));
$consistency = get_the_terms($post->ID, 'consistency', array("fields" => "all")); 
$lasting = get_the_terms($post->ID, 'lasting-power', array("fields" => "all"));
$highlights = get_the_terms($post->ID, 'highlight', array("fields" => "all"));
$recommended = get_the_terms($post->ID, 'recommended-for', array("fields" => "all"));
$price_real = get_field('price_real');
$sizes_lubricant = get_field('sizes_lubricant');
$summary = get_field('page_summary');

$icon_formula = '<i class="far fa-fw fa-flask"></i>';
$icon_consistency = '<i class="far fa-fw fa-hand-holding-water"></i>';
$icon_lasting = '<i class="far fa-fw fa-stopwatch"></i>';
$icon_price = '<i class="fas fa-dollar-sign"></i>'; 
$icons_sizes = '<i class="fas fa-signal-alt-3"></i>';

echo '<section class="section section--highlights">';
    echo '<div class="section__inner">';
        echo '<h1 class="section__title">Highlights</h1>';  

        echo '<div class="section__content">';

            echo '<div class="section__attributes section__grid">';
                // Formula
                if($formulas) :
                    foreach($formulas as $term) :
                        $term_link = get_term_link( $term );
                        echo '<a class="attribute attribute--formula" rel="bookmark" title="View all '.$term->name.' lubircants." href="'.$term_link.'">'. $icon_formula .'<span class="attribute__value">'. $term->name .'</span></a>'; 
                    endforeach; 
                endif;
                // Consistency
                if($consistency) : 
                    foreach($consistency as $term) :
                        $term_link = get_term_link( $term );
                        echo '<a class="attribute attribute--consistency" rel="bookmark" title="View all lubricants with a '.$term->name.' consistency." href="'.$term_link.'">'.$icon_consistency.'<span class="attribute__value">'. $term->name .'</span></a>'; 
                    endforeach; 
                endif; 
                // Lasting Power
                if($lasting) : 
                    foreach($lasting as $term) :
                        $term_link = get_term_link( $term );
                        echo '<a class="attribute attribute--lasting" rel="bookmark" title="View all lubricants that are '.$term->name.'." href="'.$term_link.'">'. $icon_lasting .'<span class="attribute__value">'. $term->name .'</span></a>'; 
                    endforeach; 
                endif; 
                // Highlights
                if ($highlights) :
                    foreach($highlights as $term) :
                        $term_link = get_term_link( $term );
                        $term_icon = get_field('tax_icon', $term);
                        echo '<a class="attribute attribute--hightlight" rel="bookmark" title="View all '.$term->name.' lubricnats." href="'.$term_link.'">'. $term_icon .'<span class="attribute__value">'. $term->name .'</span></a>'; 
                    endforeach;
                endif;
                // Recommended
                if ($recommended) :
                    foreach($recommended as $term) :
                        $term_link = get_term_link( $term );
                        $term_icon = get_field('tax_icon', $term);
                        echo '<a class="attribute attribute--recommended" rel="bookmark" title="View all lubricants recommended for '.$term->name.'" href="'.$term_link.'">'. $term_icon .'<span class="attribute__value">'. $term->name .'</span></a>'; 
                    endforeach; 
                endif;
            echo '</div><!-- .section__grid -->'; 

            if ($price_real) :
                echo '<div class="meta meta--price">'.$icon_price.'<span class="meta__value">Retail '.$price_real.' per oz.</span></div>';                     
                if ( has_term( 'silicone', 'formulas', $post->ID) ) :
                    echo '<div class="meta meta--price">'.$icon_price.'<span class="meta__value">To get the best price on silicone lubricants, purchase larger bottles - generally 8oz +</span></div>'; 
                endif;                
            endif; 

            if ($sizes_lubricant) :
                echo '<div class="meta meta--sizes">';
                    echo $icons_sizes;
                    echo '<span class="meta__value">';
                        the_field('sizes_lubricant');
                    echo '</span>';
                echo '</div>';
            endif;

        echo '</div><!-- .section__content -->'; 

        if ($summary) :
            echo '<div class="section__content">'.$summary.'</div><!-- .section__content -->';
        endif;     

        slick_buy_bar();

    echo '</div><!-- .section__inner -->';
echo '</section><!-- .section--highlights -->'; 