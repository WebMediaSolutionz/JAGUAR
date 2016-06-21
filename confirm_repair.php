<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar4.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left">
			<h3>Confirm repair</h3>

			<div class="top_bottom_small_padding gray_text">
				<strong>Shipping address</strong><br /><span>Jonathan Richman, 6b-123 Main St., Ottawa, Ontario, A1B C2D, 613-555-1234</span>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<table class="gray_text wide datagrid">
			<thead class="gray_text">
				<tr>
					<th><strong>Device Information</strong></th>
					<th><strong>Repair Details</strong></th>
					<th class="right_align"><strong>Minimum<br />Repair Fee</strong></th>
				</tr>
			</thead>
			<tbody>
				<tr class="<?php echo ( $page !== 'confirm_repair' ) ? 'wide' : ''; ?>">
					<td class="bottom_padding20">
						<span>Device: Apple iPhone 6s</span><br />
						<span>IMEI: 748594939374</span><br />
						<span>Phone Number: 555-555-5555</span><br />
						<span>Account: 48978927</span><br />
					</td>
					<td class="bottom_padding20">
						<span>Administrator information:</span><br />
						<span>&lt;Name&gt;</span><br />
						<span>&lt;Phone&gt;</span><br />
						<span>&lt;Email&gt;</span><br />

						<br />

						<span>What is the issue?</span><br />
						<span>&lt;Customer input&gt;</span><br />

						<br />

						<span>Additional details:</span><br />
						<span>&lt;Customer input&gt;</span><br />

						<br />

						<span>Steps to solve:</span><br />
						<span>&lt;Customer input&gt;</span><br />

						<br />

						<span>The issue is continuous</span><br />
						<span>The device has physical damage</span><br />
						<span>A loaner device is required</span><br />
					</td>
					<td class="bottom_padding20 right_align">
						<span class="purple_text">$250.00</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<div class="col-xs-6">
			<h3 class="gray_text">Important for Apple Repair</h3>

			<ul class="gray_text gap_left">
				<li>Additional charges may be applied by Apple if the "Find my iPhone" feature is not disabled</li>
			</ul>
		</div>

		<div class="col-xs-6 top_horizontal_separator light_gray no_padding clearfix">
			<div class="right">
				<table class="right_align subtotal longer2">
					<tr>
						<td class="longer2 gray_text top_bottom_small_padding"><strong>Sub total</strong></td>
						<td class="right_align top_bottom_small_padding">$500.00</td>
					</tr>
					<tr>
						<td class="longer2 gray_text top_bottom_small_padding"><strong>Shipping</strong></td>
						<td class="right_align top_bottom_small_padding">Free</td>
					</tr>
					<tr>
						<td class="longer2 gray_text top_bottom_small_padding"><strong>Taxes HST</strong></td>
						<td class="right_align top_bottom_small_padding">$65.00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator bottom_horizontal_separator light_gray no_padding clearfix">
			<div class="right">
				<table class="right_align total longer2">
					<tr>
						<td class="longer2 gray_text top_bottom_small_padding">
							<strong>Estimated total repair cost</strong><br />
							<span>Repair costs are estimated and may change<br />based on the condition and model of the device</span>
						</td>
						<td class="right_align top_bottom_small_padding">$565.00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-xs-offset-10 col-xs-2 small gray_text terms_conditions">
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
							<div class="gap_left_small">I accept these contract terms and conditions</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<br />

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>