<?php

if ( has_term( '', 'brands' ) ) :
    echo '<span class="meta meta--brands">';
        the_terms( get_the_ID(), 'brands', '', ' | ' );
    echo '</span>';	    
endif;