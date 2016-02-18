<?php
	$banner = ( isset( $_GET[ 'banner' ] ) ) ? $_GET[ 'banner' ] : 'banner1'; 
	$next = null;
	$home_page1 = $home_page2 = $home_page3 = false;

	$page = explode( '/', $_SERVER[ 'PHP_SELF' ] );
	$page = $page[ count( $page ) - 1 ];
	$page = explode( '.php', $page );
	$page = $page[ 0 ];

	$previous_step = null;
	$next_step = null;

	switch ( $banner ) {
		case 'banner1' :	$next = 'banner2';
							$home_page1 = ( $page === 'index' );
							break;

		case 'banner2' :	$next = 'banner3';
							$home_page2 = ( $page === 'index' );
							break;

		case 'banner3' :	$next = 'banner1';
							$home_page3 = ( $page === 'index' );
							break;
	}

	switch ( $page ) {
		case 'device':				$next_step = 'plans2.php';
									break;

		case 'plans2':				$previous_step = 'device.php';
									$next_step = 'addons.php';
									break;

		case 'addons':				$previous_step = 'plans2.php';
									$next_step = 'accessories2.php';
									break;

		case 'accessories2':		$previous_step = 'addons.php';
									$next_step = 'subscriber.php';
									break;

		case 'subscriber':			$previous_step = 'accessories2.php';
									$next_step = 'cart_review.php';
									break;

		case 'cart_review':			$previous_step = 'subscriber.php';
									$next_step = 'confirm_shipping.php';
									break;

		case 'confirm_shipping':	$previous_step = 'cart_review.php';
									$next_step = 'order_summary.php';
									break;

		case 'order_summary':		$previous_step = 'confirm_shipping.php';
									$next_step = 'payment_options.php';
									break;

		case 'payment_options':		$previous_step = 'order_summary.php';
									$next_step = 'confirmation.php';
									break;

		default :					$next_step = '#';
									break;
	}

	define( 'DOMAIN', 'http://publishedactiveint-qa1.tmi.telus.com/tm_pep/' );
	define( 'NBR_DEVICES', 50 );
	$folder = "WCM_EOF/static_content/jaguar/";
?>