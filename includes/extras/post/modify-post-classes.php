<?php

/**
 * Remove 'category' and 'tag' classes from post classes
 * Add classes to recognize if located on 'blog' page or 'singular' page
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_modify_post_classes' ) ) :
    function devwp_modify_post_classes( $classes ) {

        $category_classes = 'category';
        $tag_classes = 'tag';

        foreach ( $classes as $key => $class ) {
            if (
                strpos( $class, $category_classes ) !== false ||
                strpos( $class, $tag_classes ) !== false
            ) {
                unset( $classes[$key] );
            }
        }

        if ( is_singular() && ! is_page() ) {
            $classes[] = 'blog-post-single';
        } else if ( is_page() ) {
            $classes[] = 'page-singular';
        } else {
            $classes[] = 'blog-post clearfix';
        }

        return $classes;

    }
endif;
add_filter( 'post_class' , 'devwp_modify_post_classes' );