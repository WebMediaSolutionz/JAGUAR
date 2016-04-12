<tr class="<?php echo ( $page !== 'confirm_repair' ) ? 'wide' : ''; ?>">
	<td>
	</td>
	<td>
	</td>
	<td>
	</td>
	<td>
	</td>
	<td colspan="<?php echo ( $page !== 'confirm_repair' ) ? '3': '1'; ?>">
		<div class="top_bottom_small_padding">
			<?php if ( $page !== 'confirm_repair' ) { ?>
				<label class="bold">Description of behaviour and troubleshooting attempts</label>
				<input class='frg-input-field textarea full_width' />
			<?php } else { ?>
				<span class="gray_shade1_text">Additional details: The device can not be<br />turned on with the power button anymore.</span>
			<?php } ?>
		</div>

		<?php if ( $page !== 'confirm_repair' ) { ?>
			<br />
		<?php } ?>

		<br />
	</td>
	<td>
	</td>
	<?php if ( $page !== 'confirm_repair' ) { ?>
		<td>
		</td>
		<td>
		</td>
	<?php } ?>
</tr>