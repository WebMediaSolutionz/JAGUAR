<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar2.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left gray_text">
			<div class="h3">Confirm Order</div>
		</div>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Devices and Plans</h4>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr>
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Estimated arrival</th>
					<th class="right_align">Due Monthly</th>
					<th class="right_align">Due Now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr class="wide">
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<p class="big no_margin">Samsung Galaxy Grand Prime</p>
						<ul>
							<li>no commitment, contracts or credit checkes</li>
							<li>Low calling rates of $0.15 per min</li>
							<li>Voice Mail 3, call display, call waiting and conference calling for free</li>
						</ul>

						<div>
							<ul class="extra_features no_styles">
								<li>
									<div style="padding: 5px;">
										<table class="vertical_align_top purple_bg">
											<thead class="gray_text">
												<tr>
													<th>Select</th>
													<th>Subscriber</th>
													<th>Porting</th>
													<th>Details</th>
													<th>SIM details</th>
													<th>IMEI</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													for ( $i = 0; $i < 10; $i++ ) { 
														include( 'partials/subscriber_row2.php' );
													}
												?>
											</tbody>
										</table>
									</div>
								</li>
							</ul>

							<a class="js-view_more closed gap_left" href="#"><span class="text">View subscribers</span> <span class="frg-icon icon-plus-circled purple_text"></span></a>
						</div>
					</td>
					<td>
						<span class="status positive">5-10 days</span>
					</td>
					<td class="right_align amount_due">
						<span>$5,500</span>
					</td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Upgrades</h4>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr>
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Estimated arrival</th>
					<th class="right_align">Due Monthly</th>
					<th class="right_align">Due Now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr class="wide">
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<p class="big no_margin">Samsung Galaxy Grand Prime</p>
						<ul>
							<li>no commitment, contracts or credit checkes</li>
							<li>Low calling rates of $0.15 per min</li>
							<li>Voice Mail 3, call display, call waiting and conference calling for free</li>
						</ul>

						<div>
							<ul class="extra_features no_styles">
								<li>
									<div>
										<table class="vertical_align_top purple_bg">
											<thead class="gray_text">
												<tr>
													<th>Select</th>
													<th>Subscriber</th>
													<th>Porting</th>
													<th>Details</th>
													<th>SIM details</th>
													<th>IMEI</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													for ( $i = 0; $i < 10; $i++ ) { 
														include( 'partials/subscriber_row2.php' );
													}
												?>
											</tbody>
										</table>
									</div>
								</li>
							</ul>

							<a class="js-view_more closed gap_left" href="#"><span class="text">View subscribers</span> <span class="frg-icon icon-plus-circled purple_text"></span></a>
						</div>
					</td>
					<td>
						<span class="status positive">5-10 days</span>
					</td>
					<td class="right_align amount_due">
						<span>$5,500</span>
					</td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Accessories</h4>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table>
			<thead class="gray_text">
				<tr>
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Estimated arrival</th>
					<th class="right_align">Due Monthly</th>
					<th class="right_align">Due Now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr>
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<span>iPhone Case</span>
					</td>
					<td>
						<span class="status positive">5-10 days</span>
					</td>
					<td class="right_align amount_due">
						<span>$5,500</span>
					</td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container content white_bg order_summary small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator no_padding clearfix">
			<div class="right">
				<table class="right_align subtotal">
					<tr>
						<td>Sub Total</td>
						<td>$5,500</td>
						<td class="right_align">$25,500</td>
					</tr>
					<tr>
						<td>Shipping</td>
						<td>Free</td>
						<td class="right_align">Free</td>
					</tr>
					<tr>
						<td>Taxes HST</td>
						<td>$5,500</td>
						<td class="right_align">$25,500</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator no_padding clearfix">
			<div class="right">
				<table class="right_align total">
					<tr>
						<td>Total</td>
						<td>$6,215</td>
						<td class="right_align">$31,922.50</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator bottom_horizontal_separator top_bottom_padding clearfix">
			<div class="row">
				<div class="col-xs-6 small gray_text terms_conditions">
					<h5>Terms &amp; conditions</h5>
					<p>
						Lorem ipsum dolor sit amet, massa bibendum risus sit lorem et cras. Adipiscing pellentesque, fusce morbi, aliquam consequat ante et vestibulum, et amet pulvinar lacus elit dignissim malesuada, eros urna et. 
					</p>

					<table class="terms">
						<tr>
							<td>
								<div class="frg-checkbox regular small">
									<div class="inner">
										<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
										<div class="icon">
											<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
										</div>
										<label for="chkbox-option-2"></label>
									</div>
								</div>
							</td>
							<td>
								<span>I accept these contract terms and conditions</span>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-6 small gray_text apple_terms">
					<h5>Apple Terms &amp; conditions</h5>
					<p>
						Lorem ipsum dolor sit amet, massa bibendum risus sit lorem et cras. Adipiscing pellentesque, fusce morbi, aliquam consequat ante et vestibulum, et amet pulvinar lacus elit dignissim. 
					</p>

					<table class="terms">
						<tr>
							<td>
								<div class="frg-checkbox regular small">
									<div class="inner">
										<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
										<div class="icon">
											<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
										</div>
										<label for="chkbox-option-2"></label>
									</div>
								</div>
							</td>
							<td>
								<span>I accept these contract terms and conditions</span>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>