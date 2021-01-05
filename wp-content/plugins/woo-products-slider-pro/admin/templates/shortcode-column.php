<div class="meta-box-sortables ui-sortable">

	<div class="postbox">

		<button type="button" class="handlediv" aria-expanded="true" data-toggle="collapse" data-target="#<?php echo $options['id']; ?>">
			<span class="screen-reader-text">Toggle panel</span>
			<span class="toggle-indicator" aria-hidden="true"></span>
		</button>
		<!-- Toggle -->

		<h2 class="hndle"><span><?php echo $options['title']; ?></span></h2>

		<div class="inside collapse show" id="<?php echo $options['id']; ?>">

			<div class="woopsp_shortcode">

				<p class="float-left"><code class="slider_shortcode_code">[<?php echo $options['shortcode']; ?>]</code></p>

				<button class="button-secondary float-right" data-toggle="collapse" data-target=".form_<?php echo $options['id']; ?>">Customize Shortcode</button>

			</div>

			<form class="collapse customize_shortcode_form form_<?php echo $options['id']; ?>" data-shortcode="<?php echo $options['shortcode']; ?>">

				<div class="row">

					<div class="form-group col-md-12">

						<label for="<?php echo $options['id']; ?>_cat_filter">Filter By Category</label>

						<select name="cat_filter" id="<?php echo $options['id']; ?>_cat_filter" class="cat_filter form-control" multiple="multiple">

							<?php echo woopspro_get_woo_cats_option_html(); ?>

						</select>

					</div>

				</div>

				<div class="row">

					<div class="form-group col-md-4">

						<label for="<?php echo $options['id']; ?>_limit">Total Products To Query : Default All (-1)</label>

						<input type="text" name="limit" id="<?php echo $options['id']; ?>_limit" class="form-control">

					</div>

					<div class="form-group col-md-4">

						<label for="<?php echo $options['id']; ?>_slide_to_show">Total Products To Show in a Slider : Default 3</label>

						<input type="text" name="slide_to_show" id="<?php echo $options['id']; ?>_slide_to_show" class="form-control">

					</div>

					<div class="form-group col-md-4">

						<label for="<?php echo $options['id']; ?>_slide_to_scroll">Total Products Slide Each Time : Default 3</label>

						<input type="text" name="slide_to_scroll" id="<?php echo $options['id']; ?>_slide_to_scroll" class="form-control">

					</div>

				</div>

				<div class="row">

					<div class="form-group col-md-4">

						<label for="<?php echo $options['id']; ?>_autoplay_speed">
							Slider Autoplay Speed ( Default : 3000 miliseconds )
							[ Note : 1 second = 1000 milisecond ]
						</label>
						<input type="text" name="autoplay_speed" class="form-control" value="" id="<?php echo $options['id']; ?>_autoplay_speed">

					</div>

					<div class="form-group col-md-4">
						<div class="form-check">
							<label class="form-check-label" for="<?php echo $options['id']; ?>_autoplay">
								Don't Autoplay Slide ( Default : Yes )
							</label>
							<input type="checkbox" name="autoplay" class="form-check-input" value="false" id="<?php echo $options['id']; ?>_autoplay">
						</div>
					</div>

					<div class="form-group col-md-4">

						<div class="form-check">
							<label class="form-check-label" for="<?php echo $options['id']; ?>_arrows">
								Don't Show Arrows ( Default : Yes )
							</label>
							<input type="checkbox" name="arrows" class="form-check-input" value="false" id="<?php echo $options['id']; ?>_arrows" >
						</div>

					</div>

				</div>

				<div class="row">

					<div class="form-group col-md-4">

						<div class="form-check">
							<label class="form-check-label" for="<?php echo $options['id']; ?>_dots">
								Don't Show Dots ( Default : Yes )
							</label>
							<input type="checkbox" name="dots" class="form-check-input" value="false" id="<?php echo $options['id']; ?>_dots">
						</div>

					</div>

					<div class="form-group col-md-4">

						<div class="form-check">
							<label class="form-check-label" for="<?php echo $options['id']; ?>_rtl">
								Slide Right To Left ( Default : No )
							</label>
							<input type="checkbox" name="rtl" class="form-check-input" value="true" id="<?php echo $options['id']; ?>_rtl">
						</div>
					</div>

					<div class="form-group col-md-4">

						<button type="button" class="button-primary generate_btn">Generate Customized Shortcode</button>
					
					</div>

				</div>
		</form>

	</div>
	<!-- .inside -->

</div>
<!-- .postbox -->

</div>
<!-- .meta-box-sortables .ui-sortable -->