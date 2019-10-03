<div id="qodef-testimonials<?php echo esc_attr($current_id) ?>" class="qodef-testimonial-content" <?php  echo suprema_qodef_get_inline_style($item_style)?>>
	<?php if (has_post_thumbnail($current_id)) { ?>
		<div class="qodef-testimonial-image-holder">
			<?php esc_html(the_post_thumbnail($current_id)) ?>
		</div>
	<?php } ?>
	<div class="qodef-testimonial-content-inner">
		<div class="qodef-testimonial-text-holder">						
			<div class="qodef-testimonial-text-inner">
				<?php if($show_title == "yes"){ ?>
					<p class="qodef-testimonial-title">
						<?php echo esc_attr($title) ?>
					</p>
				<?php }?>
				<p class="qodef-testimonial-text"><?php echo trim($text) ?></p>
				<?php if ($show_author == "yes") { ?>
					<div class = "qodef-testimonial-author">
						<div class="qodef-testimonial-author-text">
							<span class="qodef-testimonial-author-name"><?php echo esc_attr($author)?></span>
							<?php if($show_position == "yes" && $job !== ''){ ?>
								<span class="qodef-testimonial-job"> <?php echo esc_attr($job)?></span>
							<?php }?>
						</div>
					</div>
				<?php } ?>				
			</div>
		</div>
	</div>	
</div>
