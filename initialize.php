<?php

	// if ( !isset( $_COOKIE['language'] ) ) {
	// 	setLanguage();
	// 	echo "setting language<br />";
	// }

	$lang = null;
	$opp_lang = null;
	$current_page = null;
	$opp_lang_page = null;
	$language = null;

	setEnvironment();

	include( "lang/{$lang}.php" );

	// if ( isset( $_GET[ 'lang' ] ) ) {
	// 	$destination = strip_parameters( $current_page );

	// 	changeLanguage();

	// 	// header( "Location: {$destination}" );
	// 	echo "changing language<br />";
	// }

?>