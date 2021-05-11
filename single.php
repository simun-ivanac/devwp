<?php
/**
 * The template for displaying all single posts
 *
 * @package devwp
 * @since 1.0.0
 */

get_header();
?>

<?php get_template_part( 'template-parts/hero-image/hero-image-small' ); ?>

<!-- SITE-CONTENT -->
<main id="site-content" class="site-content">
    <div id="page-content" class="page-content page-content--content-blog-single">
        <div class="container">
            <div class="content-holder content-blog-single">
                <section class="section__blog-single">
                    <?php
                	while ( have_posts() ) :
                		the_post();

                		get_template_part( 'template-parts/content/content', 'post' );

                		the_post_navigation(
                			array(
                                'class' => 'post-navigation',
                				'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'devwp' ) . '</span> <span class="nav-title">%title</span>',
                				'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'devwp' ) . '</span> <span class="nav-title">%title</span>',
                			)
                		);

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
