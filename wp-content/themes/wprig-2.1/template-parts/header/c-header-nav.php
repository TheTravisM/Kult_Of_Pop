<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

wp_rig()->print_styles( 'wp-rig-c-header-nav' );

?>

<nav class="c-header-nav">
	<ul class="c-header-nav_ul">
		<li class="c-header-nav_li">
			<a class="c-header-nav_link" href="#">The Latest</a>
		</li>
		<li class="c-header-nav_li">
			<a class="c-header-nav_link" href="#">Top Stories</a>
		</li>
		<li class="c-header-nav_li">
			<a class="c-header-nav_link" href="#">Trending</a>
		</li>
		<li class="c-header-nav_li">
			<a class="c-header-nav_link" href="#">Podcast</a>
		</li>
		<li class="c-header-nav_li c-header-nav_li--contact">
			<a class="c-header-nav_link" href="#">Contact</a>
		</li>
	</ul>
</nav>
