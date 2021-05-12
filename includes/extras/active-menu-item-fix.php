<?php

/**
 * Set active menu item when positioned on 'subpage'.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_active_menu_item_fix' ) ) :
    function devwp_active_menu_item_fix( $classes, $item ) {

        // when positioned on gallery taxonomy, set "Gallery" as active
        if ( is_tax( 'media-categories' ) ) {
    		if ( $item->title == 'Gallery' ) {
    			$classes[] = 'current-menu-item ';
    		}
    	}

        // when positioned on archive, set "Blog" as active
        if ( is_archive() && !is_tax() ) {
    		if ( $item->title == 'Blog' ) {
    			$classes[] = 'current-menu-item ';
    		}
    	}

        return $classes;

    }
endif;
add_filter( 'nav_menu_css_class' , 'devwp_active_menu_item_fix' , 10, 2 );
