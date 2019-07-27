<?php
/**
 * Block Editor settings specific to Genesis Sample.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$kult_of_pop_link_color            = get_theme_mod( 'kult_of_pop_link_color', kult_of_pop_customizer_get_default_link_color() );
$kult_of_pop_link_color_contrast   = kult_of_pop_color_contrast( $kult_of_pop_link_color );
$kult_of_pop_link_color_brightness = kult_of_pop_color_brightness( $kult_of_pop_link_color, 35 );

return array(
	'admin-fonts-url'              => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700',
	'content-width'                => 1062,
	'default-button-bg'            => $kult_of_pop_link_color,
	'default-button-color'         => $kult_of_pop_link_color_contrast,
	'default-button-outline-hover' => $kult_of_pop_link_color_brightness,
	'default-link-color'           => $kult_of_pop_link_color,
	'editor-color-palette'         => array(
		array(
			'name'  => __( 'Custom color', 'kult_of_pop' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => get_theme_mod( 'kult_of_pop_link_color', kult_of_pop_customizer_get_default_link_color() ),
		),
		array(
			'name'  => __( 'Accent color', 'kult_of_pop' ),
			'slug'  => 'theme-secondary',
			'color' => get_theme_mod( 'kult_of_pop_accent_color', kult_of_pop_customizer_get_default_accent_color() ),
		),
	),
	'editor-font-sizes'            => array(
		array(
			'name' => __( 'Small', 'kult_of_pop' ),
			'size' => 12,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Normal', 'kult_of_pop' ),
			'size' => 18,
			'slug' => 'normal',
		),
		array(
			'name' => __( 'Large', 'kult_of_pop' ),
			'size' => 20,
			'slug' => 'large',
		),
		array(
			'name' => __( 'Larger', 'kult_of_pop' ),
			'size' => 24,
			'slug' => 'larger',
		),
	),
);
