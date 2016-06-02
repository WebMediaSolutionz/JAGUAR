<tr>
	<td class="top_bottom_small_padding">
		<input type="hidden" name="blah" value="#" />
		<div class="frg-checkbox regular small">
			<div class="inner">
				<input id="chkbox-option-<?php echo $i; ?>" type="checkbox" name="option-<?php echo $i; ?>" value="Option <?php echo $i; ?>">
				<div class="icon bit_lower">
					<span aria-hidden="true" class="frg-icon"></span>
				</div>
				<label for="chkbox-option-<?php echo $i; ?>"></label>
			</div>
		</div>
	</td>
	<td class="top_bottom_small_padding">555-555-5555</td>
	<td class="top_bottom_small_padding">John Doe</td>
	<td class="top_bottom_small_padding">
		<div class='frg-select-container color-light'>
			<select class="js-upgrade-offer" autocomplete="off">
				<option>Select</option>
				<option>Technology refresh</option>
				<option>Technology refresh</option>
				<option>Technology refresh</option>
			</select>
		</div>
	</td>
	<?php if ( $status !== 'easy_pay' ) { ?>
		<td>$0.00</td>
	<?php } ?>
	<td class="top_bottom_small_padding purple_text"><span class="status">Pending upgrade offer</span></td>
	<td class="right_align top_bottom_small_padding">-</td>
</tr>