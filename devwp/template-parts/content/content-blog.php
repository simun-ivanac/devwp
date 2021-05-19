<?php
/**
 * Template part for displaying posts on 'home' page.
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
            the_title(
                '<h2 class="blog-post-heading">' .
                    '<a href="' . esc_url( get_permalink() ) . '" class="blog-post-heading-link" rel="bookmark">', '</a>' .
                '</h2>'
            );

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
                <?php
            endif;
            ?>
        </header>

        <div class="blog-post-excerpt">
            <?php echo devwp_excerpts_filter(20); ?>
        </div>

    </div>

</article>
