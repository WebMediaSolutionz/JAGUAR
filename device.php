<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container content white_bg shadow product_header">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-xs-12">
				<p class="h1 device_title capitalize">samsung galaxy s6 32GB</p>	
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg product">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-md-4 col-md-offset-1 phone_details image center_text">
				<!-- <img src="img/phone_big.jpg"> -->

				<a class="visible-sm-block center" href="<?php echo ( $status !== 'back order' ) ? 'device.php': '#'; ?>" class="<?php echo ( $status !== 'back order' ) ? '': 'cursor_pointer'; ?>">
					<img alt="Space Grey" src="http://static.telus.com/common/cms/images/mobility/devices/en/iphone-5s-space-grey.jpg" class="js-iphone-5s-space-grey js-check-availability">			
					<img alt="Silver" src="http://static.telus.com/common/cms/images/mobility/devices/en/iphone-5s-silver.jpg" class="js-iphone-5s-silver js-check-availability hide">	
				</a>

				<a class="hidden-sm center" href="<?php echo ( $status !== 'back order' ) ? 'device.php': '#'; ?>" class="<?php echo ( $status !== 'back order' ) ? '': 'cursor_pointer'; ?>">
					<img alt="Space Grey" src="http://static.telus.com/common/cms/images/mobility/devices/en/iphone-5s-space-grey.jpg" class="js-iphone-5s-space-grey js-check-availability">			
					<img alt="Silver" src="http://static.telus.com/common/cms/images/mobility/devices/en/iphone-5s-silver.jpg" class="js-iphone-5s-silver js-check-availability hide">	
				</a>

				<div class="device__variant-container center">			
					<button class="device-color-button device__variant-item" data-lang="en" data-sku="iphone-5s-space-grey" aria-label="Space Grey">				
						<span class="frg-icon icon-circle-solid" style="color: #595859"></span>			
					</button>			
					<button class="device-color-button device__variant-item" data-lang="en" data-sku="iphone-5s-silver" aria-label="Silver">				
						<span class="frg-icon icon-circle-solid" style="color: #909090"></span>			
					</button>		
				</div>
			</div>
			<div class="col-md-5 col-md-offset-1 js-all-required-fields">
				<?php include( 'partials/device_form.php' ); ?>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content purple_bg features">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<h2>Features</h2>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content purple_bg features_section">
	<div class="inner-container white_bg clearfix">
		<?php include( 'partials/phone_features.php' ); ?>
	</div>
</div>	

<div class="outer-container content purple_bg features_section">
	<div class="inner-container white_bg clearfix">
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12 no_padding">
						<h3 class="section_title advanced_search not_underlined clearfix">specifications<a class="frg-icon icon-plus-inverted toggle_panel right" data-section="details" href="#"></a></h3>

						<div class="details closed hide">
							<h3>specifications</h3>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>