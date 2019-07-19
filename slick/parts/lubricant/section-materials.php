<?php

$safe_text = get_field('safe_text');

echo '<section class="section section--materials">';
    echo '<div class="section__inner">';

        echo '<h1 class="section__title">Condom &amp; Materials Safety</h1>';

        echo '<div class="section__content">'; 
            get_template_part('parts/lubricant/part', 'safe-attributes'); 
            get_template_part('parts/lubricant/part', 'safe-warnings') ; 
        echo '</div><!-- .section__content -->';

        if ($safe_text) : 
            echo '<div class="section__content">'.$safe_text.'</div><!-- .section__content -->';
        endif; 

        slick_buy_bar();
 
    echo '</div><!-- .section__inner -->';
echo '</section><!-- .section--materials -->';