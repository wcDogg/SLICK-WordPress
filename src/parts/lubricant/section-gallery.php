<?php  

$gallery = get_field('related_gallery'); 

if ($gallery) :

    echo '<section class="section section--gallery" aria-label="Image Gallery">';
        echo '<div class="section__inner">';

            foreach ($gallery as $single_gallery) :
                envira_gallery( $single_gallery );
            endforeach;

            slick_buy_bar(); 
            
        echo '</div><!-- .section__inner -->';       
    echo '</section><!-- .section--gallery -->';

endif;