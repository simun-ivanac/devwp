<?php

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
