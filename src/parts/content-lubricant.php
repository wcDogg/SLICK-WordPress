<?php
/**
 * content-lubricant.php
 * Displays single lubricant content
 * 
 * @package slick
 * @since slick 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 

	get_template_part('parts/header/header', get_post_type() );

	get_template_part('parts/lubricant/section', 'highlights');
	get_template_part('parts/lubricant/section', 'offer');
	get_template_part('parts/lubricant/section', 'gallery');
	get_template_part('parts/lubricant/section', 'materials');
	get_template_part('parts/lubricant/section', 'ingredients');
	get_template_part('parts/lubricant/section', 'consistency');
	get_template_part('parts/lubricant/section', 'taste');
	get_template_part('parts/lubricant/section', 'packaging');
	get_template_part('parts/lubricant/section', 'samples');	
	get_template_part('parts/lubricant/section', 'amazon');
	
	get_template_part('parts/section/section', 'comments' );

?>
</article><!-- #post-<?php the_ID(); ?> --> 