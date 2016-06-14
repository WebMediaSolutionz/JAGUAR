<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<p class="h1">
			<span class="frg-icon icon-repair gray_text left"></span><span class="block left page_title">Repair</span>
		</p>
	</div>
</div>

<?php include( 'partials/banner4.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Repair items</h4>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<table class="gray_text wide datagrid">
			<thead class="gray_text">
				<tr class="wide">
					<th>Select</th>
					<th>Device Type</th>
					<th>IMEI</th>
					<th>Under Waranty</th>
					<th>Physical damage</th>
					<th>Issue/Symptom</th>
					<th>Loaner Required</th>
					<th class="right_align">Estimated Repair Fee</th>
				</tr>
			</thead>
			<tbody>
				<?php
					for ( $i = 0; $i < 3; $i++ ) { 
						include( 'partials/repair_item_row_1.php' );
						include( 'partials/repair_item_row_2.php' );
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
						<td class="longer top_bottom_small_padding">Sub total</td>
						<td class="right_align top_bottom_small_padding">$500.00</td>
					</tr>
					<tr>
						<td class="top_bottom_small_padding">Shipping</td>
						<td class="right_align top_bottom_small_padding">Free</td>
					</tr>
					<tr>
						<td class="top_bottom_small_padding">Taxes HST</td>
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
				<table class="right_align total">
					<tr>
						<td class="longer top_bottom_small_padding">Estimated total repair cost</td>
						<td class="right_align top_bottom_small_padding">$565.00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<br />

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>