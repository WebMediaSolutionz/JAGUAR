<!DOCTYPE html>
<html class="<?php echo $page; ?>" lang="en" data-currentpage="<?php echo $page; ?>">
	<head>
		<title>TELUS</title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
			<div class="smartphone">
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
				document.write( '<script src="http://' + ( location.host || 'localhost' ).split( ':' )[ 0 ] + ':35729/livereload.js?snipver=1"></' + 'script>' );
			</script>
		<?php } ?>
		
		<?php include( 'partials/backend_variables.php' ); ?>

		<div class="header_bg white_bg hidden-xs">
			<div class="outer-container header frg-drop-shadow">
				<div class="inner-container">
					<header class="clearfix">
						<div class="left clearfix">
							<div class="left">
								<a class="logo block left" href="index.php">
									<img class="logo img-responsive" src="img/TELUS-logo-white.svg" alt="TELUS / Home" />
								</a>
							</div>
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

		<div class="header_bg header visible-xs-block">
			<div class="outer-container">
				<header class="inner-container clearfix">
					<div class="row left clearfix">
						<div class="col-md-4">
							<div class="clearfix">
								<a class="logo block left" href="index.php">
									<img class="logo" src="img/TELUS-logo-white.svg" alt="TELUS / Home" />
								</a>
							</div>
							<nav>
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
					</div>
				</header>
			</div>
		</div>

		<?php if ( !$home_page1 ) { ?>
			<div class="menu_dropdown outer-container outline gray visible-xs-block">
				<div class="inner-container">
					<div class="row">
						<div class="col-md-4">
							<div class="profile">
								<ul class="menu clearfix">
									<li class="left gap_right">
										<a class="user_name clearfix" href="#">
											<div class="left username"><span>Menu</span></div>
											<div class="left frg-icon icon-arrow-down"></div>
										</a>
								        <ul class="no_styles small">
											<li>
												<a class="<?php echo ( $page === 'devices' ) ? 'current ': ''; ?>" href="devices.php">
													Devices
												</a>
											</li>
											<li>
												<a class="<?php echo ( $page === 'plans' || $page === 'plans2' || $page === 'upgrades_plans' ) ? 'current ': ''; ?>" href="plans.php">
													BYOD plans
												</a>
											</li>
											<!-- <li class="left"><a class="block" href="#">BYOD Setup</a></li> -->
											<li>
												<a class="<?php echo ( $page === 'accessories' ) ? 'current ': ''; ?>" href="accessories.php">
													Accessories
												</a>
											</li>
											<li>
												<a class="<?php echo ( $page === 'upgrades' ) ? 'current ': ''; ?>" href="upgrades.php">
													Upgrade
												</a>
											</li>
											<li>
												<a class="<?php echo ( $page === 'order_management' || $page === 'order_management1' || $page === 'repair' || $page === 'confirm_repair' || $page === 'return' || $page === 'confirm_return' ) ? 'current ': ''; ?>" href="order_management.php">
													Order Management
												</a>
											</li>
										</ul>

									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		
		<div class="outer-container secondary_bg purple_bg hidden-xs hidden-sm<?php echo ( $page === 'devices' || $page === 'plans' || $page === 'accessories' || $page === 'cart_review' ) ? ' hidden-xs' : ''; ?><?php echo ( $page === 'plans2' ) ? ' hidden-xs' : ''; ?>">
			<div class="inner-container clearfix">
				<?php if ( $home_page1 || $home_page2 || $home_page3 ) { ?>
					<h3 class="title no_margin hidden-xs">Welcome to Enterprise Mobility Management</h3>

					<div class="row visible-xs-block">
						<div class="col-md-4">
							<h3 class="title no_margin gray_text">Welcome to Project Jaguar</h3>	
						</div>
					</div>
				<?php } ?>

				<?php if ( !$home_page1 ) { ?>
					<nav class="hidden-xs">
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