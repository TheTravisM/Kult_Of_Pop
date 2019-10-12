<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kult_of_pop
 */

namespace WP_Rig\WP_Rig;

kult_of_pop()->print_styles( 'kult-of-pop-c-footer' );

?>

	<footer id="colophon" class="c-footer">
		<!-- [ Footer Container ] -->
		<div class="c-footer_container">
			<!-- [ Footer Logo ] -->
			<?php get_template_part( 'template-parts/footer/c-footer-logo-link' ); ?>
			<!-- [ Footer Nav ] -->
			<?php get_template_part( 'template-parts/footer/c-footer-nav' ); ?>
			<!-- [ Social Media ] -->
			<?php get_template_part( 'template-parts/footer/c-footer-social-media' ); ?>
			<!-- [ Fine Print ] -->
			<?php get_template_part( 'template-parts/footer/c-footer-fine-print' ); ?>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
