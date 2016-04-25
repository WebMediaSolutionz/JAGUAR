<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left">
			<p class="h1">Order summary: #12345678</p>

			<h4 class="no_padding gray_text">Status: <span class="frg-icon <?php echo ( $status === 'pending_approval' ) ? 'icon-warning-inverted' : 'icon-checkmark-inverted'; ?>"></span> <?php echo ( $status === 'pending_approval' ) ? 'Pending approval' : 'Shipped'; ?></h4>
		</div>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Devices and Plans</h4>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details">
	<div class="inner-container clearfix">
		<table class="gray_text wide datagrid">
			<thead class="gray_text">
				<tr class="wide">
					<?php if ( $status === 'shipped' ) { ?>
						<th>Select</th>
					<?php } ?>
					<th>Item</th>
					<th>Quantity</th>
					<th class="wide">Description</th>
					<?php if ( $status !== 'shipped' ) { ?>
						<th>Estimated arrival</th>
					<?php } ?>
					<th class="right_align">Monthly</th>
					<th class="right_align">Total</th>
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
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Accessories</h4>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details">
	<div class="inner-container clearfix">
		<table class="wide datagrid">
			<thead class="gray_text">
				<tr class="wide">
					<?php if ( $status === 'shipped' ) { ?>
						<th>Select</th>
					<?php } ?>
					<th>Item</th>
					<th>Quantity</th>
					<th class="description">Description</th>
					<?php if ( $status !== 'shipped' ) { ?>
						<th>Estimated arrival</th>
					<?php } ?>
					<th></th>
					<th class="right_align">Due now</th>
				</tr>
			</thead>
			<tbody class="small">
				<?php
					for ( $i = 0; $i < 3; $i++ ) { 
						include( 'partials/order_details_row2.php' );
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 no_padding clearfix">
			<div class="right">
				<table class="right_align subtotal">
					<tr>
						<td>Sub Total:</td>
						<td class="right_align">$16,500.00</td>
						<td class="right_align">$79,000.00</td>
					</tr>
					<tr>
						<td>Shipping:</td>
						<td class="right_align">Free</td>
						<td class="right_align">Free</td>
					</tr>
					<tr>
						<td>Taxes HST:</td>
						<td class="right_align">$2,145.00</td>
						<td class="right_align">$10,270.00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg order_details small">
	<div class="inner-container clearfix">
		<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator light_gray no_padding clearfix">
			<div class="right">
				<table class="right_align total">
					<tr>
						<td>Total:</td>
						<td class="right_align">$18,645.00</td>
						<td class="right_align">$89,270.00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>