<?php

echo '<section class="section section--filters">';
    echo '<div class="section__inner">';
        echo '<div class="section__grid">';

            echo '<div class="facet"><label>Popular</label>' .facetwp_display( 'facet', 'popular' ). '</div>';
            echo '<div class="facet"><label>Base Formula</label>' .facetwp_display( 'facet', 'formulas' ). '</div>';
            echo '<div class="facet"><label>Recommended For</label>' .facetwp_display( 'facet', 'recommended' ). '</div>';
            echo '<div class="facet"><label>Material Safety</label>' .facetwp_display( 'facet', 'safe_for' ). '</div>';
            echo '<div class="facet"><label>Consistency</label>' .facetwp_display( 'facet', 'consistency' ). '</div>';
            echo '<div class="facet"><label>Lasting Power</label>' .facetwp_display( 'facet', 'lasting_power' ). '</div>';
            echo '<div class="facet"><label>Brands</label>' .facetwp_display( 'facet', 'brands' ). '</div>';
            echo '<button onclick="FWP.reset()" class="button button--reset" type="reset" aria-label="Clear All Filters" title="Clear All Filters">Clear Filters</button>';

        echo '</div><!-- .section__grid -->';
    echo '</div><!-- .section__inner -->';						
echo '</section>';
