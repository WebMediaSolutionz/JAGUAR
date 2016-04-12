<tr class="<?php echo ( $page !== 'confirm_repair' ) ? 'wide' : ''; ?>">
	<?php if ( $page !== 'confirm_repair' ) { ?>
		<td>
			<div class="frg-checkbox regular small">
				<div class="inner">
					<input id="chkbox-option-<?php echo $i; ?>" type="checkbox" name="option-<?php echo $i; ?>" value="Option <?php echo $i; ?>">
					<div class="icon">
						<span class="frg-icon" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</td>
	<?php } ?>
	<td>
		<span>Apple iPhone 6S</span>
	</td>
	<td>
		<span>890123451234567<span/>
	</td>
	<td>
		<span>No<span/>
	</td>
	<td>
		<?php if ( $page !== 'confirm_repair' ) { ?>
			<div class='frg-select-container color-light full_width'>
				<select class="js-required" autocomplete="off">
					<option selected>Select</option>
					<option>Yes</option>
					<option>No</option>
				</select>
			</div>
		<?php } else { ?>
			<span class="gray_shade1_text">Yes</span>
		<?php } ?>
	</td>
	<td>
		<?php if ( $page !== 'confirm_repair' ) { ?>
		<div class='frg-select-container color-light full_width'>
			<select class="js-required" autocomplete="off">
				<option selected>Select reason</option>
				<option>Lorem ipsum 1</option>
				<option>Lorem ipsum 2</option>
				<option>Lorem ipsum 3</option>
			</select>
		</div>
		<?php } else { ?>
			<span class="gray_shade1_text">Device will not boot</span>
		<?php } ?>
	</td>
	<td>
		<?php if ( $page !== 'confirm_repair' ) { ?>
			<div class='frg-select-container color-light full_width'>
				<select class="js-required" autocomplete="off">
					<option selected>Select</option>
					<option>Yes</option>
					<option>No</option>
				</select>
			</div>
		<?php } else { ?>
			<span class="gray_shade1_text">Yes</span>
		<?php } ?>
	</td>
	<td class="right_align">
		<span class="purple_text">$250.00</span>
	</td>
</tr>