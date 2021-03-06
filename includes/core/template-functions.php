<?php
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 *
 * @package devwp
 * @since 1.0.0
 */
if ( ! function_exists( 'devwp_body_classes' ) ) :
    function devwp_body_classes( $classes ) {
    	// Adds a class of hfeed to non-singular pages.
    	if ( ! is_singular() ) {
    		$classes[] = 'hfeed';
    	}

    	// Adds a class of no-sidebar when there is no sidebar present.
    	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    		$classes[] = 'no-sidebar';
    	}

    	return $classes;
    }
endif;
add_filter( 'body_class', 'devwp_body_classes' );


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 *
 * @package devwp
 * @since 1.0.0
 */
if ( ! function_exists( 'devwp_pingback_header' ) ) :
    function devwp_pingback_header() {
    	if ( is_singular() && pings_open() ) {
    		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    	}
    }
endif;
add_action( 'wp_head', 'devwp_pingback_header' );
