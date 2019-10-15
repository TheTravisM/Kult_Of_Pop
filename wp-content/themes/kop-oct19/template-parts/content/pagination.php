<?php
/**
 * Template part for displaying a pagination
 *
 * @package kop_oct19
 */

namespace WP_Rig\WP_Rig;

the_posts_pagination(
	[
		'mid_size'           => 2,
		'prev_text'          => _x( 'Previous', 'previous set of search results', 'kop-oct19' ),
		'next_text'          => _x( 'Next', 'next set of search results', 'kop-oct19' ),
		'screen_reader_text' => __( 'Page navigation', 'kop-oct19' ),
	]
);
