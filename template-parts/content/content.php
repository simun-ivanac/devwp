<?php
/**
 * Template part for displaying single posts.
 *
 * @package devwp
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php devwp_post_thumbnail(); ?>

    <div class="blog-single-content">
        <header class="blog-single-header">
            <?php
            if ( 'post' === get_post_type() ) :
                ?>
                <div class="blog-single-meta">
                    <?php
                    if ( is_singular() ) :
                        devwp_posted_on();
                        devwp_posted_by();
                        devwp_comment_number();
                    else :
                        devwp_post_category();
                        devwp_posted_on();
                    endif;
                    ?>
                </div>
            <?php endif; ?>
        </header>

        <div class="editor-content">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'devwp' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'devwp' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div>

		<footer class="blog-single-footer">
			<?php devwp_entry_footer(); ?>
		</footer>

    </div>

</article>
