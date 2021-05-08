<!-- HERO-IMAGE: large -->
<div id="hero-image" class="hero-image hero-image--large">
    <div class="hero-image-overlay"></div>
    <div class="container">
        <div class="content-holder hero-image-large">
            <div class="row">
                <?php $main_title = devwp_split_last_word_from_string( get_bloginfo( 'name' ) ) ?>
                <h1 class="site-title">
        			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title-link">
                        <?php esc_html_e( $main_title[ 'all_but_last_word' ] ); ?>
        				<span class="site-title-link-small">
        					<?php esc_html_e( $main_title[ 'last_word' ] ); ?>
        				</span>
        			</a>
        		</h1>
            </div>
        </div>
    </div>
</div>
<!-- !HERO-IMAGE: large -->
