<section class="section section--home-pricing section--dark">
    <div class="container">
        <div class="content-holder home-pricing">
            <div class="row home-pricing__title">
                <h2 class="section-title section-title--light"><?php esc_html( the_field( 'pricing_title' ) ); ?></h2>
            </div>
            <div class="row home-pricing__cards">
                <?php if ( have_rows( 'pricing_option_1' ) ) : ?>
                    <div class="card-item">
                        <?php while ( have_rows('pricing_option_1') ) : the_row(); ?>
                            <span class="card-item-price-number"><?php esc_html( the_sub_field( 'option_price' ) ); ?></span>
                            <span class="card-item-price-currency"><?php esc_html( the_sub_field( 'option_currency_period' ) ); ?></span>
                            <span class="card-item-period"><?php esc_html( the_sub_field( 'option_description' ) ); ?></span>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if ( have_rows( 'pricing_option_2' ) ) : ?>
                    <div class="card-item">
                        <?php while ( have_rows('pricing_option_2') ) : the_row(); ?>
                            <span class="card-item-price-number"><?php esc_html( the_sub_field( 'option_price' ) ); ?></span>
                            <span class="card-item-price-currency"><?php esc_html( the_sub_field( 'option_currency_period' ) ); ?></span>
                            <span class="card-item-period"><?php esc_html( the_sub_field( 'option_description' ) ); ?></span>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if ( have_rows( 'pricing_option_3' ) ) : ?>
                    <div class="card-item">
                        <?php while ( have_rows('pricing_option_3') ) : the_row(); ?>
                            <span class="card-item-price-number"><?php esc_html( the_sub_field( 'option_price' ) ); ?></span>
                            <span class="card-item-price-currency"><?php esc_html( the_sub_field( 'option_currency_period' ) ); ?></span>
                            <span class="card-item-period"><?php esc_html( the_sub_field( 'option_description' ) ); ?></span>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if ( have_rows( 'pricing_option_4' ) ) : ?>
                    <div class="card-item">
                        <?php while ( have_rows('pricing_option_4') ) : the_row(); ?>
                            <span class="card-item-price-number"><?php esc_html( the_sub_field( 'option_price' ) ); ?></span>
                            <span class="card-item-price-currency"><?php esc_html( the_sub_field( 'option_currency_period' ) ); ?></span>
                            <span class="card-item-period"><?php esc_html( the_sub_field( 'option_description' ) ); ?></span>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if ( have_rows( 'pricing_option_5' ) ) : ?>
                    <div class="card-item">
                        <?php while ( have_rows('pricing_option_5') ) : the_row(); ?>
                            <span class="card-item-price-number"><?php esc_html( the_sub_field( 'option_price' ) ); ?></span>
                            <span class="card-item-price-currency"><?php esc_html( the_sub_field( 'option_currency_period' ) ); ?></span>
                            <span class="card-item-period"><?php esc_html( the_sub_field( 'option_description' ) ); ?></span>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
