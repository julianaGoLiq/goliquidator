<?php
/**
 * Template Name: Slider Revolution Blank Template
 * Template Post Type: post, page
 * The template for displaying RevSlider on a blank page
 */
 
if(!defined('ABSPATH')) exit();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
	
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
		<style type="text/css">
			body:before { display:none !important}
			body:after { display:none !important}
			body { background:transparent}
		</style>
	</head>

	<body <?php body_class(); ?>>
		<div>
			<?php
			// Start the loop.
			while(have_posts()) : the_post();

				// Include the page content template.
				echo do_shortcode(get_the_content());

			// End the loop.
			endwhile;
			?>
		</div>
		<?php wp_footer(); ?>
		
	</body>
</html>