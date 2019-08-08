<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
		get_template_part('parts/headers/header', get_post_type() ); 
		
		get_template_part('parts/page/page', 'flex' ); 
		// #fly-support
		get_template_part('parts/page/page', 'test' );
		// #fly-support - this IS working
		// This did not break from prod to stage or back again
		// but it did break in content-post / single.php
		get_template_part('parts/page/page', 'zotaro' );
		get_template_part('parts/page/page', 'comments' );
	?>

</article><!-- #post-<?php the_ID(); ?> -->
