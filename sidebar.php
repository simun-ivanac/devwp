<?php
/**
 * The sidebar containing the main widget area
 *
 * @package devwp
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) :
	return;
endif;
?>

<!-- SITE-SIDEBAR -->
<aside id="site-sidebar" class="aside__widgets site-sidebar widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
<!-- !SITE-SIDEBAR -->
