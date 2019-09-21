<?php
/**
 * header-archive.php
 * Displays single posts and custom post types
 * 
 * @package slick
 * @since slick 1.0
 */


$tax = get_queried_object(); 
$tax_title = get_the_archive_title();
$tax_subtitle = get_field('subtitle', $tax);
$tax_description = get_the_archive_description($tax);
$tax_image = get_field('tax_image', $tax);
$tax_image_url = $tax_image['url'];


if ( is_tax('brands', '') ) : 

    get_template_part('parts/archive/header', 'brand');

else:

?>

    <section class="section header header--archive">

        <div class="overlay__wrap">

            <div class="overlay"></div>

            <div class="header__title-wrap overlay__content">
                <?php
                    if ( is_tax('highlight', '') ) :
                        echo '<h1 class="header__title">'.$tax_title.'</h1>';
                        echo '<h2 class="header__subtitle">Lubricants &amp; Moisturizers</h2>';
                    
                    elseif ( is_tax('recommended-for', '') ) :
                        echo '<h2 class="header__subtitle">Lubricants Recommended For</h2>';
                        echo '<h1 class="header__title">'.$tax_title.'</h1>';                   
                    
                    elseif ( is_tax('formulas', '') ) :
                        echo '<h1 class="header__title">'.$tax_title.'</h1>';
                        echo '<h2 class="header__subtitle">Lubricants & Moisturizers</h2>';

                    elseif ( is_tax('ingredients', '') ) :
                        echo '<h1 class="header__title">'.$tax_title.'</h1>';
                        echo '<h2 class="header__subtitle">Lubricant Ingredient</h2>';
                    
                    elseif ( is_tax('key-ingredients', '') ) :
                        echo '<h1 class="header__title">'.$tax_title.'</h1>';
                        echo '<h2 class="header__subtitle">Key Lubricant Ingredient</h2>';
                    
                    elseif ( is_tax('safe-for', '') ) :
                        echo '<h2 class="header__subtitle">Safe For</h2>';                    
                        echo '<h1 class="header__title">'.$tax_title.'</h1>';
                    
                    elseif ( is_tax('consistency', '') ) : 
                        echo '<h1 class="header__title">'.$tax_title.'</h1>';
                        echo '<h2 class="header__subtitle">Lubricant Consistency</h2>';
                    
                    elseif ( is_tax('lasting-power', '') ) :
                        echo '<h1 class="header__title">'.$tax_title.'</h1>';
                        echo '<h2 class="header__subtitle">Lubricant Lasting Power</h2>';
                    else :
                        echo '<h1 class="header__title">'.$tax_title.'</h1>';
                        if ($tax_subtitle) :
                            echo '<h2 class="header__subtitle">'.$tax_subtitle.'</h2>';
                        endif;  

                    endif;
                ?>
            </div><!-- .header__title-wrap -->     
            
            <?php 

                if ($tax_image) :    
                    echo '<div class="overlay__img" style="background-image: url( '.$tax_image_url.' );"></div>';
                endif 
            
            ?>     

        </div><!-- .overlay__wrap -->
    
        <div class="header__inner">
            <?php
                if ( $tax_description ) :
                    echo '<div class="header__summary">';
                        echo $tax_description;
                    echo '</div><!-- .header__summary -->';
                endif; 	

                if ( have_posts() ) : 
                    if ( is_tax('highlight', '') || 
                        is_tax('recommended-for', '') ||
                        is_tax('formulas', '') ||
                        is_tax('key-ingredients', '') ||
                        is_tax('ingredients', '') ||
                        is_tax('safe-for', '') ||   
                        is_tax('consistency', '') || 
                        is_tax('lasting-power', '') ) :
                            get_template_part('parts/headers/part', 'filters');
                    endif;		
                endif;
            ?>
        </div><!-- .header__inner -->

    </section><!-- .header -->

<?php

endif;