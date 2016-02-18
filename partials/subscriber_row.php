<tr>
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
	<td>
		<input class='frg-input-field short' />
	</td>
	<td class="port">
		<div class="frg-select-container color-light left">
			<select>
				<option value="no">No</option>
				<option value="yes">Yes</option>
			</select>
		</div>
	</td>
	<td>
		<input class='frg-input-field short' />
	</td>
	<td>
		<input class='frg-input-field short' />
	</td>
	<td class="existing_phone_nbr hide">
		<div class="empty"></div>
		<div class="input_error_tooltip hide">
			<input class='frg-input-field js-phone_nbr short' />
			<div>
				<span class="frg-icon icon-warning"></span>
			</div>
			<div class="tooltip_bubble">
				<span>lorem ipsum lorem ipsum lorem ipsum lorem ipsum</span>
			</div>
		</div>
	</td>
	<td class="account_nbr hide">
		<div class="empty"></div>
		<input class='frg-input-field short hide' />
	</td>
	<td>
		<div class="frg-select-container color-light left">
			<select>
				<option>English</option>
				<option>French</option>
			</select>
		</div>
	</td>
	<td class="sim">
		<div class="frg-select-container color-light left">
			<select autocomplete="off">
				<option value="10">SIM Option A ($10/subscriber)</option>
				<option value="5">SIM Option B ($10/subscriber)</option>
				<option value="0" selected>Provide my own SIM</option>
			</select>
		</div>
	</td>
	<td class="sim_nbr">
		<div class="empty hide"></div>
		<div class="status positive clearfix">
			<input class='frg-input-field js-validate_number back-order short left' />
			<div class="frg-icon icon-info back-order left"></div>
			<div class="tooltip_bubble">
				<span>The quantity you are trying to order is on back order. Please try reducing the quantity until the indicator changes to available</span>
			</div>
		</div>
	</td>
</tr>