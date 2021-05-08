<?php

/**
 * devwp Theme Customizer
 *
 * @package devwp
 * @since 1.0.0
 */


/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'devwp_customize_register' ) ) :
    function devwp_customize_register( $wp_customize ) {

        $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    	if ( isset( $wp_customize->selective_refresh ) ) {
    		$wp_customize->selective_refresh->add_partial(
    			'blogname',
    			array(
    				'selector'        => '.site-title a',
    				'render_callback' => 'devwp_customize_partial_blogname',
    			)
    		);
    		$wp_customize->selective_refresh->add_partial(
    			'blogdescription',
    			array(
    				'selector'        => '.site-description',
    				'render_callback' => 'devwp_customize_partial_blogdescription',
    			)
    		);
    	}
    }
endif;
add_action( 'customize_register', 'devwp_customize_register' );


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
if ( ! function_exists( 'devwp_customize_partial_blogname' ) ) :
    function devwp_customize_partial_blogname() {
    	bloginfo( 'name' );
    }
endif;

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
if ( ! function_exists( 'devwp_customize_partial_blogdescription' ) ) :
    function devwp_customize_partial_blogdescription() {
    	bloginfo( 'description' );
    }
endif;

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'devwp_customize_preview_js' ) ) :
    function devwp_customize_preview_js() {
    	wp_enqueue_script( 'devwp-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '1.0.0', true );
    }
endif;
add_action( 'customize_preview_init', 'devwp_customize_preview_js' );
