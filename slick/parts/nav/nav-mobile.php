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
				<div data-modal>
					<div data-modal-content>

                        <nav id="nav-header-01" class="nav nav--vertical" role="navigation" aria-label="Popular Pages">
							<h2>Popular</h2>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'menu-header-01',	
                            ) ); ?>
						</nav>	
						
                        <nav id="nav-header-02" class="nav nav--vertical" role="navigation" aria-label="Popular Pages">
							<h2>Base Formulas</h2>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'menu-header-02',	
                            ) ); ?>
						</nav>

                        <nav id="nav-header-03" class="nav nav--vertical" role="navigation" aria-label="Popular Pages">
							<h2>Recommended For</h2>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'menu-header-03',	
                            ) ); ?>
						</nav>

                        <nav id="nav-header-04" class="nav nav--vertical" role="navigation" aria-label="Popular Pages">
							<h2>Research</h2>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'menu-header-04',	
                            ) ); ?>
						</nav>						
								
		                <?php get_template_part('parts/nav/nav', 'follow'); ?>                      
					</div><!-- data-modal-content-->
				</div> <!-- data-mobile -->
			</div><!-- data-mobile-overlay -->
		</div><!-- data--mobile-component -->