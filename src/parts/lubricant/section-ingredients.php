<?php 

$highlights = get_the_terms($post->ID, 'highlight', array("fields" => "all")); 
$key_ingredients = get_the_terms($post->ID, 'key-ingredients', array("fields" => "all"));
$frees = get_field('ingredients_free'); 
$text = get_field('ingredients_text');
$icon_ingredient = '<i class="far fa-tint"></i>';
$icon_ingredient_free = '<i class="fas fa-ban"></i>';


$repeater = get_field('ingredients_list');
// repeater
$ingredients  = get_field('ingredients');
// subfield
// $ingredients_single = get_field('ingredients_single');


echo '<section id="ingredients" class="section main">';
    echo '<div class="section__inner">';

        echo '<div class="section__title-wrap">';
            echo '<h1 class="section__title">Ingredients</h1>';
        echo '</div>';

        echo '<div class="section__data">';
            echo '<div class="section__attributes">';
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
            echo '</div><!-- .section__attributes -->'; 

            if( $frees ): 
                echo '<div class="section__meta">';
                foreach( $frees as $free ):
                    echo '<span class="meta meta--free">'.$icon_ingredient_free.'<span class="meta__value">'.$free.'</span></span>';
                endforeach;
                echo '</div><!-- .section__meta -->';
            endif;

            if( $ingredients ) :
                $count = count($ingredients);
                echo '<p class="ingredients">';
                    while ( have_rows('ingredients') ) : the_row();

                        $i = get_row_index(); // starts at 1, not 0 like most indexes       
                        $sub = get_sub_field('ingredients_single');

                        if( $i != $count) :
                            echo '<span>'.$sub->name.'</span>,&nbsp;';         
                        else :            
                            echo '<span>'.$sub->name.'.</span>';
                        endif;    

                    endwhile;
                echo '</p>'; 
            endif;  

        echo '</div><!-- .section__attributes -->';

    

        if ($text) :
            echo '<div class="section__text">' . $text . '</div><!-- .section__content -->';
        endif;

        get_template_part('parts/lubricant/part', 'action');

    echo '</div><!-- .section__inner -->';
echo '</section><!-- .page__materials -->';