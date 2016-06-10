<tr class="<?php echo ( $page !== 'confirm_repair' ) ? 'wide' : ''; ?>">
	<td class="bottom_padding20">
		<div class="frg-checkbox regular small">
			<div class="inner">
				<input id="chkbox-option-<?php echo $i; ?>" type="checkbox" name="option-<?php echo $i; ?>" value="Option <?php echo $i; ?>" >
				<div class="icon">
					<span class="frg-icon" aria-hidden="true"></span>
				</div>
			</div>
		</div>
	</td>
	<td class="bottom_padding20">
		<span>Device: Apple iPhone 6s</span><br />
		<span>IMEI: 855389855389855389</span>
	</td>
	<td class="bottom_padding20">
		<div class='frg-select-container color-light full_width'>
			<select class="js-required" autocomplete="off">
				<option selected>Select a reason</option>
				<option>Lorem ipsum 1</option>
				<option>Lorem ipsum 2</option>
				<option>Lorem ipsum 3</option>
			</select>
		</div>
		<br /><br />
		<input class='frg-input-field full_width' placeholder="Please provide any additional relevant information" />
		<br /><br />
		<?php if ( $i === 0 ) { ?>
			<div class="clearfix">
				<div class="frg-checkbox regular small left">
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