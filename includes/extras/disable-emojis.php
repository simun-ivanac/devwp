<?php

/**
 * Disable emojis since not used.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_disable_emojis' ) ) :
    function devwp_disable_emojis() {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    }
endif;
add_action( 'init', 'devwp_disable_emojis' );
