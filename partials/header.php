<!DOCTYPE html>
<html class="<?php echo $page; ?>" lang="en" data-currentpage="<?php echo $page; ?>">
	<head>
		<title>TELUS</title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="css/lib/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/lib/frogger.css" />
		<link rel="stylesheet" type="text/css" href="css/lib/telus-fonts.css" />
		<link rel="stylesheet" type="text/css" href="css/lib/telus-bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/lib/bootstrap-datepicker.standalone.css" />
		<link rel="stylesheet" type="text/css" href="css/lib/dropit.css" />
		<link rel="stylesheet" type="text/css" href="css/lib/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/lib/slick-theme.css" />
		<link rel="stylesheet" type="text/css" href="css/lib/easytabs.css" />

		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		<link rel="stylesheet" type="text/css" href="//static.telus.com/common/css/sandboxes/fonts.css?v=1.2" />
		<link href="img/TELUS-favicon-16.png" sizes="16x16" type="image/png" rel="icon" />

		<!--[if lt IE 9]><script type="text/javascript" src="javascript/<?php echo $javascipt_form; ?>/lib/html5shim.js"></script><![end if]-->
	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="http://ws1.postescanada-canadapost.ca/css/addresscomplete-2.30.min.css?key=ha46-jw92-at99-yh51" />
		<script type="text/javascript" src="http://ws1.postescanada-canadapost.ca/js/addresscomplete-2.30.min.js?key=ha46-jw92-at99-yh51"></script>

		<?php if ( $local ) { ?>
			<div class="visible-xs-block">
				<span>smartphone</span>
			</div>

			<div class="tablet">
				<span>tablet</span>
			</div>

			<div class="desktop">
				<span>desktop</span>
			</div>

			<div class="large_desktop">
				<span>large desktop</span>
			</div>

			<script>
				document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
			</script>
		<?php } ?>
		
		<?php include( 'partials/backend_variables.php' ); ?>

		<div class="header_bg white_bg">
			<div class="outer-container header frg-drop-shadow">
				<div class="inner-container">
					<header class="clearfix">
						<div class="left clearfix">
							<a class="block left visible-xs-block" href="#">
								<span class="frg-icon icon-hamburger"></span>
							</a>
							<a class="logo block left" href="index.php">
								<img class="logo img-responsive" src="img/TELUS-logo-white.svg" alt="TELUS / Home" />
							</a>
							<nav class="left">
								<ul class="no_styles clearfix">
									<li class="left gap_right">
										<a class="current block" href="index.php?banner=<?php echo $next; ?>">
											<span>Buy</span>
										</a>
									</li>
									<li class="left gap_right">
										<a class="block" href="#">
											<span>Manage</span>
										</a>
									</li>
									<li class="left">
										<a class="block" href="#">
											<span>Support</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="profile right">
							<ul class="menu clearfix">
								<li class="left gap_right">
									<a class="user_name" href="#">
										<div class="left username"><span>Stan Smith</span></div>
										<div class="left frg-icon icon-arrow-down"></div>
									</a>
									<ul class="no_styles">
										<li></li>
							            <li><a href="#">Stan Smith</a></li>
							            <li><a href="#">English</a></li>
							            <li><a href="corporate_settings.php#tabs1">Corporate Settings</a></li>
							            <li><a href="#">Log out</a></li>
							        </ul>
								</li>
							</ul>
						</div>
					</header>
				</div>
			</div>
		</div>

		<div class="outer-container secondary_bg purple_bg">
			<div class="inner-container clearfix">
				<?php if ( $home_page1 || $home_page2 || $home_page3 ) { ?>
					<h3 class="title no_margin">Welcome to Enterprise Mobility Management</h3>
				<?php } ?>

				<?php if ( !$home_page1 ) { ?>
					<nav>
						<ul class="no_styles">
							<li class="left">
								<a class="<?php echo ( $page === 'devices' ) ? 'current ': ''; ?>block" href="devices.php">
									<strong>Devices</strong>
								</a>
							</li>
							<li class="left">
								<a class="<?php echo ( $page === 'plans' || $page === 'plans2' || $page === 'upgrades_plans' ) ? 'current ': ''; ?>block" href="plans.php">
									<strong>BYOD plans</strong>
								</a>
							</li>
							<!-- <li class="left"><a class="block" href="#">BYOD Setup</a></li> -->
							<li class="left">
								<a class="<?php echo ( $page === 'accessories' ) ? 'current ': ''; ?>block" href="accessories.php">
									<strong>Accessories</strong>
								</a>
							</li>
							<li class="left">
								<a class="<?php echo ( $page === 'upgrades' ) ? 'current ': ''; ?>block" href="upgrades.php">
									<strong>Upgrade</strong>
								</a>
							</li>
							<li class="left">
								<a class="<?php echo ( $page === 'order_management' || $page === 'order_management1' || $page === 'repair' || $page === 'confirm_repair' || $page === 'return' || $page === 'confirm_return' ) ? 'current ': ''; ?>block" href="order_management.php">
									<strong>Order Management</strong>
								</a>
							</li>
						</ul>
					</nav>
				<?php } ?>
				<?php if ( $page !== 'index' && $page !== 'confirmation' && $page !== 'confirmation2' ) { ?>
					<?php include( 'cart_icon.php' ); ?>
				<?php } ?>
			</div>
		</div>