<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left gray_text">
			<div class="h3">Order #12345678 Summary</div>
			<h4 class="no_padding">Pending approval (<span class="small"><a href="#">james H.</a> approval required</span>)</h4>
		</div>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Devices and Plans</h4>
		</div>
		<div class="right">
			<div class='frg-select-container color-light'>
				<select>
					<option>Action</option>
					<option>Select all</option>
					<option>Remove item(s)</option>
					<option>Deselect all</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_summary">
	<div class="inner-container clearfix">
		<table class="gray_text wide">
			<thead class="gray_text">
				<tr>
					<th>Item</th>
					<th>Quantity</th>
					<th class="wide">Description</th>
					<th>Estimated arrival</th>
					<th class="right_align">Due Monthly</th>
					<th class="right_align">Due Now</th>
				</tr>
			</thead>
			<tbody class="small">
				<?php
					for ( $i = 0; $i < 3; $i++ ) { 
						include( 'partials/order_details_row.php' );
						include( 'partials/order_details_subscriber_row.php' );
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container horizontal_separator dark_gray"></div>
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
		<table class="wide">
			<thead class="gray_text">
				<tr>
					<th>Select</th>
					<th>Item</th>
					<th>Accessory</th>
					<th></th>
					<th></th>
					<th></th>
					<th>Quantity</th>
					<th>Estimated arrival</th>
					<th></th>
					<th class="right_align">Due Now</th>
				</tr>
			</thead>
			<tbody class="small">
				<tr class="wide">
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon">
									<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</td>
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<a href="#">Beats ear buds</a>
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						<span>50</span>
					</td>
					<td>
						<span class="status positive">5 days</span>
					</td>
					<td>
						
					</td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
				<tr class="wide">
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon">
									<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</td>
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<a href="#">Beats ear buds</a>
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						<span>50</span>
					</td>
					<td>
						<span class="status positive">5 days</span>
					</td>
					<td>
						
					</td>
					<td class="right_align amount_due">
						<span>$25,500</span>
					</td>
				</tr>
				<tr class="wide">
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon">
									<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</td>
					<td>
						<span>Order-1</span>
					</td>
					<td>
						<a href="#">Beats ear buds</a>
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						<span>50</span>
					</td>
					<td>
						<span class="status positive">5 days</span>
					</td>
					<td>
						
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

<div class="outer-container content white_bg top_bottom_padding">
	<div class="inner-container clearfix">
		<div class="col-xs-offset-7 col-xs-2 right_align">
			<a class="previous block" href="#">Previous step</a>
		</div>
		<div class="col-xs-3 right_align">
			<a class="frg-button color-green full_lenght" href="#">Continue</a>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>