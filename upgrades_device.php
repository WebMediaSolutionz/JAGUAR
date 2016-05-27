<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container clearfix">
		<h3 class="title">Configure device for: </h3>
		
		<?php include( 'partials/edit_name.php' ); ?>
	</div>
</div>

<div class="outer-container content white_bg shadow product_header">
	<div class="inner-container clearfix">
		<h4 class="capitalize">samsung galaxy s6 32GB</h4>
	</div>
</div>

<div class="outer-container content white_bg product">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-md-3 col-md-offset-2 center_text">
				<img src="img/phone_big.jpg">
			</div>
			<div class="col-md-5 col-md-offset-1">
				<?php include( 'partials/device_form.php' ); ?>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content purple_bg features">
	<div class="inner-container clearfix">
		<h2>Features</h2>
	</div>
</div>

<div class="outer-container content purple_bg features_section ">
	<div class="inner-container white_bg clearfix">
		<?php include( 'partials/phone_features.php' ); ?>
	</div>
</div>

<div class="outer-container content purple_bg features_section">
	<div class="inner-container white_bg clearfix">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12 no_padding">
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

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>