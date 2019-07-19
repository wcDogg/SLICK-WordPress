JO Premium Silicone has passed our initial review focused on ingredients, manufacturer info, and customer reviews. We do recommend this formula and will be doing a full review in late 2019. 

It also contains gluconolactone - an ingredient valued for its moisturizing & antioxidant properties. 

Cyamopsis (Guar Conditioners)


@JacobPeattie  - for the sake of anyone stumbling across this, I have to push back and say you're the one who is misguided ... If you look at my OP, I have both the ACF field and `WP_Query` set to IDs and am displaying template parts just fine - my problem was about all products showing, not about getting the parts to display. 

I have thouroughly researched this ... You can use IDs, terms, and post types to tell `WP_QUERY` which posts to GET ... You can use the `return_fields` parameter to RETURN all fields or just IDs ... If using `WP_QUERY` to display a template part, you only need to return IDs, as vaugely explained in the Codex, and better explained by numerous authorites ... In this scenario, returning all fields is a redundant waste of resources ... GET and RETURN are 2 different things. 

*typo* `return_fields` should be `fields`. 

Again, only responding because I rely on this community for accurate information ... I sincerely appreciate that you helped me get the official ACF method to work, but part of your explanation is wrong ... I've provided links that explain it and I have 2 live sites that demonstrate it ... You could easily prove it to yourself in one of your own themes ... You can either accept facts and update your answer, or I can unmark it as correct and answer the question myself ... no skin off my back either way.



My OP is about using the ACF relationship field in `WP_QUERY`. The ACF documentation leaves out one helpful bit that @JacobPeattie supplied. 

My final working code looks like this and you can see a live example here:
https://slick.sexy/offer/wet-lubricants-enter-and-win/

```
// ACF field is set to return IDs.
// Array ( [0] => 395 [1] => 120 [2] => 388 [3] => 391 )

$related_product = get_field( 'related_product' );

if ( $related_product ) :

    global $post; // missing from ACF documentation

    foreach ( $related_product as $post ) : // Must be called $post. 
        setup_postdata( $post ); 
        get_template_part( 'parts/card', get_post_type() );
    endforeach;

    wp_reset_postdata();

endif;
```

However, part of Jaccb's explanation and subsequent comments are wrong. Because I rely on this community for accurate information, I can't accapt his answer as correct. 

Jaccob incorrectly asserts that passing an array of IDs to `WP_QUERY` and then using the `fields` parameter to return only IDs is redundant ans won't work. 

You can use any number of things to inform `WP_QUERY` which posts to GET - terms, post type, IDs. This is completly separate from what you tell the query to RETURN. 

The `fields` parameter defaults to returning all fields. Alternatively, you can set `fields` to return `ids` (note plural). 

Deciding to retrun all fields or just IDs is a matter of optimization - if you don't need all fields, then don't return them. 

Here are two examples from my live site demonstrating that YOU DO NOT NEED ALL FIELDS in many common scenarios. You can easily try these for yourself and I've linked to more info below. 

This example displays a field - `the_title` ... super common, I use it all the time and you don't need to return all fields to do it. 

```
$args = array( 
    'post_type' => 'product',
    'fields' => 'ids',
);

$custom_query = new WP_Query( $args );

if ( $custom_query->have_posts() ) :  

    while ( $custom_query->have_posts() ) : 
        $custom_query->the_post(); 
        the_title();
    endwhile;

else : 
    // do something else
endif; 

wp_reset_query();
```

Here's an even more optimized example. This one is for displaying a template part. This part has standard stuff like `the_title` + ACF fields + an Add Favorite feature + pulls in other parts. 

Again, you only need `WP_QUERY` to return IDs. 

```
$args = array( 
	'post_type' => 'product',
	'fields' => 'ids',
	'cache_results'  => false,
	'update_post_meta_cache' => false, 
	'update_post_term_cache' => false, 
);

$custom_query = new WP_Query( $args );

if ( $custom_query->have_posts() ) : 

    while ( $custom_query->have_posts() ) : 
        $custom_query->the_post(); 
        get_template_part( 'parts/card', get_post_type() );                           
    endwhile;
    
else :
    // do something else
endif;

wp_reset_query();
```

You can see this optimized example in action here:

- https://slick.sexy/lubricants/
- https://slick.sexy/blog/


You can read more about optimizing `WP_QUERY` here (and lots of other places):

- https://kinsta.com/blog/wp-query/


I'm not claiming to be an expert - I only know that you can return just IDs because I read about it, tried it in my own projects, and it works. 

... Things like `global Spost` and `setup_postdata($post)` are specifically for setting context and ensuring the correct ID is referenced so you can then get the right field, template etc ...