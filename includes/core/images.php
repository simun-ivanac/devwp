<?php

/**
 * Images: add support for thumbnails, custom-background, custom-logo
 *
 * @package devwp
 * @since 1.0.0
 */
if ( ! function_exists( 'devwp_images' ) ) :
    function devwp_images() {

        // Enable support for post thumbnails on posts and pages
        add_theme_support( 'post-thumbnails' );
        add_image_size('wp-devwp-post', 350, 280, array('center', 'center'));
        // set_post_thumbnail_size( 620, 9999, false );
        // add_image_size( 'wp-devwp-banner', 525, 525, array( 'center', 'center' ) );
        // add_image_size( 'wp-devwp-features', 225, 525, array( 'center', 'center' ) );
        // add_image_size( 'wp-devwp-gallery', 500, 400, array( 'center', 'center' ) );

        // Set up custom background feature
		add_theme_support( 'custom-background',
			apply_filters( 'devwp_custom_background_args', array(
				'default-color'      => 'ffffff',
				'default-image'      => '',
                'default-repeat'     => 'no-repeat',
                'default-position-x' => 'center',
                'default-position-y' => 'center',
                'default-size'       => 'cover',
                'default-attachment' => 'fixed',
			) )
		);

		// Add support for custom logo
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

    }
endif;
add_action( 'after_setup_theme', 'devwp_images' );


/**
 * Remove default image sizes
 *
 * @package devwp
 * @since 1.0.0
 */
if ( ! function_exists( 'devwp_remove_default_image_sizes' ) ) :
    function devwp_remove_default_image_sizes( $sizes ) {

        // unset( $sizes['thumbnail'] );
        unset( $sizes['medium'] );
        // unset( $sizes['large'] );

        return $sizes;

    }
endif;
add_filter( 'intermediate_image_sizes_advanced', 'devwp_remove_default_image_sizes' );


/**
 * Image size names (add new)
 *
 * @package devwp
 * @since 1.0.0
 */
if ( ! function_exists( 'devwp_image_size_names' ) ) :
    function devwp_image_size_names( $sizes ) {

        return array_merge( $sizes, array(
            'wp-devwp-post' => __('Post', 'wp_ctheme'),
            // 'wp-devwp-banner'   => __( 'Banner', 'devwp' ),
            // 'wp-devwp-features' => __( 'Features', 'devwp' ),
        ) );

    }
endif;
add_filter( 'image_size_names_choose', 'devwp_image_size_names' );
