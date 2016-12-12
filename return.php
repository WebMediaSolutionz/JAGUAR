<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="js-all-required-fields">
	<div class="outer-container secondary_bg white_bg">
		<div class="inner-container clearfix">
			<p class="h1">
				<span class="frg-icon icon-return gray_text left"></span> <span class="block left page_title">Returns</span>
			</p>
		</div>
	</div>

	<?php include( 'partials/banner4.php' ); ?>

	<div class="outer-container secondary_bg white_bg">
		<div class="inner-container clearfix">
			<div class="error_message_container"></div>
		</div>
	</div>

	<div class="outer-container secondary_bg white_bg">
		<div class="inner-container clearfix">
			<div class="left gray_text">
				<h4 class="no_padding">Items from order #123456789</h4>
			</div>
		</div>
	</div>

	<div class="outer-container content white_bg order_details small">
		<div class="inner-container clearfix">
			<table class="gray_text wide datagrid">
				<thead class="gray_text">
					<tr class="wide">
						<th>Device Information</th>
						<th>Reason for return</th>
						<th class="right_align">Return Due</th>
					</tr>
				</thead>
				<tbody>
					<?php
						for ( $i = 0; $i < 4; $i++ ) { 
							include( 'partials/return_item_row1.php' );
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
							<td class="longer top_bottom_small_padding gray_text">Sub total</td>
							<td class="right_align top_bottom_small_padding">$4,000.00</td>
						</tr>
						<tr>
							<td class="top_bottom_small_padding gray_text">Shipping</td>
							<td class="right_align top_bottom_small_padding">Free</td>
						</tr>
						<tr>
							<td class="top_bottom_small_padding gray_text">Taxes HST</td>
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
</div>

<?php include( 'partials/footer.php' ); ?>