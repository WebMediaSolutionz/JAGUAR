<div class="<?php echo ( ( $i - 1 ) % 3 === 0 ) ? '' : 'separator '; ?>accessory object col-xs-4" data-filter="audio charging smart_watches">
	<div class="js-all-required-fields">
		<div class="h4">Urbanears Plattan</div>
		<div class="price">$700.00</div>
		<div class="item center_text">
			<img class="js-iphone-6s-space-grey" src="images/beats.jpg">
			<img class="js-iphone-6s-gold hide" src="images/beats2.jpg">
		</div>

		<div class="row">
			<div class="col-xs-6 col-xs-offset-3">
				<label class="full_width">
					Quantity <span class="status positive right" data-num="<?php echo $i; ?>">Available</span>
				</label><br />
				<div class="status positive clearfix">
					<input class='frg-input-field js-quantity back-order left js-required' data-num="<?php echo $i; ?>" value='1' />
					<div class="frg-icon icon-info back-order left"></div>
					<div class="tooltip_bubble">
						<span>The quantity you are trying to order is on back order. Please try reducing the quantity until the indicator changes to available</span>
					</div>
					<input type="hidden" class="js-max_quantity" name="max_quantity" value="100" />
				</div>
			</div>
		</div>

		<div class="center_text">
			<a class="frg-button select js-submit js-display-overlay state-disabled" href="#">Add to cart</a>
		</div>
	</div>
</div>