<?php
/**
 * Page section: location.
 *
 * @package devwp
 * @since 1.0.0
 */
?>

<section class="section section--home-location section--dark">
    <div class="container">
        <div class="content-holder home-location">
            <div class="row home-location__title">
                <h2 class="section-title section-title--light"><?php esc_html( the_field( 'home_location_title' ) ); ?></h2>
            </div>
            <div class="row home-location__map js-map">
                <div class="home-map-preloader js-map-preloader"></div>
                <div class="home-map-fullsize-icon js-map-fullsize">
                    <svg class="home-map-fullsize-icon-svg" x="0px" y="0px" width="357px" height="357px" viewBox="0 0 357 357">
                        <g>
                        	<g>
                        		<path d="M51,229.5H0V357h127.5v-51H51V229.5z M0,127.5h51V51h76.5V0H0V127.5z M306,306h-76.5v51H357V229.5h-51V306z M229.5,0v51
                        			H306v76.5h51V0H229.5z"/>
                        	</g>
                        </g>
                    </svg>
                </div>
                <div class="js-map-data hidden"
                    data-address="<?php esc_html( the_field( 'home_location_address' ) ); ?>"
                    data-lat="<?php esc_html( the_field( 'home_location_latitude' ) ); ?>"
                    data-long="<?php esc_html( the_field( 'home_location_longitude' ) ); ?>"></div>
                <div id="map-holder" class="home-map-holder js-home-map-holder"></div>
                <div class="overlay-container js-overlay-container">
                    <div class="overlay-close js-map-close hidden"><span class="overlay-close-icon"></span></div>
                    <div class="overlay-preloader js-map-preloader hidden"></div>
                    <div id="map-holder-fullscreen" class="js-home-map-holder overlay-content"></div>
                </div>
            </div>
        </div>
    </div>
</section>
