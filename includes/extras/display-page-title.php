<?php

/**
 * Display page title in hero image.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_page_title' ) ) :
    function devwp_page_title() {

        // if front_page or 404 - early return
        if ( is_front_page() || is_404() ) return;


    	// page
    	if ( is_page() ) {
    		the_title('<h1 class="page-title">', '</h1>');
    	}
    	// single
    	elseif ( is_single() ) {
    		the_title('<h1 class="post-page-title">', '</h1>');
    	}
    	// blog
    	elseif ( is_home() ) {
    		echo '<h1 class="page-title">Blog</h1>';
    	}
        // search
    	elseif ( is_search() ) {
    		echo '<div class="page-title">Search</div>';
    	}
    	// archives
    	elseif ( is_archive() ) {
            echo '<div class="page-title">Archive</div>';
    	}

    }
endif;
