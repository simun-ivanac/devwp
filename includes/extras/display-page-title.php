<?php

/**
 * Display page titles in hero image.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_page_title' ) ) :
    function devwp_page_title() {
        if ( is_front_page() || is_404() ) return;

    	// page
    	if ( is_page() ) {
    		the_title('<h1 class="page-title">', '</h1>');
    	}
    	// single post
    	elseif ( is_single() ) {
    		the_title('<h1 class="post-page-title">', '</h1>');
    	}
    	// blog
    	elseif ( is_home() ) {
    		echo '<h1 class="page-title">Blog</h1>';
    	}
    	// archives
    	elseif ( is_archive() ) {
    		// if ( is_tax('media-categories') ) {
    		// 	echo '<h1 class="page-title">' . get_the_title(get_page_by_path('gallery')) . '</h1>';
    		// }
    		// else {
    		// }
            echo '<div class="page-title">Archive</div>';
    	}
    	// search
    	elseif ( is_search() ) {
    		echo '<div class="page-title">Archive</div>';
    		// echo '<div class="page-title">Search results</div>';
    	}
    	// 404 error
    	// elseif ( is_404() ) {
    	// 	echo '<div class="page-title">Page not found</div>';
    	// }
    }
endif;
