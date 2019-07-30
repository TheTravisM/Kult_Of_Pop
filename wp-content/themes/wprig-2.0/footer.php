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

/* // todo: Create the SCSS for the footer  */
wp_rig()->print_styles( 'wp-rig-c-footer' );

?>

<!-- [ FOOTER ] -->
<footer class="c-footer">
	<section class="c-footer_container">
		<!-- [ Footer Logo ] -->
		<?php get_template_part( 'template-parts/footer/c-footer-logo-link' ); ?>

		<!-- [ Footer Navigation ] -->
		<?php get_template_part( 'template-parts/footer/c-nav-footer' ); ?>

		<!-- [ Footer Navigation ] -->
		<?php get_template_part( 'template-parts/footer/c-social-media-footer' ); ?>

		<!-- [ Footer Fine Print ] -->
		<?php get_template_part( 'template-parts/footer/c-footer-fine-print' ); ?>
	</section>
</footer><!-- #c-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
