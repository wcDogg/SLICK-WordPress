<article id="post-<?php the_ID(); ?>" class="card offer">

<?php

    $pag_summary = get_field('page_summary');
    $url_offer = get_field('buy_offer_url');
    $text_offer = get_field('buy_offer_text');
    $icon_offer = get_field('buy_offer_icon');    

    echo '<header class="card__header">';
        get_template_part('parts/offer/offer', 'meta'); 
        get_template_part('parts/headers/part', 'card-title');
    echo '</header>';

    echo '<main class="card__main">';
        echo $pag_summary;   
   
        echo '<a class="button button--offer" rel="nofollow nonopener" data-google="offer" title="Shop offer" href="'.esc_url($url_offer).'" >'.$icon_offer, $text_offer.'</a>';  
        
    echo '</main>';

?>

</article><!-- .card -->