<?php
/**
 * TGMPA required plugins
 *
 * @package devwp
 * @version 1.0.0
 */

require_once get_template_directory() . '/includes/plugins/tgmpa/class-tgm-plugin-activation.php';

if ( ! function_exists( 'devwp_register_required_plugins' ) ) :
    function devwp_register_required_plugins() {

        $plugins = array(

            // required advanced custom fields
            array(
                'name'     => 'Advanced Custom Fields',
                'slug'     => 'advanced-custom-fields',
                'required' => true,
            ),

            // require advanced custom fields add-on: table
            array(
                'name'     => 'Advanced Custom Fields: Table Field',
                'slug'     => 'advanced-custom-fields-table-field',
                'required' => true,
            ),

            // required contact form 7
            array(
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => true,
            ),

        );

        // config
        $config = array(
    		'id'           => 'devwp',
    		'default_path' => '',
    		'menu'         => 'install-required-plugins',
    		'parent_slug'  => 'themes.php',
    		'capability'   => 'edit_theme_options',
    		'has_notices'  => true,
    		'dismissable'  => true,
    		'dismiss_msg'  => '',
    		'is_automatic' => true,
    		'message'      => '',
        );

        tgmpa( $plugins, $config );

    }
endif;
add_action( 'tgmpa_register', 'devwp_register_required_plugins' );
