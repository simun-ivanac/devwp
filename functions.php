<?php

/**
 * The functions template: include functions and definitions.
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
require THEME_DIR . '/includes/widgets/class-latest-posts-with-thumbnails.php';


/**
 * Extra functions
 */
// Add attributes to menu items
require THEME_DIR . '/includes/extras/menu-items-attributes.php';

// Active menu item fix
require THEME_DIR . '/includes/extras/active-menu-item-fix.php';

// Display main page titles
require THEME_DIR . '/includes/extras/display-page-title.php';

// Display breadcrumbs
require THEME_DIR . '/includes/extras/display-breadcrumbs.php';

// Disable emojis (since not used)
require THEME_DIR . '/includes/extras/disable-emojis.php';

// Modify post classes
require THEME_DIR . '/includes/extras/post/modify-post-classes.php';

// Shorten post excerpt
require THEME_DIR . '/includes/extras/post/excerpt-length.php';

// Customize comment fields
require THEME_DIR . '/includes/extras/post/comment-fields-customization.php';


/**
 * Helper functions
 */
// Split last word from the rest of string
require THEME_DIR . '/includes/helper/split-last-word-from-string.php';


/**
 * Plugins files || modifications
 */

// CONTACT-FORM-7: Dequeue scripts globally and enable only on certain page-templates
require THEME_DIR . '/includes/plugins/contact-form/dequeue-scripts-selectively.php';

// TGMPA: install required plugins after theme activation
if ( is_admin() ) {
    require_once THEME_DIR . '/includes/plugins/tgmpa/tgm-plugin-activation.php';
}

// ACF: import necessary fields automatically (NOT WORKING for now, use .json in /assets)
// if ( is_admin() ) {
//     include_once THEME_DIR . '/includes/plugins/acf/acf-fields.php';
// }

// JETPACK: Load compatibility file
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require THEME_DIR . '/includes/plugins/jetpack/jetpack-setup.php';
// }


/**
 * Include admin files
 */
if ( is_admin() ) {
	require THEME_DIR . '/admin/include.php';
}






/**
 * Page templates: not needed to require, wordpress recognize templates
 * in 'page-templates' subdirectory
 * This throws error in admin.
 */
// require THEME_DIR . '/page-templates/about-us.php';
// require THEME_DIR . '/page-templates/contact.php';
