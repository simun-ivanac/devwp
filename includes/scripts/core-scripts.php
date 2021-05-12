<?php

/**
 * Enqueue scripts and styles
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_core_scripts' ) ) :
	function devwp_core_scripts() {

        $style_ver = filemtime( get_stylesheet_directory() . '/style.css' );
		$script_ver = filemtime( get_stylesheet_directory() . '/assets/js/devwp-script.js' );


		/**
		 * CSS
		 */
        wp_enqueue_style( 'devwp-style', get_stylesheet_uri(), array(), $style_ver );
        wp_dequeue_style( 'wp-block-library' );
 	    wp_dequeue_style( 'wp-block-library-theme' );
 	    wp_dequeue_style( 'wc-block-style' );
        // wp_style_add_data( 'devwp-style', 'rtl', 'replace' );


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
add_action( 'wp_enqueue_scripts', 'devwp_core_scripts' );
