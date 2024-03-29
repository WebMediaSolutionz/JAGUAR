<tr class="<?php echo ( $page !== 'confirm_repair' ) ? 'wide' : ''; ?>">
	<td class="bottom_padding20">
		<span>Device: Apple iPhone 6s</span><br />
		<span>IMEI: 855389855389855389</span>
	</td>
	<td class="bottom_padding20">
		<div class='frg-select-container color-light full_width'>
			<select class="js-required" autocomplete="off">
				<option selected>Select a reason</option>
				<option>I don't want this device anymore</option>
				<option>Device is damaged</option>
				<option>Device does not work</option>
				<option>Other</option>
			</select>
		</div>
		<br /><br />
		<div class="h4 bottom_padding10">please provide details for the return</div>
		<input class='frg-input-field full_width js-required' maxlength="1024" placeholder="Please provide additional information in order for us to process your return request" />
		<br /><br />
		<?php if ( $i === 0 ) { ?>
			<div class="clearfix">
				<div class="frg-checkbox regular small left js-copy_row">
					<div class="inner">
						<input id="chkbox-option-<?php echo $i; ?>" type="checkbox" name="option-<?php echo $i; ?>" value="Option <?php echo $i; ?>" >
						<div class="icon">
							<span class="frg-icon" aria-hidden="true"></span>
						</div>
					</div>
				</div>

				<div class="left gap_left">
					<span>This is the same reason for all devices in this return</span>
				</div>
			</div>
		<?php } ?>
		<br />
	</td>
	<td class="bottom_padding20 right_align">
		<span class="purple_text">$1000.00</span>
	</td>
</tr>