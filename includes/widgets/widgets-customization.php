<?php

/**
 * Modify number of posts in category widget to display it in span element.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_modify_category_list' ) ) :
    function devwp_modify_category_list( $links ) {

        // add class to category item link
    	$links = str_replace( '/">', '/" class="cat-item-link">', $links );
    	// $links = str_replace( '<a href', '<a class="cat-item-link" href', $links );

        // remove brackets from category item: (1) -> 1
    	$links = str_replace( '</a> (', '</a><span class="cat-item-number">', $links );
    	$links = str_replace( ')', '</span>', $links );
    	return $links;

    }
endif;
add_filter( 'wp_list_categories', 'devwp_modify_category_list' );


/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and uses list format for better accessibility.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_tag_widget_cloud' ) ) :
    function devwp_tag_widget_cloud( $args ) {

    	$args['largest'] = 14;
    	$args['smallest'] = 14;
    	$args['unit'] = 'px';
    	$args['format'] = 'list';

    	return $args;
    }
endif;
add_filter( 'widget_tag_cloud_args', 'devwp_tag_widget_cloud' );
