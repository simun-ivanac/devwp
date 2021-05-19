<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @package devwp
 * @since 1.0.0
 */

get_header();
?>


<?php get_template_part( 'template-parts/hero-image/hero-image-small' ); ?>


<!-- SITE-CONTENT -->
<main id="site-content" class="site-content">
    <div id="page-content" class="page-content page-content--content-page">
        <div class="container">
            <div class="content-holder content-page">

                <section class="section__page">
                    <?php
                	while ( have_posts() ) :

                		the_post();
                		get_template_part( 'template-parts/content/content', 'page' );

                		// If comments are open or we have at least one comment, load up the comment template.
                		if ( comments_open() || get_comments_number() ) :
                			comments_template();
                		endif;

                	endwhile;
                	?>
                </section>

                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>
</main>
<!-- !SITE-CONTENT -->


<?php
get_footer();
