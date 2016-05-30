<div class="subscriber_mobile_row">
	<h6>Subscriber <?php echo $i; ?></h6>

	<div class="bottom_margin10 clearfix">
		<label class="left">First name:</label>
		<input class="frg-input-field js-required short right" />
	</div>

	<div class="bottom_margin10 clearfix">
		<label class="left">Last name:</label>
		<input class="frg-input-field js-required short right" />
	</div>

	<div class="bottom_margin10 clearfix">
		<label class="left">Is this subscriber porting?</label>
		<div class="frg-select-container color-light right">
			<select class="js-required" autocomplete="off">
				<option value="no" selected>No</option>
				<option value="yes">Yes</option>
			</select>
		</div>
	</div>

	<div class="bottom_margin10 clearfix">
		<label class="left">Calling city:</label>
		<div class="empty hide"></div>
		<input class='frg-input-field js-required short js-cities-auto-complete right' />
		<div class="js-auto-complete-results hide"></div>
	</div>

	<div class="bottom_margin10 clearfix">
		<label class="left">Preferred area code:</label>
		<div class="empty hide"></div>
		<div class="frg-select-container color-light right">
			<select class="js-area-codes js-required" autocomplete="off">
			</select>
		</div>
	</div>

	<div class="bottom_margin10 clearfix">
		<label class="left">Default voicemail language:</label>
		<div class="frg-select-container color-light right">
			<select class="js-required" autocomplete="off">
				<option>English</option>
				<option>French</option>
			</select>
		</div>
	</div>

	<div class="clearfix">
		<label class="left">SIM number:</label>
		<input class="frg-input-field js-required short right" />
	</div>
</div>