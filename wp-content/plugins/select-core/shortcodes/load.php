<?php

if(!function_exists('suprema_qodef_load_shortcode_interface')) {

	function suprema_qodef_load_shortcode_interface() {

		include_once 'shortcode-interface.php';

	}

	add_action('suprema_qodef_before_options_map', 'suprema_qodef_load_shortcode_interface');

}

if(!function_exists('suprema_qodef_load_shortcodes')) {
	/**
	 * Loades all shortcodes by going through all folders that are placed directly in shortcodes folder
	 * and loads load.php file in each. Hooks to suprema_qodef_after_options_map action
	 *
	 * @see http://php.net/manual/en/function.glob.php
	 */
	function suprema_qodef_load_shortcodes() {
		foreach(glob(QODE_FRAMEWORK_ROOT_DIR.'/modules/shortcodes/*/load.php') as $shortcode_load) {
			include_once $shortcode_load;
		}

		include_once 'shortcode-loader.php';
	}

	add_action('suprema_qodef_before_options_map', 'suprema_qodef_load_shortcodes');
}