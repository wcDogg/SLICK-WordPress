<?php

$safe_text = get_field('safe_text');

echo '<section id="materials" class="section main">';
    echo '<div class="section__inner">';

        echo '<div class="section__title-wrap">';
            echo '<h1 class="section__title">Condom &amp; Material Safety</h1>';
        echo '</div>';

        echo '<div class="section__data">'; 
            get_template_part('parts/lubricant/part', 'safe-attributes'); 
            get_template_part('parts/lubricant/part', 'safe-warnings') ; 
        echo '</div><!-- .section__data -->';

        if ($safe_text) : 
            echo '<div class="section__text">'.$safe_text.'</div><!-- .section__text -->';
        endif; 

        get_template_part('parts/lubricant/part', 'action');
 
    echo '</div><!-- .section__inner -->';
echo '</section><!-- #materials -->';