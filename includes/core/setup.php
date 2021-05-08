<?php

/**
 * Theme base support
 *
 * @package devwp
 * @since 1.0.0
 */


/**
* Sets up theme defaults and registers support for various WordPress features
*
* Note that this function is hooked into the after_setup_theme hook, which runs before the init hook
* The init hook is too late for some features
*
*/
if ( ! function_exists( 'devwp_setup' ) ) :
	function devwp_setup() {

		// Make theme available for translation
		load_theme_textdomain( 'devwp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title
		add_theme_support( 'title-tag' );

		// Enable Post Formats support for a theme
		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'image',
			'video',
		) );

		// Register navigation menus (output using wp_nav_menu())
		register_nav_menus( array(
			'primary-menu'  => esc_html__( 'Primary menu', 'devwp' ),
			'footer-menu'   => esc_html__( 'Footer menu', 'devwp' ),
			'footer-legals' => esc_html__( 'Footer legals', 'devwp' ),
		) );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		) );

		// Add theme support for selective refresh for widgets
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Set the content width in pixels, based on the theme's design and stylesheet
		$GLOBALS['content_width'] = apply_filters( 'devwp_content_width', 640 );

	}
endif;
add_action( 'after_setup_theme', 'devwp_setup' );
