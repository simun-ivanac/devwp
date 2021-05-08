<section class="section section--home-location section--dark">
    <div class="container">
        <div class="content-holder home-location">
            <div class="row home-location__title">
                <h2 class="section-title section-title--light"><?php esc_html( the_field( 'location_title' ) ); ?></h2>
            </div>
            <div class="row home-location__map">
                <div class="home-map-preloader"></div>
                <div class="home-map-address-cloud hidden"><?php esc_html( the_field( 'location_address' ) ); ?></div>
                <div id="home-map-holder" class="home-map-holder js-home-map-holder"></div>
            </div>
        </div>
    </div>
</section>
