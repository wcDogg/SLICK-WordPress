<?php

$location_01 = wp_get_nav_menu_name('menu-header-01');
$location_02 = wp_get_nav_menu_name('menu-header-02');
$location_03 = wp_get_nav_menu_name('menu-header-03');
$location_04 = wp_get_nav_menu_name('menu-header-04');
$location_05 = wp_get_nav_menu_name('menu-header-05');
$location_06 = wp_get_nav_menu_name('menu-header-06');

?>


<div id="mobile" data-modal-component aria-label="Site Navigation">

	<button data-modal-open>
		<span data-modal-open-icon-wrap><svg aria-hidden="true" focusable="false" data-mobile-open-icon role="img"
				xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
				<path fill="currentColor"
					d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
				</path>
			</svg></span>
	</button>
		
	<div data-modal-overlay>
		<div data-modal data-modal-full>
			<div data-modal-content>

				<?php get_template_part('parts/nav/nav', 'follow'); ?>  

				<div data-modal-grid>
					<?php 
						if ( $location_01 ) : 
							echo '<nav id="nav-mobile-01" class="white nav--vertical nav--text" role="navigation" aria-label="'.esc_attr($location_01).'">';
								echo '<h2>'.$location_01.'</h2>';
								wp_nav_menu( array(
									'theme_location' => 'menu-header-01',	
								) );
							echo '</nav>';
						endif;

						if ( $location_02 ) : 
							echo '<nav id="nav-mobile-02" class="white nav--vertical nav--text" role="navigation" aria-label="'.esc_attr($location_02).'">';
								echo '<h2>'.$location_02.'</h2>';
								wp_nav_menu( array(
									'theme_location' => 'menu-header-02',	
								) );
							echo '</nav>';
						endif;

						if ( $location_03 ) :
							echo '<nav id="nav-mobile-03" class="white nav--vertical nav--text" role="navigation" aria-label="'.esc_attr($location_03).'">';
								echo '<h2>'.$location_03.'</h2>';
								wp_nav_menu( array(
									'theme_location' => 'menu-header-03',	
								) );
							echo '</nav>';
						endif;

						if ( $location_04 ) : 
							echo '<nav id="nav-mobile-04" class="white nav--vertical nav--text" role="navigation" aria-label="'.esc_attr($location_04).'">';
								echo '<h2>'.$location_04.'</h2>';
								wp_nav_menu( array(
									'theme_location' => 'menu-header-04',	
								) );
							echo '</nav>';
						endif;

						if ( $location_05 ) : 
							echo '<nav id="nav-mobile-05" class="white nav--vertical nav--text" role="navigation" aria-label="'.esc_attr($location_05).'">';
								echo '<h2>'.$location_05.'</h2>';
								wp_nav_menu( array(
									'theme_location' => 'menu-header-05',	
								) );
							echo '</nav>';
						endif;

						if ( $location_06 ) : 
							echo '<nav id="nav-mobile-06" class="white nav--vertical nav--text" role="navigation" aria-label="'.esc_attr($location_06).'">';
								echo '<h2>'.$location_06.'</h2>';
								wp_nav_menu( array(
									'theme_location' => 'menu-header-06',	
								) );
							echo '</nav>';
						endif;

					?>	
				</div>
										
			</div><!-- data-modal-content-->
		</div> <!-- data-mobile -->
	</div><!-- data-mobile-overlay -->

</div><!-- data--mobile-component -->