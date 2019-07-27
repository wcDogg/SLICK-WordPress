<?php 

$highlights = get_the_terms($post->ID, 'highlight', array("fields" => "all")); 
$key_ingredients = get_the_terms($post->ID, 'key-ingredients', array("fields" => "all"));

$frees = get_field('ingredients_free'); 
$repeater = get_field('ingredients_list');
$text = get_field('ingredients_text');

$icon_ingredient = '<i class="far fa-tint"></i>';
$icon_ingredient_free = '<i class="fas fa-ban"></i>';


echo '<section class="section section--ingredients">';
    echo '<div class="section__inner">';
        echo '<h1 class="section__title">Ingredients</h1>';

        echo '<div class="section__content">';
            echo '<div class="section__attributes section__grid">';
                if ($highlights) : 
                    foreach($highlights as $term) :
                        $term_link = get_term_link( $term );
                        $term_icon = get_field('tax_icon', $term);
                        if( $term->slug == 'low-osmo' || $term->slug == 'natural') :
                            echo '<a class="attribute attribute--hightlight" rel="bookmark" title="View all '.$term->name.' lubricnats." href="'.$term_link.'">'. $term_icon .'<span class="attribute__value">'. $term->name .'</span></a>'; 
                        endif;
                    endforeach;      
                endif;

                if ($key_ingredients) : 
                    foreach($key_ingredients as $term) :
                        $term_link = get_term_link( $term );
                        echo '<a class="attribute attribute--ingredient" rel="bookmark" title="View all lubricants with '.$term->name.' as a key ingredient." href="'.$term_link.'">'. $icon_ingredient .'<span class="attribute__value">'. $term->name .'</span></a>'; 
                    endforeach;
                endif;  

            echo '</div><!-- .section__grid -->'; 

            if( $frees ): 
                echo '<div class="section__meta">';
                foreach( $frees as $free ):
                    echo '<span class="meta meta--free">'.$icon_ingredient_free.'<span class="meta__value">'.$free.'</span></span>';
                endforeach;
                echo '</div><!-- .section__meta -->';
            endif;
        echo '</div><!-- .section__content -->';

        if( $repeater ) :
            $count = count($repeater);
            echo '<div class="section__content"><p class="italic">';
            while ( have_rows('ingredients_list') ) : the_row();

                $i = get_row_index(); // starts at 1, not 0 like most indexes       
                $sub = get_sub_field('ingredient_single');
                $label = $sub['label'];

                if( $i != $count) :
                    echo '<span>'.$label.'</span>,&nbsp;';         
                else :            
                    echo '<span>'.$label.'.</span>';
                endif;    

            endwhile;
            echo '</p></div><!-- .section__content -->'; 
        endif;        

        if ($text) :
            echo '<div class="section__content">' . $text . '</div><!-- .section__content -->';
        endif;

        slick_buy_bar();

    echo '</div><!-- .section__inner -->';
echo '</section><!-- .page__materials -->';