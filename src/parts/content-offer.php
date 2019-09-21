<?php
/**
 * content-offer.php
 * Displays single offer content
 * 
 * @package slick
 * @since slick 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 

	get_template_part('parts/header/header', get_post_type() ); 
	get_template_part('parts/offer/part', 'related' );
	get_template_part('parts/section/section', 'comments' );

?>
</article><!-- #post-<?php the_ID(); ?> --> 