<?php

$page_title = get_the_title();
$page_subtitle = get_field('page_subtitle');
$page_summary = get_field('page_summary'); 

$url_offer = get_field('buy_offer_url');
$text_offer = get_field('buy_offer_text');
$icon_offer = get_field('buy_offer_icon');

$offer_site = get_field('offer_site_name');

$offer_dates = get_field('offer_has_dates');
$offer_start = get_field('offer_start');
$offer_end = get_field('offer_end');
$offer_dates_none = 'No Expiration Date';


echo '<section class="section section--header">';
    echo '<div class="section__inner">';

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
            echo '</div><!-- .page__meta -->'; 
            
        elseif ($offer_site) :
            echo '<div class="page__meta">';
                echo '<span class="meta meta--website">'.$offer_site.'</span>';
                if($offer_dates) :
                    echo '<span class="meta meta--dates">'.$offer_start.' &#9472; '.$offer_end.'</span>';    
                else : 
                    echo '<span class="meta meta--dates">'.$offer_dates_none.'</span>'; 
                endif;
            echo '</div><!-- .page__meta -->'; 
        endif;

        echo '<div class="page__title-wrap">';
            echo '<h1 class="page__title">'.$page_title.'</h1>';
            if ($page_subtitle) :
                echo '<h2 class="page__subtitle">'. $page_subtitle .'</h2>';  
            endif; 
        echo '</div>';

        if ($page_summary) :
            echo '<div class="page__summary">' . $page_summary . '</div><!-- .page__summary -->';
        endif;          
        
        echo '<a class="button button--offer" rel="nofollow nonopener" data-google="offer" title="Shop offer" href="'.esc_url($url_offer).'" >'.$icon_offer, $text_offer.'</a>'; 
	
        get_template_part('parts/headers/part', 'share');
                              
    echo '</div><!-- .section__inner  -->';
echo '</section><!-- .section--header  -->';