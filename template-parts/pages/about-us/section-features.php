<section class="section section--about-features section--dark">
    <div class="container">
        <div class="content-holder about-features">
            <div class="row about-features__title">
                <h2 class="section-title section-title--light"><?php esc_html( the_field( 'about_us_title_2' ) ); ?></h2>
            </div>
            <div class="row about-features__content">
                <p class="section-description"><?php esc_html( the_field( 'about_us_description_2' ) ); ?></p>
            </div>
            <?php if ( have_rows( 'about_us_cards' ) ) : ?>
                <div class="row about-features__cards">
                    <?php while ( have_rows( 'about_us_cards' ) ) : the_row(); ?>
                        <?php if ( have_rows( 'card_1' ) ) : ?>
                            <?php while ( have_rows( 'card_1' ) ) : the_row(); ?>
                                <div class="features-card">
                                    <span class="features-card-number"><?php esc_html( the_sub_field( 'label_1' ) ); ?></span>
                                    <span class="features-card-description"><?php esc_html( the_sub_field( 'label_1_description' ) ); ?></span>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if ( have_rows( 'card_2' ) ) : ?>
                            <?php while ( have_rows( 'card_2' ) ) : the_row(); ?>
                                <div class="features-card">
                                    <span class="features-card-number"><?php esc_html( the_sub_field( 'label_2' ) ); ?></span>
                                    <span class="features-card-description"><?php esc_html( the_sub_field( 'label_2_description' ) ); ?></span>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if ( have_rows( 'card_3' ) ) : ?>
                            <?php while ( have_rows( 'card_3' ) ) : the_row(); ?>
                                <div class="features-card">
                                    <span class="features-card-number"><?php esc_html( the_sub_field( 'label_3' ) ); ?></span>
                                    <span class="features-card-description"><?php esc_html( the_sub_field( 'label_3_description' ) ); ?></span>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
