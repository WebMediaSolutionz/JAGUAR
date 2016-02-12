<?php
	$filter = $status = null;

	switch ( $i ) {
		case 0 : 	$filter = 'all';
					break;

		case 1 : 	$filter = 'iphones';
					break;

		case 2 : 	$filter = 'blackberry';
					break;
					
		case 3 : 	$filter = 'android';
					break;

		case 4 : 	$filter = 'windows_phone';
					break;

		case 5 : 	$filter = 'other';
					break;			
	}

	if ( $i % 2 === 0 ) {
		$status = 'limited';
	} else if ( $i % 3 === 0 ) {
		$status = 'back order';
	} else {
		$status = 'available';
	}
?>

<div data-filter="<?php echo $filter; ?> voice_only" class="box phone object clearfix left">
	<div class="image left">
		<a href="device.php"><img src="images/phone.jpg" alt="Samsung Galaxy S6 32GB"></a>

		<div class="device__variant-container">

			<button aria-label="Change device colour to Space Grey" data-sku="iphone-6s-space-grey" data-lang="en" class="device-color-button device__variant-item">
				<span style="color: #595859" class="frg-icon icon-circle-solid"></span>
			</button>

			<button aria-label="Change device colour to Gold" data-sku="iphone-6s-gold" data-lang="en" class="device-color-button device__variant-item">
				<span style="color: #C2B19D" class="frg-icon icon-circle-solid"></span>
			</button>

			<button aria-label="Change device colour to Silver" data-sku="iphone-6s-silver" data-lang="en" class="device-color-button device__variant-item">
				<span style="color: #909090" class="frg-icon icon-circle-solid"></span>
			</button>

			<button aria-label="Change device colour to Rose Gold" data-sku="iphone-6s-rose-gold" data-lang="en" class="device-color-button device__variant-item">
				<span style="color: #EDCCBD" class="frg-icon icon-circle-solid"></span>
			</button>

		</div>
	</div>

	<div class="description right">
		<div class="name">
			<div>
				<h6>
					<a class="<?php echo ( $status !== 'back order' ) ? '': 'cursor_pointer'; ?>" href="<?php echo ( $status !== 'back order' ) ? 'device.php': '#'; ?>"><strong>Samsung Galaxy S6 32GB</strong></a>
				</h6>
			</div>
			<div class="status<?php echo ( $status === 'limited' || $status === 'available' ) ? ' positive' : ' negative'; ?>">
				<strong><?php echo ucfirst( $status ); ?></strong> <span class="frg-icon icon-info back-order right"></span>
			</div>
		</div>

		<div class="prices">
			<div class="no-term left">
				<h4><strong>$200</strong></h4>
				<strong><span class="time_period">No term</span></strong>
			</div>

			<div class="long-term right">
				<h4><strong>$50</strong></h4>
				<strong><span class="time_period">3 year term</span></strong>
			</div>
			<div class="clear"></div>
		</div>

		<div class="mtm">
			<div class="gray_text"><strong>$230 Monthly</strong></div>
			<a href="<?php echo ( $status !== 'back order' ) ? 'device.php': '#'; ?>" class="frg-button<?php echo ( $status !== 'back order' ) ? '': ' state-disabled'; ?>"><?php echo ( $status !== 'back order' ) ? 'Select': 'Unavailable'; ?></a>
		</div>
	</div>
	<div class="clear"></div>
</div>