<?php

/**
 * Add classes to MENU ITEM, depending on menu location (header || footer).
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_menu_items_classes' ) ) :
    function devwp_menu_items_classes( $classes, $item, $args ) {

        if ( $args->menu_id == 'primary-menu' ) {
            $classes[] = 'header-menu-item';
        }

        if ( $args->menu_id == 'footer-menu' ) {
            $classes[] = 'footer-menu-item';
        }

        if ( $args->menu_id == 'footer-legals' ) {
            $classes[] = 'footer-legals-item';
        }

        return $classes;

    }
endif;
add_filter( 'nav_menu_css_class' , 'devwp_menu_items_classes' , 10, 3 );


/**
 * Add attributes to MENU ITEM LINK, depending on location (header || footer).
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_menu_links_atts' ) ) :
    function devwp_menu_links_atts( $atts, $item, $args ) {

        if ( $args->menu_id == 'primary-menu' ) {
            $atts['class'] = 'header-menu-link';
        }

        if ( $args->menu_id == 'footer-menu' ) {
            $atts['class'] = 'footer-menu-link';
        }

        if ( $args->menu_id == 'footer-legals' ) {
            $atts['class'] = 'footer-legals-link';
        }

        return $atts;

    }
endif;
add_filter( 'nav_menu_link_attributes' , 'devwp_menu_links_atts' , 10, 3 );


/**
 * Add classes to SUBMENU, depending on location (header).
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_submenu_classes' ) ) :
    function devwp_submenu_classes( $classes, $args ) {

        if ( $args->menu_id == 'primary-menu' ) {
            $classes[] = 'header-sub-menu';
        }

        return $classes;

    }
endif;
add_filter( 'nav_menu_submenu_css_class', 'devwp_submenu_classes', 10, 2 );
