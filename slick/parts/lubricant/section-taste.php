<?php

$taste = get_field('taste');
$smell = get_field('smell');
$text = get_field('taste_text');

$tate_numb = get_field('taste_numb');
$tate_feel = get_field('taste_feel');
$tate_attribs = get_field('taste_attributes');

$smell_attribs = get_field('smell_attributes');

$icon_taste = '<i class="far fa-fw fa-ice-cream"></i>';
$icon_smell = '<i class="far fa-fw fa-flower-tulip"></i>';    


if($taste || $smell || $text ) :

    echo '<section class="section section--taste">';
        echo '<div class="section__inner">';
            echo '<h1 class="section__title">Taste &amp; Smell</h1>';
            echo '<div class="section__content">';
                if($taste) :
                    echo '<div class="attribute attribute--taste">';
                        echo $icon_taste;
                        echo '<span class="attribute__value">';
                            if($tate_numb) :
                                echo '<span>'.$tate_numb.'. </span>';
                            endif;

                            if($tate_feel) :
                                echo'<span>'.$tate_feel.'. </span>';
                            endif; 

                            if($taste) :
                            echo '<span>'.$taste.'. </span>';
                            endif;

                            if( $tate_attribs ) : 
                                foreach( $tate_attribs as $attrib ):
                                    echo '<span>'.$attrib.'. </span>';
                                endforeach;
                            endif;   
                        echo '</span>';
                    echo '</div>';
                endif; //$taste

                if($smell) :
                    echo '<div class="attribute attribute--smell">';
                        echo $icon_smell;
                        echo '<span class="attribute__value">';
                            if($smell) :
                                echo '<span>'.$smell.'. </span>';
                            endif;

                            if( $smell_attribs ) : 
                                foreach( $smell_attribs as $attrib ):
                                    echo '<span>'.$attrib.'. </span>';
                                endforeach;
                            endif;   
                        echo '</span>';
                    echo '</div>';        
                endif; //$smell
            echo '</div><!-- .section__content -->'; 

            if($text) :
                echo '<div class="section__content">'.$text.'</div><!-- .section__content-->';
            endif;         
            
            slick_buy_bar(); 

        echo '</div><!-- .section__inner -->';   
    echo '</section><!-- .section--taste -->';
endif; 