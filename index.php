<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( "partials/{$banner}.php" ); ?>

<div class="outer-container main_content purple_bg">
	<div class="inner-container">
		<h3 class="title">Track, adjust and manage your business mobility needs</h3>

		<div class="box left">
			<div class="top">
				<h3 class="buy">
					<a href="index.php?banner=banner2"><span class="support-footer__icon frg-icon icon-user-profile-inverted"></span> Buy</a>
				</h3>

				<h6 class="description">Get the right devices, SIMs and accessories for your business.</h6>
			</div>
			<ul class="no_styles">
				<li>
					<a class="clearfix" href="devices.php">
						<div class="left ellipsis">Buy devices</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="plans.php">
						<div class="left ellipsis">Activate BYOD plans</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="upgrade.php">
						<div class="left ellipsis">Upgrade a subscriber</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="accessories.php">
						<div class="left ellipsis">Buy accessories</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="box left">
			<div class="top">
				<h3 class="manage">
					<a href="http://managebusiness.telus.com/ui/sso/oauth/index.jsp"><span class="support-footer__icon frg-icon icon-smartphone-inverted"></span> Manage</a>
				</h3>

				<h6 class="description">Gain real-time visibility and control over your mobile workforce.</h6>
			</div>
			<ul class="no_styles">
				<li>
					<a class="clearfix" href="#">
						<div class="left ellipsis">View usage &amp; manage account</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="#">
						<div class="left ellipsis">Run custom invoice reports</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="#">
						<div class="left ellipsis">Set up organizational hierarchy</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="box left">
			<div class="top">
				<h3 class="order">
					<a href="order_management.php"><span class="support-footer__icon frg-icon icon-cart-inverted"></span> Order management</a>
				</h3>

				<h6 class="description">View status, edit and approve recent and pending orders.</h6>
			</div>
			<ul class="no_styles">
				<li>
					<a class="clearfix" href="order_management.php">
						<div class="left ellipsis">View recent orders</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="order_management.php">
						<div class="left ellipsis">Review pending orders</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
				<li>
					<a class="clearfix" href="cart_review.php">
						<div class="left ellipsis">View items in cart</div> <span class="support-footer__icon frg-icon icon-arrow-right right"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div class="outer-container content white_bg">
	<div class="inner-container">
		<div class="support_section clearfix">
			<div class="col6 left">
				<div class="left gap_right">
					<h3 class="title">Support shortcuts</h3>

					<ul class="list">
						<li><a href="#">Frequently asked questions</a></li>
						<li><a href="#">Browse support articles</a></li>
						<li><a href="#">Submit a repair request</a></li>
						<li><a target="_blank" href="http://www.telus.com/support">View device starter guides</a></li>
					</ul>
				</div>

				<img class="headset left" src="img/headset.jpg" alt="headset">
			</div>
			<div class="col6 separator left">
				<h3 class="title">Check repair ticket status</h3>

				<div class="ticket_number_status">
					<input class="left frg-input-field" placeholder="Repair ticket number"/>
					<a class="left frg-button gap_left_small" href="#">Repair Status</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>