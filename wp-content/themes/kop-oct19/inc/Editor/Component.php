<?php
/**
 * WP_Rig\WP_Rig\Editor\Component class
 *
 * @package kop_oct19
 */

namespace WP_Rig\WP_Rig\Editor;

use WP_Rig\WP_Rig\Component_Interface;
use function add_action;
use function add_theme_support;

/**
 * Class for integrating with the block editor.
 *
 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'editor';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'after_setup_theme', [ $this, 'action_add_editor_support' ] );
	}

	/**
	 * Adds support for various editor features.
	 */
	public function action_add_editor_support() {
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for wide-aligned images.
		add_theme_support( 'align-wide' );

		/**
		 * Add support for color palettes.
		 *
		 * To preserve color behavior across themes, use these naming conventions:
		 * - Use primary and secondary color for main variations.
		 * - Use `theme-[color-name]` naming standard for standard colors (red, blue, etc).
		 * - Use `custom-[color-name]` for non-standard colors.
		 *
		 * Add the line below to disable the custom color picker in the editor.
		 * add_theme_support( 'disable-custom-colors' );
		 */
		add_theme_support(
			'editor-color-palette',
			[
				[
					'name'  => __( 'Primary', 'kop-oct19' ),
					'slug'  => 'theme-primary',
					'color' => '#e36d60',
				],
				[
					'name'  => __( 'Secondary', 'kop-oct19' ),
					'slug'  => 'theme-secondary',
					'color' => '#41848f',
				],
				[
					'name'  => __( 'Red', 'kop-oct19' ),
					'slug'  => 'theme-red',
					'color' => '#C0392B',
				],
				[
					'name'  => __( 'Green', 'kop-oct19' ),
					'slug'  => 'theme-green',
					'color' => '#27AE60',
				],
				[
					'name'  => __( 'Blue', 'kop-oct19' ),
					'slug'  => 'theme-blue',
					'color' => '#2980B9',
				],
				[
					'name'  => __( 'Yellow', 'kop-oct19' ),
					'slug'  => 'theme-yellow',
					'color' => '#F1C40F',
				],
				[
					'name'  => __( 'Black', 'kop-oct19' ),
					'slug'  => 'theme-black',
					'color' => '#1C2833',
				],
				[
					'name'  => __( 'Grey', 'kop-oct19' ),
					'slug'  => 'theme-grey',
					'color' => '#95A5A6',
				],
				[
					'name'  => __( 'White', 'kop-oct19' ),
					'slug'  => 'theme-white',
					'color' => '#ECF0F1',
				],
				[
					'name'  => __( 'Dusty daylight', 'kop-oct19' ),
					'slug'  => 'custom-daylight',
					'color' => '#97c0b7',
				],
				[
					'name'  => __( 'Dusty sun', 'kop-oct19' ),
					'slug'  => 'custom-sun',
					'color' => '#eee9d1',
				],
			]
		);

		/*
		 * Add support custom font sizes.
		 *
		 * Add the line below to disable the custom color picker in the editor.
		 * add_theme_support( 'disable-custom-font-sizes' );
		 */
		add_theme_support(
			'editor-font-sizes',
			[
				[
					'name'      => __( 'Small', 'kop-oct19' ),
					'shortName' => __( 'S', 'kop-oct19' ),
					'size'      => 16,
					'slug'      => 'small',
				],
				[
					'name'      => __( 'Medium', 'kop-oct19' ),
					'shortName' => __( 'M', 'kop-oct19' ),
					'size'      => 25,
					'slug'      => 'medium',
				],
				[
					'name'      => __( 'Large', 'kop-oct19' ),
					'shortName' => __( 'L', 'kop-oct19' ),
					'size'      => 31,
					'slug'      => 'large',
				],
				[
					'name'      => __( 'Larger', 'kop-oct19' ),
					'shortName' => __( 'XL', 'kop-oct19' ),
					'size'      => 39,
					'slug'      => 'larger',
				],
			]
		);
	}
}
