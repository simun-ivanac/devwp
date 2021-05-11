<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package devwp
 * @since 1.0.0
 */

?>

<?php
if ( is_search() ) :
    ?>

    <div class="search-no-results-content">
        <h2 class="search-no-results-title"><?php esc_html_e( 'Nothing Found', 'devwp' ); ?></h2>
        <p class="search-no-results-description"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'devwp' ); ?></p>
        <?php get_search_form(); ?>
    </div>

    <?php
    return;
endif;
?>



<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'devwp' ); ?></h1>
	</header>

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'devwp' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'devwp' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div>
</section>
