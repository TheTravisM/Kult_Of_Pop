<?php
/**
 * Template part for displaying a pagination
 *
 * @package kult_of_pop
 */

namespace WP_Rig\WP_Rig;

the_posts_pagination(
	[
		'mid_size'           => 2,
		'prev_text'          => _x( 'Previous', 'previous set of search results', 'kult-of-pop' ),
		'next_text'          => _x( 'Next', 'next set of search results', 'kult-of-pop' ),
		'screen_reader_text' => __( 'Page navigation', 'kult-of-pop' ),
	]
);
