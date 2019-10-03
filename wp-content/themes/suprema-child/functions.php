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

/*
* Author: Sebas Escobar Dev.
*/ 

function mis_estilos()
{
     wp_enqueue_style( 'child-theme-css', '[URL_CSS_PARENT]' );
}
add_action( 'wp_enqueue_scripts', 'mis_estilos' );


function custom_colors() {
   echo '<style type="text/css">
 
         </style>';
}

add_action('admin_head', 'custom_colors');

//upload script files
function my_theme_scripts_function() {

	wp_enqueue_script( 'JSBootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
	wp_enqueue_style( 'CSSBootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_script( 'JSDatepicker', 'https://cdn.jsdelivr.net/npm/flatpickr');
	wp_enqueue_style( 'CSSDatepicker', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css');
	wp_enqueue_script( 'JSAwesome', 'https://kit.fontawesome.com/bfa2e8f487.js');
	wp_enqueue_script( 'JSebas', get_stylesheet_directory_uri() . '/js/JSebas.js?v=0.1.7');
	wp_enqueue_style( 'CSSebas', get_stylesheet_directory_uri() . '/css/CSSebas.css?v=0.5.5');

}

add_action('wp_enqueue_scripts','my_theme_scripts_function');


function wpdocs_enqueue_custom_admin_style() {
	wp_register_style( 'custom_wp_admin_css', get_stylesheet_directory_uri() . '/css/JQury.css', false, '1.0.1' );
	wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );


