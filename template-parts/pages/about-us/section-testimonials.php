<?php
/**
 * Page section: testimonials.
 *
 * @package devwp
 * @since 1.0.0
 */
?>

<section class="section section--about-testimonials">
    <div class="container">
        <div class="content-holder about-testimonials">
            <div class="row about-testimonials__title">
                <h2 class="section-title section-title--dark-mix"><?php esc_html(  the_field( 'about_testimonials_title' ) ); ?></h2>
            </div>
            <div class="row about-testimonials__slider js-testimonials-slider">
                <?php $num_of_comments = 5; ?>
                <?php for ($i = 1; $i <= $num_of_comments; $i++) : ?>
                    <?php if ( have_rows( 'about_testimonials_comment_'.$i ) ) : ?>
                        <?php while ( have_rows( 'about_testimonials_comment_'.$i ) ) : the_row(); ?>
                            <?php $comment_checkbox = get_sub_field( 'about_testimonials_comment_'.$i.'_checkbox' ); ?>
                            <?php if ( $comment_checkbox ) : ?>
                                <div class="about-testimonials-comment active-comment">
                                    <p class="about-testimonials-comment-text"><?php esc_html( the_sub_field( 'about_testimonials_comment_'.$i.'_text' ) ); ?></p>
                                    <span class="about-testimonials-comment-author"><?php esc_html( the_sub_field( 'about_testimonials_comment_'.$i.'_author' ) ); ?></span>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
