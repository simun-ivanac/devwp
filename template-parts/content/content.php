<?php
/**
 * Template part for displaying posts
 *
 * @package devwp
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php devwp_post_thumbnail(); ?>

    <div class="blog-post-caption">
        <header class="blog-post-header">
            <?php
            if ( ! is_singular() ) :
                the_title(
                    '<h2 class="blog-post-heading">' .
                        '<a href="' . esc_url( get_permalink() ) . '" class="blog-post-heading-link" rel="bookmark">', '</a>' .
                    '</h2>'
                );
            endif;

            if ( 'post' === get_post_type() ) :
                ?>
                <div class="blog-post-meta">
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
            if ( is_singular() ) :
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
            else :
                echo devwp_excerpts_filter(20);
            endif;
            ?>
        </div>

        <?php if ( is_singular() ) : ?>
			<footer class="blog-post-footer">
				<?php devwp_entry_footer(); ?>
			</footer>
		<?php endif; ?>

    </div>

</article>
