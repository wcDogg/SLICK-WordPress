<?php

$brands = get_the_terms( get_the_ID(), 'brands' );
$formulas = get_the_terms( get_the_ID(), 'formulas' );
$highlight = get_the_terms( get_the_ID(), 'highlight' );
$recommended = get_the_terms( get_the_ID(), 'recommended-for' );
$ingredients = get_the_terms( get_the_ID(), 'ingredients' );
$consistency = get_the_terms( get_the_ID(), 'consistency' );
$lasting = get_the_terms( get_the_ID(), 'lasting-power' );
$safe = get_the_terms( get_the_ID(), 'safe-for' );

if ( $brands || $formulas || $highlight || $recommended || $ingredients || $consistency || $lasting || $safe ) :

    echo '<div class="list">';
        echo '<i class="fas fa-hashtag"></i>';
        echo '<div class="list__item-text">';

            if ( $brands ) :
                the_terms( get_the_ID(), 'brands', '', ' &nbsp;' );  
                    echo ' &nbsp;'; 
            endif;

            if ( $formulas ) :
                the_terms( get_the_ID(), 'formulas', '', ' &nbsp;' );
                echo ' &nbsp;'; 
            endif;

            if ( $highlight ) :
                the_terms( get_the_ID(), 'highlight', '', ' &nbsp;' ); 
                echo ' &nbsp;'; 
            endif;

            if ( $recommended ) :
                the_terms( get_the_ID(), 'recommended-for', '', ' &nbsp;' );
                echo ' &nbsp;'; 
            endif;

            if ( $ingredients ) :
                the_terms( get_the_ID(), 'ingredients', '', ' &nbsp;' ); 
                echo ' &nbsp;';  
            endif;

            if ( $consistency ) :
                the_terms( get_the_ID(), 'consistency', '', ' &nbsp;' );
                echo ' &nbsp;'; 
            endif;

            if ( $lasting ) :
                the_terms( get_the_ID(), 'lasting-power', '', ' &nbsp;' ); 
                    echo ' &nbsp;'; 
            endif;

            if ( $safe ) :
                the_terms( get_the_ID(), 'safe-for', '', ' &nbsp;' );
            endif;

        echo '</div>';
    echo '</div>';

endif;

