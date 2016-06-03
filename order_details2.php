<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left">
			<p class="h1">Order summary: #123456789</p>

			<h4 class="no_padding gray_text">Status: <span class="frg-icon <?php echo ( $status === 'pending_approval' ) ? 'icon-warning-inverted' : 'icon-checkmark-inverted'; ?>"></span> <span><?php echo ( $status === 'pending_approval' ) ? 'Pending approval' : 'Shipped'; ?></span></h4>
			<span class="gray_text">Apple Enrollement: Complete</span><br />
			<span class="gray_text">Submitted: January 7th 2017</span>
		</div>
	</div>
</div>

<div>
	<div class="outer-container secondary_bg white_bg">
		<div class="inner-container clearfix">
			<div class="left gray_text">
				<strong>Shipping address:</strong><br />
				<span>Jonathan Richman, 6b-123 Main St., Ottawa, Ontario, A1B C2D, 613-555-1234</span><br />
				<span>Tracking number: <a href="#">Canada Post | 61651665161</a></span>
			</div>
		</div>
	</div>

	<div class="outer-container secondary_bg purple_bg top_margin20">
		<div class="inner-container vertical_padding10 clearfix">
			<div class="big">
				<span class="frg-icon icon-tablet-inverted gray_text"></span>
				<span>Devices</span>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr>
					<?php if ( $status === 'shipped' ) { ?>
						<th>Select</th>
					<?php } ?>
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Estimated arrival</th>
					<th class="right_align">Due monthly</th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr class="wide">
					<?php if ( $status === 'shipped' ) { ?>
						<td>
							<div class="frg-checkbox regular small">
								<div class="inner">
									<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
									<div class="icon">
										<span class="frg-icon" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</td>
					<?php } ?>
					<td class="item">
						<span>Group-1</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<p class="big no_margin">iPhone 6S</p>
						<ul class="gap_left_small">
							<li>$20.00/month for 3 years with $200 upfront</li>
							<li>Plan: Unlimited Nation Wide 60</li>
							<li>Add-ons: TELUS Link, TELUS MDM, US Roaming</li>
							<li>Subscribers: 50 Micro SIM cards</li>
						</ul>

						<a class="js-show_list" href="#">View list</a>
					</td>
					<td>
						<span class="status positive">5-10 days</span>
					</td>
					<td class="right_align amount_due">
						<span>$5,500.00</span>
					</td>
					<td class="right_align amount_due">
						<span>$25,500.00</span>
					</td>
				</tr>
				<?php include( 'partials/order_details_subscriber_row.php' ); ?>
				<tr class="wide">
					<?php if ( $status === 'shipped' ) { ?>
						<td>
							<div class="frg-checkbox regular small">
								<div class="inner">
									<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
									<div class="icon">
										<span class="frg-icon" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</td>
					<?php } ?>
					<td class="item">
						<span>Group-2</span>
					</td>
					<td>
						<span>20</span>
					</td>
					<td class="description">
						<p class="big no_margin">iPhone 6S</p>

						<a class="js-show_list" href="#">View list</a>
					</td>
					<td>
						<span class="status positive">5-10 days</span>
					</td>
					<td class="right_align amount_due">
						<span>$5,500.00</span>
					</td>
					<td class="right_align amount_due">
						<span>$25,500.00</span>
					</td>
				</tr>
				<?php include( 'partials/order_details_subscriber_row.php' ); ?>
			</tbody>
		</table>
	</div>
</div>

<div>
	<div class="outer-container secondary_bg purple_bg top_margin20">
		<div class="inner-container vertical_padding10 clearfix">
			<div class="big">
				<span class="frg-icon icon-stacked-papers-inverted gray_text"></span>
				<span>BYOD Plans</span>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr>
					<?php if ( $status === 'shipped' ) { ?>
						<th><span class="invisible">Select</span></th>
					<?php } ?>
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Estimated arrival</th>
					<th class="right_align">Due monthly</th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr class="wide">
					<?php if ( $status === 'shipped' ) { ?>
						<td></td>
					<?php } ?>
					<td class="item">
						<span>Group-3</span>
					</td>
					<td>
						<span>100</span>
					</td>
					<td class="description">
						<p class="big no_margin">Unlimited Nation Wide 50</p>
						<ul class="gap_left_small">
							<li>Add-ons: TELUS Link, TELUS MDM, US Roaming</li>
							<li>Subscribers: 100 Micro SIM cards</li>
						</ul>

						<a class="js-show_list" href="#">View list</a>
					</td>
					<td>
						<span class="status positive">5-10 days</span>
					</td>
					<td class="right_align amount_due">
						<span>$5,500.00</span>
					</td>
					<td class="right_align amount_due">
						<span>$25,500.00</span>
					</td>
				</tr>
				<?php include( 'partials/order_details_subscriber_row.php' ); ?>
			</tbody>
		</table>
	</div>
</div>

<div>
	<div class="outer-container secondary_bg purple_bg top_margin20">
		<div class="inner-container vertical_padding10 clearfix">
			<div class="big clearfix">
				<span class="frg-icon icon-upgrades small block left gray_text"></span>
				<span class="left gap_left_smaller">Upgrades</span>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr>
					<?php if ( $status === 'shipped' ) { ?>
						<th>Select</th>
					<?php } ?>
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Estimated arrival</th>
					<th class="right_align">Due monthly</th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr class="wide">
					<?php if ( $status === 'shipped' ) { ?>
						<td>
							<div class="frg-checkbox regular small">
								<div class="inner">
									<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
									<div class="icon">
										<span class="frg-icon" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</td>
					<?php } ?>
					<td class="item">
						<span>Group-4</span>
					</td>
					<td>
						<span>5</span>
					</td>
					<td class="description">
						<p class="big no_margin">Samsung Galaxy Prime</p>
						<ul class="gap_left_small">
							<li>Plan: Unlimited Nation Wide 60</li>
							<li>Add-ons: TELUS Link, TELUS MDM, US Roaming</li>
							<li>5 Subscribers</li>
						</ul>

						<a class="js-show_list" href="#">View list</a>
					</td>
					<td>
						<span class="status positive">5-10 days</span>
					</td>
					<td class="right_align amount_due">
						<span>$5,500.00</span>
					</td>
					<td class="right_align amount_due">
						<span>$25,500.00</span>
					</td>
				</tr>
				<?php include( 'partials/order_details_subscriber_row.php' ); ?>
			</tbody>
		</table>
	</div>
</div>

<div>
	<div class="outer-container secondary_bg purple_bg top_margin20">
		<div class="inner-container vertical_padding10 clearfix">
			<div class="big">
				<span class="frg-icon icon-accessories gray_text"></span>
				<span>Accessories</span>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr>
					<?php if ( $status === 'shipped' ) { ?>
						<th>Select</th>
					<?php } ?>
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Availability</th>
					<th class="right_align">Due monthly</th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr class="wide">
					<?php if ( $status === 'shipped' ) { ?>
						<td>
							<div class="frg-checkbox regular small">
								<div class="inner">
									<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
									<div class="icon">
										<span class="frg-icon" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</td>
					<?php } ?>
					<td class="item">
						<span>Group-1</span>
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
					<td class="right_align amount_due"></td>
					<td class="right_align amount_due">
						<span>$25,500.00</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container content white_bg order_summary small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 no_padding gray_text">
			<div class="return_policy top_margin50">
				<h3>Return policy</h3>

				<ul class="even_list">
					<li>Returns are accepted 30 days from the order submission date</li>
					<li>To cancel service associated with these subscribers please call<br />TELUS at 1-555-555-5555</li>
				</ul>
			</div>
		</div>

		<div class="col-xs-6 no_padding clearfix">
			<div class="full_width">
				<div class="top_horizontal_separator light_gray clearfix">
					<table class="right right_align subtotal longer">
						<tr>
							<td class="gray_text">
								<strong>Sub Total</strong>
							</td>
							<td>
								<strong>$5,500</strong>
							</td>
							<td class="right_align">
								<strong>$25,500.00</strong>
							</td>
						</tr>
						<tr>
							<td class="gray_text">
								<strong>Shipping</strong>
							</td>
							<td>
								<strong>Free</strong>
							</td>
							<td class="right_align">
								<strong>Free</strong>
							</td>
						</tr>
						<tr>
							<td class="gray_text right_align">
								<strong>Taxes HST</strong><br />
								(Tax for the full device amount is included)
							</td>
							<td>
								<strong>$5,500</strong>
							</td>
							<td class="right_align">
								<strong>$25,500.00</strong>
							</td>
						</tr>
					</table>
				</div>
				<div class="top_horizontal_separator bottom_horizontal_separator light_gray clearfix">
					<table class="right right_align total longer">
						<tr>
							<td class="gray_text">
								<strong>Total</strong>
							</td>
							<td>
								<strong>$6,215</strong>
							</td>
							<td class="right_align">
								<strong>$31,922.50</strong>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<br />

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>