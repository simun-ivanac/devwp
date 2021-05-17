<?php

/* Template Name: Contact */

/**
 * Template for "Contact" page.
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
        <?php get_template_part( 'template-parts/pages/contact/section-form' ); ?>
        <?php get_template_part( 'template-parts/pages/contact/section-location' ); ?>
    </div>
</main>
<!-- !SITE-CONTENT -->


<?php
get_footer();
