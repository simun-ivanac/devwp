<?php
/**
 * This is front-page template.
 *
 * @package devwp
 * @since 1.0.0
 */

get_header();
?>

<?php get_template_part( 'template-parts/hero-image/hero-image-large' ); ?>


<!-- SITE-CONTENT -->
<main id="site-content" class="site-content">
    <div id="page-content" class="page-content">
        <?php get_template_part( 'template-parts/pages/homepage/section-intro' ); ?>
        <?php get_template_part( 'template-parts/pages/homepage/section-pricing' ); ?>
        <?php get_template_part( 'template-parts/pages/homepage/section-schedule' ); ?>
        <?php get_template_part( 'template-parts/pages/homepage/section-members' ); ?>
        <?php get_template_part( 'template-parts/pages/homepage/section-work' ); ?>
        <?php get_template_part( 'template-parts/pages/homepage/section-testimonials' ); ?>
        <?php get_template_part( 'template-parts/pages/homepage/section-news' ); ?>
        <?php get_template_part( 'template-parts/pages/homepage/section-location' ); ?>
    </div>
</main>
<!-- !SITE-CONTENT -->


<?php
get_footer();
