<?php
/**************************************************************************
Plugin Name:	Slick Queries
Description:	Define post types included with the main, search, and RSS queires
Version:		2019-04-10
Author:			Lisa Burton - https://slick.sexy
**************************************************************************/


if ( ! function_exists('slick_query_main') ) :

    function slick_query_main( $query ) {

        if ( ! is_admin() && $query->is_main_query() ) :

                $query->set( 'posts_per_page', 20 );  
                $query->set( 'orderby', 'type' );
                $query->set( 'order', 'DESC' ); 

            // if ( is_search() ) :
            //     $query->set( 'post_type', array( 'post', 'page', 'lubricant', 'offer') );
            // endif;
        endif;

    } // 

    add_filter( 'pre_get_posts', 'slick_query_main' );

endif;


// Enable FacetWP for custom wp_query()
// https://facetwp.com/documentation/developers/querying/facetwp_is_main_query/
add_filter( 'facetwp_is_main_query', function( $is_main_query, $query ) {
    if ( '' !== $query->get( 'facetwp' ) ) {
        $is_main_query = (bool) $query->get( 'facetwp' );
    }
    return $is_main_query;
}, 10, 2 );


// Add FacetWP labels to output
function fwp_add_facet_labels() { ?>
    <script>
        (function($) {
            $(document).on('facetwp-loaded', function() {
                $('.facetwp-facet').each(function() {
                    var $facet = $(this);
                    var facet_name = $facet.attr('data-name');
                    var facet_label = FWP.settings.labels[facet_name];

                    if ($facet.closest('.facet-wrap').length < 1 && $facet.closest('.facetwp-flyout').length < 1) {
                        $facet.wrap('<div class="facet-wrap"></div>');
                        $facet.before('<label class="facet-label">' + facet_label + '</label>');
                    }
                });
            });
        })(jQuery);
    </script>
<?php }
add_action( 'wp_head', 'fwp_add_facet_labels', 100 );





// RSS Feeds
// if ( ! function_exists('slick_cpt_rss') ) {

//     function slick_cpt_rss($qv) {

//         if (isset($qv['feed']) && !isset($qv['post_type']))
//             $qv['post_type'] = array('post', 'lubricant', 'offer');
//         return $qv;

//     }

//     add_filter('request', 'slick_cpt_rss');  

// }

