<?php

/**
 * Include: functions and definitions for ADMIN.
 *
 * @package devwp
 * @since 1.0.0
 */


define( 'THEME_ADMIN_DIR', get_template_directory() . '/admin' );
define( 'THEME_ADMIN_DIR_URI', get_template_directory_uri() . '/admin' );


/**
 * Customizer additions
 */
require THEME_ADMIN_DIR . '/includes/customizer/customizer.php';


/**
 * Disable gutenberg on certain page templates
 */
require THEME_ADMIN_DIR . '/includes/gutenberg/disable-gutenberg-on-page-templates.php';


/**
 * Add custom ACF script for better user experience
 */
require THEME_ADMIN_DIR . '/includes/acf/acf-scripts.php';


/**
 * * Enqueue admin css stylesheets and js scripts
 */
require THEME_ADMIN_DIR . '/includes/scripts/scripts.php';
