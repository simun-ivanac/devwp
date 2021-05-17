<?php
/**
 * Page section: work.
 *
 * @package devwp
 * @since 1.0.0
 */
?>

<section class="section section--home-work">
    <div class="container">
        <div class="content-holder home-work clearfix">
            <div class="row home-work__title">
                <?php $section_title = devwp_split_last_word_from_string( get_field( 'home_work_title' ) ) ?>
    			<h2 class="section-title section-title--dark-mix">
    				<?php esc_html_e( $section_title['all_but_last_word'] ); ?>
    				<span class="section-title-colored"><?php esc_html_e( $section_title['last_word'] ); ?></span>
    			</h2>
            </div>
            <div class="row home-work__image-holder">
                <?php $work_image = get_field( 'home_work_image' ); ?>
                <?php if ( $work_image ) : ?>
                    <img
                        src="<?php echo esc_url( $work_image[ 'url' ] ); ?>"
                        class="home-work-image"
                        width="<?php esc_html_e( $work_image[ 'width' ] ); ?>"
                        height="<?php esc_html_e( $work_image[ 'height' ] ); ?>"
                        alt="<?php esc_html_e( $work_image[ 'alt' ] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="row home-work__content">
                <p class="section-description"><?php esc_html( the_field( 'home_work_description' ) ); ?></p>
                <?php $work_link = get_field( 'home_work_link' ); ?>
                <?php if ( $work_link ) : ?>
                    <a href="<?php esc_url( the_sub_field( 'home_work_link' ) ); ?>" name="button" class="button home-work-button">Read more</a>
                <?php else : ?>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about-us' ) ) ); ?>" name="button" class="button home-work-button">Read more</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
