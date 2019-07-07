<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part('parts/headers/header', get_post_type() ); ?>
	<?php get_template_part('parts/lubricant/section', 'highlights'); ?>
	<?php get_template_part('parts/lubricant/section', 'offer'); ?>	
	<?php get_template_part('parts/lubricant/section', 'gallery'); ?>
	<?php get_template_part('parts/lubricant/section', 'materials'); ?>
	<?php get_template_part('parts/lubricant/section', 'ingredients'); ?>
	<?php get_template_part('parts/lubricant/section', 'consistency'); ?>
	<?php get_template_part('parts/lubricant/section', 'taste'); ?>
	<?php get_template_part('parts/lubricant/section', 'packaging'); ?>
	<?php get_template_part('parts/lubricant/section', 'samples'); ?>
	<?php get_template_part('parts/page/page', 'comments' ); ?>
	
</article><!-- #post-<?php the_ID(); ?> -->
