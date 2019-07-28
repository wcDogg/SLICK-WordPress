<?php

$amazon_section_title = get_field('amazon_section_title');
$amazon_section_script = get_field('amazon_section_script');  

if ( $amazon_section_script ) :

    echo '<section class="section section--amazon" aria-label="Available on Amazon">';                 
        echo '<div class="section__inner">'; 
            if ($amazon_section_title) : 
                echo '<h1 class="section__title">'.$amazon_section_title.'</h1>';              
            endif;
            echo '<div class="section__amazon">';
                echo $amazon_section_script;
            echo '</div><!-- .section__amazon -->';
        echo '</div><!-- .section__inner -->';
    echo '</section><!-- .section -->';     

endif;