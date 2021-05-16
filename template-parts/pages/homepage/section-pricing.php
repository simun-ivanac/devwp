<section class="section section--home-pricing section--dark">
    <div class="container">
        <div class="content-holder home-pricing">
            <div class="row home-pricing__title">
                <h2 class="section-title section-title--light"><?php esc_html( the_field( 'home_pricing_title' ) ); ?></h2>
            </div>
            <div class="row home-pricing__cards">
                <?php $num_of_options = 5; ?>
                <?php for ($i = 1; $i <= $num_of_options; $i++) : ?>
                    <?php if ( have_rows( 'home_pricing_option_'.$i ) ) : ?>
                        <div class="pricing-card">
                            <?php while ( have_rows( 'home_pricing_option_'.$i ) ) : the_row(); ?>
                                <span class="pricing-card-number"><?php esc_html( the_sub_field( 'home_pricing_option_'.$i.'_price' ) ); ?></span>
                                <span class="pricing-card-currency"><?php esc_html( the_sub_field( 'home_pricing_option_'.$i.'_currency_period' ) ); ?></span>
                                <span class="pricing-card-period"><?php esc_html( the_sub_field( 'home_pricing_option_'.$i.'_description' ) ); ?></span>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
