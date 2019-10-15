<?php
/**
 * Template part for displaying a post's content
 *
 * @package kop_oct19
 */

namespace WP_Rig\WP_Rig;

?>

<div class="entry-content">
	<?php
	the_content(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'kop-oct19' ),
				[
					'span' => [
						'class' => [],
					],
				]
			),
			get_the_title()
		)
	);

	wp_link_pages(
		[
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kop-oct19' ),
			'after'  => '</div>',
		]
	);
	?>
</div><!-- .entry-content -->
