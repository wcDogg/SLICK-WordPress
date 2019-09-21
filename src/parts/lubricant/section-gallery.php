<?php  

$gallery = get_field('related_gallery'); 

if ($gallery) :

    echo '<section id="gallery" class="section main">';
        echo '<div class="section__inner">';

            foreach ($gallery as $single_gallery) :
                envira_gallery( $single_gallery );
            endforeach;

            get_template_part('parts/lubricant/part', 'action');
            
        echo '</div><!-- .section__inner -->';       
    echo '</section><!-- #gallery -->';

endif;