<tr class="<?php echo ( $page !== 'confirm_repair' ) ? 'wide' : ''; ?>">
	<?php if ( $page !== 'confirm_return' ) { ?>
		<td class="bottom_padding20">
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
	<td class="bottom_padding20">
		<span>855X389PLP</span>
	</td>
	<td class="bottom_padding20">
		<span>Apple iPhone 6s<span/>
	</td>
	<td class="bottom_padding20">
		<span>890123451234567<span/>
	</td>
	<td class="bottom_padding20">
		<?php if ( $page !== 'confirm_return' ) { ?>
			<div class='frg-select-container color-light full_width'>
				<select class="js-required" autocomplete="off">
					<option selected>Select a reason</option>
					<option>Lorem ipsum 1</option>
					<option>Lorem ipsum 2</option>
					<option>Lorem ipsum 3</option>
				</select>
			</div>
		<?php } else { ?>
			<span>Ordered wrong device</span>
		<?php } ?>
	</td>
	<td class="bottom_padding20">
		<?php if ( $page !== 'confirm_return' ) { ?>
			<input class='frg-input-field full_width return_additional_notes' />
		<?php } else { ?>
			<span>Wanted a different color</span>
		<?php } ?>
	</td>
	<td class="bottom_padding20 right_align">
		<span class="purple_text">$1000.00</span>
	</td>
</tr>