<?php

/**
 * Enqueue scripts and styles
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_scripts' ) ) :
	function devwp_scripts() {

        $style_ver = filemtime( get_stylesheet_directory() . '/style.css' );
		$script_ver = filemtime( get_stylesheet_directory() . '/assets/js/devwp-script.js' );
        wp_enqueue_script( 'jquery' );


        /**
		 * 3rd PARTY LIBRARIES
		 */
        wp_enqueue_style( 'devwp-google-font-montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap' );
        // wp_enqueue_style( 'devwp-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0' );

        // interactive map (leaflet) - css and js
 		if ( is_front_page() || is_page_template('page-templates/contact.php') ) {
 			wp_enqueue_style('devwp-mapbox-style', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.css');
 			wp_enqueue_script('devwp-mapbox-js', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js', array(), '10000', false);
 		}

        // slick master - js library
		if (
			is_front_page() ||
			is_single() ||
			is_page_template('page-templates/about-us.php')
		) {
			wp_enqueue_script( 'devwp-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '10000', true);
		}


		/**
		 * CSS
		 */
        wp_enqueue_style( 'devwp-style', get_stylesheet_uri(), array(), $style_ver );
        // wp_style_add_data( 'devwp-style', 'rtl', 'replace' );
        // wp_dequeue_style( 'wp-block-library' );
 	    // wp_dequeue_style( 'wp-block-library-theme' );
 	    // wp_dequeue_style( 'wc-block-style' );


		/**
		 * JS
		 */
        wp_enqueue_script( 'devwp-script', get_template_directory_uri() . '/assets/js/devwp-script.js', array(), $script_ver, true );
		// wp_enqueue_script( 'devwp-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true  );
        // wp_deregister_script( 'wp-embed' );


		/**
		 * WP: COMMENT REPLY
		 */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'devwp_scripts' );


/**
 * Add inline css
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_inline_scripts' ) ) :
	function devwp_inline_scripts() {

        $header_image = get_header_image();
	    if ( !$header_image ) return;


	    $header_bg = "
	    	.hero-image {
	    		background-image: url(\"{$header_image}\");
	    	}
		";

	    wp_add_inline_style( 'devwp-style', $header_bg );

	}
endif;
add_action( 'wp_enqueue_scripts', 'devwp_inline_scripts' );
