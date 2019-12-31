<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

if ( ! function_exists( 'spftestimonial_get_google_fonts' ) ) {
	function spftestimonial_get_google_fonts() {
		return array(
			'Open Sans'           => array( array( '300', '300italic', 'normal', 'italic', '600', '600italic', '700', '700italic', '800', '800italic' ), array( 'latin-ext', 'greek-ext', 'greek', 'latin', 'cyrillic', 'vietnamese', 'cyrillic-ext' ) ),
			'Open Sans Condensed' => array( array( '300', '300italic', '700' ), array( 'latin-ext', 'greek-ext', 'greek', 'latin', 'cyrillic', 'vietnamese', 'cyrillic-ext' ) ),
		);
	}
}
