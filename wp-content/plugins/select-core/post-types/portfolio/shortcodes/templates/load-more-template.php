<?php if($query_results->max_num_pages>1){ ?>
	<div class="qodef-ptf-list-paging">
		<span class="qodef-ptf-list-load-more">
			<?php 
				echo suprema_qodef_get_button_html(array(
					'link' => 'javascript: void(0)',
					'text' => 'Show more'
				));
			?>
		</span>
	</div>
    <?php

	$unique_id = rand( 1000, 9999 );
	wp_nonce_field( 'qodef_ptf_load_more_nonce_' . $unique_id, 'qodef_ptf_load_more_nonce_' . $unique_id );
}