<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

wp_rig()->print_styles( 'wp-rig-c-footer' );

?>

	<footer id="colophon" class="site-footer c-footer">

		<!-- [ Footer Logo ] -->
		<?php get_template_part( 'template-parts/footer/c-footer-logo-link' ); ?>
		<!-- [ Footer Nav ] -->
		<?php get_template_part( 'template-parts/footer/c-footer-nav' ); ?>
		<!-- [ Social Media ] -->
		<?php get_template_part( 'template-parts/footer/c-footer-social-media' ); ?>
		<!-- [ Fine Print ] -->
		<?php get_template_part( 'template-parts/footer/c-footer-fine-print' ); ?>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
