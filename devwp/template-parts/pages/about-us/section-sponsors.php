<?php
/**
 * Page section: sponsors.
 *
 * @package devwp
 * @since 1.0.0
 */
?>

<section class="section section--about-sponsors">
    <div class="container">
        <div class="content-holder about-sponsors">
            <div class="row about-sponsors-slider js-sponsors-slider">
                <?php $num_of_sponsors = 10; ?>
                <?php for ($i = 1; $i <= $num_of_sponsors; $i++) : ?>
                    <?php if ( have_rows( 'about_sponsor_'.$i ) ) : ?>
                        <?php while ( have_rows( 'about_sponsor_'.$i ) ) : the_row(); ?>
                            <?php $sponsor_image = get_sub_field( 'about_sponsor_'.$i.'_image' ); ?>
                            <?php $sponsor_checkbox = get_sub_field( 'about_sponsor_'.$i.'_checkbox' ); ?>
                            <?php if ( $sponsor_image && $sponsor_checkbox ) : ?>
                                <div class="sponsor-item js-sponsor-item">
                                    <?php $sponsor_link =  get_sub_field( 'about_sponsor_'.$i.'_link' ); ?>
                                    <?php if ( $sponsor_link ) : ?>
                                        <a href="<?php esc_url( the_sub_field( 'about_sponsor_'.$i.'_link' ) ); ?>" class="sponsor-item-link" target="_blank">
                                            <img
                                            src="<?php echo esc_url( $sponsor_image['sizes']['wp-devwp-post'] ); ?>"
                                            class="sponsor-item-image"
                                            alt="<?php esc_html_e( $sponsor_image['caption'] ); ?>"
                                            width="<?php esc_html_e( $sponsor_image['sizes']['wp-devwp-post-width'] ); ?>"
                                            height="<?php esc_html_e( $sponsor_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                        </a>
                                    <?php else : ?>
                                        <img
                                        src="<?php echo esc_url( $sponsor_image['sizes']['wp-devwp-post'] ); ?>"
                                        class="sponsor-item-image"
                                        alt="<?php esc_html_e( $sponsor_image['caption'] ); ?>"
                                        width="<?php esc_html_e( $sponsor_image['sizes']['wp-devwp-post-width'] ); ?>"
                                        height="<?php esc_html_e( $sponsor_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
