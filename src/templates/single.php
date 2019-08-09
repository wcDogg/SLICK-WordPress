<?php

// #fly-support 
// This 'broke' from stage to prod
// No content was being loaded
// as if this file - single.php - AND index.php did not exsist.
// header.php and footer.php did load fine. 

get_header();  

while ( have_posts() ) :

	the_post();

	// get_template_part( 'parts/content', get_post_type() );
	// the_post_navigation();	

	if ( is_singular( 'post' ) ) :
		get_template_part( 'parts/content', 'post' );
	else :
		get_template_part( 'parts/content', get_post_type() );
	endif;	

endwhile; // End of the loop.

get_footer();
