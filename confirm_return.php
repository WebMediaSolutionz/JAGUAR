<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar3.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left">
			<h3>Confirm return</h3>

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
					<th>Device Information</th>
					<th>Reason for return</th>
					<th class="right_align">Return Due</th>
				</tr>
			</thead>
			<tbody>
				<?php
					for ( $i = 0; $i < 4; $i++ ) { 
						include( 'partials/return_item_row.php' );
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator light_gray no_padding clearfix">
			<div class="right">
				<table class="right_align subtotal">
					<tr>
						<td class="longer gray_text top_bottom_small_padding">Sub total</td>
						<td class="right_align top_bottom_small_padding">$4,000.00</td>
					</tr>
					<tr>
						<td class="gray_text top_bottom_small_padding">Shipping</td>
						<td class="right_align top_bottom_small_padding">Free</td>
					</tr>
					<tr>
						<td class="gray_text top_bottom_small_padding">Taxes HST</td>
						<td class="right_align top_bottom_small_padding">$520.00</td>
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
				<table class="right_align total">
					<tr>
						<td class="longer gray_text top_bottom_small_padding">Total return</td>
						<td class="right_align top_bottom_small_padding">$4,520.00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<br />

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>