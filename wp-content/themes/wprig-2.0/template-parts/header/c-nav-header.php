<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

wp_rig()->print_styles( 'wp-rig-c-nav-header' );

?>

<nav class="c-nav-header">
	<ul class="c-nav-header_ul">
		<li class="c-nav-header_li">
			<a class="c-nav-header_link" href="#">The Latest</a>
		</li>
		<li class="c-nav-header_li">
			<a class="c-nav-header_link" href="#">Top Stories</a>
		</li>
		<li class="c-nav-header_li">
			<a class="c-nav-header_link" href="#">Trending</a>
		</li>
		<li class="c-nav-header_li">
			<a class="c-nav-header_link" href="#">Podcast</a>
		</li>
		<li class="c-nav-header_li c-nav-header_li--contact">
			<a class="c-nav-header_link" href="#">Contact</a>
		</li>
	</ul>
</nav>
