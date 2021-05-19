<?php

/**
 * Widgets setup - register widget area.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_widgets_setup' ) ) :
    function devwp_widgets_setup() {

        register_sidebar( array(
    		'name'          => esc_html__( 'Sidebar-1', 'devwp' ),
    		'id'            => 'sidebar-1',
    		'description'   => esc_html__( 'Add widgets here.', 'devwp' ),
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h2 class="widget-title">',
    		'after_title'   => '</h2>',
    	) );

    }
endif;
add_action( 'widgets_init', 'devwp_widgets_setup' );
