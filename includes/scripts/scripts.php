<?php

/**
 * Enqueue scripts and styles.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_main_scripts' ) ) :
    function devwp_main_scripts() {
        /**
         * FILE VERSIONING
         */
        $style_ver = filemtime( get_stylesheet_directory() . '/style.css' );
		$script_ver = filemtime( get_stylesheet_directory() . '/assets/js/devwp-script.js' );
        $theme_ver = '1.0.0';


        /**
         * MAIN CSS
         */
        wp_enqueue_style( 'devwp-style', get_stylesheet_uri(), array(), $style_ver );


        /**
         * INLINE CSS
         */
        $header_image = get_header_image();
	    if ( ! $header_image ) return;
	    $header_bg = ".hero-image { background-image: url(\"{$header_image}\"); }";
	    wp_add_inline_style( 'devwp-style', $header_bg );


        /**
         * GOOGLE FONT
         */
        wp_enqueue_style( 'devwp-google-fonts-montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap' );


        /**
         * OTHER CSS
         */
        wp_dequeue_style( 'wp-block-library' );
 	    wp_dequeue_style( 'wp-block-library-theme' );
 	    wp_dequeue_style( 'wc-block-style' );
        // wp_style_add_data( 'devwp-style', 'rtl', 'replace' );


        /**
         * 3rd party: FONT-AWESOME
         */
        if ( ! is_front_page() && ! is_page_template() ) {
            wp_enqueue_style( 'devwp-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0' );
        }


        /**
         * WP: JQUERY
         */
        wp_scripts()->add_data( 'jquery', 'group', 1 );
        wp_scripts()->add_data( 'jquery-core', 'group', 1 );
        wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
        wp_enqueue_script( 'jquery' );


        /**
         * 3rd party: SLICK js
         */
        if ( is_front_page() || is_page_template( 'page-templates/about-us.php' ) ) {
			wp_enqueue_script( 'devwp-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '10000', true );
		}


        /**
         * 3rd party: LEAFLET
         */
        if ( is_front_page() || is_page_template( 'page-templates/contact.php' ) ) {
 			wp_enqueue_style( 'devwp-mapbox-style', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.css' );
 			wp_enqueue_script( 'devwp-mapbox-js', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js', array(), '10000', true );
 		}


        /**
         * MAIN JS
         */
        wp_enqueue_script( 'devwp-script', get_template_directory_uri() . '/assets/js/devwp-script.js', array('jquery'), $script_ver, true );
		// wp_enqueue_script( 'devwp-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), $theme_ver, true  );
        // wp_deregister_script( 'wp-embed' );


        /**
         * WP: COMMENT REPLY
         */
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
    }
endif;
add_action( 'wp_enqueue_scripts', 'devwp_main_scripts' );
