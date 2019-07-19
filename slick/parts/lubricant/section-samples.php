<?php

$samples_from = get_field('samples_from');
$samples_other = get_field('samples_other');

$amazon =get_field('buy_amazon_url');
$cheap = get_field('buy_cheap_url');
$manfacturer = get_field('buy_manufacturer_url');

$lube_name = get_the_title();
$brands = get_the_terms( $post->ID, 'brands'); 
$brand = $brands[0];
$brand_link = get_term_link($brand);


if ($samples_from) :

    echo '<section class="section section--samples">';
        echo '<div class="section__inner">';
            echo '<h1 class="section__title">Samples</h1>';
            echo '<div class="section__content">';

                // None - Initial review
                if($samples_from == 1) :
                    echo '<p>'.$lube_name.' has passed our initial screening based on ingredients, manufacturer info, and customer reviews. We have not obtained samples yet.</p>';
                endif;

                // Donated by brand
                if($samples_from == 2) :
                    echo '<p>Many thanks to <a href="'.esc_url($brand_link).'" rel="bookmark" title="See all lubricants by '.esc_attr($brand->name).'">'.$brand->name.'</a> for providing the products used in this review - we appreciate your support!</p>';
                endif;

                // Purchased from manufacturer
                if($samples_from == 3) :
                    echo '<p>SLICK.SEXY purchased the products used in this review <a href="'.esc_url($manfacturer).'" rel="nofollow noopener" title="Shop manufacturer" data-google="manufacturer">directly from the manufacturer</a>.</p>';     
                endif;

                // Purchased from CheapLubes
                if($samples_from == 4) :
                    echo '<p>SLICK.SEXY purchased the products used in this review <a href="'.esc_url($cheap).'" rel="nofollow noopener" title="Shop CheapLubes" data-google="cheaplubes">directly from CheapLubes.com</a>.</p>';   
                endif;

                // Purchased from Amazon
                if($samples_from == 5) :
                    echo '<p>SLICK.SEXY purchased the products used in this review <a href="'.esc_url($amazon).'" rel="nofollow noopener" title="Shop Amazon" data-google="amazon">directly from Amazon</a>.</p>';   
                endif;

                // Other 
                if($samples_from == 6) :
                    echo $samples_other;
                endif;   
                
            echo '</div><!-- .section__content -->';
            
        echo '</div><!-- .section__inner -->';
    echo '</section><!-- .section--packaging -->';

endif; ?>