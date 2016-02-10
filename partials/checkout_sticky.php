<?php if ( $page === 'cart_review' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions sticky">
		<div class="inner-container clearfix">
			<div class="col-sm-4 no_padding">
				<div class="left bold clearfix">
					<div class="left circle gap_right_small white_bg">20</div>
					<div class="left gap_right_small">
						<p>Allotment<br />balance</p>
					</div>
					<div class="left circle gap_right_small white_bg">10</div>
					<div class="left gap_right_small">
						<p>Float<br />balance</p>
					</div>
				</div>
			</div>
			<div class="col-sm-3 amounts bold right_align clearfix">
				<div class="right separator">
					<p>Due Now</p>
					<p class="h4">$25,500</p>
				</div>
				<div class="right gap_right">
					<p>Due Monthly</p>
					<p class="h4">$5,500</p>
				</div>
			</div>
			<div class="col-xs-3 col-sm-3 right_align">
				<a class="frg-button color-purple full_lenght" href="#">Continue shopping</a>
			</div>
			<div class="col-xs-2 col-sm-2 no_padding right_align">
				<a class="frg-button color-green full_lenght" href="<?php echo $next_step; ?>">Checkout</a>
			</div>
		</div>
	</div>
<?php } else if ( $page === 'confirm_shipping' || $page === 'order_summary' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions sticky">
		<div class="inner-container clearfix">
			<div class="col-sm-offset-4 col-sm-6 amounts bold right_align clearfix">
				<div class="right gap_right">
					<a class="previous block" href="<?php echo $previous_step; ?>">Previous step</a>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 no_padding right_align">
				<a class="frg-button color-green full_lenght" href="<?php echo $next_step; ?>">Save &amp; Continue</a>
			</div>
		</div>
	</div>
<?php } else if ( $page === 'payment_options' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions sticky">
		<div class="inner-container clearfix">
			<div class="col-sm-offset-4 col-sm-6 amounts bold right_align clearfix">
				<div class="right gap_right">
					<a class="previous block" href="<?php echo $previous_step; ?>">Previous step</a>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 no_padding right_align">
				<a class="frg-button color-green full_lenght" href="<?php echo $next_step; ?>">Place Order</a>
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="outer-container content white_bg top_bottom_padding actions sticky">
		<div class="inner-container clearfix">
			<div class="col-sm-offset-4 col-sm-6 amounts bold right_align clearfix">
				<div class="right separator">
					<p>Due Now</p>
					<p class="h4 now">$25,500</p>
				</div>
				<div class="right gap_right">
					<p>Due Monthly</p>
					<p class="h4 monthly">$0</p>
				</div>
				<div class="right gap_right">
					<a class="previous block" href="<?php echo $previous_step; ?>">Previous step</a>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 no_padding right_align">
				<a class="frg-button color-green full_lenght" href="<?php echo $next_step; ?>">Save &amp; Continue</a>
			</div>
		</div>
	</div>
<?php } ?>