<?php
$bg_desktop = '';
$bg_tablet = '';
$bg_mobile = '';
if ( have_rows( 'home_testimonials_backgrounds' ) ) :
    while ( have_rows( 'home_testimonials_backgrounds' ) ) : the_row();

        // desktop background image
        $get_bg_desktop = get_sub_field( 'home_testimonials_backgrounds_desktop' );
        if ( $get_bg_desktop ) : $bg_desktop = $get_bg_desktop[ 'url' ]; endif;

        // tablet background image
        $get_bg_tablet = get_sub_field( 'home_testimonials_backgrounds_tablet' );
        if ( $get_bg_tablet ) : $bg_tablet = $get_bg_tablet[ 'url' ]; endif;

        // mobile background image
        $get_bg_mobile = get_sub_field( 'home_testimonials_backgrounds_mobile' );
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
                <h2 class="section-title section-title--light"><?php esc_html(  the_field( 'home_testimonials_title' ) ); ?></h2>
            </div>
            <div class="row home-testimonials__slider js-testimonials-slider">
                <?php $num_of_comments = 5; ?>
                <?php for ($i = 1; $i <= $num_of_comments; $i++) : ?>
                    <?php if ( have_rows( 'home_testimonials_comment_'.$i ) ) : ?>
                        <?php while ( have_rows( 'home_testimonials_comment_'.$i ) ) : the_row(); ?>
                            <?php $comment_checkbox = get_sub_field( 'home_testimonials_comment_'.$i.'_checkbox' ); ?>
                            <?php if ( $comment_checkbox ) : ?>
                                <div class="home-testimonials-comment active-comment">
                                    <p class="home-testimonials-comment-text"><?php esc_html( the_sub_field( 'home_testimonials_comment_'.$i.'_text' ) ); ?></p>
                                    <span class="home-testimonials-comment-author"><?php esc_html( the_sub_field( 'home_testimonials_comment_'.$i.'_author' ) ); ?></span>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
