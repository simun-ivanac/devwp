<?php

/**
 * Gutenberg - DISABLE it on certain pages.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_disable_gutenberg_on_page_templates' ) ) :
    function devwp_disable_gutenberg_on_page_templates( $use_block_editor, $post_type ) {

        // $_GET['post'] must be set
        // post_type must be PAGE
        if (
            empty( $_GET['post'] ) ||
            $post_type != 'page'
        ) {
            return $use_block_editor;
        }

        // list of excluded PAGES (front_page & blog)
        $excluded_ids = array(
            get_option( 'page_on_front' ),
            get_option( 'page_for_posts' ),
        );

        // list of excluded PAGE TEMPLATES
        $excluded_templates = array(
    		'page-templates/about-us.php',
    		'page-templates/contact.php',
    		'page-templates/gallery.php'
    	);


        // get template slug
        $id = (int) $_GET['post'];
    	$template = get_page_template_slug( $id );


        // if template slug matches excluded templates
        // OR
        // page_id matches excluded ids
        // DISABLE GUTENBERG
        if (
            in_array( $template, $excluded_templates ) ||
            in_array( $id, $excluded_ids )
        ) {
            $use_block_editor = false;
        }

        return $use_block_editor;

    }
endif;
add_filter( 'gutenberg_can_edit_post_type', 'devwp_disable_gutenberg_on_page_templates', 10, 2 );
add_filter( 'use_block_editor_for_post_type', 'devwp_disable_gutenberg_on_page_templates', 10, 2 );


/**
 * Gutenberg - DISABLE editor depending on post type (page - in this case).
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_disable_gutenberg_selectively' ) ) :
    function devwp_disable_gutenberg_selectively( $use_block_editor, $post_type ) {
        if ( 'page' === $post_type ) {
    		return false;
    	}

    	return $use_block_editor;
    }
endif;
// add_filter( 'use_block_editor_for_post_type', 'devwp_disable_gutenberg_selectively', 10, 2 );


/**
 * Gutenberg - ENABLE editor depending on post type (post - in this case).
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_enable_gutenberg_selectively' ) ) :
    function devwp_enable_gutenberg_selectively( $use_block_editor, $post_type ) {

        if ( $post_type == 'post' ) {
            return true;
        }

        return false;
    }
endif;
// add_filter( 'use_block_editor_for_post_type', 'devwp_enable_gutenberg_selectively', 10, 2 );


/**
 * Gutenberg - DISABLE editor on all post types.
 *
 * @package devwp
 * @version 1.0.0
 */
// add_filter('use_block_editor_for_post', '__return_false', 10);
