<?php

if (!function_exists('suprema_qodef_register_widgets')) {

	function suprema_qodef_register_widgets() {

		$widgets = array(
			'SupremaQodefFullScreenMenuOpener',
			'SupremaQodefLatestPosts',
			'SupremaQodefSearchOpener',
			'SupremaQodefSideAreaOpener',
			'SupremaQodefSocialIconWidget',
			'SupremaQodefSeparatorWidget',
			'SupremaQodefPopupOpener'
		);

		if ( suprema_qodef_is_woocommerce_installed() ) {
			$widgets[] = 'SupremaQodefWoocommerceDropdownCart';
			$widgets[] = 'SupremaQodefWoocommerceDropdownLogin';
		}

		foreach ($widgets as $widget) {
			register_widget($widget);
		}
	}
}

add_action('widgets_init', 'suprema_qodef_register_widgets');