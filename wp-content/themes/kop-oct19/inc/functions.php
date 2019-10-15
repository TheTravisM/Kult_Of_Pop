<?php
/**
 * The `kop_oct19()` function.
 *
 * @package kop_oct19
 */

namespace WP_Rig\WP_Rig;

/**
 * Provides access to all available template tags of the theme.
 *
 * When called for the first time, the function will initialize the theme.
 *
 * @return Template_Tags Template tags instance exposing template tag methods.
 */
function kop_oct19() : Template_Tags {
	static $theme = null;

	if ( null === $theme ) {
		$theme = new Theme();
		$theme->initialize();
	}

	return $theme->template_tags();
}
