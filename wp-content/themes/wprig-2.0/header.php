<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

wp_rig()->print_styles( 'wp-rig-c-header' );
wp_rig()->print_script( 'wp-rig-c-header' );

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- [ Prefetch ] -->
		<!-- Google Font -->
		<link rel="dns-prefetch preconnect" href="//fonts.googleapis.com"  crossorigin>
		<link rel="dns-prefetch preconnect" href="//fonts.gstatic.com" crossorigin>
		<!-- CDN Cloud Flair -->
		<link rel="dns-prefetch preconnect" href="//cdnjs.cloudflare.com" crossorigin>
		<!-- Google CDN -->
		<link rel="dns-prefetch" href="//ajax.googleapis.com">

	<!-- Meta Tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta property="og:site_name" content="Kult Of Pop">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://kultofpop.com">
	<meta property="og:locale" content="en">
	<title>Kult Of Pop</title>
	<meta property="og:title" content="Kult Of Pop">
	<meta name="referrer" content="strict-origin">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#f8991d">
	<meta name="msapplication-TileColor" content="#f8991d">
	<meta name="theme-color" content="#ffffff">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<!--
		<header id="masthead" class="site-header">
		<h1>KULT</h1>
		<?php get_template_part( 'template-parts/header/custom_header' ); ?>

		<?php get_template_part( 'template-parts/header/branding' ); ?>

		<?php get_template_part( 'template-parts/header/navigation' ); ?>
		</header>
	-->

	<!-- [ Header ] -->
	<header class="c-header">
		<!-- [ Header Container ] -->
		<section class="c-header_container">
			<!-- [ LOGO ] -->
			<?php get_template_part( 'template-parts/header/c-header-logo' ); ?>
			<!-- [ Header Container Inner ] -->
			<div class="c-header_container-inner">
				<!-- [ Header Nav ] -->
				<?php get_template_part( 'template-parts/header/c-nav-header' ); ?>
				<!-- [ Social Media ] -->
				<?php get_template_part( 'template-parts/header/c-social-media' ); ?>
			</div>

		</section>
	</header>
