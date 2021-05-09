<section class="section section--about-sponsors">
    <div class="container">
        <div class="content-holder about-sponsors">
            <div class="row about-sponsors-slider js-sponsors-slider">
                <?php if ( have_rows( '' ) ): ?>
                <?php while ( have_rows( '' ) ): the_row(); ?>
                    <?php if ( have_rows( 'sponsor_1' ) ) : ?>
                        <?php while ( have_rows( 'sponsor_1' ) ) : the_row(); ?>
                            <?php $sponsor_1_image = get_sub_field( 'sponsor_1_image' ); ?>
                            <?php $sponsor_1_checkbox = get_sub_field( 'sponsor_1_checkbox' ); ?>
                            <?php if ( $sponsor_1_image && $sponsor_1_checkbox ) : ?>
                                <div class="sponsor-item">
                                    <?php $sponsor_1_link =  get_sub_field( 'sponsor_1_link' ); ?>
                                    <?php if ( $sponsor_1_link ) : ?>
                                        <a href="<?php esc_url( the_sub_field( 'sponsor_1_link' ) ); ?>" class="sponsor-item-link" target="_blank">
                                            <img
                                                src="<?php echo esc_url( $sponsor_1_image['sizes']['wp-devwp-post'] ); ?>"
                                                class="sponsor-item-image"
                                                alt="<?php esc_html_e( $sponsor_1_image['caption'] ); ?>"
                                                width="<?php esc_html_e( $sponsor_1_image['sizes']['wp-devwp-post-width'] ); ?>"
                                                height="<?php esc_html_e( $sponsor_1_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                        </a>
                                    <?php else : ?>
                                        <img
                                            src="<?php echo esc_url( $sponsor_1_image['sizes']['wp-devwp-post'] ); ?>"
                                            class="sponsor-item-image"
                                            alt="<?php esc_html_e( $sponsor_1_image['caption'] ); ?>"
                                            width="<?php esc_html_e( $sponsor_1_image['sizes']['wp-devwp-post-width'] ); ?>"
                                            height="<?php esc_html_e( $sponsor_1_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'sponsor_2' ) ) : ?>
                        <?php while ( have_rows( 'sponsor_2' ) ) : the_row(); ?>
                            <?php $sponsor_2_image = get_sub_field( 'sponsor_2_image' ); ?>
                            <?php $sponsor_2_checkbox = get_sub_field( 'sponsor_2_checkbox' ); ?>
                            <?php if ( $sponsor_2_image && $sponsor_2_checkbox ) : ?>
                                <div class="sponsor-item">
                                    <?php $sponsor_2_link =  get_sub_field( 'sponsor_2_link' ); ?>
                                    <?php if ( $sponsor_2_link ) : ?>
                                        <a href="<?php esc_url( the_sub_field( 'sponsor_1_link' ) ); ?>" class="sponsor-item-link" target="_blank">
                                            <img
                                                src="<?php echo esc_url( $sponsor_2_image['sizes']['wp-devwp-post'] ); ?>"
                                                class="sponsor-item-image"
                                                alt="<?php esc_html_e( $sponsor_2_image['caption'] ); ?>"
                                                width="<?php esc_html_e( $sponsor_2_image['sizes']['wp-devwp-post-width'] ); ?>"
                                                height="<?php esc_html_e( $sponsor_2_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                        </a>
                                    <?php else : ?>
                                        <img
                                            src="<?php echo esc_url( $sponsor_2_image['sizes']['wp-devwp-post'] ); ?>"
                                            class="sponsor-item-image"
                                            alt="<?php esc_html_e( $sponsor_2_image['caption'] ); ?>"
                                            width="<?php esc_html_e( $sponsor_2_image['sizes']['wp-devwp-post-width'] ); ?>"
                                            height="<?php esc_html_e( $sponsor_2_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'sponsor_3' ) ) : ?>
                        <?php while ( have_rows( 'sponsor_3' ) ) : the_row(); ?>
                            <?php $sponsor_3_image = get_sub_field( 'sponsor_3_image' ); ?>
                            <?php $sponsor_3_checkbox = get_sub_field( 'sponsor_3_checkbox' ); ?>
                            <?php if ( $sponsor_3_image && $sponsor_3_checkbox ) : ?>
                                <div class="sponsor-item">
                                    <?php $sponsor_3_link =  get_sub_field( 'sponsor_3_link' ); ?>
                                    <?php if ( $sponsor_3_link ) : ?>
                                        <a href="<?php esc_url( the_sub_field( 'sponsor_1_link' ) ); ?>" class="sponsor-item-link" target="_blank">
                                            <img
                                                src="<?php echo esc_url( $sponsor_3_image['sizes']['wp-devwp-post'] ); ?>"
                                                class="sponsor-item-image"
                                                alt="<?php esc_html_e( $sponsor_3_image['caption'] ); ?>"
                                                width="<?php esc_html_e( $sponsor_3_image['sizes']['wp-devwp-post-width'] ); ?>"
                                                height="<?php esc_html_e( $sponsor_3_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                        </a>
                                    <?php else : ?>
                                        <img
                                            src="<?php echo esc_url( $sponsor_3_image['sizes']['wp-devwp-post'] ); ?>"
                                            class="sponsor-item-image"
                                            alt="<?php esc_html_e( $sponsor_3_image['caption'] ); ?>"
                                            width="<?php esc_html_e( $sponsor_3_image['sizes']['wp-devwp-post-width'] ); ?>"
                                            height="<?php esc_html_e( $sponsor_3_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'sponsor_4' ) ) : ?>
                        <?php while ( have_rows( 'sponsor_4' ) ) : the_row(); ?>
                            <?php $sponsor_4_image = get_sub_field( 'sponsor_4_image' ); ?>
                            <?php $sponsor_4_checkbox = get_sub_field( 'sponsor_4_checkbox' ); ?>
                            <?php if ( $sponsor_4_image && $sponsor_4_checkbox ) : ?>
                                <div class="sponsor-item">
                                    <?php $sponsor_4_link =  get_sub_field( 'sponsor_4_link' ); ?>
                                    <?php if ( $sponsor_4_link ) : ?>
                                        <a href="<?php esc_url( the_sub_field( 'sponsor_1_link' ) ); ?>" class="sponsor-item-link" target="_blank">
                                            <img
                                                src="<?php echo esc_url( $sponsor_4_image['sizes']['wp-devwp-post'] ); ?>"
                                                class="sponsor-item-image"
                                                alt="<?php esc_html_e( $sponsor_4_image['caption'] ); ?>"
                                                width="<?php esc_html_e( $sponsor_4_image['sizes']['wp-devwp-post-width'] ); ?>"
                                                height="<?php esc_html_e( $sponsor_4_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                        </a>
                                    <?php else : ?>
                                        <img
                                            src="<?php echo esc_url( $sponsor_4_image['sizes']['wp-devwp-post'] ); ?>"
                                            class="sponsor-item-image"
                                            alt="<?php esc_html_e( $sponsor_4_image['caption'] ); ?>"
                                            width="<?php esc_html_e( $sponsor_4_image['sizes']['wp-devwp-post-width'] ); ?>"
                                            height="<?php esc_html_e( $sponsor_4_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'sponsor_5' ) ) : ?>
                        <?php while ( have_rows( 'sponsor_5' ) ) : the_row(); ?>
                            <?php $sponsor_5_image = get_sub_field( 'sponsor_5_image' ); ?>
                            <?php $sponsor_5_checkbox = get_sub_field( 'sponsor_5_checkbox' ); ?>
                            <?php if ( $sponsor_5_image && $sponsor_5_checkbox ) : ?>
                                <div class="sponsor-item">
                                    <?php $sponsor_5_link =  get_sub_field( 'sponsor_5_link' ); ?>
                                    <?php if ( $sponsor_5_link ) : ?>
                                        <a href="<?php esc_url( the_sub_field( 'sponsor_1_link' ) ); ?>" class="sponsor-item-link" target="_blank">
                                            <img
                                                src="<?php echo esc_url( $sponsor_5_image['sizes']['wp-devwp-post'] ); ?>"
                                                class="sponsor-item-image"
                                                alt="<?php esc_html_e( $sponsor_5_image['caption'] ); ?>"
                                                width="<?php esc_html_e( $sponsor_5_image['sizes']['wp-devwp-post-width'] ); ?>"
                                                height="<?php esc_html_e( $sponsor_5_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                        </a>
                                    <?php else : ?>
                                        <img
                                            src="<?php echo esc_url( $sponsor_5_image['sizes']['wp-devwp-post'] ); ?>"
                                            class="sponsor-item-image"
                                            alt="<?php esc_html_e( $sponsor_5_image['caption'] ); ?>"
                                            width="<?php esc_html_e( $sponsor_5_image['sizes']['wp-devwp-post-width'] ); ?>"
                                            height="<?php esc_html_e( $sponsor_5_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'sponsor_6' ) ) : ?>
                        <?php while ( have_rows( 'sponsor_6' ) ) : the_row(); ?>
                            <?php $sponsor_6_image = get_sub_field( 'sponsor_6_image' ); ?>
                            <?php $sponsor_6_checkbox = get_sub_field( 'sponsor_6_checkbox' ); ?>
                            <?php if ( $sponsor_6_image && $sponsor_6_checkbox ) : ?>
                                <div class="sponsor-item">
                                    <?php $sponsor_6_link =  get_sub_field( 'sponsor_6_link' ); ?>
                                    <?php if ( $sponsor_6_link ) : ?>
                                        <a href="<?php esc_url( the_sub_field( 'sponsor_1_link' ) ); ?>" class="sponsor-item-link" target="_blank">
                                            <img
                                                src="<?php echo esc_url( $sponsor_6_image['sizes']['wp-devwp-post'] ); ?>"
                                                class="sponsor-item-image"
                                                alt="<?php esc_html_e( $sponsor_6_image['caption'] ); ?>"
                                                width="<?php esc_html_e( $sponsor_6_image['sizes']['wp-devwp-post-width'] ); ?>"
                                                height="<?php esc_html_e( $sponsor_6_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                        </a>
                                    <?php else : ?>
                                        <img
                                            src="<?php echo esc_url( $sponsor_6_image['sizes']['wp-devwp-post'] ); ?>"
                                            class="sponsor-item-image"
                                            alt="<?php esc_html_e( $sponsor_6_image['caption'] ); ?>"
                                            width="<?php esc_html_e( $sponsor_6_image['sizes']['wp-devwp-post-width'] ); ?>"
                                            height="<?php esc_html_e( $sponsor_6_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'sponsor_7' ) ) : ?>
                        <?php while ( have_rows( 'sponsor_7' ) ) : the_row(); ?>
                            <?php $sponsor_7_image = get_sub_field( 'sponsor_7_image' ); ?>
                            <?php $sponsor_7_checkbox = get_sub_field( 'sponsor_7_checkbox' ); ?>
                            <?php if ( $sponsor_7_image && $sponsor_7_checkbox ) : ?>
                                <div class="sponsor-item">
                                    <?php $sponsor_7_link =  get_sub_field( 'sponsor_7_link' ); ?>
                                    <?php if ( $sponsor_7_link ) : ?>
                                        <a href="<?php esc_url( the_sub_field( 'sponsor_1_link' ) ); ?>" class="sponsor-item-link" target="_blank">
                                            <img
                                                src="<?php echo esc_url( $sponsor_7_image['sizes']['wp-devwp-post'] ); ?>"
                                                class="sponsor-item-image"
                                                alt="<?php esc_html_e( $sponsor_7_image['caption'] ); ?>"
                                                width="<?php esc_html_e( $sponsor_7_image['sizes']['wp-devwp-post-width'] ); ?>"
                                                height="<?php esc_html_e( $sponsor_7_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                        </a>
                                    <?php else : ?>
                                        <img
                                            src="<?php echo esc_url( $sponsor_7_image['sizes']['wp-devwp-post'] ); ?>"
                                            class="sponsor-item-image"
                                            alt="<?php esc_html_e( $sponsor_7_image['caption'] ); ?>"
                                            width="<?php esc_html_e( $sponsor_7_image['sizes']['wp-devwp-post-width'] ); ?>"
                                            height="<?php esc_html_e( $sponsor_7_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'sponsor_8' ) ) : ?>
                        <?php while ( have_rows( 'sponsor_8' ) ) : the_row(); ?>
                            <?php $sponsor_8_image = get_sub_field( 'sponsor_8_image' ); ?>
                            <?php $sponsor_8_checkbox = get_sub_field( 'sponsor_8_checkbox' ); ?>
                            <?php if ( $sponsor_8_image && $sponsor_8_checkbox ) : ?>
                                <div class="sponsor-item">
                                    <?php $sponsor_8_link =  get_sub_field( 'sponsor_8_link' ); ?>
                                    <?php if ( $sponsor_8_link ) : ?>
                                        <a href="<?php esc_url( the_sub_field( 'sponsor_1_link' ) ); ?>" class="sponsor-item-link" target="_blank">
                                            <img
                                                src="<?php echo esc_url( $sponsor_8_image['sizes']['wp-devwp-post'] ); ?>"
                                                class="sponsor-item-image"
                                                alt="<?php esc_html_e( $sponsor_8_image['caption'] ); ?>"
                                                width="<?php esc_html_e( $sponsor_8_image['sizes']['wp-devwp-post-width'] ); ?>"
                                                height="<?php esc_html_e( $sponsor_8_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                        </a>
                                    <?php else : ?>
                                        <img
                                            src="<?php echo esc_url( $sponsor_8_image['sizes']['wp-devwp-post'] ); ?>"
                                            class="sponsor-item-image"
                                            alt="<?php esc_html_e( $sponsor_8_image['caption'] ); ?>"
                                            width="<?php esc_html_e( $sponsor_8_image['sizes']['wp-devwp-post-width'] ); ?>"
                                            height="<?php esc_html_e( $sponsor_8_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'sponsor_9' ) ) : ?>
                        <?php while ( have_rows( 'sponsor_9' ) ) : the_row(); ?>
                            <?php $sponsor_9_image = get_sub_field( 'sponsor_9_image' ); ?>
                            <?php $sponsor_9_checkbox = get_sub_field( 'sponsor_9_checkbox' ); ?>
                            <?php if ( $sponsor_9_image && $sponsor_9_checkbox ) : ?>
                                <div class="sponsor-item">
                                    <?php $sponsor_9_link =  get_sub_field( 'sponsor_9_link' ); ?>
                                    <?php if ( $sponsor_9_link ) : ?>
                                        <a href="<?php esc_url( the_sub_field( 'sponsor_1_link' ) ); ?>" class="sponsor-item-link" target="_blank">
                                            <img
                                                src="<?php echo esc_url( $sponsor_9_image['sizes']['wp-devwp-post'] ); ?>"
                                                class="sponsor-item-image"
                                                alt="<?php esc_html_e( $sponsor_9_image['caption'] ); ?>"
                                                width="<?php esc_html_e( $sponsor_9_image['sizes']['wp-devwp-post-width'] ); ?>"
                                                height="<?php esc_html_e( $sponsor_9_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                        </a>
                                    <?php else : ?>
                                        <img
                                            src="<?php echo esc_url( $sponsor_9_image['sizes']['wp-devwp-post'] ); ?>"
                                            class="sponsor-item-image"
                                            alt="<?php esc_html_e( $sponsor_9_image['caption'] ); ?>"
                                            width="<?php esc_html_e( $sponsor_9_image['sizes']['wp-devwp-post-width'] ); ?>"
                                            height="<?php esc_html_e( $sponsor_9_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'sponsor_10' ) ) : ?>
                        <?php while ( have_rows( 'sponsor_10' ) ) : the_row(); ?>
                            <?php $sponsor_10_image = get_sub_field( 'sponsor_10_image' ); ?>
                            <?php $sponsor_10_checkbox = get_sub_field( 'sponsor_10_checkbox' ); ?>
                            <?php if ( $sponsor_10_image && $sponsor_10_checkbox ) : ?>
                                <div class="sponsor-item">
                                    <?php $sponsor_10_link =  get_sub_field( 'sponsor_10_link' ); ?>
                                    <?php if ( $sponsor_10_link ) : ?>
                                        <a href="<?php esc_url( the_sub_field( 'sponsor_1_link' ) ); ?>" class="sponsor-item-link" target="_blank">
                                            <img
                                                src="<?php echo esc_url( $sponsor_10_image['sizes']['wp-devwp-post'] ); ?>"
                                                class="sponsor-item-image"
                                                alt="<?php esc_html_e( $sponsor_10_image['caption'] ); ?>"
                                                width="<?php esc_html_e( $sponsor_10_image['sizes']['wp-devwp-post-width'] ); ?>"
                                                height="<?php esc_html_e( $sponsor_10_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                        </a>
                                    <?php else : ?>
                                        <img
                                            src="<?php echo esc_url( $sponsor_10_image['sizes']['wp-devwp-post'] ); ?>"
                                            class="sponsor-item-image"
                                            alt="<?php esc_html_e( $sponsor_10_image['caption'] ); ?>"
                                            width="<?php esc_html_e( $sponsor_10_image['sizes']['wp-devwp-post-width'] ); ?>"
                                            height="<?php esc_html_e( $sponsor_10_image['sizes']['wp-devwp-post-height'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
