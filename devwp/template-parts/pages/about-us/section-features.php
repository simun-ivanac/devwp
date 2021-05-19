<?php
/**
 * Page section: features.
 *
 * @package devwp
 * @since 1.0.0
 */
?>

<section class="section section--about-features section--dark">
    <div class="container">
        <div class="content-holder about-features">
            <div class="row about-features__title">
                <h2 class="section-title section-title--light"><?php esc_html( the_field( 'about_features_title' ) ); ?></h2>
            </div>
            <div class="row about-features__content">
                <p class="section-description"><?php esc_html( the_field( 'about_features_description' ) ); ?></p>
            </div>
            <?php if ( have_rows( 'about_features_cards' ) ) : ?>
                <div class="row about-features__cards">
                    <?php while ( have_rows( 'about_features_cards' ) ) : the_row(); ?>
                        <?php $num_of_cards = 3; ?>
                        <?php for ($i = 1; $i <= $num_of_cards; $i++) : ?>
                            <?php if ( have_rows( 'about_features_card_'.$i ) ) : ?>
                                <?php while ( have_rows( 'about_features_card_'.$i ) ) : the_row(); ?>
                                    <div class="features-card">
                                        <span class="features-card-number"><?php esc_html( the_sub_field( 'about_features_card_'.$i.'_label' ) ); ?></span>
                                        <span class="features-card-description"><?php esc_html( the_sub_field( 'about_features_card_'.$i.'_description' ) ); ?></span>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
