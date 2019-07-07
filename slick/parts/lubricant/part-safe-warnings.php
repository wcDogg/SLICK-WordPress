<?php
$cleanup = get_field('cleanup'); 
$icon_cleanup = '<i class="far fa-fw fa-tshirt"></i>';
$icon_warn = '<i class="far fa-fw fa-exclamation-triangle"></i>';
$icon_x = '<i class="fas fa-fw fa-times"></i>';


if ( has_term('', 'formulas') ) :

    // Aloe-Polyurethane warning
    if ( get_field('warn_aloe_polyurethane') ) :
        echo '<div class="meta meta--warning">'.$icon_x.'<span class="meta__value">Some aloe-based lubricants are not compatible with polyurethane condoms - always check both the condom and lubricant labels.</span></div>'; 
    endif;
    // Aloe cleanup
    if( has_term('aloe-vera', 'formulas') ) :
        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">Aloe-based lubricants do dry, but can become slippery again with water. Be sure to wash hands and clean spills.</span></div>';
    endif;

    // Mineral Oil-Latex warning
    if ( get_field('warn_mineral_oil_latex') ) :
        echo '<div class="meta meta--warning">'.$icon_x.'<span class="meta__value">Mineral oil quickly breaks down latex &amp; polyisoprene. NEVER use any oil or body lotion with condoms or toys.</span></div>';  
    endif;
    // Mineral Oil external
    if ( get_field('warn_mineral_oil_external') ) :
        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">NEVER use mineral oil for vaginal or anal sex. Only use mineral oil externally.</span></div>';  
    endif;
    // Mineral Oil cleanup
    if( has_term('mineral-oil', 'formulas') ) :
        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">Mineral oil never completely dries and stays slippery for a long time. Be sure to wash hands and clean spills.</span></div>';
    endif;

    // Plant Oil-Latex warning
    if ( get_field('warn_plant_oil_latex') ) :
        echo '<div class="meta meta--warning">'.$icon_x.'<span class="meta__value">Plant oils quickly break down latex &amp; polyisoprene. NEVER use any oil or body lotion with condoms.</span></div>';    
    endif;
    // Plant Oil cleanup
    if( has_term('plant-oil', 'formulas') ) :    
        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">Plant oils never completely dry and stays slippery for a long time. Be sure to wash hands and clean spills.</span></div>';
    endif;

    // Silicone-Silicone Warning
     if ( get_field('warn_silicone_silicone') ) :
        echo '<div class="meta meta--warning">'.$icon_x.'<span class="meta__value">Silicone lubricants ARE SAFE to use with 100% medical-grade silicone toys. Silicone lubricants NOT SAFE to use with blended materials that include silicone. <a href="https://slick.sexy/?p=1173" rel="bookmark">Info</a></span></div>';  
    endif;   
    // Silicone cleanup
    if( has_term('silicone', 'formulas') || has_term('silicone-hybrid', 'formulas')) :
        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">Silicone never completely dries and stays slippery for a long time. Be sure to wash hands and clean spills.</span></div>';        
    endif;

    // Water-Based cleanup
    if( has_term('water', 'formulas') ) :
        echo '<div class="meta meta--warning">'.$icon_warn.'<span class="meta__value">Water-based lubricants do dry, but can become slippery again with water. Be sure to wash hands and clean spills.</span></div>';
    endif;

endif;

if ($cleanup) :
    echo '<div class="meta meta--warning">'.$icon_cleanup.'<span class="meta__value">'.$cleanup.'</span></div>';
endif; 