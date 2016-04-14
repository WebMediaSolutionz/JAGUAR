<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<p class="h3">
			<span class="frg-icon icon-return gray_text left"></span> <span class="block left page_title">Returns</span>
		</p>
	</div>
</div>

<?php include( 'partials/banner4.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Return items</h4>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<table class="gray_text wide datagrid">
			<thead class="gray_text">
				<tr class="wide">
					<th>Select</th>
					<th>Original Order</th>
					<th>Device Type</th>
					<th>IMEI</th>
					<th>Reason for return</th>
					<th>Additional notes</th>
					<th class="right_align">Return Due</th>
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