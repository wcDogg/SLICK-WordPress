<?php

$consistency = get_the_terms($post->ID, 'consistency', array("fields" => "all")); 
$lasting = get_the_terms($post->ID, 'lasting-power', array("fields" => "all"));
$reactivate = get_field('consistency_reactivate');
$dry_look = get_field('dry_look'); 
$dry_feel = get_field('dry_feel');  
$media = get_field('consistency_media');
$text = get_field('consistency_text');

$icon_consistency = '<i class="far fa-fw fa-hand-holding-water"></i>';
$icon_lasting = '<i class="far fa-fw fa-stopwatch"></i>';
$icon_reactivate = '<i class="fas fa-fw fa-redo"></i>';
$icon_dries = '<i class="far fa-fw fa-hand-paper"></i>'; 

echo '<section class="section section--consistency"  aria-label="Consistency and Lasting Power">';
    echo '<div class="section__inner">';
        echo '<h1 class="section__title">Consistency &amp; Lasting Power</h1>';
 
        if( $consistency || $lasting ) :
            echo '<div class="section__content">';

                if($consistency || $lasting) :
                    echo '<div class="section__attributes">';
                        if($consistency) : 
                            foreach($consistency as $term) :
                                $term_link = get_term_link( $term );
                                echo '<a class="attribute attribute--consistency" rel="bookmark" title="View all lubricants with a '.$term->name.' consistency." href="'.$term_link.'">'. $icon_consistency .'<span class="attribute__value">'. $term->name .'</span></a>'; 
                            endforeach; 
                        endif; 

                        if($lasting) : 
                            foreach($lasting as $term) :
                                $term_link = get_term_link( $term );
                                echo '<a class="attribute attribute--lasting" rel="bookmark" title="View all lubricants that are '.$term->name.'." href="'.$term_link.'">'. $icon_lasting .'<span class="attribute__value">'. $term->name .'</span></a>'; 
                            endforeach; 
                        endif; 
                    echo '</div><!-- .section__attributes-->';
                endif;

                if($reactivate) :
                    echo '<div class="meta meta--reactivate">'.$icon_reactivate.'<span class="meta__value">'.$reactivate.'.</span></div>';
                endif;

                if($dry_look || $dry_feel) :
                    echo '<div class="meta meta--dries">';
                        echo $icon_dries;
                        echo '<span class="meta__value">';
                            if ($dry_look) :
                                echo '<span>'.$dry_look.'&nbsp;</span>';
                            endif;
                            if ($dry_feel) :
                                echo '<span>'.$dry_feel.'&nbsp;</span>';
                            endif; 
                        echo '</span>';
                    echo '</div>';
                endif;

            echo '</div><!-- .section__content-->';
        endif;

        if ($media) :
            $ext = pathinfo($media, PATHINFO_EXTENSION);
            if($ext == 'mp4') :
                $link = '<a href="'.esc_url($media).'" rel="file" title="Direct link to MP4 file.">Here\'s a direct link to the file instead.</a>';
                echo '<video controls class="section__video">';
                    echo '<source src="myVideo.mp4" type="video/mp4">';
                    echo '<p>Your browser doesn\'t support HTML5 video. '.$link.'</p>';       
                echo '</video><!-- .section__video-->';
            endif;
            if($ext == 'gif') :
                echo '<div class="section__gif">';
                    echo '<img src="'.$media.'">';
                echo '</div><!-- .section__gif -->';     
            endif;
        endif;  
         
        if ($text):
            echo '<div class="section__content">'.$text.'</div><!-- .section__content -->';
        endif;

        slick_buy_bar();

    echo '</div><!-- .section__inner -->';
echo '</section><!-- .section--consistency -->';