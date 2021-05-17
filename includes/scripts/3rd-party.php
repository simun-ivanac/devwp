<?php

/**
 * Enqueue 3rd party scripts and styles
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_3rd_party_scripts' ) ) :
	function devwp_3rd_party_scripts() {

        /**
		 * Google fonts: montserrat
		 */
        wp_enqueue_style( 'devwp-google-fonts-montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap' );


        /**
         * Font awesome
         */
        if ( ! is_front_page() && ! is_page_template() ) {
            wp_enqueue_style( 'devwp-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0' );
        }


        /**
         * Interactive map (leaflet) - css and js
         */
 		if ( is_front_page() || is_page_template( 'page-templates/contact.php' ) ) {
 			wp_enqueue_style( 'devwp-mapbox-style', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.css' );
 			wp_enqueue_script( 'devwp-mapbox-js', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js', array(), '10000', true );
 		}


        /**
         * JQUERY (in footer)
         */
        wp_scripts()->add_data( 'jquery', 'group', 1 );
        wp_scripts()->add_data( 'jquery-core', 'group', 1 );
        wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
        wp_enqueue_script( 'jquery' );


        /**
         * Slick master - js library
         */
		if (
			is_front_page() ||
			is_page_template( 'page-templates/about-us.php' )
		) {
			wp_enqueue_script( 'devwp-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '10000', true );
		}

	}
endif;
add_action( 'wp_enqueue_scripts', 'devwp_3rd_party_scripts', 10 );
