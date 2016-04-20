<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left">
			<p class="h1 no_padding purple_text">Confirm repair</p>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<table class="gray_text wide datagrid">
			<thead class="gray_text">
				<tr>
					<?php if ( $page !== 'confirm_repair' ) { ?>
						<th>Select</th>
					<?php } ?>
					<th>Device Type</th>
					<th>
						<div class="left">IMEI</div> <div class="frg-icon icon-info back-order purple top_margin_minus7 left gap_left_small"></div>
					</th>
					<th>Under Waranty</th>
					<th>Physical Damage</th>
					<th>Issue/Symptom</th>
					<th>Loaner Required</th>
					<th class="right_align">
						<div class="right clearfix">
							<div class="left">Estimated<br />Repair Fee</div> <div class="frg-icon icon-info back-order purple top_margin_minus7 left gap_left_small"></div>
						</div>
					</th>
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
						<td class="longer">Sub total</td>
						<td class="right_align">$500.00</td>
					</tr>
					<tr>
						<td>Shipping</td>
						<td class="right_align">Free</td>
					</tr>
					<tr>
						<td>Taxes HST</td>
						<td class="right_align">$65.00</td>
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
						<td class="longer">Estimated total repair cost</td>
						<td class="right_align">$565.00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<br />

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>