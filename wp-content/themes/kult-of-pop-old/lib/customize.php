<?php
/**
 * Genesis Sample.
 *
 * This file adds the Customizer additions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

add_action( 'customize_register', 'kult_of_pop_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function kult_of_pop_customizer_register( $wp_customize ) {

	$wp_customize->add_setting(
		'kult_of_pop_link_color',
		array(
			'default'           => kult_of_pop_customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'kult_of_pop_link_color',
			array(
				'description' => __( 'Change the color of post info links, hover color of linked titles, hover color of menu items, and more.', 'kult_of_pop' ),
				'label'       => __( 'Link Color', 'kult_of_pop' ),
				'section'     => 'colors',
				'settings'    => 'kult_of_pop_link_color',
			)
		)
	);

	$wp_customize->add_setting(
		'kult_of_pop_accent_color',
		array(
			'default'           => kult_of_pop_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'kult_of_pop_accent_color',
			array(
				'description' => __( 'Change the default hover color for button links, the menu button, and submit buttons. This setting does not apply to buttons created with the Buttons block.', 'kult_of_pop' ),
				'label'       => __( 'Accent Color', 'kult_of_pop' ),
				'section'     => 'colors',
				'settings'    => 'kult_of_pop_accent_color',
			)
		)
	);

	$wp_customize->add_setting(
		'kult_of_pop_logo_width',
		array(
			'default'           => 350,
			'sanitize_callback' => 'absint',
		)
	);

	// Add a control for the logo size.
	$wp_customize->add_control(
		'kult_of_pop_logo_width',
		array(
			'label'       => __( 'Logo Width', 'kult_of_pop' ),
			'description' => __( 'The maximum width of the logo in pixels.', 'kult_of_pop' ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => 'kult_of_pop_logo_width',
			'type'        => 'number',
			'input_attrs' => array(
				'min' => 100,
			),

		)
	);

}
