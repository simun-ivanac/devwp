<?php

/**
 * Implementation of the Custom Header feature.
 *
 * @package devwp
 * @since 1.0.0
 */


/**
 * Set up the WordPress core custom header feature.
 *
 * @uses devwp_header_style()
 */
if ( ! function_exists( 'devwp_custom_header_setup' ) ) :
	function devwp_custom_header_setup() {

		add_theme_support( 'custom-header',
			apply_filters( 'devwp_custom_header_args', array(
                'default-image'      => get_template_directory_uri() . '/assets/images/headers/night_and_mountain_2.jpg',
				'default-text-color' => '000000',
				'width'              => 1920,
				'height'             => 1080,
                'flex-width'         => true,
				'flex-height'        => true,
				'wp-head-callback'   => 'devwp_header_style',
			) )
		);

	}
endif;
add_action( 'after_setup_theme', 'devwp_custom_header_setup' );


/**
* Styles the header image and text displayed on the blog.
*
* @see devwp_custom_header_setup()
*/
if ( ! function_exists( 'devwp_header_style' ) ) :
	function devwp_header_style() {

		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' )
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
				}
			<?php
			// If the user has set a custom color for the text use that
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php

	}
endif;


/**
 * Include default header images.
 * This enables users to use default image until they upload their own.
 * Thumbnail size - max-width: 600px
 *
 * @see register_default_headers().
 */
$header_images = array(
    'digital_art' => array(
        'url'           => get_template_directory_uri() . '/assets/images/headers/digital_art-futuristic.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/assets/images/headers/digital_art-futuristic-thumbnail.jpg',
        'description'   => 'Digital art',
    ),
    'night_and_mountain' => array(
        'url'           => get_template_directory_uri() . '/assets/images/headers/night_and_mountain_2.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/assets/images/headers/night_and_mountain-thumbnail.jpg',
        'description'   => 'Desert',
    ),
    'programming' => array(
        'url'           => get_template_directory_uri() . '/assets/images/headers/programming-2.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/assets/images/headers/programming-2-thumbnail.jpg',
        'description'   => 'Programming',
    ),
);
register_default_headers( $header_images );


/**
 * Customize logo html.
 */
if ( ! function_exists( 'devwp_add_class_to_logo' ) ) :
    function devwp_add_class_to_logo( $html ) {

        $html = str_replace( 'custom-logo', 'custom-logo loaded', $html );

        return $html;
    }
endif;
// add_filter( 'get_custom_logo', 'devwp_add_class_to_logo' );
