<?php
/**
 * Collapse ACF metaboxes on page load
 *
 * @package devwp
 * @version 1.0.0
 */
if ( ! function_exists( 'devwp_add_acf_script' ) ) :
    function devwp_add_acf_script() {
        ?>
        <script type="text/javascript">
            jQuery(function() {
                jQuery('.acf-postbox').addClass('closed');
            });
        </script>
    <?php
    }
endif;
add_action( 'acf/input/admin_head', 'devwp_add_acf_script' );
