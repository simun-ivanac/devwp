<section class="section section--about-testimonials">
    <div class="container">
        <div class="content-holder about-testimonials">
            <div class="row about-testimonials__title">
                <h2 class="section-title section-title--dark-mix"><?php esc_html(  the_field( 'testimonials_title' ) ); ?></h2>
            </div>
            <div class="row about-testimonials__slider js-testimonials-slider">
                <?php if ( have_rows( 'comment_1' ) ) : ?>
                    <?php while ( have_rows( 'comment_1' ) ) : the_row(); ?>
                        <?php $comment_1_checkbox = get_sub_field( 'comment_1_checkbox' ); ?>
                        <?php if ( $comment_1_checkbox ) : ?>
                            <div class="about-testimonials-comment active-comment">
                                <p class="about-testimonials-comment-text"><?php esc_html( the_sub_field( 'comment_1_text' ) ); ?></p>
                                <span class="about-testimonials-comment-author"><?php esc_html( the_sub_field( 'comment_1_author' ) ); ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'comment_2' ) ) : ?>
                    <?php while ( have_rows( 'comment_2' ) ) : the_row(); ?>
                        <?php $comment_2_checkbox = get_sub_field( 'comment_2_checkbox' ); ?>
                        <?php if ( $comment_2_checkbox ) : ?>
                            <div class="about-testimonials-comment">
                                <p class="about-testimonials-comment-text"><?php esc_html( the_sub_field( 'comment_2_text' ) ); ?></p>
                                <span class="about-testimonials-comment-author"><?php esc_html( the_sub_field( 'comment_2_author' ) ); ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'comment_3' ) ) : ?>
                    <?php while ( have_rows( 'comment_3' ) ) : the_row(); ?>
                        <?php $comment_3_checkbox = get_sub_field( 'comment_3_checkbox' ); ?>
                        <?php if ( $comment_3_checkbox ) : ?>
                            <div class="about-testimonials-comment">
                                <p class="about-testimonials-comment-text"><?php esc_html( the_sub_field( 'comment_3_text' ) ); ?></p>
                                <span class="about-testimonials-comment-author"><?php esc_html( the_sub_field( 'comment_3_author' ) ); ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'comment_4' ) ) : ?>
                    <?php while ( have_rows( 'comment_4' ) ) : the_row(); ?>
                        <?php $comment_4_checkbox = get_sub_field( 'comment_4_checkbox' ); ?>
                        <?php if ( $comment_4_checkbox ) : ?>
                            <div class="about-testimonials-comment">
                                <p class="about-testimonials-comment-text"><?php esc_html( the_sub_field( 'comment_4_text' ) ); ?></p>
                                <span class="about-testimonials-comment-author"><?php esc_html( the_sub_field( 'comment_4_author' ) ); ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'comment_5' ) ) : ?>
                    <?php while ( have_rows( 'comment_5' ) ) : the_row(); ?>
                        <?php $comment_5_checkbox = get_sub_field( 'comment_5_checkbox' ); ?>
                        <?php if ( $comment_5_checkbox ) : ?>
                            <div class="about-testimonials-comment">
                                <p class="about-testimonials-comment-text"><?php esc_html( the_sub_field( 'comment_5_text' ) ); ?></p>
                                <span class="about-testimonials-comment-author"><?php esc_html( the_sub_field( 'comment_5_author' ) ); ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
