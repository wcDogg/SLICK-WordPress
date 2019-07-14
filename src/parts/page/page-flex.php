<?php

// check if the flexible content field has rows of data
if( have_rows('flex_content') ):

     // loop through the rows of data
    while ( have_rows('flex_content') ) : the_row();

        if( get_row_layout() == 'section' ):

            $section_class = get_sub_field('section_class');
            $section_title = get_sub_field('section_title');
            $section_subtitle = get_sub_field('section_subtitle');
            $section_content = get_sub_field('section_content');  

            if ( $section_class ) :
                echo '<section class="section section--'.esc_attr($section_class).'">'; 
            else :
                echo '<section class="section">'; 
            endif;                     
                echo '<div class="section__inner">';
                    if ($section_title) : 
                        echo '<h1 class="section__title">'.$section_title.'</h1>';
                        if ( $section_subtitle ) :
                            echo '<h2 class="section__subtitle">'.$section_subtitle.'</h2>';
                        endif;                        
                    endif;
                    echo '<div class="section__content">';
                        echo $section_content;
                    echo '</div><!-- .section__content -->';
                echo '</div><!-- .section__inner -->';
            echo '</section><!-- .section -->';

         elseif( get_row_layout() == 'amazon_section' ):

            $amazon_section_title = get_sub_field('amazon_section_title');
            $amazon_section_script = get_sub_field('amazon_section_script');  

            echo '<section class="section section--amazon">';                 
                echo '<div class="section__inner">'; 
                    if ($amazon_section_title) : 
                        echo '<h1 class="section__title">'.$amazon_section_title.'</h1>';              
                    endif;
                    echo '<div class="section__amazon">';
                        echo $amazon_section_script;
                    echo '</div><!-- .section__amazon -->';
                echo '</div><!-- .section__inner -->';
            echo '</section><!-- .section -->';           

        elseif( get_row_layout() == 'yt_section' ):

            $yt_section_class = get_sub_field('yt_section_class');
            $yt_section_title = get_sub_field('yt_section_title');
            $yt_section_subtitle = get_sub_field('yt_section_subtitle');
            $yt_section_content = get_sub_field('yt_section_content');  
            $yt_section_video = get_sub_field('yt_section_video');

            if ( $yt_section_class ) :
                echo '<section class="section section--'.esc_attr($yt_section_class).'">'; 
            else :
                echo '<section class="section">'; 
            endif;                     
                echo '<div class="section__inner">';
                    if ($yt_section_title) : 
                        echo '<h1 class="section__title">'.$yt_section_title.'</h1>';
                        if ( $yt_section_subtitle ) :
                            echo '<h2 class="section__subtitle">'.$yt_section_subtitle.'</h2>';
                        endif;                        
                    endif;
                    if ($yt_section_content) : 
                        echo '<div class="section__content">';
                            echo $yt_section_content;
                        echo '</div><!-- .section__content -->';
                    endif;
                    echo '<div class="section__iframe">';
                        echo '<iframe src="https://www.youtube.com/embed/'.$yt_section_video.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    echo '</div>';
                echo '</div><!-- .section__inner -->';
            echo '</section><!-- .section -->';

        elseif ( get_row_layout() == 'table_section' ) :

            $table_section_class = get_sub_field('table_section_class');
            $table_section_title = get_sub_field('table_section_title');
            $table_section_subtitle = get_sub_field('table_section_subtitle');
            $table_section_content = get_sub_field('table_section_content');  
            $table_class = get_sub_field('table_class');
            $table = get_sub_field('table');
            $table_section_content_after = get_sub_field('table_section_content_after');  

            if ( $table_section_class ) :
                echo '<section class="section section--table section--wide section--'.esc_attr($table_section_class).'">'; 
            else :
                echo '<section class="section section--table section--wide">'; 
            endif;           
                echo '<div class="section__inner">';
                    if ( $table_section_title ) :
                        echo '<h1 class="section__title">'.$table_section_title.'</h1>';
                        if ( $table_section_subtitle ) :
                            echo '<h2 class="section__subtitle">'.$table_section_subtitle.'</h2>';
                        endif;
                    endif;

                    if ( $table_section_content ) :
                        echo '<div class="section__content">';
                            echo $table_section_content;
                        echo '</div><!-- .section__content -->';
                    endif;

                    if ( $table ) :
                        echo '<div class="section__table">'; 

                            if ( $table_class ) :
                                echo '<table class="table table--'.esc_attr($table_class).'">'; 
                            else :
                                echo '<table class="table">';     
                            endif; 
    
                                if ( ! empty( $table['caption'] ) ) :
                                    echo '<caption>' . $table['caption'] . '</caption>';
                                endif;

                                if ( ! empty( $table['header'] ) ) :
                                    echo '<thead>';
                                        echo '<tr>';
                                            foreach ( $table['header'] as $th ) :
                                                echo '<th>';
                                                    echo $th['c'];
                                                echo '</th>';
                                            endforeach;
                                        echo '</tr>';
                                    echo '</thead>';
                                endif;

                                echo '<tbody>';
                                    foreach ( $table['body'] as $tr ) :
                                        echo '<tr>';
                                            foreach ( $tr as $td ) :
                                                echo '<td>';
                                                    echo $td['c'];
                                                echo '</td>';
                                            endforeach;
                                        echo '</tr>';
                                    endforeach;
                                echo '</tbody>';

                            echo '</table>';
                        echo '</div><!-- .section__table -->';
                    endif;

                    if ( $table_section_content_after ) :
                        echo '<div class="section__content">';
                            echo $table_section_content_after;
                        echo '</div><!-- .section__content -->';
                    endif;

                echo '</div><!-- .section__inner -->';
            echo '</section><!-- .section -->';

        elseif ( get_row_layout() == 'toggle_section' ) : 

            $toggle_section_class = get_sub_field('toggle_section_class');
            $toggle_section_title = get_sub_field('toggle_section_title');
            $toggle_section_subtitle = get_sub_field('toggle_section_subtitle');
            $toggle_section_content = get_sub_field('toggle_section_content');

            if ( $toggle_section_class ) :
                echo '<section class="section section--toggles section--'.esc_attr($toggle_section_class).'">'; 
            else :
                echo '<section class="section section--toggles">'; 
            endif;
                echo '<div class="section__inner">';
                    if ($toggle_section_title) :
                        echo '<h1 class="section__title">'.$toggle_section_title.'</h1>';
                        if ( $toggle_section_subtitle ) :
                            echo '<h2 class="section__subtitle">'.$toggle_section_subtitle.'</h2>';
                        endif;
                    endif;

                    if ( $toggle_section_content ) :
                        echo '<div class="section__content">';
                            echo $toggle_section_content;
                        echo '</div><!-- .section__content -->';
                    endif;

                    if( have_rows('toggle') ): 
                        while ( have_rows('toggle') ) : the_row();

                            $toggle_class = get_sub_field('toggle_class');
                            $toggle_title = get_sub_field('toggle_title');
                            $toggle_content = get_sub_field('toggle_content');

                            if ( $toggle_class ) :
                                echo '<div data-toggle class="toggle--'.esc_attr($toggle_class).'">';
                             else :
                                echo '<div data-toggle class="toggle">';
                            endif;                           
                                echo '<h2 data-toggle-title>'.$toggle_title.'</h2>';
                                echo '<div data-toggle-content>'.$toggle_content.'</div>';
                            echo '</div><!-- [data-toggle] -->';

                        endwhile;
                    endif;
                echo '</div><!-- .section__inner -->';
            echo '</section><!-- .section -->';   

        elseif ( get_row_layout() == 'list_section' ) : 

            $list_section_class = get_sub_field('list_section_class');
            $list_section_title = get_sub_field('list_section_title');
            $list_section_subtitle = get_sub_field('list_section_subtitle');
            $list_section_content = get_sub_field('list_section_content');
            $list_section_list = get_sub_field('list_section_list');

            $list_section_content_after = get_sub_field('list_section_content_after');

            if ( $list_section_class ) :
                echo '<section class="section section--list section--'.esc_attr($list_section_class).'">'; 
            else :
                echo '<section class="section section--list">'; 
            endif;
                echo '<div class="section__inner">';
                    if ($list_section_title) :
                        echo '<h1 class="section__title">'.$list_section_title.'</h1>';
                        if ( $list_section_subtitle ) :
                            echo '<h2 class="section__subtitle">'.$list_section_subtitle.'</h2>';
                        endif;
                    endif;

                    echo '<div class="section__content">';
                        if ( $list_section_content ) :
                            echo $list_section_content;
                        endif;

                        if( have_rows('list') ): 
                            echo '<div class="list">';
                                while ( have_rows('list') ) : the_row();
                                    the_sub_field('list_item_icon');                            echo '<div class="list__item-text">';      
                                        the_sub_field('list_item_text');  
                                    echo '</div>';
                                endwhile;
                            echo '</div><!-- .list -->';
                        endif;                        

                        if ( $list_section_content_after ) :
                            echo $list_section_content_after;
                        endif;  
                    echo '</div><!-- .section__content -->'; 
                echo '</div><!-- .section__inner -->';
            echo '</section><!-- .section -->';   
   
        endif;

    endwhile;

elseif ( get_the_content() ) :

    echo '<section class="section">';
        echo '<div class="section__inner">';
            echo '<div> class="section__content">';
                the_content();
            echo '</div><!-- .section__content -->';
        echo '</div><!-- .section__inner -->';
    echo '</section><!-- .section -->';    
    
else :
    // No ACF flex content or default WP content found
endif;



