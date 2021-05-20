<?php

/**
* Enqueue admin scripts and styles.
*
* @package devwp
* @version 1.0.0
*/
if ( ! function_exists( 'devwp_admin_main_scripts' ) ) :
    function devwp_admin_main_scripts() {
        /**
        * FILE VERSIONING
        */
        // $theme_ver = '1.0.0';
        // $admin_style_ver = filemtime( get_stylesheet_directory() . '/admin/assets/css/devwp-admin-style.js' );
        // $admin_script_ver = filemtime( get_stylesheet_directory() . '/admin/assets/js/devwp-admin-script.js' );

        /**
        * ADMIN JS
        */
        // wp_enqueue_style('devwp-admin-style', get_template_directory_uri() . '/admin/assets/css/devwp-admin-style.css', false, $admin_style_ver);
        // wp_enqueue_script( 'devwp-admin-script', get_template_directory_uri() . '/admin/assets/js/devwp-admin-script.js', array('jquery'), $admin_script_ver, true );
    }
endif;
// add_action( 'admin_enqueue_scripts', 'devwp_admin_main_scripts' );
