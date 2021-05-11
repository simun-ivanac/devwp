<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form
 *
 * @package devwp
 * @since 1.0.0
 */


/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$devwp_comment_count = get_comments_number();
			if ( '1' === $devwp_comment_count ) {
				printf(
					/* translators: 1: title. */
                    esc_html__( 'One thought', 'devwp' )
				);
			} else {
				printf(
					/* translators: 1: comment count number, 2: title. */
                    esc_html( _nx( '%1$s thought', '%1$s thoughts', $devwp_comment_count, 'comments title', 'devwp' ) ),
					number_format_i18n( $devwp_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
                    'avatar_size' => 60,
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'devwp' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().


    $comments_args = array(
        'label_submit' => __( 'Post', 'devwp' ),
        'title_reply'  => __( 'Write a Reply or Comment', 'devwp' ),
	);
	comment_form( $comments_args );
	?>

</div>
