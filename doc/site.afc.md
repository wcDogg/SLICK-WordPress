# Advanced Custom Fields

## Common

    page_subtitle
    page_summary 

    related_gallery
    related_reviews
    related_post
    related_page

## Taxonomies

    tax_subtitle
    tax_image
    tax_icon


## Material Safety

    safe_silicone       Safe for Silicone
    safe_latex          Safe for Latex
    safe_polyurethane   Safe for Polyurethane
    safe_polyisoprene   Safe for Polyisoprene
    safe_nitrile        Safe for Nitrile
    safe_lambskin       Safe for Lambskin
    safe_text           Safety Text

    safe_icon_true
    safe_icon_false
    safe_icon_undetermined


## Cleanup

    cleanup
        Plain water
        Light soap
        Soap

        Washes off with plain water. Unlikely to stain fabrics.
        Washes off with light soap & water. May stain some fabrics.
        Washes off with soap & water. Spot-treat fabrics before washing.        

    cleanup_icon  
    cleanup_warn_icon  

    cleanup_warn - not a field - tie to Base Formula taxonomy
    
        Aloe-based lubricants do dry, but can become slippery again with water. Be sure to wash hands and clean spills. 

        Mineral oil never completely dries and can remain slippery for a long time. Be sure to wash hands and clean spills.  

        Plant oils never completely dry and can remain slippery for a long time. Be sure to wash hands and clean spills.  

        Silicone never completely dries and remains slippery for a long time. Be sure to wash and clean spills.   

        Water-based lubricants do dry, but can become slippery again with water. Be sure to wash hands and clean spills. 


## Dries                

    dry_look    Dries matte.
                Dries to a sheen.
                Dries glossy.

    dry_feel    Leaves a soft, smooth feel.
                Leaves a slick feel.
                Leves a tacky feel.
                Leaves a tight feel.         

## Taste

    taste
        No taste
        Light taste
        Strong taste

    taste_attributes
        Chemically
        Sweet
        Bitter
        Fruity

    taste_numb
        No tongue numbing
        Light tongue numbing
        Strong tongue numbing

    taste_feel
        No gross mouth-feel
        Unpleasant mouth-feel

    smell
        No smell
        Light smell
        Strong smell

    smell_attributes
        Chemically
        Sweet
        Flowery
        Fruity

    taste_text


## Packaging

    fda_status
        Approved
        Not approved
        Pending approval
    fda_link

    shelf_life
    shelf_life_opened
        Single Use
        3 months
        6 months
        9 months
        12 months
        15 months
        18 months
        21 months
        24 months
        27 months
        30 months
        33 months
        36 months

    ph_status
        Known
        Unknown
    ph_value

    osmolality_status
        Known
        Unknown
    osmolality_value   
    osmolality_unit
        mOsm/kg H2O
        mOsm/L H2O

    packaging_text

## Consistency & Lasting Power

    reactivate
        Add water to reactivate
        Add lube to reactivate
    reactivate_icon
    consistency_gif
    consistency_text


## Gallery 

    related_gallery
    <?php photo_gallery(26) ?>

## Samples
    samples_from
        None
        Brand
        Manufacturer
        CheapLubes
        Amazon
        Other
    samples_other

    LUBE has passed our initial screening based on ingredients, manufacturer info, and customer reviews. We have not obtained samples yet.  

    Many thanks to the people at BRAND for supplying the products used in this review - we appreciante your support! 

    The products used in this review were purchased by SLICK.SEXY from BRAND/MANUFACTURER. 
    The products used in this review were purchased by SLICK.SEXY from CheapLubes. 
    The products used in this review were purchased by SLICK.SEXY from AMAZON. 




## Buy Buttons

    buy_amazon_icon
    buy_amazon_text
    buy_amazon_url

    <?php if( get_field('buy_amazon_url') ): ?>
        <a class="buy buy--amazon" title="Buy on Amazon" href="<?php the_field('buy_amazon_url'); ?>"><?php the_field('buy_amazon_icon'); the_field('buy_amazon_text'); ?></a>
    <?php endif; ?>

    buy_cheap_icon
    buy_cheap_text
    buy_cheap_url

    <?php if( get_field('buy_cheap_url') ): ?>
        <a class="buy buy--cheap" title="Buy from CheapLubes.com" href="<?php the_field('buy_cheap_url'); ?>"><?php the_field('buy_cheap_icon'); the_field('buy_cheap_text'); ?></a>
    <?php endif; ?>


    buy_manufacturer_icon
    buy_manufacturer_text
    buy_manufacturer_url

    <?php if( get_field('buy_manufacturer_url') ): ?>
        <a class="buy buy--manufacturer" title="Buy from the manufacturer" href="<?php the_field('buy_manufacturer_url'); ?>"><?php the_field('buy_manufacturer_icon'); the_field('buy_manufacturer_text'); ?></a>
    <?php endif; ?>

    buy_offer_icon
    buy_offer_text
    buy_offer_url

    <?php if( get_field('buy_offer_url') ): ?>
        <a class="buy buy--offer" title="Get this offer" href="<?php the_field('buy_offer_url'); ?>"><?php the_field('buy_offer_icon'); the_field('buy_offer_text'); ?></a>
    <?php endif; ?>


## Ingredients

ingredient_text
ingredient_glycerin_free
ingredient_glycol_free
ingredient_paraben_free
ingredient_list
    ingredient_single


## Price

    price_msrp
    price_real
    price_icon

    $0.00-$0.49
    $0.50-$0.99
    $1.00-$1.49
    $1.50-$1.99
    $2.00-$2.49
    $2.50-$2.99
    $3.00-$3.49
    $3.50-$3.99
    $4.00-$4.49
    $4.50-$4.99
    $5.00-$5.49
    $5.50-$5.99
    $6.00-$6.49
    $6.50-$6.99
    $7.00-$7.49
    $7.50-$7.99
    $8.00-$8.49
    $8.50-$8.99
    $9.00-$9.49
    $9.50-$9.99



## Offers

page_subtitle
page_summary

offer_start
offer_end
offer_related

offer_site_name
offer_site_url


## Documentation

https://www.advancedcustomfields.com/resources/querying-relationship-fields/