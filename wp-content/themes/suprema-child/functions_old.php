<?php

/*** Child Theme Function  ***/
if ( ! function_exists( 'suprema_qodef_child_theme_enqueue_scripts' ) ) {
	function suprema_qodef_child_theme_enqueue_scripts()
	{

		$parent_style = 'suprema-qodef-default-style';

		wp_enqueue_style('suprema-qodef-child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
	}

	add_action('wp_enqueue_scripts', 'suprema_qodef_child_theme_enqueue_scripts');
}