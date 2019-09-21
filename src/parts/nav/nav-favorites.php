<?php

if( function_exists('get_user_favorites') ) :

    $post_ids = get_user_favorites();
    $icon_fav = '<i class="far fa-star"></i>';
    $icon_fav_active = '<i class="fas fa-star"></i>';
    $url_fav_page = home_url( '/favorites' ); 


    echo '<nav id="favorites-nav">';

        echo '<ul id="favorites-menu">';

            echo '<li>';

                if ( $post_ids ) :

                    echo '<a class="fav-button active" rel="bookmark" title="View Favorite Lubricants" href="'.esc_url($url_fav_page).'">';
                        echo $icon_fav_active;
                    echo '</a>';

                else :

                    echo '<a class="fav-button" rel="bookmark" title="No favorite lubricants yet - go add some!" href="'.esc_url($url_fav_page).'">';
                        echo $icon_fav;
                    echo '</a>';

                endif;

            echo '</li>';

        echo '</ul>';

    echo '</nav><!-- #my-favorites-->';   

endif;	