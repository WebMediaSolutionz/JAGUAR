<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container content white_bg shadow products_header">
	<div class="inner-container padding_bottom clearfix">
		<p class="h3"><span class="frg-icon icon-upgrades block left"></span> <span class="title">Upgrades</span></p>

		<span>Want to upgrade your subscribers to a new smartphone? Upgrading is easy!</span>
	</div>
</div>

<div class="outer-container content purple_bg top_bottom_small_padding">
	<div class="inner-container clearfix">
		<p class="h3 gray_text">ABC Company is eligible for these upgrade programs:</p>

		<div class="clearfix vertical_gap vertical_gap_top">
			<div class="left circle green_bg bold">20</div>
			<div class="left gap_left super_dark_gray_text">
				<strong>Allotment program</strong>
				<p class="top_bottom_small_padding no_margin">
					You currently have an allotment balance of 20.<br />You can use your allotment to upgrade any subscriber to any new smartphone for $75.00.<br />This program expires 6 months before the end of your corporate agreement with TELUS.
				</p>
			</div>
		</div>

		<div class="clearfix">
			<div class="left circle green_bg bold">
				<span class="frg-icon icon-checkmark white_text"></span>
			</div>
			<div class="left gap_left super_dark_gray_text">
				<strong>Technology refresh program</strong>
				<p class="top_bottom_small_padding no_margin">
					The TELUS technology refresh program allows you to upgrade any subscriber to a new smartphone once they are 24 months into their term.<br />This program requires the subscriber to extend their contract for another 36 months.
				</p>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding">
	<div class="inner-container clearfix">
		<div class="js-all-required-fields">
			<p class="h3 no_margin">How to upgrade your subscribers:</p>

			<div class="gray_text vertical_gap_top"><span>Step 1: Enter the first phone number you would like to upgrade</span></div>

			<div class='frg-select-container style2 color-light vertical_gap_top small_gap'>
				<select class="js-required" autocomplete="off">
					<option>Select</option>
					<option>TELUS account</option>
					<option>TELUS account</option>
					<option>TELUS account</option>
				</select>
			</div>

			<div class="gray_text vertical_gap_top"><span>Step 2: Enter the first phone number you would like to upgrade</span></div>

			<div class="clearfix vertical_gap_top small_gap">
				<input class='frg-input-field left js-phone_input_mask side_padding js-required' placeholder="Enter a phone number" />
				<a href='#' class='frg-button color-purple left gap_left_small side_padding state-disabled js-submit'>Add</a>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>