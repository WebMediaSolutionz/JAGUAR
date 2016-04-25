<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left">
			<p class="h1">Confirm order</p>
		</div>
	</div>
</div>

<div>
	<div class="outer-container secondary_bg white_bg">
		<div class="inner-container clearfix">
			<div class="left gray_text">
				<strong>Shipping address:</strong><br />
				<span>Jonathan Richman, 6b-123 Main St., Ottawa, Ontario, A1B C2D, 613-555-1234</span>
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
				<span>Select hardware payment method:</span>

				<div class='frg-select-container color-light'>
					<select>
						<option>Select</option>
						<option>BAN: 555555555</option>
						<option>BAN: 444444444</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr class="outline">
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Estimated arrival</th>
					<th class="right_align">Due monthly</th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr class="wide outline">
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
				<tr class="wide outline">
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
				<tr class="wide outline">
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
				<tr class="wide hide">
					<td colspan="10">
						<div class="subscriber_list purple_bg hide">
							<table class="wide center">
								<thead>
									<tr>
										<th>Subscriber</th>
										<th>Porting</th>
										<th>Details</th>
										<th>SIM details</th>
										<th>IMEI</th>
									</tr>
								</thead>
								<tbody>
									<tr class="wide">
										<td class="item">
											<span>John Doe</span>
										</td>
										<td>
											<span>No</span>
										</td>
										<td class="description">
											<span>City: Ottawa | Preferred area code: 613 | Voicemail in English</span>
										</td>
										<td>
											<span>Nano SIM ($10)</span>
										</td>
										<td>
											<span>41255356535444</span>
										</td>
									</tr>
									<tr class="wide">
										<td class="item">
											<span>John Doe</span>
										</td>
										<td>
											<span>No</span>
										</td>
										<td class="description">
											<span>City: Ottawa | Preferred area code: 613 | Voicemail in English</span>
										</td>
										<td>
											<span>Nano SIM ($10)</span>
										</td>
										<td>
											<span>41255356535444</span>
										</td>
									</tr>
									<tr class="wide">
										<td class="item">
											<span>John Doe</span>
										</td>
										<td>
											<span>No</span>
										</td>
										<td class="description">
											<span>City: Ottawa | Preferred area code: 613 | Voicemail in English</span>
										</td>
										<td>
											<span>Nano SIM ($10)</span>
										</td>
										<td>
											<span>41255356535444</span>
										</td>
									</tr>
									<tr class="wide">
										<td class="item">
											<span>John Doe</span>
										</td>
										<td>
											<span>Yes</span>
										</td>
										<td class="description">
											<span>Account: 2222222 | Phone Number: (555) 555 5555 | Voicemail in English</span>
										</td>
										<td>
											<span>Nano SIM ($10)</span>
										</td>
										<td>
											<span>41255356535444</span>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="heading clearfix">
								<div class="left gap_left"><a class="js-hide_subscribers_list" href="#"><span>Hide list</span></a></div>
							</div>
						</div>
					</td>
				</tr>
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
				<span>Select hardware payment method:</span>

				<div class='frg-select-container color-light'>
					<select>
						<option>Select</option>
						<option>BAN: 555555555</option>
						<option>BAN: 444444444</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead class="gray_text">
				<tr class="outline">
					<th>Item</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Estimated arrival</th>
					<th class="right_align">Due monthly</th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody class="small gray_text">
				<tr class="wide outline">
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
				<tr class="wide outline">
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
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container content white_bg order_summary small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 no_padding clearfix">
			<div class="right">
				<table class="right_align subtotal">
					<tr>
						<td>Subtotal:</td>
						<td class="right_align">$25,500.00</td>
					</tr>
					<tr>
						<td>Shipping:</td>
						<td class="right_align">Free</td>
					</tr>
					<tr>
						<td>Taxes HST:</td>
						<td class="right_align">$25,500.00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator light_gray no_padding clearfix">
			<div class="right">
				<table class="right_align total">
					<tr>
						<td>Total:</td>
						<td class="right_align">$31,922.50</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<br />

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>