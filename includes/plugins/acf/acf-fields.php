<?php
/**
 * Import ACF fields after installation plugin
 *
 * ERROR: still not working how it's supposed to.
 * It's not used for now. Import fields manually instead (/assets .json file).
 *
 * @package devwp
 * @since 1.0.0
 */
if ( ! function_exists( 'devwp_acf_add_field_groups' ) )  :
    function devwp_acf_add_field_groups() {
        $fields_dir = get_template_directory() . '/includes/plugins/acf';

        // homepage
        include_once $fields_dir . '/homepage/fields-intro.php';
        include_once $fields_dir . '/homepage/fields-pricing.php';
        include_once $fields_dir . '/homepage/fields-schedule.php';
        include_once $fields_dir . '/homepage/fields-members.php';
        include_once $fields_dir . '/homepage/fields-work.php';
        include_once $fields_dir . '/homepage/fields-testimonials.php';
        include_once $fields_dir . '/homepage/fields-news.php';
        include_once $fields_dir . '/homepage/fields-location.php';

        // contact
        include_once $fields_dir . '/contact/fields-general.php';
        include_once $fields_dir . '/contact/fields-location.php';

        // about-us
        include_once $fields_dir . '/about-us/fields-intro.php';
        include_once $fields_dir . '/about-us/fields-features.php';
        include_once $fields_dir . '/about-us/fields-testimonials.php';
        include_once $fields_dir . '/about-us/fields-sponsors.php';

    }
endif;
// add_action( 'acf/init', 'devwp_acf_add_field_groups' );
