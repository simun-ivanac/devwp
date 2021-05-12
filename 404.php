<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package devwp
 * @since 1.0.0
 */

get_header();
?>


<div id="hero-image" class="hero-image hero-image--large">
    <div class="hero-image-overlay"></div>
</div>

<!-- SITE-CONTENT -->
<main id="site-content" class="site-content">
    <div id="page-content" class="page-content page-content--content-404">
        <div class="container">
            <header class="content-404-header">
                <h1 class="page-title"><?php esc_html_e( 'Page not found', 'devwp' ); ?></h1>
            </header>
            <div class="content-holder content-404">
                <section class="section__error-404">
                    <p class="error-404-description">
					    <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try search form?', 'devwp' ); ?>
				    </p>
				    <?php get_search_form(); ?>
                </section>
            </div>
        </div>
    </div>
</main>
<!-- !SITE-CONTENT -->
