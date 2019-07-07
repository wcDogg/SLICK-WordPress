<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 

	get_template_part('parts/headers/header', get_post_type() ); 

	$related_reviews = get_field('related_reviews');

	if( $related_reviews ): 

		echo '<section class="section section--cards">';
			echo '<div class="section__inner">';
				echo '<h1 class="section__title">Related Product Reviews</h1>';
				echo '<div class="section__grid">';

					// variable must be called $post (IMPORTANT)
					foreach( $related_reviews as $post) : 
						setup_postdata($post); 
						
						$url = get_the_permalink($post->ID);
						$title = get_the_title($post->ID);
						
						$formulas = get_the_terms($post->ID, 'formulas', array("fields" => "all"));
						$consistency = get_the_terms($post->ID, 'consistency', array("fields" => "all")); 
						$lasting = get_the_terms($post->ID, 'lasting-power', array("fields" => "all"));

						$icon_more = '<i class="far fa-fw fa-long-arrow-right"></i>';
						$icon_formula = '<i class="far fa-fw fa-flask"></i>';
						$icon_consistency = '<i class="far fa-fw fa-hand-holding-water"></i>';
						$icon_lasting = '<i class="far fa-fw fa-stopwatch"></i>';

						echo '<article class="card lubricant">';
						
							echo '<a class="card__image" aria-hidden="true" tabindex="-1" href="'.esc_url(get_the_permalink()).'">';
								the_post_thumbnail( 'thumbnail', array(
									'alt' => the_title_attribute( array(
										'echo' => false,
									) ),
								) );
							echo '</a><!-- .card__image -->';

							echo '<header class="card__header">';
								echo '<a class="card__title-wrap" rel="bookmark" title="'.esc_attr(get_the_title()).'" href="'.esc_url(get_the_permalink()).'">';
									echo '<h1 class="page__title">'.$title.'</h1>';		
								echo "</a><!-- .card__title-wrap -->";	
							echo '</header>';

							echo '<main class="card__main">';
								// Formula
								foreach($formulas as $term) :
									echo '<span class="meta meta--formula">'.$icon_formula.'<span class="meta__value">'.$term->name.'</span></span>';
								endforeach; 
								// Consistency
								if($consistency) : 
									foreach($consistency as $term) :
										echo '<span class="meta meta--consistency">'.$icon_consistency.'<span class="meta__value">'.$term->name.'</span></span>';
									endforeach; 
								endif; 
								// Lasting Power
								if($lasting) : 
									foreach($lasting as $term) :
										echo '<span class="meta meta--lasting">'.$icon_lasting.'<span class="meta__value">'.$term->name.'</span></span>';
									endforeach; 
								endif; 
							echo '</main>';

						echo '</article><!-- .card -->';

					endforeach; 

				echo '</div><!-- .section__cards -->';
			echo '</div><!-- .section__inner -->';
		echo '</section><!-- .section--cards --> ';

		wp_reset_postdata(); 

	endif; 

?>
</article><!-- #post-<?php the_ID(); ?> -->
