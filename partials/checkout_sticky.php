<?php if ( $page === 'cart_review' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-sm-offset-3 col-sm-4 amounts bold right_align clearfix">
				<div class="right separator">
					<p>Due now</p>
					<p class="h4">$25,500</p>
				</div>
				<div class="right gap_right">
					<p>Due monthly</p>
					<p class="h4">$5,500</p>
				</div>
			</div>
			<div class="col-xs-3 col-sm-3 right_align">
				<a class="frg-button color-purple full_lenght" href="#">Continue shopping</a>
			</div>
			<div class="col-xs-2 col-sm-2 no_padding right_align">
				<input class="frg-button color-green full_lenght js-submit js-incomplete js-duplicates state-disabled" type="submit" name="submit" value="Checkout" />
			</div>
		</div>
	</div>
<?php } else if ( $page === 'upgrades_subscriber' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-sm-4 no_padding">
				<?php if ( $status !== 'easy_pay' ) { ?>
					<div class="left bold clearfix">
						<div class="left circle gap_right_small green_bg">17</div>
						<div class="left gap_right_small">
							<p>Allotment<br />balance</p>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="col-sm-offset-3 col-sm-3 amounts bold clearfix">
				<div class="right">
					<p>Due</p>
					<p class="h4">$0.00</p>
				</div>
				<div class="right gap_right">
					<a class="previous block" href="<?php echo $previous_step; ?>">Previous step</a>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 no_padding right_align">
				<input class="frg-button color-green full_lenght js-incomplete js-duplicates state-disabled" type="submit" name="submit" value="Save &amp; continue" />
			</div>
		</div>
	</div>
<?php } else if ( $page === 'confirm_shipping' || $page === 'order_summary' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-sm-offset-4 col-sm-6 amounts bold right_align clearfix">
				<div class="right gap_right">
					<a class="previous block" href="<?php echo $previous_step; ?>">Previous step</a>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 no_padding right_align">
				<input class="frg-button color-green full_lenght js-incomplete js-duplicates<?php echo ( $page === 'confirm_shipping' ) ? ' state-disabled' : ''; ?>" type="submit" name="submit" value="Save &amp; continue" />
			</div>
		</div>
	</div>
<?php } else if ( $page === 'payment_options' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-sm-offset-4 col-sm-6 amounts bold right_align clearfix">
				<div class="right gap_right">
					<a class="previous block" href="<?php echo $previous_step; ?>">Previous step</a>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 no_padding right_align">
				<input class="frg-button color-green full_lenght js-incomplete js-duplicates" type="submit" name="submit" value="Place order" />
			</div>
		</div>
	</div>
<?php } else if ( $page === 'subscriber' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-sm-offset-4 col-sm-6 amounts bold right_align clearfix">
				<div class="right separator">
					<p>Due now</p>
					<p class="h4 now">$25,500.00</p>
				</div>
				<div class="right gap_right">
					<p>Due monthly</p>
					<p class="h4 monthly">$0.00</p>
				</div>
				<div class="right gap_right">
					<a class="previous block" href="<?php echo $previous_step; ?>">Previous step</a>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 no_padding right_align">
				<input class="frg-button color-green full_lenght js-incomplete js-duplicates" type="submit" name="/telus/commerce/order/purchase/AddPlanToCartFormHandler.addItemToOrder" value="Save &amp; continue">
			</div>
		</div>
	</div>
<?php } else if ( $page === 'repair' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-xs-offset-6 col-xs-3 amounts bold clearfix">
				<div class="right">
					<p>Total:</p>
					<p class="h4">$325.00</p>
				</div>
			</div>
			<div class="col-xs-3 no_padding right_align">
				<a class="frg-button color-green full_lenght js-submit js-incomplete js-duplicates" href="confirm_repair.php">Process repair</a>
			</div>
		</div>
	</div>
<?php } else if ( $page === 'order_details' || $page === 'order_details1' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-xs-offset-9 col-xs-3 no_padding right_align">
				<a class="frg-button color-green full_lenght" href="return.php"><?php echo ( $status === 'pending_approval' ) ? 'Cancel order' : 'Return selected'; ?></a>
			</div>
		</div>
	</div>
<?php } else if ( $page === 'order_details2' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-xs-offset-9 col-xs-3 no_padding right_align">
				<a class="frg-button color-green full_lenght" href="#">Return item(s)</a>
			</div>
		</div>
	</div>
<?php } else if ( $page === 'order_management1' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-xs-offset-6 col-xs-3 right_align">
				<a class="frg-button color-green full_lenght" href="#">Repair item(s)</a>
			</div>
			<div class="col-xs-3 no_padding right_align">
				<a class="frg-button color-green full_lenght" href="#">Return item(s)</a>
			</div>
		</div>
	</div>
<?php } else if ( $page === 'return' || $page === 'confirm_return' || $page === 'confirm_repair' ) { ?>
	<div class="outer-container content white_bg top_bottom_padding actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-sm-offset-4 col-sm-6 amounts bold right_align clearfix">
				<div class="right gap_right">
					<a class="previous block" href="<?php echo $previous_step; ?>">Previous step</a>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 no_padding right_align">
				<input class="frg-button color-green full_lenght js-duplicates js-submit js-incomplete" type="submit" name="/telus/commerce/order/purchase/AddPlanToCartFormHandler.addItemToOrder" value="Save &amp; continue">
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="outer-container content white_bg top_bottom_padding actions stickyFooter">
		<div class="inner-container clearfix">
			<div class="col-sm-offset-4 col-sm-6 amounts bold right_align clearfix">
				<div class="right separator">
					<p>Due now</p>
					<p class="h4 now">$25,500.00</p>
				</div>
				<div class="right gap_right">
					<p>Due monthly</p>
					<p class="h4 monthly">$0.00</p>
				</div>
				<div class="right gap_right">
					<a class="previous block" href="<?php echo $previous_step; ?>">Previous step</a>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 no_padding right_align">
				<input class="frg-button color-green full_lenght js-incomplete js-duplicates" type="submit" name="/telus/commerce/order/purchase/AddPlanToCartFormHandler.addItemToOrder" value="Save &amp; continue">
			</div>
		</div>
	</div>
<?php } ?>