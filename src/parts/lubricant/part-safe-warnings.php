<?php
$cleanup = get_field('cleanup'); 
$icon_cleanup = '<i class="far fa-fw fa-tshirt"></i>';
$icon_warn = '<i class="far fa-fw fa-exclamation-triangle"></i>';
$icon_x = '<i class="fas fa-fw fa-times"></i>';


if ( has_term('', 'formulas') ) :

    // Warn silicone-silicone
     if ( has_term('silicone', 'formulas') ) :
        echo '<div class="meta meta--warning">'.$icon_x.'<span class="meta__value">Silicone lubricants ARE SAFE to use with 100% medical-grade silicone toys. Silicone lubricants are NOT SAFE to use with blended materials that include silicone. <a href="https://slick.sexy/?p=1173" rel="bookmark">Info</a></span></div>';  
    endif;   

    // Warn mineral oil external + condoms
    if( has_term('mineral-oil', 'formulas') || has_term('mineral-oil', 'ingredients') ) :
        echo '<div class="meta meta--warning">'.$icon_x.'<span class="meta__value">Mineral oil quickly breaks down latex &amp; polyisoprene. NEVER use any oil or body lotion with condoms or toys.</span></div>';  

        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">NEVER use mineral oil for vaginal or anal sex. Only use mineral oil externally.</span></div>';          
    endif;   

     // Warn plant oils + condoms
    if ( has_term('plant-oil', 'formulas') || has_term('plant-oils', 'ingredients') ) :
        echo '<div class="meta meta--warning">'.$icon_x.'<span class="meta__value">Plant oils quickly break down latex &amp; polyisoprene. NEVER use any oil or body lotion with these condom materials.</span></div>';    
    endif;   

    // Warn polyurethane 
    if ( !has_term('polyurethane', 'safe-for') ) :
        echo '<div class="meta meta--warning">'.$icon_x.'<span class="meta__value">Either we cannot confirm this product\'s compatibility with polyurethane, or the product explicitly states it is not compatible with polyurethane condoms.</span></div>'; 
    endif;  

    // Silicone cleanup
    if( has_term('silicone', 'formulas') || has_term('silicone-hybrid', 'formulas')) :
        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">Silicone never completely dries and stays slippery for a long time. Be sure to wash hands and clean spills.</span></div>';        
    endif;

    // Water-Based cleanup
    if( has_term('water', 'formulas') ) :
        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">Water-based lubricants do dry, but can become slippery again with water. Be sure to wash hands and clean spills.</span></div>';
    endif;

    // Aloe cleanup
    if( has_term('aloe-vera', 'formulas') ) :
        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">Aloe-based lubricants do dry, but can become slippery again with water. Be sure to wash hands and clean spills.</span></div>';
    endif;

    // Mineral Oil cleanup
    if( has_term('mineral-oil', 'formulas') ) :
        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">Mineral oil never completely dries and stays slippery for a long time. Be sure to wash hands and clean spills.</span></div>';
    endif;

    // Plant Oil cleanup
    if( has_term('plant-oil', 'formulas') ) :    
        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">Plant oils never completely dry and stay slippery for a long time. Be sure to wash hands and clean spills.</span></div>';
    endif;

endif;

if ($cleanup) :
    echo '<div class="meta meta--warning">'.$icon_cleanup.'<span class="meta__value">'.$cleanup.'</span></div>';
endif; 