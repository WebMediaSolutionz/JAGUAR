<?php
	$easy_pay = ( $status === 'easy_pay' );

	$filter = $filter2 = $status = null;

	if ( $i % 2 === 0 ) {
		$status = 'available';
		$filter = 'all';
		$filter2 = 'voice_data';
	} else if ( $i % 3 === 0 ) {
		$status = 'back order';
		$filter = 'iphones';
		$filter2 = 'voice_only';
	} else if ( $i % 5 === 0 ) {
		$status = 'available';
		$filter = 'blackberry';
		$filter2 = 'data_only';
	} else if ( $i % 7 === 0 ) {
		$status = 'available';
		$filter = 'android';
		$filter2 = 'data_only';
	} else if ( $i % 11 === 0 ) {
		$status = 'back order';
		$filter = 'windows_phone';
		$filter2 = 'voice_only';
	} else {
		$status = 'available';
		$filter = 'other';
		$filter2 = 'voice_data';
	}

	$swatches = array( 
		array( 
				'sku'				=>	'iphone-5s-space-grey',
				'label' 			=> 	'Space Grey',
				'color'				=>	'#595859',
				'background-image' 	=>	'https://mobility.telus.com/en/common/images/products/swatches/black.gif'
			),
		array( 
				'sku'				=>	'iphone-5s-silver',
				'label' 			=> 	'Silver',
				'color'				=>	'#909090',
				'background-image' 	=>	'https://mobility.telus.com/en/common/images/products/swatches/black.gif'
		 ),
		array( 
				'sku'				=>	'iphone-5s-silver',
				'label' 			=> 	'Silver',
				'color'				=>	'#000',
				'background-image' 	=>	'https://mobility.telus.com/en/common/images/products/swatches/black.gif'
		 ),
		array( 
				'sku'				=>	'iphone-5s-space-grey',
				'label' 			=> 	'Space Grey',
				'color'				=>	'#595859',
				'background-image' 	=>	'https://mobility.telus.com/en/common/images/products/swatches/black.gif'
			),
		array( 
				'sku'				=>	'iphone-5s-silver',
				'label' 			=> 	'Silver',
				'color'				=>	'#909090',
				'background-image' 	=>	'https://mobility.telus.com/en/common/images/products/swatches/black.gif'
		 ),
		array( 
				'sku'				=>	'iphone-5s-silver',
				'label' 			=> 	'Silver',
				'color'				=>	'#000',
				'background-image' 	=>	'https://mobility.telus.com/en/common/images/products/swatches/black.gif'
		 )
	);

	$nb_swatches = rand( 1, 6 );
?>

<div class="col-xs-4 js-element">
	<div class="box phone object clearfix" data-filter="<?php echo "{$filter} {$filter2}"; ?>">
		<div class="image left">
			<a href="<?php echo ( $status !== 'back order' ) ? 'device.php': '#'; ?>" class="<?php echo ( $status !== 'back order' ) ? '': 'cursor_pointer'; ?>">
				<img alt="Space Grey" src="img/iphone-5s-space-grey.jpg" class="js-iphone-5s-space-grey js-check-availability">			
				<img alt="Silver" src="img/iphone-5s-silver.jpg" class="js-iphone-5s-silver js-check-availability hide">	
			</a>
			<div class="device__variant-container">			
				<?php for ( $j = 0; $j < $nb_swatches; $j++ ) { ?>
					<button aria-label="<?php echo $swatches[ $j ][ 'label' ]; ?>" data-sku="<?php echo $swatches[ $j ][ 'sku' ]; ?>" data-lang="en" class="device-color-button device__variant-item">				
						<span style="background: url('<?php echo $swatches[ $j ][ 'background-image' ]; ?>') no-repeat -2px -2px;" class="frg-icon icon-circle-solid swatch"></span>			
					</button>
				<?php } ?>
			</div>
		</div>

		<div class="description right">
			<div class="name">
				<div>
					<h6>
						<?php if ( $status !== 'back order' ) { ?>
							<a href="device.php">
								<strong data-maxlen="40" class="js-ellipsis">Samsung Galaxy S6 32GB </strong>
							</a>
						<?php } else { ?>
							<div class="inactive">
								<strong data-maxlen="40" class="js-ellipsis">Samsung Galaxy S6 32GB </strong>
							</div>
						<?php } ?>
					</h6>
				</div>
				<div class="status<?php echo ( $status === 'limited' || $status === 'available' ) ? ' positive' : ' negative'; ?>">
					<strong><?php echo ucfirst( $status ); ?></strong>
				</div>
			</div>

			<div class="prices clearfix">
				<div class="no-term left">
					<h4>
						<?php if ( $easy_pay ) { ?>
							<strong>$20.00</strong><span class="time_period">/month on a 3 yr term</span>
						<?php } else { ?>
							<strong>$130.99</strong> <span class="time_period">3-year term</span>
						<?php } ?>
					</h4>
				</div>
			</div>

			<div class="mtm">
				<div class="gray_text">
					<?php if ( $easy_pay ) { ?>
						<span>$30.00/month on a 2 year term</span>
					<?php } else { ?>
						<span>$200.99 on 2-year term</span>
					<?php } ?>
				</div>
				<div class="gray_text"><span>$700 no term</span></div>
				<a class="frg-button<?php echo ( $status !== 'back order' ) ? '': ' state-disabled'; ?>" href="<?php echo ( $status !== 'back order' ) ? 'device.php': '#'; ?>"><?php echo ( $status !== 'back order' ) ? 'Select': 'Unavailable'; ?></a>
			</div>
		</div>
	</div>
</div>