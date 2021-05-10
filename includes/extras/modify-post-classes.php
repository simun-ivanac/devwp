<?php

/**
 * Remove 'category' and 'tag' classes from post classes
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_modify_post_classes' ) ) :
    function devwp_modify_post_classes( $classes ) {

        $category_classes = 'category';
        $tag_classes = 'tag';

        foreach ( $classes as $key => $value ) {
            if (
                strpos( $value, $category_classes ) !== false ||
                strpos( $value, $tag_classes ) !== false
            ) {
                unset( $classes[$key] );
            }
        }

        if ( is_singular() ) {
            $classes[] = 'blog-post-content';
        } else {
            $classes[] = 'blog-post-item';
        }

        return $classes;

    }
endif;
add_filter( 'post_class' , 'devwp_modify_post_classes' );
