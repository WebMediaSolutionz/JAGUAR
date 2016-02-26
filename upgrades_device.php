<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container clearfix">
		<h3 class="title">Configure device for: </h3>
		<p class="h3"><strong>Group-10 Galaxy Prime (## subscribers)</strong> <input class='frg-input-field hide js-auto_save' placeholder="press 'enter' to save" value='Order-1 Galaxy Prime (50 devices)'/> <a class="small edit_name" href="#">edit name</a></p>
	</div>
</div>

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
			<div class="col-xs-5 col-xs-offset-1">
				<section>
					<h6><strong>Step 1: Select your device options</strong></h6>

					<table class="table1">
						<tr>
							<td><span>Colour</span></td>
							<td><span>SIM</span></td>
						</tr>
						<tr>
							<td>
								<div class='frg-select-container style2 color-light'>
									<select autocomplete="off">
										<option>Select</option>
										<option>Black</option>
										<option>White</option>
									</select>
								</div>
							</td>
							<td class="vertical_align_top">
								<div class='frg-select-container style2 color-light'>
									<select autocomplete="off">
										<option>Select</option>
										<option>MicroSIM - $10/subscriber</option>
										<option>MicroSIM - $10/subscriber</option>
									</select>
								</div>
							</td>
						</tr>
					</table>

					<h6 class="padding_top"><strong>Step 2: Select your service category</strong></h6>

					<div><span>Apple DEP</span></div>
					<div class='frg-select-container style2 half_width color-light'>
						<select autocomplete="off">
							<option>Select</option>
							<option>115156 - $5/subscriber</option>
							<option>115156 - $10/subscriber</option>
							<option>115156 - $15/subscriber</option>
						</select>
					</div>

					<h6 class="padding_top"><strong>Step 3: Select your service committment:</strong></h6>

					<div class='frg-select-container style2 full_width color-light'>
						<select class="js-sort-by" autocomplete="off">
							<option>Select</option>
							<option value="device">Voice &amp; data ($50/subscriber/month)</option>
							<option value="brand">Voice Only ($45/subscriber/month)</option>
							<option value="brand">Data Only ($40/subscriber/month)</option>
						</select>
					</div>

					<div class="vertical_gap_top">
						<strong>Based on this selection, your device pricing will be:</strong>
					</div>

					<div>
						<label>
							<strong>
								<span class="value" data-value="200">$50.00</span> for technology refresh subscribers
							</strong>
						</label>
					</div>

					<div>
						<label>
							<strong>
								<span class="value" data-value="995">$75.00</span> for allotment subscribers
							</strong>
						</label>
					</div>

					<div>
						<label>
							<strong>
								<span class="value" data-value="995">$130.99</span> for subscribers on a 3-year plan
							</strong>
						</label>
					</div>
				</section>
			</div>
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

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>