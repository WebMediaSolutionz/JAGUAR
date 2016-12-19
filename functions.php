<?php

	function setLanguage( $lang = 'en' ) {
		if ( isset( $_COOKIE['language'] ) ) {
			$_COOKIE['language'] = $lang;
		} else {
			$cookie_name = "language";
			$cookie_value = $lang;
			setcookie( $cookie_name, $cookie_value, time() + ( 86400 * 30 ), "/"); // 86400 = 1 day
		}
	}

	function changeLanguage() {
		if ( isset( $_COOKIE['language'] ) ) {
			if ( $_COOKIE['language'] === 'en' ) {
				setLanguage( 'fr' );
			} else if ( $_COOKIE['language'] === 'fr' ){
				setLanguage( 'en' );
			}
		}
	}

	function strip_parameters( $url ) {
		$url = 	explode( '?', $url );
		$url = $url[ 0 ];

		return $url;
	}

	function setEnvironment() {
		global $lang;
		global $opp_lang;
		global $current_page;
		global $opp_lang_page;

		$eng = 'en';
		$fr = 'fr';
		$current_page = $_SERVER[ 'PHP_SELF' ];

		if ( isset( $_GET[ 'lang' ] ) ) {
			$lang = $_GET[ 'lang' ];
		} else {
			$lang = 'en';
		}

		if ( strpos( $current_page, $eng ) ) {
			$opp_lang_page = str_replace( $eng, $fr, $current_page );
			$lang = 'en';
		} else if ( strpos( $current_page, $fr ) ) {
			$opp_lang_page = str_replace( $fr, $eng, $current_page );
			$lang = 'fr';
		} else {
			$opp_lang = ( $lang === 'en' ) ? 'fr' : 'en';
			$opp_lang_page = str_replace( $lang, $opp_lang, $current_page);
		}

		if ( $current_page === $opp_lang_page ) {
			$opp_lang_page .= "?lang={$opp_lang}";
		}

		// echo "language: {$lang}<br />";
		// echo "opp language: {$opp_lang}<br />";
		// echo "language page: {$current_page}<br />";
		// echo "opp language page: {$opp_lang_page}<br />";
	}

?>