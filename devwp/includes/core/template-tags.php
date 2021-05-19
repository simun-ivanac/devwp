<?php

/**
 * Prints HTML with meta information for the current post-date/time.
 *
 * @package devwp
 * @since 1.0.0
 */
if ( ! function_exists( 'devwp_posted_on' ) ) :
	function devwp_posted_on() {

        if ( is_singular() ) $class = 'blog-single';
        else $class = 'blog-post';

		$time_string = '<time class="' . $class . '-date ' . $class . '-published ' . $class . '-updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="' . $class . '-date ' . $class . '-published" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
            esc_html_x('%s', 'post date', 'devwp'),
            '<a href="' . get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')) . '" rel="bookmark" class="' . $class . '-posted-on-link">' .
                '<i class="fa fa-calendar-o"></i>' .
				$time_string .
			'</a>'
		);

		echo '<span class="' . $class . '-posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;


/**
 * Prints HTML with meta information for the current author.
 *
 * @package devwp
 * @since 1.0.0
 */
if ( ! function_exists( 'devwp_posted_by' ) ) :
	function devwp_posted_by() {

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'post author', 'devwp' ),
            '<span class="blog-single-author author vcard">' .
				'<a class="url fn n blog-single-author-link" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' .
                    '<i class="fa fa-user"></i>' .
					esc_html( get_the_author() ) .
				'</a>' .
			'</span>'
		);

		echo '<span class="blog-single-posted-by"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;


/**
 * Prints HTML with meta information for the category.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_post_category' ) ) :
	function devwp_post_category() {
        if ( is_singular() ) $class = 'blog-single';
        else $class = 'blog-post';

		if ( 'post' === get_post_type() ) {
			$categories = get_the_category();

			if ( ! empty( $categories ) ) {
				printf(
					'<span class="' . $class . '-categories">' .
						'<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="' . $class . '-category-link">' .
                            '<i class="fa fa-folder-open-o"></i>' .
							esc_html( $categories[0]->name ) .
						'</a>' .
					'</span>'
				);
			}
		}
	}
endif;


/**
 * Prints number of comments for related post.
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_comment_number' ) ) :
	function devwp_comment_number() {
		if ( 'post' === get_post_type() ) {

	 		if ( comments_open() ) {
				echo '<span class="blog-single-comments-num">';
		 			printf(
						'<i class="fa fa-comments-o"></i>'.
						'<span class="screen-reader-text">%1$s </span>',
						_x( 'Comments', 'Used before post author name.', 'devwp' )
					);
		 			comments_popup_link(
						__( '0 Comments', 'devwp' ),
						__( '1 comment', 'devwp' ),
						__( '% comments', 'devwp' ),
						'blog-single-comments-link',
						__( 'Comments are closed', 'devwp' )
					);
				echo '</span>';
	 		}
		}
	}
endif;


/**
 * Prints HTML with meta information for the categories, tags and comments.
 *
 * @package devwp
 * @since 1.0.0
 */
if ( ! function_exists( 'devwp_entry_footer' ) ) :
	function devwp_entry_footer() {

		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
            $categories_list = preg_replace('/<a /', '<a class="blog-single-category-link"', get_the_category_list( esc_html__( ', ', 'devwp' ) ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
                printf(
					'<span class="blog-single-categories">' .
						'<i class="fa fa-folder-open-o"></i>' .
						esc_html__( '%1$s', 'devwp' ) .
					'</span>',
					$categories_list
				); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
            $tags_list = preg_replace('/<a /', '<a class="blog-single-tag-link"', get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'devwp' ) ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
                printf(
					'<span class="blog-single-tags">' .
						'<i class="fa fa-tags"></i>' .
						esc_html__( '%1$s', 'devwp' ) .
					'</span>',
					$tags_list
				); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'devwp' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

	}
endif;


/**
 * Displays an optional post thumbnail.
 *
 * @package devwp
 * @since 1.0.0
 */
if ( ! function_exists( 'devwp_post_thumbnail' ) ) :
	function devwp_post_thumbnail() {

		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() && ! is_page() ) :
			?>

			<div class="blog-single-image">
				<?php
                the_post_thumbnail(
                    'post-thumbnail',
                    array(
                        'class' => 'blog-single-attachment',
                    )
                );
                ?>
			</div>

		<?php elseif ( is_page() ) : ?>

            <div class="page-singular-image">
				<?php
                the_post_thumbnail(
                    'post-thumbnail',
                    array(
                        'class' => 'page-singular-attachment',
                    )
                );
                ?>
			</div>

		<?php else : ?>

			<a class="blog-post-image" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <figure class="blog-post-media-holder">
    				<?php
    					the_post_thumbnail(
    						'wp-devwp-post',
    						array(
                                'class' => 'blog-post-attachment',
    							'alt' => the_title_attribute(
    								array(
    									'echo' => false,
    								)
    							),
    						)
    					);
    				?>
                </figure>
			</a>

			<?php
		endif;

	}
endif;


/**
 * Shim for sites older than 5.2.
 *
 * @link https://core.trac.wordpress.org/ticket/12563
 * @package devwp
 * @since 1.0.0
 */
if ( ! function_exists( 'wp_body_open' ) ) :
	function wp_body_open() {

		do_action( 'wp_body_open' );

	}
endif;
