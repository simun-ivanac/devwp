<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css)
 * It is used to display a page when nothing more specific matches a query
 *
 * @package devwp
 * @since 1.0.0
 */

get_header();
?>


<?php get_template_part( 'template-parts/hero-image/hero-image-small' ); ?>


<!-- SITE-CONTENT -->
<main id="site-content" class="site-content">
    <div id="page-content" class="page-content page-content--content-blog">
        <div class="container">
            <div class="content-holder content-blog">

                <section class="section__blog-posts">
                    <?php
                    if ( have_posts() ) :

                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/content/content', get_post_type() );
                        endwhile;

                        the_posts_navigation();
                        else :
                            get_template_part( 'template-parts/content/content', 'none' );
                        endif;
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
