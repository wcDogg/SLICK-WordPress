<?php

$fda_status = get_field('fda_status');
$fda_url = get_field('fda_url');
$shelf_life = get_field('shelf_life');
$shelf_opened = get_field('shelf_life_opened');
$ph_status = get_field('ph_status');
$ph_value = get_field('ph_value');
$osmo_status = get_field('osmolality_status');
$osmo_value = get_field('osmolality_value');
$osmo_unit = get_field('osmolality_unit');
$text = get_field('packaging_text');

$fda_icon = '<i class="far fa-fw fa-external-link-square"></i>';
$shelf_icon = '<i class="far fa-fw fa-calendar-alt"></i>';
$ph_icon = '<i class="far fa-fw fa-file-chart-line"></i>';
$osmo_icon = '<i class="far fa-fw fa-file-chart-line"></i>';

if ($fda_status || $shelf_life || $ph_status || $osmo_status || $text) :
    echo '<section class="section section--packaging">';
        echo '<div class="section__inner">';
            echo '<h1 class="section__title">Packaging &amp; Labeling</h1>'; 

            if ($fda_status || $shelf_life || $ph_status || $osmo_status) :
                echo '<div class="section__content">';

                    if($shelf_life) :
                        echo'<div class="attribute attribute--shelf">';
                            echo $shelf_icon;
                            echo '<span class="attribute__label">Shelf life from date of manufacture: </span>';
                            echo '<span class="attribute__value">'.$shelf_life.'</span>';
                        echo '</div>';    
                    endif;

                    if($shelf_opened) :
                        echo'<div class="attribute attribute--shelf">';
                            echo $shelf_icon;
                            echo '<span class="attribute__label">Replace open bottles by the \'best if used by\' date or every </span>';
                            echo '<span class="attribute__value">'.$shelf_opened.'</span>';
                        echo '</div>'; 
                    endif;

                    if($ph_status) :
                        // Known
                        if($ph_status == 1) :
                            echo'<div class="attribute attribute--ph">';
                                echo $ph_icon;
                                echo '<span class="attribute__label">pH</span>';
                                echo '<span class="attribute__value">'.$ph_value.'</span>';
                            echo '</div>';
                        endif;
                        // Unkinown
                        if($ph_status == 2) :
                            echo'<div class="attribute attribute--ph">';
                                echo $ph_icon;
                                echo '<span class="attribute__label">pH: </span>';
                                echo '<span class="attribute__value">Unknown</span>';
                            echo '</div>';
                        endif;
                        // Not applicable
                        if($ph_status == 3) :
                            echo'<div class="attribute attribute--ph">';
                                echo $ph_icon;
                                echo '<span class="attribute__label">pH: </span>';
                                echo '<span class="attribute__value">Not applicable</span>';
                            echo '</div>';
                        endif;
                    endif;

                    if($osmo_status):
                        // Known
                        if($osmo_status == 1) :
                            echo'<div class="attribute attribute--osmo">';
                                echo $osmo_icon;
                                echo '<span class="attribute__label">Osmolality: </span>';
                                echo '<span class="attribute__value">'.$osmo_value, $osmo_unit.'</span>';
                            echo '</div>'; 
                        endif;
                        // Unknown
                        if($osmo_status == 2) :
                                echo'<div class="attribute attribute--osmo">';
                                echo $osmo_icon;
                                echo '<span class="attribute__label">Osmolality: </span>';
                                echo '<span class="attribute__value">Unknown</span>';
                            echo '</div>';                       
                        endif;
                        // Not applicale
                        if($osmo_status == 3) :
                            echo'<div class="attribute attribute--ph">';
                                echo $ph_icon;
                                echo '<span class="attribute__label">Osmolality: </span>';
                                echo '<span class="attribute__value">Not applicable</span>';
                            echo '</div>';
                        endif;
                    endif;

                    if ($fda_status) :
                        // Approved
                        if($fda_status == 1) :
                            echo'<div class="attribute attribute--fda">';
                                echo $fda_icon;
                                echo '<span class="attribute__label">FDA 501(k) Status: </span>';
                                echo '<a class="attribute__value" rel="nofollow noopener external" title="View lubricant\'s 501(K)" href="'.$fda_url.'">Approved</a>';
                            echo '</div>';
                        endif;
                        // Not approved
                        if($fda_status == 2) :
                            echo'<div class="attribute attribute--fda">';
                                echo $fda_icon;
                                echo '<span class="attribute__label">FDA 501(k) Status: </span>';
                                echo '<span class="attribute__value">Not approved</span>';
                            echo '</div>';
                        endif;   
                        // Pending apprival
                        if($fda_status == 3) :
                            echo'<div class="attribute attribute--fda">';
                                echo $fda_icon;
                                echo '<span class="attribute__label">FDA 501(k) Status: </span>';
                                echo '<span class="attribute__value">Pending Approval</span>';
                            echo '</div>';
                        endif;   
                         // not applicable
                        if($fda_status == 4) :
                            echo'<div class="attribute attribute--fda">';
                                echo $fda_icon;
                                echo '<span class="attribute__label">FDA 501(k) Status: </span>';
                                echo '<span class="attribute__value">Not applicable</span>';
                            echo '</div>';
                        endif; 
                        // Show only when applicable (hide for silicone, creams, ...)
                        if ( $ph_status == 1 || $ph_status == 2 )  : 
                            echo '<div><p class="italic">In most cases, the FDA does not require manufacturers to disclose a lubricnat\'s pH or osmolality. Because we feel it\'s important to vaginal health, we do request this information. However, it isn\'t always available or offered and does not impact our reviews.</p></div>';
                        endif;
                    endif;

                echo '</div><!-- .section__content -->';
            endif;

            if($text) :
                echo '<div class="section__content">'.$text.'</div><!-- .section__content -->';
            endif;                

            slick_buy_bar();

        echo '</div><!-- .section__inner -->';
    echo '</section><!-- .section--packaging -->';
endif;
