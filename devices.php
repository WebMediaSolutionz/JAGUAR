<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container content white_bg shadow products_header">
	<div class="inner-container clearfix">
		<p class="h3"><span class="support-footer__icon frg-icon icon-smartphone-inverted gray_text"></span> Devices</p>

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

			<div class='frg-select-container color-light right'>
				<select class="js-sort-by">
					<option value="brand">Sort by: Brand</option>
					<option value="price1">Sort by: Price (with term)</option>
					<option value="price2">Sort by: Price (device only)</option>
					<option value="price3">Sort by: Price (month to month)</option>
					<option value="device">Sort by: Device Type</option>
					<option value="availability">Sort by: Availability</option>
					<option value="plan_nav">Sort by: Plan</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg shadow products">
	<div class="inner-container clearfix">
		<div class="clearfix">
			<h3 class="js-applied_filter">All</h3>
			<div>
				<h3 class="no_padding"><span class="left gap_right_small smaller">Select your service category: </span></h3>
				<div class="btn_group left">
					<a class="current btn js-filter js-default" data-filter="voice_data" href="#">Voice &amp; Data</a> 
					<a class="btn js-filter" data-filter="voice_only" href="#">Voice Only</a> 
					<a class="btn js-filter" data-filter="data_only" href="#">Data Only</a>
				</div>
			</div>
		</div>

		<div class="phones">
			<div class="page current clearfix">
				<?php 
					for ( $i = 1; $i < 20; $i++ ) { 
						include( 'partials/phone.php' );

						if ( $i % 9 === 0 ) {
							echo "</div><div class='page hide clearfix'>";
						}	
					} 
				?>
			</div>
		</div>
		

		<div class="clear"></div>

		<?php include( 'partials/paging.php' ); ?>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>