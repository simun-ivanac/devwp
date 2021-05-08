<?php

/**
 * The functions template: include functions and definitions
 *
 * @package devwp
 * @since 1.0.0
 */


define( 'THEME_DIR', get_template_directory() );
define( 'THEME_DIR_URI', get_template_directory_uri() );


/**
 * Core functions
 */
// Base support functions (title, menus, html5...)
require THEME_DIR . '/includes/core/setup.php';

// Thumbnails, logo & background support
require THEME_DIR . '/includes/core/images.php';

// Implement the Custom Header feature
require THEME_DIR . '/includes/core/custom-header.php';

// Custom template tags for this theme
require THEME_DIR . '/includes/core/template-tags.php';

// Functions which enhance the theme by hooking into WordPress
require THEME_DIR . '/includes/core/template-functions.php';


/**
 * Enqueue css stylesheets and js scripts
 */
require THEME_DIR . '/includes/scripts/scripts.php';


/**
 * Widget - register areas and add new widgets
 */
// Register widget areas
require THEME_DIR . '/includes/widgets/widgets-setup.php';

// Customize some widgets displayed options
require THEME_DIR . '/includes/widgets/widgets-customization.php';

// My own widget: displays latest posts with thumbnails and some other options
require THEME_DIR . '/includes/widgets/latest-posts-with-thumbnails.php';


/**
 * Extra functions
 */
// Add attributes to menu items
require THEME_DIR . '/includes/extras/menu-items-attributes.php';


/**
 * Helper functions
 */
// Split last word from string
require THEME_DIR . '/includes/helper/split-last-word-from-string.php';


/**
 * Include admin files
 */
if ( is_admin() ) {
	require THEME_DIR . '/admin/include.php';
}


/**
 * Customizer additions
 */
if ( is_admin() ) {
	require THEME_DIR . '/includes/customizer/customizer.php';
}


/**
 * Page templates: not needed to require, wordpress recognize templates
 * in 'page-templates' subdirectory
 * This throws error in admin.
 */
// require THEME_DIR . '/page-templates/about-us.php';
// require THEME_DIR . '/page-templates/contact.php';
// require THEME_DIR . '/page-templates/gallery.php';


/**
 * Load Jetpack compatibility file
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require THEME_DIR . '/includes/plugins/jetpack.php';
// }
