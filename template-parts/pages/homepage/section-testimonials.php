<?php
$bg_desktop = '';
$bg_tablet = '';
$bg_mobile = '';
if ( have_rows( 'testimonials_backgrounds' ) ) :
    while ( have_rows( 'testimonials_backgrounds' ) ) : the_row();

        // desktop background image
        $get_bg_desktop = get_sub_field( 'background_image_desktop' );
        if ( $get_bg_desktop ) : $bg_desktop = $get_bg_desktop[ 'url' ]; endif;

        // tablet background image
        $get_bg_tablet = get_sub_field( 'background_image_tablet' );
        if ( $get_bg_tablet ) : $bg_tablet = $get_bg_tablet[ 'url' ]; endif;

        // mobile background image
        $get_bg_mobile = get_sub_field( 'background_image_mobile' );
        if ( $get_bg_mobile ) : $bg_mobile = $get_bg_mobile[ 'url' ]; endif;

    endwhile;
endif;
?>

<section class="section section--home-testimonials section--dark js-set-testimonials-bg"
    data-desktop-bg="<?php esc_html_e( $bg_desktop ); ?>"
    data-tablet-bg="<?php esc_html_e( $bg_tablet ); ?>"
    data-mobile-bg="<?php esc_html_e( $bg_mobile ); ?>">
    <div class="home-testimonials-overlay"></div>
    <div class="container">
        <div class="content-holder home-testimonials">
            <div class="row home-testimonials__title">
                <h2 class="section-title section-title--light"><?php esc_html(  the_field( 'testimonials_title' ) ); ?></h2>
            </div>
            <div class="row home-testimonials__slider js-trigger-slider">
                <?php if ( have_rows( 'comment_1' ) ) : ?>
                    <?php while ( have_rows( 'comment_1' ) ) : the_row(); ?>
                        <?php $comment_1_checkbox = get_sub_field( 'comment_1_checkbox' ); ?>
                        <?php if ( $comment_1_checkbox ) : ?>
                            <div class="home-testimonials-comment active-comment">
                                <p class="home-testimonials-comment-text"><?php esc_html( the_sub_field( 'comment_1_text' ) ); ?></p>
                                <span class="home-testimonials-comment-author"><?php esc_html( the_sub_field( 'comment_1_author' ) ); ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'comment_2' ) ) : ?>
                    <?php while ( have_rows( 'comment_2' ) ) : the_row(); ?>
                        <?php $comment_2_checkbox = get_sub_field( 'comment_2_checkbox' ); ?>
                        <?php if ( $comment_2_checkbox ) : ?>
                            <div class="home-testimonials-comment">
                                <p class="home-testimonials-comment-text"><?php esc_html( the_sub_field( 'comment_2_text' ) ); ?></p>
                                <span class="home-testimonials-comment-author"><?php esc_html( the_sub_field( 'comment_2_author' ) ); ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'comment_3' ) ) : ?>
                    <?php while ( have_rows( 'comment_3' ) ) : the_row(); ?>
                        <?php $comment_3_checkbox = get_sub_field( 'comment_3_checkbox' ); ?>
                        <?php if ( $comment_3_checkbox ) : ?>
                            <div class="home-testimonials-comment">
                                <p class="home-testimonials-comment-text"><?php esc_html( the_sub_field( 'comment_3_text' ) ); ?></p>
                                <span class="home-testimonials-comment-author"><?php esc_html( the_sub_field( 'comment_3_author' ) ); ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'comment_4' ) ) : ?>
                    <?php while ( have_rows( 'comment_4' ) ) : the_row(); ?>
                        <?php $comment_4_checkbox = get_sub_field( 'comment_4_checkbox' ); ?>
                        <?php if ( $comment_4_checkbox ) : ?>
                            <div class="home-testimonials-comment">
                                <p class="home-testimonials-comment-text"><?php esc_html( the_sub_field( 'comment_4_text' ) ); ?></p>
                                <span class="home-testimonials-comment-author"><?php esc_html( the_sub_field( 'comment_4_author' ) ); ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'comment_5' ) ) : ?>
                    <?php while ( have_rows( 'comment_5' ) ) : the_row(); ?>
                        <?php $comment_5_checkbox = get_sub_field( 'comment_5_checkbox' ); ?>
                        <?php if ( $comment_5_checkbox ) : ?>
                            <div class="home-testimonials-comment">
                                <p class="home-testimonials-comment-text"><?php esc_html( the_sub_field( 'comment_5_text' ) ); ?></p>
                                <span class="home-testimonials-comment-author"><?php esc_html( the_sub_field( 'comment_5_author' ) ); ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
