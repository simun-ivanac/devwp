<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package devwp
 * @since 1.0.0
 */

?>


<div class="search-no-results-content">
    <h2 class="search-no-results-title"><?php esc_html_e( 'Nothing Found', 'devwp' ); ?></h2>
    <p class="search-no-results-description"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'devwp' ); ?></p>
    <?php get_search_form(); ?>
</div>
