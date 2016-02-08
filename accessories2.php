<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container clearfix">
		<h3 class="title">Select accessories for: </h3>
		<p class="h3">Order-1 Galaxy Prime (50 devices) <a class="small" href="#">edit name</a></p>

		<div class="clearfix">
			<?php if ( !$home_page1 ) { ?>
				<nav class="left filter_nav device">
					<ul class="no_styles">
						<li class="left"><a class="current block" href="#">Audio</a></li>
						<li class="left"><a class="block" href="#">Cases &amp; protection</a></li>
						<li class="left"><a class="block" href="#">Charging</a></li>
						<li class="left"><a class="block" href="#">Health &amp; fitness</a></li>
						<li class="left"><a class="block" href="#">Smart watches</a></li>
						<li class="left"><a class="block" href="#">Other</a></li>
					</ul>
				</nav>

				<nav class="left filter_nav brand hide">
					<ul class="no_styles">
						<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
						<li class="left"><a class="block js-filter" data-filter="audio" href="#">Audio</a></li>
					</ul>
				</nav>
			<?php } ?>
			<div class='right frg-select-container color-light'>
				<select class="js-sort-by">
					<option value="device">Device</option>
					<option value="brand">Brand</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding">
	<div class="inner-container row clearfix">
		<div class="accessory col-xs-4">
			<div class="h4">Urbanears Plattan</div>
			<div class="price">$700</div>
			<div class="item center_text">
				<img src="images/beats.jpg">
			</div>

			<div class="device__variant-container center">
				<button class="device-color-button device__variant-item" data-lang="en" data-sku="iphone-6s-space-grey" aria-label="Change device colour to Space Grey">
					<span class="frg-icon icon-circle-solid" style="color: #595859"></span>
				</button>

				<button class="device-color-button device__variant-item" data-lang="en" data-sku="iphone-6s-gold" aria-label="Change device colour to Gold">
					<span class="frg-icon icon-circle-solid" style="color: #C2B19D"></span>
				</button>
			</div>

			<div>
				<div class="col-xs-6">
					<label>Colour</label>
					<div class='frg-select-container color-light'>
						<select>
							<option>Option</option>
							<option>Option</option>
						</select>
					</div>
				</div>
				<div class="col-xs-6">
					<label>Quantity <span class="status positive">Available</span></label>
					<input class='frg-input-field' value='test'/>
				</div>
			</div>
			<div class="center_text">
				<a class="frg-button select" href="<?php echo $next_step; ?>">Add to cart</a>
			</div>
		</div>
		<div class="accessory separator col-xs-4">
			<div class="h4">Urbanears Plattan</div>
			<div class="price">$700</div>
			<div class="item center_text">
				<img src="images/jbl.jpg">
			</div>

			<div class="device__variant-container center">
				<button class="device-color-button device__variant-item" data-lang="en" data-sku="iphone-6s-space-grey" aria-label="Change device colour to Space Grey">
					<span class="frg-icon icon-circle-solid" style="color: #595859"></span>
				</button>

				<button class="device-color-button device__variant-item" data-lang="en" data-sku="iphone-6s-gold" aria-label="Change device colour to Gold">
					<span class="frg-icon icon-circle-solid" style="color: #C2B19D"></span>
				</button>
			</div>

			<div>
				<div class="col-xs-6">
					<label>Colour</label>
					<div class='frg-select-container color-light'>
						<select>
							<option>Option</option>
							<option>Option</option>
						</select>
					</div>
				</div>
				<div class="col-xs-6">
					<label>Quantity <span class="status positive">Available</span></label>
					<input class='frg-input-field' value='test'/>
				</div>
			</div>
			<div class="center_text">
				<a class="frg-button select" href="<?php echo $next_step; ?>">Add to cart</a>
			</div>
		</div>
		<div class="accessory separator col-xs-4">
			<div class="h4">Urbanears Plattan</div>
			<div class="price">$700</div>
			<div class="item center_text">
				<img src="images/blah.jpg">
			</div>

			<div class="device__variant-container center">
				<button class="device-color-button device__variant-item" data-lang="en" data-sku="iphone-6s-space-grey" aria-label="Change device colour to Space Grey">
					<span class="frg-icon icon-circle-solid" style="color: #595859"></span>
				</button>

				<button class="device-color-button device__variant-item" data-lang="en" data-sku="iphone-6s-gold" aria-label="Change device colour to Gold">
					<span class="frg-icon icon-circle-solid" style="color: #C2B19D"></span>
				</button>
			</div>

			<div>
				<div class="col-xs-6">
					<label>Colour</label>
					<div class='frg-select-container color-light'>
						<select>
							<option>Option</option>
							<option>Option</option>
						</select>
					</div>
				</div>
				<div class="col-xs-6">
					<label>Quantity <span class="status positive">Available</span></label>
					<input class='frg-input-field' value='test'/>
				</div>
			</div>
			<div class="center_text">
				<a class="frg-button select" href="<?php echo $next_step; ?>">Add to cart</a>
			</div>
		</div>
	</div>

	<div class="pagin clearfix">
		<div class="col-xs-6 text_align_right"><a href="">Next 12</a></div>
		<div class="col-xs-6 separator"><a href="">View all</a></div>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>