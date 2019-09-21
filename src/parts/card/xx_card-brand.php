<?php
/**
 * card-brand.php
 * Displays single Brand card
 * 
 * @package slick
 * @since slick 1.0
 */

$brands = get_terms( array(
    'taxonomy' => 'brands',
    'hide_empty' => true, 
    'fields' => 'all',
) ); 


foreach ($brands as $term) :

    $term_url = get_term_link( $term );            
    $term_name = $term->name;  
    $term_subtitle = get_field('tax_subtitle', $term);
    $image_object = get_field('tax_image', $term);
    $image_url = $image_object['sizes']['thumbnail'];

    $buy_manufacturer_icon = '<i class="fas fa-link"></i>';
    $buy_manufacturer_url = get_field('buy_manufacturer_url', $term);

    $buy_amazon_icon = '<i class="fab fa-amazon"></i>';
    $buy_amazon_url = get_field('buy_amazon_url', $term);

    $buy_cheap_icon = '<i class="far fa-tint"></i>';
    $buy_cheap_url = get_field('buy_cheap_url', $term);  
        
    ?>
        
        <div class="card card--brand">
            <a class="overlay__link" rel="bookmark" href="<?php esc_url($term_url); ?>" title="<?php esc_attr($term_name); ?>">
                <div class="overlay__wrap">
                    <div class="overlay"></div>
                    <img class="overlay__img" src="<?php esc_url($image_url); ?>" alt="<?php esc_attr($term_name); ?>" />

                </div><!-- .overlay__wrap -->
                <div class="overlay__wrap hover">
                    <div class="overlay"></div>
                    <div class="overlay__content card__title-wrap">
                        <h3 class="card__title"><?php echo $term_name ?></h3>
                    </div>
                </div><!-- .overlay__wrap -->
            </a><!-- .overlay__link-->
            <div class="card__action">
                <nav class="buy-nav" aria-label="Shop this brand">
                    <ul class="buy-menu">
                    <?php
                        if ( $buy_amazon_url ) :
                            echo '<li>';
                                echo '<a class="link--amazon" href="'.esc_url($buy_amazon_url).'" title="Shop brand on Amazon" rel="nofollow nonopener" data-google="amazon" role="menuitem">'.$buy_amazon_icon.'</a>';
                            echo '</li>';
                        endif;

                        if ( $buy_cheap_url ) :
                            echo '<li>';
                                echo '<a class="link--cheap" href="'.esc_url($buy_cheap_url).'" title="Shop brand on Cheaplubes.com" rel="nofollow nonopener" data-google="cheaplubes" role="menuitem">'.$buy_cheap_icon.'</a>';
                            echo '</li>';
                        endif;

                        if ( $buy_manufacturer_url ) :
                            echo '<li>';
                                echo '<a class="link--manufacturer" href="'.esc_url($buy_manufacturer_url).'" title="Shop brand\'s official website" rel="nofollow nonopener" data-google="manufacturer" role="menuitem">'.$buy_manufacturer_icon.'</a>';
                            echo '</li>';
                        endif;  
                    ?>
                    </ul>
                </nav><!-- .buy -->
            </div>
            <div>
                <?php print_r($image_object); ?>
            </div>
        </div><!-- .card -->       

    <?php

endforeach;

