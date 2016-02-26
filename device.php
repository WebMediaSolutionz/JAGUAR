<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container content white_bg shadow product_header">
	<div class="inner-container clearfix">
		<h4>samsung galaxy s6 32GB</h4>
	</div>
</div>

<div class="outer-container content white_bg product">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-xs-3 col-xs-offset-2 center_text">
				<img src="images/phone_big.jpg">
			</div>
			<form>
				<div class="col-xs-5 col-xs-offset-1">
					<section>
						<h6><strong>Step 1: Select your device options</strong></h6>

						<table class="table1">
							<tr>
								<td><span>Colour</span></td>
								<td><label>Quantity <span class="status positive">Available</span></label></td>
							</tr>
							<tr>
								<td>
									<div class='frg-select-container color-light'>
										<select class="js-required" autocomplete="off">
											<option selected>Select</option>
											<option>Black</option>
											<option>White</option>
										</select>
									</div>
								</td>
								<td class="vertical_align_top">
									<div class="status positive clearfix">
										<input class='frg-input-field js-quantity back-order left js-required' value='1' />
										<div class="frg-icon icon-info back-order left"></div>
										<div class="tooltip_bubble">
											<span>The quantity you are trying to order is on back order. Please try reducing the quantity until the indicator changes to available</span>
										</div>
										<input type="hidden" class="js-max_quantity" name="max_quantity" value="100" />
									</div>
								</td>
							</tr>
						</table>

						<h6 class="padding_top"><strong>Step 2: Select your service category</strong></h6>

						<div class="vertical_gap small_gap">
							<div class='frg-select-container color-light'>
								<select class="js-sort-by js-required" autocomplete="off">
									<option selected>Select</option>
									<option value="device">Voice &amp; data ($50/subscriber/month)</option>
									<option value="device">Voice &amp; Data Lite</option>
									<option value="brand">Voice Only ($45/subscriber/month)</option>
									<option value="brand">Data Only ($40/subscriber/month)</option>
								</select>
							</div>
						</div>

						<span>Minimum Monthly Service Commitment: $20/subscriber</span>

						<h6 class="padding_top"><strong>Step 3: Select your device price</strong></h6>

						<div class="frg-checkbox regular">
							<div class="inner">
								<input class="vertical_gap_top small_gap" id="radio-option1" type="radio" name="option" value="Option 1">
								<div class="icon vertical_gap_top small_gap"></div>
								<label for="radio-option1">
									<strong>
										<span class="value" data-value="200">$200</span> Starting at $70 per month on a 3-year plan
									</strong>
								</label>
							</div>
						</div>

						<div class="frg-checkbox regular">
							<div class="inner">
								<input class="vertical_gap_top small_gap" id="radio-option2" type="radio" name="option" value="Option 2">
								<div class="icon vertical_gap_top small_gap"></div>
								<label for="radio-option2">
									<strong>
										<span class="value" data-value="995">$995</span> Month to month
									</strong>
								</label>
							</div>
						</div>

						<div class="frg-checkbox regular">
							<div class="inner">
								<input class="vertical_gap_top small_gap" id="radio-option3" type="radio" name="option" value="Option 3">
								<div class="icon vertical_gap_top small_gap"></div>
								<label for="radio-option3">
									<strong>
										<span class="value" data-value="995">$995</span> Device only (no plan)
									</strong>
								</label>
							</div>
						</div>

						<h6 class="padding_top"><strong>Step 4: Select your account configuration</strong></h6>

						<table class="table1">
							<tr>
								<td><span>Account</span></td>
								<td colspan="2"><span>Apple DEP Enrollment</span></td>
							</tr>
							<tr>
								<td>
									<div class='frg-select-container color-light'>
										<select class="js-required" autocomplete="off">
											<option selected>Select</option>
											<option>Choose BAN</option>
											<option>Choose BAN</option>
										</select>
									</div>
								</td>
								<td>
									<div class='frg-select-container color-light'>
										<select class="js-required" autocomplete="off">
											<option selected>Select</option>
											<option>[Account Number] - $[50]/subscriber</option>
											<option>[Account Number] - $[60]/subscriber</option>
											<option>Do not enroll</option>
										</select>
									</div>
								</td>
								<td></td>
							</tr>
						</table>
					</section>

					<section class="right_align clearfix">
						<table class="table2 right">
							<tr>
								<td><span>Due now</span></td>
								<td><span class="total">$0</span></td>
							</tr>
						</table>
						<a href='<?php echo $next_step; ?>' class='frg-button color-green js-submit state-disabled'>Add to cart</a>
					</section>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="outer-container content purple_bg features">
	<div class="inner-container clearfix">
		<h2>Features</h2>
	</div>
</div>

<div class="outer-container content purple_bg features_section ">
	<div class="inner-container white_bg clearfix">
		<h3 class="section_title advanced_search clearfix">Why you'll love this smartphone<a class="frg-icon icon-minus-inverted toggle_panel right" data-section="phone_features" href="#"></a></h3>

		<div class="phone_features open">
			<section class="clearfix">
				<div class="col-xs-6">
					<h1 class="tagline">NEXT IS NOW</h1>
				</div>
				<div class="col-xs-6">
					<p>Finally, a smartphone that's more than simply beautiful. It's better. The Samsung galaxy S6 is reinvented from the outside in. Beneath stunning metal and sophisticated glass lies the faster, most powerful processor ever in a Samsung smartphone. </p>

					<p>The best HD display yet brings your life to light - even in sunlight. And the dynamic, ultra-responsive camera captures the true-to-life brillance of any moment. Every detail. Every day. Meet the reimagined Samsung Galaxy S6.</p>
				</div>
			</section>

			<section class="clearfix">
				<div class="cell clearfix col-xs-6">
					<div class="col-xs-6">
						<h2>Breakthrough<br />design</h2>
						<h6>Ultimate sophisticated style in a sleek unibody</h6>
					</div>
					<div class="col-xs-6 center_text">
						<img src="images/phone1.jpg">
					</div>
				</div>
				<div class="cell col-xs-6">
					<div class="col-xs-6">
						<h2>Super-charger</h2>
						<h6>Touch and play for 4 hours with just 10 minutes of charging</h6>
					</div>
					<div class="col-xs-6 center_text">
						<img src="images/phone2.jpg">
					</div>
				</div>
			</section>

			<section class="clearfix">
				<div class="large-cell col-xs-6">
					<h2>Quick launch camera</h2>
					<h6>Under a second to catch the moment</h6>
				</div>
				<div class="col-xs-6 large-cell">
					<img src="images/phone3.jpg">
				</div>
			</section>

			<section class="clearfix">
				<div class="youtube col-xs-9">
					<iframe width="880" height="520" src="https://www.youtube.com/embed/Mhvv2-iCKao" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-xs-3">
					<?php include( 'partials/carousel.php' ); ?>
				</div>
			</section>
		</div>

		<h3 class="footnote advanced_search clearfix">Detail<a class="frg-icon icon-plus-inverted toggle_panel right" data-section="details" href="#"></a></h3>

		<div class="details closed hide">
			<h3>detail</h3>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>