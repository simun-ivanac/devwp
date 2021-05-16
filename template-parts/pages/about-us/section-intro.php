<section class="section section--about-intro">
    <div class="container">
        <div class="content-holder about-intro clearfix">
            <div class="row about-intro__title">
                <?php $section_title = devwp_split_last_word_from_string( get_field( 'about_intro_title' ) ) ?>
    			<h2 class="section-title section-title--dark-mix">
    				<?php esc_html_e( $section_title[ 'all_but_last_word' ] ); ?>
    				<span class="section-title-colored"><?php esc_html_e( $section_title[ 'last_word' ] ); ?></span>
    			</h2>
            </div>
            <div class="row about-intro__image-holder">
                <?php $about_image = get_field( 'about_intro_image' ); ?>
                <?php if ( $about_image ) : ?>
                    <img
                        src="<?php echo esc_url( $about_image[ 'url' ] ); ?>"
                        class="about-intro-image"
                        width="<?php esc_html_e( $about_image[ 'width' ] ); ?>"
                        height="<?php esc_html_e( $about_image[ 'height' ] ); ?>"
                        alt="<?php esc_html_e( $about_image[ 'alt' ] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="row about-intro__content">
                <p class="section-description"><?php esc_html( the_field( 'about_intro_description' ) ); ?></p>
            </div>
        </div>
    </div>
</section>
