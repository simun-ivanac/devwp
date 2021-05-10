<?php

/**
* Dequeue scripts and styles if not on "Contact" page.
*
* @package devwp
* @version 1.0.0
 */
if ( ! function_exists( 'devwp_contact_form_dequeue_scripts' ) ) :
    function devwp_contact_form_dequeue_scripts() {

    	if ( ! is_page_template( 'page-templates/contact.php' ) ) {
    		wp_dequeue_style( 'contact-form-7' );
    		wp_dequeue_script( 'contact-form-7' );
    	}

    }
endif;
add_action( 'wp_enqueue_scripts', 'devwp_contact_form_dequeue_scripts', 100 );
