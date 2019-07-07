<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package slick
 */


// Set up the WordPress core custom header feature.
// @uses slick_header_style()
function slick_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'slick_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'slick_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'slick_custom_header_setup' );

if ( ! function_exists( 'slick_header_style' ) ) :

	// Styles the header image and text displayed on the blog.
	// @see slick_custom_header_setup().
	function slick_header_style() {
		$header_text_color = get_header_textcolor();

		// If no custom options for text are set, let's bail.
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) :
			return;
		endif;

		// If we get this far, we have custom styles. Let's do this.
	
		echo '<style type="text/css">';

		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.branding__name,
			.branding__slogan {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
		// If the user has set a custom color for the text use that.
		else :
			?>
			.branding__name a,
			.branding__slogan {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
			<?php 
		endif; 

		echo '</style>';
	}
endif;
