<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left">
			<p class="h1 no_padding purple_text">Confirm return</p>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<table class="gray_text wide datagrid">
			<thead class="gray_text">
				<tr>
					<?php if ( $page !== 'confirm_return' ) { ?>
						<th>Select</th>
					<?php } ?>
					<th>Original order</th>
					<th>Device Type</th>
					<th>
						<div class="left">IMEI</div> <div class="frg-icon icon-info back-order purple top_margin_minus7 left gap_left_small"></div>
					</th>
					<th>Reason for return</th>
					<th>Additional notes</th>
					<th>Return Due</th>
				</tr>
			</thead>
			<tbody>
				<?php
					for ( $i = 0; $i < 3; $i++ ) { 
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
						<td class="longer">Sub total</td>
						<td class="right_align">$4,000.00</td>
					</tr>
					<tr>
						<td>Shipping</td>
						<td class="right_align">Free</td>
					</tr>
					<tr>
						<td>Taxes HST</td>
						<td class="right_align">$520.00</td>
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
						<td class="longer">Total return</td>
						<td class="right_align">$4,520.00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<br />

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>