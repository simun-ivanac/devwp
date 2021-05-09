<?php

/* Template Name: About us */

/**
 * Template for "About us" page.
 *
 * @package devwp
 * @since 1.0.0
 */

get_header();
?>

<?php get_template_part( 'template-parts/hero-image/hero-image-small' ); ?>


<!-- SITE-CONTENT -->
<main id="site-content" class="site-content">
    <div id="page-content" class="page-content">
        <?php get_template_part( 'template-parts/pages/about-us/section-intro' ); ?>
        <?php get_template_part( 'template-parts/pages/about-us/section-features' ); ?>
        <?php get_template_part( 'template-parts/pages/about-us/section-testimonials' ); ?>
        <?php get_template_part( 'template-parts/pages/about-us/section-sponsors' ); ?>
    </div>
</main>
<!-- !SITE-CONTENT -->


<?php
get_footer();
