<?php

/**
 * Filter the excerpt length to 'n' words.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_excerpts_filter' ) ) :
    function devwp_excerpts_filter( $limit ) {
        return wp_trim_words( get_the_excerpt(), $limit, '&hellip;' );
    }
endif;
