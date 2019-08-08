<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
		get_template_part('parts/headers/header', get_post_type() ); 
		get_template_part('parts/page/page', 'flex' ); 
		// #fly-support - new part NOT working
		get_template_part('parts/page/page', 'test' );
		// #fly-support - existing part NOT working
		// I think this broke going from prod to stage - though I didn't realize at time.
		get_template_part('parts/page/page', 'zotaro' );
		get_template_part('parts/page/page', 'comments' );
	?>

</article><!-- #post-<?php the_ID(); ?> -->


