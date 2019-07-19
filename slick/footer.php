<?php

	echo '</main><!-- #main -->';

	echo '<footer id="footer" class="site__footer">';

		get_template_part('parts/nav/nav', 'search');

		get_template_part('parts/nav/nav', 'follow');

		?>
			<div class="site__copyright">
				<span class="meta">&copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?></span>
				<a class="meta" title="Privacy" href="<?php echo esc_url( home_url( '/privacy' ) ); ?>">Privacy</a>
				<a class="meta" title="Contact" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
				<a class="meta" title="Mission" href="<?php echo esc_url( home_url( '/about' ) ); ?>">Mission</a>
			</div>

			<div class="site__disclaimers">
				SLICK.SEXY is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to amazon.com.
			</div>
		<?
				
	echo '</footer><!-- #footer -->';

echo '</div><!-- #site -->';

wp_footer(); 


// StickyHeader.js
// #id of header, #id of container to pad
echo '<script>StickyHeader.init("header", "main"); </script>';
// ToggleContent.js
echo '<script>ToggleContent.init();</script>'; 
	

echo '</body>';
echo '</html>';