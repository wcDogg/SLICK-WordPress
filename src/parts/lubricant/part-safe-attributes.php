<?php 

$args = array(         
        'hide_empty' => false,
        'include' => 'all', 
    );
 
$tax = 'safe-for';    
$terms = get_terms( $tax, $args );
$icon_safe = '<i class="fas fa-fw fa-check"></i>';
$icon_safe_not = '<i class="fas fa-fw fa-times"></i>';  
        
if ( ! is_wp_error( $terms ) ) :

    echo '<div class="section__attributes">'; 

        foreach ( $terms as $term ) :

            $term_link = get_term_link( $term );        
            if(has_term( $term, $tax, $post->ID ) ) :
                echo '<a class="attribute attribute--material attribute--true" rel="bookmark" title="This lubricant IS SAFE for '.esc_attr($term->name).'. View all lubricants that are safe for '.esc_attr($term->name).'." href="'.esc_url($term_link).'">'.$icon_safe.'<span class="attribute__value"></span>'.$term->name.'</a>';       
            else :
                echo '<a class="attribute attribute--material attribute--false" rel="bookmark" title="This lubricant IS NOT SAFE for '.esc_attr($term->name).'. View lubricants that ARE SAFE for '.esc_attr($term->name).'." href="'.esc_url($term_link).'">'.$icon_safe_not.'<span class="attribute__value"></span>'.$term->name.'</a>';
            endif;    

        endforeach;

    echo '</div><!-- .section__attributes -->';   

endif;