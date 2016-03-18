<?php
	$image = $name = $price = null;

	if ( $i % 3 === 0 ) {
		$image = 3;
		$name = "Vetta Folio";
		$price = 49.99;
	} else if ( $i % 2 === 0 ) {
		$image = 2;
		$name = "Incipio DualPro Shine";
		$price = 34.99;
	} else {
		$image = 1;
		$name = "mophie Juice Pack air";
		$price = 119.99;
	}
?>
<div class="<?php echo ( ( $i - 1 ) % 3 === 0 ) ? '' : 'separator '; ?>accessory object col-xs-4" data-filter="audio charging smart_watches">
	<div class="js-all-required-fields">
		<div class="h4"><?php echo $name; ?></div>
		<div class="price"><?php echo "$ {$price}"; ?></div>
		<div class="item center_text">
			<img class="js-iphone-6s-space-grey" src="<?php echo "img/accessories{$image}.jpg"; ?>" />
		</div>

		<div class="bottom_section vertical_gap_top center">
			<div class="full_width">
				<div>
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
				<a class="frg-button select js-submit js-display-overlay full_width" href="#">Add to cart</a>
			</div>
		</div>
	</div>
</div>