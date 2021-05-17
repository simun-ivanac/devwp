<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> and <header> section
 *
 * @package devwp
 * @since 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- SITE-WRAPPER -->
<div id="site-wrapper" class="site-wrapper">

    <!-- MOBILE MENU -->
	<div id="mobile-menu" class="mobile-menu">
		<div class="mobile-menu-container js-mobile-menu-container">
			<div class="mobile-menu-header">
				<span class="mobile-heading">Menu</span>
				<span class="mobile-menu-icon js-close-mobile-menu">
					<span class="mobile-menu-icon-style"></span>
				</span>
			</div>
			<div class="mobile-menu-content js-mobile-menu-content"></div>
		</div>
	</div>
	<!-- !MOBILE MENU -->

    <!-- SITE-HEADER -->
	<header id="site-header" class="site-header">
        <div class="container">
            <div class="content-holder site-header-holder">
                <div class="row site-header__content">
                    <div class="header-content__branding">
                        <?php
                        if ( function_exists( 'the_custom_logo' ) ) :
                            the_custom_logo();
                        else :
                            ?>
                            <p class="site-title">
                                <a href="<?php esc_url_e( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                            </p>
                            <?php
                        endif;
                        ?>
                    </div>
                    <nav id="site-navigation" class="header-content__navigation clearfix">
                        <button class="primary-menu-icon js-toggle-primary-menu" aria-controls="primary-menu" aria-expanded="false">
                            <span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'devwp' ); ?></span>
                            <span class="primary-menu-icon-style"></span>
                        </button>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary-menu',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'primary-menu',
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
	</header>
    <!-- !SITE-HEADER -->
