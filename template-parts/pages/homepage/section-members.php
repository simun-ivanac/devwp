<section class="section section--home-members section--dark">
    <div class="container">
        <div class="content-holder home-members">
            <div class="row home-members__title">
                <h2 class="section-title section-title--light"><?php esc_html( the_field( 'home_members_title' ) ); ?></h2>
            </div>
            <div class="row home-members__group">
                <?php $num_of_members = 3; ?>
                <?php for ($i = 1; $i <= $num_of_members; $i++) : ?>
                    <?php if ( have_rows( 'home_members_'.$i ) ) : ?>
                        <div class="member-item">
                            <?php while ( have_rows( 'home_members_'.$i ) ) : the_row(); ?>
                                <div class="member-item-image-holder">
                                    <?php $member_image = get_sub_field( 'home_members_'.$i.'_image' ); ?>
                                    <?php if ( $member_image ) : ?>
                                        <img
                                        class="member-item-image"
                                        data-src="<?php echo esc_url( $member_image[ 'url' ] ); ?>"
                                        width="<?php esc_html_e( $member_image[ 'width' ] ); ?>"
                                        height="<?php esc_html_e( $member_image[ 'height' ] ); ?>"
                                        alt="<?php esc_html_e( $member_image[ 'alt' ] ); ?>" />
                                    <?php endif; ?>
                                    <div class="member-item-image-overlay"></div>
                                </div>
                                <div class="member-item-info">
                                    <h5 class="member-item-type"><?php esc_html( the_sub_field( 'home_members_'.$i.'_type' ) ); ?></h5>
                                    <h4 class="member-item-name"><?php esc_html( the_sub_field( 'home_members_'.$i.'_name' ) ); ?></h4>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
