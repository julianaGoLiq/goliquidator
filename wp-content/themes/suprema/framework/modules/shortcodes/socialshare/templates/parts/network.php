<li class="qodef-<?php echo esc_html($name) ?>-share">
	<a class="qodef-share-link" href="#" onclick="<?php echo suprema_qodef_get_module_part($link); ?>" <?php echo suprema_qodef_get_inline_attrs($data_value); ?>>
		<?php if ($custom_icon !== '') { ?>
			<img src="<?php echo esc_url($custom_icon); ?>" alt="<?php echo esc_html($name); ?>" />
		<?php } else { ?>
			<span class="qodef-social-network-icon <?php echo esc_attr($icon); ?>"></span>
		<?php } ?>
	</a>
</li>