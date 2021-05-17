<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package devwp
 * @since 1.0.0
 */

?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php devwp_post_thumbnail(); ?>

	<div class="page-singular-content">
        <div class="editor-content">
    		<?php
    		the_content();

    		wp_link_pages(
    			array(
    				'before' => '<div class="page-nav-links">' . esc_html__( 'Pages:', 'devwp' ),
    				'after'  => '</div>',
    			)
    		);
    		?>
	    </div>
	</div>
</article>
