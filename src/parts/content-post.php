<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php 

	get_template_part('parts/headers/header', get_post_type() ); 
	
	get_template_part('parts/page/page', 'flex' ); 
	
	get_template_part('parts/page/page', 'zotaro' );
	
	get_template_part('parts/page/page', 'comments' );

?>
</article><!-- #post-<?php the_ID(); ?> --> 


