<?php
/**
 * The template for displaying the footer
 *
 * Contains <footer> and the closing of the #site-wrapper
 *
 * @package devwp
 * @since 1.0.0
 */

?>
    <!-- SITE-FOOTER -->
	<footer id="site-footer" class="site-footer">
        <div class="container">
            <div class="content-holder site-footer-holder">
                <div class="row site-footer__content">
                    <div class="footer-content">
                        <div class="footer-content__menu">
                            <?php
        					wp_nav_menu( array(
        						'theme_location' => 'footer-menu',
        						'menu_id'        => 'footer-menu',
        						'menu_class'     => 'footer-menu',
        					) );
        					?>
                        </div>
                        <div class="footer-content__logo">
                            <?php
        					if ( has_custom_logo() ) :
        						$logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full');
                                ?>
        						<a href="<?php echo ( home_url( '/' ) ) ?>" class="custom-logo-link">
        							<img
                                        data-src="<?php echo esc_url( $logo[0] ); ?>"
                                        width="<?php esc_html_e( $logo[1] ); ?>"
                                        height="<?php esc_html_e( $logo[2] ); ?>"
                                        class="custom-logo"
                                        alt="<?php echo get_bloginfo( 'name' ) ?>">
        						</a>
        					<?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row site-footer__documents">
                    <div class="footer-documents">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-legals',
                            'menu_id'        => 'footer-legals',
                            'menu_class'     => 'footer-legals',
                        ) );
                        ?>
                    </div>
                </div>
                <div class="row site-footer__copyright">
                    <p class="footer-copyright">
                        <?php esc_html_e( 'Copyright ' . date("Y") . ' &copy; All rights reserved.', 'devwp' ); ?>
                        <br class="footer-copyright-line-break">
                        <?php
        				    /* translators: %s: Author's name. */
        				    printf( esc_html__( 'Made by: %s.', 'devwp' ), '<a href="#" class="footer-copyright-author">Šimun Ivanac</a>' );
        				?>
                    </p>
                </div>
            </div>
        </div>
	</footer>
    <!-- !SITE-FOOTER -->

</div>
<!-- !SITE-WRAPPER -->

<?php wp_footer(); ?>

</body>
</html>
