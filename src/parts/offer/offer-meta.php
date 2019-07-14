<?php 

$offer_site = get_field('offer_site_name');
$offer_dates = get_field('offer_has_dates');
$offer_start = get_field('offer_start');
$offer_end = get_field('offer_end');
$offer_dates_none = 'No Expiration Date'; 

if (has_term( '', 'brands' )) :

    echo '<div class="page__meta">';

        echo '<span class="meta meta--brands">';
            the_terms( get_the_ID(), 'brands', '', ', ' );
        echo '</span>';	    

        if($offer_dates) :
            echo '<span class="meta meta--dates">'.$offer_start.' &#9472; '.$offer_end.'</span>';    
        else : 
            echo '<span class="meta meta--dates">'.$offer_dates_none.'</span>'; 
        endif;

    echo '</div>'; 

elseif ($offer_site) :

    echo '<div class="page__meta">';

        echo '<span class="meta meta--website">'.$offer_site.'</span>';

        if($offer_dates) :
            echo '<span class="meta meta--dates">'.$offer_start.' &#9472; '.$offer_end.'</span>';    
        else : 
            echo '<span class="meta meta--dates">'.$offer_dates_none.'</span>'; 
        endif;
        
    echo '</div>'; 

endif;