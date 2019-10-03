<?php
$icon_html = suprema_qodef_icon_collections()->renderIcon($icon, $icon_pack, $icon_styles);
?>

<div class="qodef-message-icon-holder">
	<div class="qodef-message-icon">
		<div class="qodef-message-icon-inner">
			<?php
			echo suprema_qodef_get_module_part($icon_html);
			?>			
		</div> 
	</div>	 
</div>

