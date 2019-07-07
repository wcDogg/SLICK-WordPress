<?php

$tax = get_queried_object();
$tax_image = get_field('tax_image', $tax);
$tax_title = get_the_archive_title();
$tax_subtitle = get_field('tax_subtitle', $tax);

$company = get_field('company', $tax);
$company_url = get_field('company_url', $tax);    
$company_address = get_field('company_address', $tax);
$company_phone = get_field('company_phone', $tax);

$buy_manufacturer_icon = '<i class="fas fa-link"></i>';
$buy_manufacturer_url = get_field('buy_manufacturer_url', $tax);

$buy_amazon_icon = '<i class="fab fa-amazon"></i>';
$buy_amazon_url = get_field('buy_amazon_url', $tax);

$buy_cheap_icon = '<i class="far fa-tint"></i>';
$buy_cheap_url = get_field('buy_cheap_url', $tax);

$brand_fb_icon = '<i class="fab fa-facebook-f"></i>';
$brand_fb_url = get_field('brand_fb_url', $tax);

$brand_twitter_icon = '<i class="fab fa-twitter"></i>';
$brand_twitter_url = get_field('brand_twitter_url', $tax);

$brand_yt_icon = '<i class="fab fa-youtube"></i>';
$brand_yt_url = get_field('brand_yt_url', $tax);

$brand_linkedin_icon = '<i class="fab fa-linkedin-in"></i>';
$brand_linkedin_url = get_field('brand_linkedin_url', $tax);


echo '<section class="section section--brand section--wide">';
    echo '<div class="section__inner">';
        echo '<div class="section__grid">';

            echo '<img src="'.$tax_image["sizes"]["thumbnail"].'" />';

            echo '<div class="brand__title-wrap">';
                echo '<h1 class="page__title">'.$tax_title.'</h1>';
                if ($tax_subtitle) :
                    echo '<h2 class="page__subtitle">'.$tax_subtitle.'</h2>';
                endif;
            echo '</div>';

            echo '<div class="brand__company">';

                echo '<div class="brand__company-link">';
                    echo '<a href="'.esc_url($company_url).'" title="Visit this company\'s website" rel="nofollow nonopener">'.esc_html($company).'</a>';
                echo '</div>';

                if ( $company_address ) :
                    echo '<div class="brand__company-address">';
                        echo $company_address;
                    echo '</div>';                            
                endif;

                if ( $company_phone ) :
                    echo '<div class="brand__company-phone">';
                        echo $company_phone;
                    echo '</div>';
                endif;

            echo '</div><!-- .brand__company -->';

            echo '<nav class="follow follow--brand" aria-label="Follow this brand on social media">';
                echo '<ul role="menu">';

                    if ( $buy_amazon_url ) :
                        echo '<li role="none">';
                            echo '<a class="link--amazon" href="'.esc_url($buy_amazon_url).'" title="Shop brand on Amazon" rel="nofollow nonopener" data-google="amazon" role="menuitem">'.$buy_amazon_icon.'</a>';
                        echo '</li>';
                    endif;

                    if ( $buy_cheap_url ) :
                        echo '<li role="none">';
                            echo '<a class="link--cheap" href="'.esc_url($buy_cheap_url).'" title="Shop brand on Cheaplubes.com" rel="nofollow nonopener" data-google="cheaplubes" role="menuitem">'.$buy_cheap_icon.'</a>';
                        echo '</li>';
                    endif;

                    if ( $buy_manufacturer_url ) :
                        echo '<li role="none">';
                            echo '<a class="link--manufacturer" href="'.esc_url($buy_manufacturer_url).'" title="Shop brand\'s official website" rel="nofollow nonopener" data-google="manufacturer" role="menuitem">'.$buy_manufacturer_icon.'</a>';
                        echo '</li>';
                    endif;                    

                    if ( $brand_twitter_url ) :
                        echo '<li role="none">';
                            echo '<a class="link--follow" href="'.esc_url($brand_twitter_url).'" title="Follow brand on Twitter" rel="nofollow nonopener" role="menuitem">'.$brand_twitter_icon.'</a>';
                        echo '</li>';
                    endif;

                    if ( $brand_fb_url ) :
                        echo '<li role="none">';
                            echo '<a class="link--follow" href="'.esc_url($brand_fb_url).'" title="Follow brand on Facebook" rel="nofollow nonopener" role="menuitem">'.$brand_fb_icon.'</a>';
                        echo '</li>';
                    endif;

                    if ( $brand_linkedin_url ) :
                        echo '<li role="none">';
                            echo '<a class="link--follow" href="'.esc_url($brand_linkedin_url).'" title="Follow brand on LinkedIn" rel="nofollow nonopener" role="menuitem">'.$brand_linkedin_icon.'</a>';
                        echo '</li>';
                    endif;

                    if ( $brand_yt_url ) :
                        echo '<li role="none">';
                            echo '<a class="link--follow" href="'.esc_url($brand_yt_url).'" title="Follow brand on YouTube" rel="nofollow nonopener" role="menuitem">'.$brand_yt_icon.'</a>';
                        echo '</li>';
                    endif;

                echo '</ul>';
            echo '</nav>';

        echo '</div><!-- .section__grid-->';
    echo '</div><!-- .section__inner -->';
echo '</section><!-- .section--consistency -->'; 