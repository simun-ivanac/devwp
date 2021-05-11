<?php

/**
 * Remove "Website url" from comment form (useless?).
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_remove_website_url' ) ) :
    function devwp_remove_website_url( $arg ) {

        $arg['url'] = '';
        return $arg;

    }
endif;
add_filter( 'comment_form_default_fields', 'devwp_remove_website_url' );


/**
 * Customize field order in comment form (name, email, texarea, cookies).
 * Set placeholders in inputs and texarea.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_customize_fields' ) ) :
    function devwp_customize_fields( $fields ) {

        // SET PLACEHOLDERS
        $fields['author'] = str_replace(
            '<input',
            '<input placeholder="Name *"',
            $fields['author']
        );
        $fields['email'] = str_replace(
            '<input',
            '<input placeholder="Email *"',
            $fields['email']
        );
        $fields['comment'] = str_replace(
            '<textarea',
            '<textarea placeholder="Your comment *"',
            $fields['comment']
        );
    	$fields['cookies'] = str_replace(
            '>Save my name, email, and website in this browser for the next time I comment.</',
            '>Save my name and email in this browser for the next time I comment.</',
            $fields['cookies']
        );

        // CUSTOMIZE FIELD ORDER
    	$comment_field = $fields['comment'];
    	$cookie_field = $fields['cookies'];
    	unset($fields['comment']);
    	unset($fields['cookies']);

    	$fields['comment'] = $comment_field;
    	$fields['cookies'] = $cookie_field;

        return $fields;

    }
endif;
add_filter( 'comment_form_fields', 'devwp_customize_fields' );


/**
 * Add extra classes to reply link.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_comment_reply_link' ) ) :
    function devwp_comment_reply_link( $content ) {

        $extra_classes = 'button';
    	return preg_replace('/comment-reply-link/', 'comment-reply-link ' . $extra_classes, $content);

    }
endif;
add_filter( 'comment_reply_link', 'devwp_comment_reply_link', 99 );
