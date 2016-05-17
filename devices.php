<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container content white_bg shadow products_header hidden-xs">
	<div class="inner-container clearfix">
		<p class="h1"><span class="support-footer__icon frg-icon icon-smartphone-inverted gray_text"></span> Devices</p>

		<div class="clearfix">
			<nav class="left filter_nav brand">
				<ul class="no_styles">
					<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
					<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
					<li class="left"><a class="block js-filter" data-filter="blackberry" href="#">Blackberry</a></li>
					<li class="left"><a class="block js-filter" data-filter="android" href="#">Android</a></li>
					<li class="left"><a class="block js-filter" data-filter="windows_phone" data-specific-spelling="Windows Phone" href="#">Windows Phone</a></li>
					<li class="left"><a class="block js-filter" data-filter="other" href="#">Other</a></li>
				</ul>
			</nav>

			<nav class="left filter_nav price1 hide">
				<ul class="no_styles">
					<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
					<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
				</ul>
			</nav>

			<nav class="left filter_nav price2 hide">
				<ul class="no_styles">
					<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
					<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
				</ul>
			</nav>

			<nav class="left filter_nav price3 hide">
				<ul class="no_styles">
					<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
					<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
				</ul>
			</nav>

			<nav class="left filter_nav device hide">
				<ul class="no_styles">
					<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
					<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
				</ul>
			</nav>

			<nav class="left filter_nav availability hide">
				<ul class="no_styles">
					<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
					<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
				</ul>
			</nav>

			<nav class="left filter_nav plan_nav hide">
				<ul class="no_styles">
					<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
					<li class="left"><a class="block js-filter" data-filter="iphones" data-specific-spelling="iPhone" href="#">iPhones</a></li>
				</ul>
			</nav>

			<div class='frg-select-container color-light right hidden-xs'>
				<select class="js-sort-by" autocomplete="off">
					<option value="brand">Filter by: Brand</option>
					<option value="price1">Filter by: Price (with term)</option>
					<option value="price2">Filter by: Price (device only)</option>
					<option value="price3">Filter by: Price (month to month)</option>
					<option value="device">Filter by: Device Type</option>
					<option value="availability">Filter by: Availability</option>
					<option value="plan_nav">Filter by: Plan</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content purple_bg shadow products_header visible-xs-block">
	<div class="inner-container clearfix">
		<p class="h1"><span class="support-footer__icon frg-icon icon-smartphone-inverted gray_text"></span> Devices</p>

		<div class='frg-select-container full_width color-light bottom_margin5'>
			<select>
				<option>Filter by: Brand</option>
				<option>Filter by: Brand</option>
			</select>
		</div>

		<div class='frg-select-container full_width color-light bottom_margin10'>
			<select>
				<option>Sort by: Apple</option>
				<option>Sort by: Apple</option>
			</select>
		</div>
	</div>
</div>

<div class="outer-container content white_bg shadow products_header visible-xs-block">
	<div class="inner-container gray_text">
		<p class="h2">Apple</p>

		<span>Select your service category:</span>

		<div class='frg-select-container full_width color-light bottom_margin5'>
			<select>
				<option>Voice &amp; data (plans starting at $50.00/month)</option>
				<option>Voice &amp; data (plans starting at $50.00/month)</option>
				<option>Voice &amp; data (plans starting at $50.00/month)</option>
			</select>
		</div>
	</div>
</div>

<div class="outer-container content white_bg shadow products">
	<div class="inner-container clearfix">
		<div class="clearfix hidden-xs">
			<h3 class="js-applied_filter">All</h3>
			<div>
				<h3 class="no_padding"><span class="left gap_right_small small block vertical_gap_top very_small_gap">Select your service category: </span></h3>
				<div class="left">
					<div class='right frg-select-container color-light'>
						<select class="js-filter-service-category" autocomplete="off">
							<option>Select</option>
							<option value="voice_data" selected>Voice &amp; data ($50/subscriber/month)</option>
							<option value="voice_only">Voice Only ($45/subscriber/month)</option>
							<option value="data_only">Data Only ($40/subscriber/month)</option>
						</select>
					</div>
				</div>
			</div>
		</div>

		<div class="phones clearfix">
			<div class="page current clearfix">
				<div class="row">
					<?php 
						for ( $i = 1; $i < 20; $i++ ) { 
							include( 'partials/phone.php' );
						} 
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>