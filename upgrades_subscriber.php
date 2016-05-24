<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container content white_bg shadow products_header">
	<div class="inner-container padding_bottom clearfix">
		<p class="h1"><span class="frg-icon icon-upgrades block left"></span> <span class="title">Upgrades</span></p>

		<span>First select an upgrade offer for each subscriber then select the subscriber(s) and add a device and plan.</span>
	</div>
</div>

<?php include( 'partials/error_message_mockup.php' ); ?>

<div class="outer-container content purple_bg top_bottom_small_padding">
	<div class="inner-container clearfix">
		<div class="col-xs-offset-7 col-xs-5 no_padding operations">
			<input class="frg-button color-purple right state-disabled" type="submit" name="submit" value="Remove" />
			<input class="frg-button color-purple right gap_right state-disabled" type="submit" name="submit" value="Add device &amp; plan" />

			<div class="vertical_gap_top small_gap right gap_right">
				<strong class="bold">Actions:</strong>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding">
	<div class="inner-container clearfix">
		<table class="wide">
			<thead>
				<tr>
					<th>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input class="js-check-all" id="chkbox-option-0" type="checkbox" name="option-0" value="Option 0">
								<div class="icon bit_lower">
									<span aria-hidden="true" class="frg-icon"></span>
								</div>
							</div>
							<label for="chkbox-option-0"></label>
						</div>
					</th>
					<th>Phone number</th>
					<th>Subscriber</th>
					<th>Upgrade offer</th>
					<th class="center_text">Status</th>
					<th class="right_align">Upgrade Fee*</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="7">
						<div class="top_bottom_small_padding">The following subscribers have a minimum service committment of $50.00/month</div>
					</td>
				</tr>
				<?php for( $i = 1; $i <= 3; $i++ ) { ?>
					<?php include( 'partials/upgrades_subscriber_row.php' ); ?>
				<?php } ?>
				<tr>
					<td colspan="7">
						<div class="top_bottom_small_padding">The following subscribers have a minimum service committment of $50.00/month</div>
					</td>
				</tr>
				<?php for( $i = 4; $i <= 6; $i++ ) { ?>
					<?php include( 'partials/upgrades_subscriber_row.php' ); ?>
				<?php } ?>
				<tr>
					<td colspan="7">
						<div class="top_bottom_small_padding">The following subscribers have a minimum service committment of $50.00/month</div>
					</td>
				</tr>
				<?php for( $i = 7; $i <= 9; $i++ ) { ?>
					<?php include( 'partials/upgrades_subscriber_row.php' ); ?>
				<?php } ?>
			</tbody>
		</table>

		<div class="clearfix">
			<div class="purple_bg left add_subscriber">
				<p class="h1">Add another subscriber that is on TELUS account #898927383:</p>

				<div class="clearfix">
					<input class='frg-input-field left js-phone_input_mask side_padding' placeholder="Enter a phone number" />
					<input class="frg-button color-purple left gap_left_small side_padding js-validated_options state-disabled" type="submit" name="submit" value="Add">
				</div>
				<div class="vertical_gap_top small_gap">
					<span class="gray_text small">To upgrade subscribers on other TELUS accounts you need to repeat this process again</span>
				</div>
			</div>
		</div>

		<span class="small">*Does not include hardware or rate plan charges</span>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>