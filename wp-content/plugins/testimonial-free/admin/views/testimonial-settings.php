<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

// //
// // Set a unique slug-like ID.
// //
// $prefix = '_sp_options';

// //
// // Create a settings page.
// //
// SPFTESTIMONIAL::createOptions(
// 	$prefix, array(
// 		'menu_title'       => __( 'Settings', 'testimonial-pro' ),
// 		'menu_parent'      => 'edit.php?post_type=spt_testimonial',
// 		'menu_type'        => 'submenu', // menu, submenu, options, theme, etc.
// 		'menu_slug'        => 'tpro_settings',
// 		'theme'            => 'light',
// 		'show_all_options' => false,
// 		'show_search'      => false,
// 		'show_footer'      => false,
// 		'framework_title'  => __( 'Testimonial Pro Settings', 'testimonial-pro' ),
// 	)
// );

// //
// // Advanced section.
// //
// SPFTESTIMONIAL::createSection(
// 	$prefix, array(
// 		'name'   => 'advanced_settings',
// 		'title'  => __( 'Advanced', 'testimonial-pro' ),
// 		'icon'   => 'fa fa-cogs',

// 		'fields' => array(
// 			array(
// 				'id'       => 'tpro_dequeue_google_fonts',
// 				'type'     => 'switcher',
// 				'title'    => __( 'Google Fonts', 'testimonial-pro' ),
// 				'subtitle' => __( 'On/off the switch to enqueue/dequeue google fonts.', 'testimonial-pro' ),
// 				'default'  => true,
// 			),
// 			array(
// 				'id'      => 'testimonial_data_remove',
// 				'type'    => 'checkbox',
// 				'title'   => __( 'Remove Data on Uninstall?', 'testimonial-pro' ),
// 				'after'   => __( 'Check this box if you would like Testimonial Pro to completely remove all of its data when the plugin is deleted.', 'testimonial-pro' ),
// 				'default' => false,
// 			),

// 			array(
// 				'type'    => 'subheading',
// 				'content' => __( 'Enqueue or Dequeue CSS', 'testimonial-pro' ),
// 			),
// 			array(
// 				'id'       => 'tpro_dequeue_slick_css',
// 				'type'     => 'switcher',
// 				'title'    => __( 'Slick CSS', 'testimonial-pro' ),
// 				'subtitle' => __( 'On/off the switch to enqueue/dequeue slick CSS.', 'testimonial-pro' ),
// 				'default'  => true,
// 			),
// 			array(
// 				'id'       => 'tpro_dequeue_fa_css',
// 				'type'     => 'switcher',
// 				'title'    => __( 'Font Awesome CSS', 'testimonial-pro' ),
// 				'subtitle' => __( 'On/off the switch to enqueue/dequeue font awesome CSS.', 'testimonial-pro' ),
// 				'default'  => true,
// 			),
// 			array(
// 				'id'       => 'tpro_dequeue_magnific_popup_css',
// 				'type'     => 'switcher',
// 				'title'    => __( 'Magnific Popup CSS', 'testimonial-pro' ),
// 				'subtitle' => __( 'On/off the switch to enqueue/dequeue magnific popup CSS.', 'testimonial-pro' ),
// 				'default'  => true,
// 			),

// 			array(
// 				'type'    => 'subheading',
// 				'content' => __( 'Enqueue or Dequeue JS', 'testimonial-pro' ),
// 			),
// 			array(
// 				'id'       => 'tpro_dequeue_slick_js',
// 				'type'     => 'switcher',
// 				'title'    => __( 'Slick JS', 'testimonial-pro' ),
// 				'subtitle' => __( 'On/off the switch to enqueue/dequeue slick JS.', 'testimonial-pro' ),
// 				'default'  => true,
// 			),
// 			array(
// 				'id'       => 'tpro_dequeue_isotope_js',
// 				'type'     => 'switcher',
// 				'title'    => __( 'Isotope JS', 'testimonial-pro' ),
// 				'subtitle' => __( 'On/off the switch to enqueue/dequeue isotope JS.', 'testimonial-pro' ),
// 				'default'  => true,
// 			),
// 			array(
// 				'id'       => 'tpro_dequeue_magnific_popup_js',
// 				'type'     => 'switcher',
// 				'title'    => __( 'Magnific Popup JS', 'testimonial-pro' ),
// 				'subtitle' => __( 'On/off the switch to enqueue/dequeue magnific popup JS.', 'testimonial-pro' ),
// 				'default'  => true,
// 			),
// 		),
// 	)
// );

// //
// // Custom CSS section.
// //
// SPFTESTIMONIAL::createSection(
// 	$prefix, array(
// 		'name'   => 'custom_css_section',
// 		'title'  => __( 'Custom CSS', 'testimonial-pro' ),
// 		'icon'   => 'fa fa-css3',

// 		'fields' => array(
// 			array(
// 				'id'       => 'custom_css',
// 				'type'     => 'code_editor',
// 				'settings' => array(
// 					'theme' => 'dracula',
// 					'mode'  => 'css',
// 				),
// 				'title'    => __( 'Custom CSS', 'testimonial-pro' ),
// 				'subtitle' => __( 'Type your CSS.', 'testimonial-pro' ),
// 			),
// 		),
// 	)
// );
