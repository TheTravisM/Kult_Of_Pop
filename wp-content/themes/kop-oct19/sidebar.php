<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kop_oct19
 */

namespace WP_Rig\WP_Rig;

if ( ! kop_oct19()->is_primary_sidebar_active() ) {
	return;
}

kop_oct19()->print_styles( 'kop-oct19-sidebar', 'kop-oct19-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area">
	<?php kop_oct19()->display_primary_sidebar(); ?>
</aside><!-- #secondary -->
