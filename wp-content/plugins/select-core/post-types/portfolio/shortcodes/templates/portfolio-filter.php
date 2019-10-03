<div class = "qodef-portfolio-filter-holder">
	<div class = "qodef-portfolio-filter-holder-inner">
		<?php 
		$rand_number = rand();
		if(is_array($filter_categories) && count($filter_categories)){ ?>
		<ul>

			<li data-class="filter_<?php echo suprema_qodef_get_module_part($rand_number); ?>" class="filter_<?php echo suprema_qodef_get_module_part($rand_number); ?>" data-filter="all"><span><?php  print __('All', 'select-core')?></span></li>

			<?php foreach($filter_categories as $cat){	?>
					<li data-class="filter_<?php echo suprema_qodef_get_module_part($rand_number); ?>" class="filter_<?php echo suprema_qodef_get_module_part($rand_number); ?>" data-filter = ".portfolio_category_<?php echo suprema_qodef_get_module_part($cat->term_id);  ?>">
					<span>
						<?php echo suprema_qodef_get_module_part($cat->name); ?>
					</span>
				</li>
			<?php } ?>
		</ul> 
		<?php }?>
	</div>
</div>