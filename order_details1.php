<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left">
			<p class="h1">Order summary: #123456789</p>

			<h4 class="no_padding gray_text">Status: <span class="frg-icon <?php echo ( $status === 'pending_approval' ) ? 'icon-warning-inverted' : 'icon-checkmark-inverted'; ?>"></span> <span><?php echo ( $status === 'pending_approval' ) ? 'Pending approval' : 'Shipped'; ?></span></h4>
		</div>
	</div>
</div>

<div>
	<div class="outer-container secondary_bg white_bg">
		<div class="inner-container clearfix">
			<div class="left gray_text">
				<strong>Shipping information:</strong><br />
				<span>Jonathan Richman, 6b-123 Main St., Ottawa, Ontario, A1B C2D, 613-555-1234</span><br />
				<span>Canada Post Tracking: <a href="#">&lt;Shipping Number&gt;</a></span>
			</div>
		</div>
	</div>

	<div class="outer-container secondary_bg purple_bg top_margin20">
		<div class="inner-container vertical_padding10 clearfix">
			<div class="big">
				<span class="frg-icon icon-stacked-papers-inverted gray_text"></span>
				<span>Account #55555555</span>
			</div>
		</div>
	</div>

	<div class="outer-container secondary_bg white_bg top_margin20 bottom_margin20">
		<div class="inner-container clearfix">
			<div class="left gray_text">
				<span>Select hardware payment method: BAN 55555555</span>
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
						<span>Order-1</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<p class="big no_margin">Samsung Galaxy Grand Prime</p>
						<ul class="gap_left_small">
							<li>No commitment, contracts or credit checks</li>
							<li>Low calling rates of $0.15 per min</li>
							<li>Voice Mail 3, call display, call waiting and conference calling for free</li>
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
						<span>Order-2</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<p class="big no_margin">Samsung Galaxy Grand Prime</p>
						<ul class="gap_left_small">
							<li>No commitment, contracts or credit checks</li>
							<li>Low calling rates of $0.15 per min</li>
							<li>Voice Mail 3, call display, call waiting and conference calling for free</li>
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
						<span>Order-3</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<p class="big no_margin">Samsung Galaxy Grand Prime</p>
						<ul class="gap_left_small">
							<li>No commitment, contracts or credit checks</li>
							<li>Low calling rates of $0.15 per min</li>
							<li>Voice Mail 3, call display, call waiting and conference calling for free</li>
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
				<span class="frg-icon icon-stacked-papers-inverted gray_text"></span>
				<span>Account #6666666666</span>
			</div>
		</div>
	</div>

	<div class="outer-container secondary_bg white_bg top_margin20 bottom_margin20">
		<div class="inner-container clearfix">
			<div class="left gray_text">
				<span>Select hardware payment method: BAN 66666666</span>
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
						<span>Order-1</span>
					</td>
					<td>
						<span>50</span>
					</td>
					<td class="description">
						<p class="big no_margin">Samsung Galaxy Grand Prime</p>
						<ul class="gap_left_small">
							<li>No commitment, contracts or credit checks</li>
							<li>Low calling rates of $0.15 per min</li>
							<li>Voice Mail 3, call display, call waiting and conference calling for free</li>
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
						<span>Order-2</span>
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
		<div class="col-xs-6 col-xs-offset-6 no_padding clearfix">
			<div class="right full_width">
				<div class="top_horizontal_separator light_gray clearfix">
					<table class="right right_align subtotal">
						<tr>
							<td>Sub Total</td>
							<td class="right_align">$25,500.00</td>
						</tr>
						<tr>
							<td>Shipping</td>
							<td class="right_align">Free</td>
						</tr>
						<tr>
							<td>Taxes HST</td>
							<td class="right_align">$25,500.00</td>
						</tr>
					</table>
				</div>
				<div class="top_horizontal_separator bottom_horizontal_separator light_gray clearfix">
					<table class="right right_align total">
						<tr>
							<td>Total</td>
							<td class="right_align">$31,922.50</td>
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