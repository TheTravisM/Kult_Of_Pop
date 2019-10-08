<?php
/**
 * Template part for displaying the footer info
 *
 * @package kult_of_pop
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
	<!--
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kult-of-pop' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'kult-of-pop' ), 'WordPress' );
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: Theme name. */
		printf( esc_html__( 'Theme: %s by the contributors.', 'kult-of-pop' ), '<a href="' . esc_url( 'https://github.com/wprig/wprig/' ) . '">Kult Of Pop</a>' );

		if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '<span class="sep"> | </span>' );
		}
		?>
	-->
</div><!-- .site-info -->
