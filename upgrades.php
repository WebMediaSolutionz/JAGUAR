<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container content white_bg shadow products_header">
	<div class="inner-container padding_bottom clearfix">
		<div class="row">
			<div class="col-xs-12">
				<div class="error_message_container vertical_gap_top"></div>

				<p class="h1"><span class="frg-icon icon-upgrades block left"></span> <span class="title">Upgrades</span></p>

				<span class="hidden-xs">It's easy to give subscribers a new smartphone.</span>
				<span class="visible-xs-block">It's easy to upgrade</span>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content purple_bg top_bottom_small_padding">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-xs-12 padding_bottom">
				<p class="h3 gray_text">ABC Company is eligible for<span class="hidden-xs"> the following</span>:</p>

				<div class="clearfix vertical_gap vertical_gap_top row">
					<div class="col-xs-3 col-sm-2 col-md-1">
						<div class="circle green_bg bold">20</div>
					</div>
					<div class="super_dark_gray_text col-xs-9 col-sm-10 col-md-11">
						<strong class="big">Allotment program</strong>
						<p class="top_bottom_small_padding no_margin">
							Your current allotment balance is 20.<br />Use your allotment to upgrade any subscriber to a new smartphone  for only $75.00.<br />This program expires 6 months before your corporate agreement with TELUS ends.
						</p>
					</div>
				</div>

				<div class="clearfix row">
					<div class="col-xs-3 col-sm-2 col-md-1">
						<div class="circle green_bg bold">
							<span class="frg-icon icon-checkmark white_text"></span>
						</div>
					</div>
					<div class="super_dark_gray_text col-xs-9 col-sm-10 col-md-11">
						<strong class="big">Technology refresh program</strong>
						<p class="top_bottom_small_padding no_margin">
							The TELUS Technology Refresh Program allows you to upgrade any subscriber to a new smartphone after 24 months on their current term.<br />The refresh program requires the subscriber to extend their contract for another 36 months.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-xs-12 top_bottom_padding">
				<div class="js-all-required-fields">
					<p class="h3 no_margin">How to upgrade subscribers</p>

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

						<div class="left">
							<input class='frg-input-field left js-phone_input_mask side_padding js-required short_text_box' placeholder="Enter a phone number" />
						</div>
						<div class="left gap_left">
							<input class="frg-button color-purple side_padding js-incomplete js-submit" type="submit" name="submit" value="Add" />
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>