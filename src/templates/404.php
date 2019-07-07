<?php

$upload_dir = wp_upload_dir();
$img_404 = $upload_dir['url'] . '/page_404.jpg';

get_header();


echo '<article class="error-404">';

	echo '<section class="section section--header">';

		echo '<div class="page__bg-image" style="background-image: url('.esc_url($img_404).'); background-attachment: fixed; background-position: center center; background-size: cover;">';
			echo '<div class="page__title-wrap">';

				echo '<h1 class="page__title">404</h1>';
				echo '<h2 class="page__subtitle">Oops! Page Not Found.</h2>';

				echo '<p>It\'s probably our fault - we recently renovated and are still cleaning up. How about searching?</p>';
				// form.search-form
				get_search_form();		

			echo '</div><!-- .page__title-wrap -->';
		echo '</div><!-- .page__bg-image -->';

	echo '</section><!-- .section--header -->';

echo '</article><!-- #post-'.esc_html( get_the_ID() ).' -->';

get_footer();
