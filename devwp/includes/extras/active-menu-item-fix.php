<?php

/**
 * Set 'Blog' as active menu item when positioned on archive or search page.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_active_menu_item_fix' ) ) :
    function devwp_active_menu_item_fix( $classes, $item ) {

        if ( is_archive() || is_search() ) {
    		if ( $item->title == 'Blog' ) {
    			$classes[] = 'current-menu-item ';
    		}
    	}

        return $classes;

    }
endif;
add_filter( 'nav_menu_css_class' , 'devwp_active_menu_item_fix' , 10, 2 );
