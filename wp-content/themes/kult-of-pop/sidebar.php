<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kult_of_pop
 */

namespace WP_Rig\WP_Rig;

if ( ! kult_of_pop()->is_primary_sidebar_active() ) {
	return;
}

kult_of_pop()->print_styles( 'kult-of-pop-sidebar', 'kult-of-pop-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area">
	<?php kult_of_pop()->display_primary_sidebar(); ?>
</aside><!-- #secondary -->
