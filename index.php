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


<!-- SITE-CONTENT -->
<main id="site-content" class="site-content">

	<?php
	if ( have_posts() ) :

		if ( is_home() && ! is_front_page() ) :
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php
		endif;


		while ( have_posts() ) :
			the_post();

			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content/content', get_post_type() );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content/content', 'none' );

	endif;
	?>

</main>
<!-- !SITE-CONTENT -->


<?php
get_sidebar();
get_footer();
