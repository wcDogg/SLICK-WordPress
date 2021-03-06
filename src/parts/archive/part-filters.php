 <?php
/**
 * part-filters.php
 * FacetWP Filters
 * 
 * @package slick
 * @since slick 1.0
 */


echo '<div id="filters" aria-label="Review Filters">';

    echo '<a id="filters-toggle" class="button" href="#"></a>';

    echo '<div id="filters-content">';

        echo '<div id="filters-grid">';

            echo '<div class="facet"><label>Popular</label>' .facetwp_display( 'facet', 'popular' ). '</div>';
            echo '<div class="facet"><label>Base Formula</label>' .facetwp_display( 'facet', 'formulas' ). '</div>';
            echo '<div class="facet"><label>Recommended For</label>' .facetwp_display( 'facet', 'recommended' ). '</div>';
            echo '<div class="facet"><label>Material Safety</label>' .facetwp_display( 'facet', 'safe_for' ). '</div>';
            echo '<div class="facet"><label>Consistency</label>' .facetwp_display( 'facet', 'consistency' ). '</div>';
            echo '<div class="facet"><label>Lasting Power</label>' .facetwp_display( 'facet', 'lasting_power' ). '</div>';
            echo '<div class="facet"><label>Brands</label>' .facetwp_display( 'facet', 'brands' ). '</div>';
            echo '<div class="facet"><label>Sizes</label>' .facetwp_display( 'facet', 'lubricant_sizes' ). '</div>'; 
            echo '<div class="facet"><label>Price Per Ounce</label>' .facetwp_display( 'facet', 'lubricant_price' ). '</div>';   

            echo '<div class="facet"><label>FDA 501(k) Status</label>' .facetwp_display( 'facet', 'lubricant_status_fda' ). '</div>';    
            echo '<div class="facet"><label>Known pH?</label>' .facetwp_display( 'facet', 'lubricant_status_ph' ). '</div>';    
            echo '<div class="facet"><label>Known Osmolality?</label>' .facetwp_display( 'facet', 'lubricant_status_osmo' ). '</div>';    

              echo '<div class="facet"><label>Ingredients</label>' .facetwp_display( 'facet', 'lubricant_ingredients' ). '</div>';              

        echo '</div><!-- .section__grid -->';
        
        echo '<button onclick="FWP.reset()" class="button button--reset" type="reset" aria-label="Clear All Filters" title="Clear All Filters">Clear Filters</button>';       

    echo '</div><!-- #filters-content -->';	

echo '</div>';