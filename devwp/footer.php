<?php
/**
 * The template for displaying the footer.
 *
 * Contains <footer>, <cookie-button> and the closing of the #site-wrapper.
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
                                        src="<?php echo esc_url( $logo[0] ); ?>"
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
        				    printf( esc_html__( 'Made by: %s.', 'devwp' ), '<a href="https://www.linkedin.com/in/simun-ivanac-7ba996190/" class="footer-copyright-author">Šimun Ivanac</a>' );
        				?>
                    </p>
                </div>
            </div>
        </div>
	</footer>
    <!-- !SITE-FOOTER -->

    <!-- COOKIE BUTTON -->
	<div id="cookie-button" class="cookie-button" title="Cookie settings">
		<svg width="58" height="58" viewBox="0 0 58 58">
			<defs>
				<filter id="Ellipse_2" x="0" y="0" width="58" height="58" filterUnits="userSpaceOnUse">
					<feOffset dy="3" input="SourceAlpha"/>
					<feGaussianBlur stdDeviation="3" result="blur"/>
					<feFlood flood-opacity="0.361"/>
					<feComposite operator="in" in2="blur"/>
					<feComposite in="SourceGraphic"/>
				</filter>
			</defs>
			<g class="svg-g" transform="translate(-11 -6111)">
				<g transform="matrix(1, 0, 0, 1, 11, 6111)" filter="url(#Ellipse_2)">
					<circle cx="20" cy="20" r="20" transform="translate(9 6)" fill="#fff"/>
				</g>
				<g transform="translate(-56 -367)">
					<g transform="translate(83.555 6491.155)">
						<path d="M19.688,16.594A3.094,3.094,0,1,1,16.594,13.5,3.094,3.094,0,0,1,19.688,16.594Z" transform="translate(-3.749 -3.749)" fill="none" stroke="#15151e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
						<path d="M20.476,15.939a1.7,1.7,0,0,0,.34,1.877l.062.062A2.064,2.064,0,1,1,17.96,20.8l-.062-.062a1.716,1.716,0,0,0-2.908,1.217v.175a2.063,2.063,0,0,1-4.125,0v-.093a1.7,1.7,0,0,0-1.114-1.557,1.7,1.7,0,0,0-1.877.34l-.062.062A2.064,2.064,0,1,1,4.893,17.96l.062-.062A1.716,1.716,0,0,0,3.738,14.99H3.563a2.063,2.063,0,1,1,0-4.125h.093A1.7,1.7,0,0,0,5.213,9.751a1.7,1.7,0,0,0-.34-1.877l-.062-.062A2.064,2.064,0,1,1,7.729,4.893l.062.062a1.7,1.7,0,0,0,1.877.34h.083a1.7,1.7,0,0,0,1.031-1.557V3.563a2.063,2.063,0,1,1,4.125,0v.093a1.716,1.716,0,0,0,2.908,1.217l.062-.062A2.064,2.064,0,1,1,20.8,7.729l-.062.062a1.7,1.7,0,0,0-.34,1.877v.083a1.7,1.7,0,0,0,1.557,1.031h.175a2.063,2.063,0,0,1,0,4.125h-.093a1.7,1.7,0,0,0-1.557,1.031Z" transform="translate(0 0)" fill="none" stroke="#15151e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
					</g>
				</g>
			</g>
		</svg>
	</div>
	<!-- !COOKIE BUTTON -->


</div>
<!-- !SITE-WRAPPER -->

<?php wp_footer(); ?>

</body>
</html>
