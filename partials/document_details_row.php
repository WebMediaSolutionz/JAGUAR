<tr class="wide outline">
	<?php if ( $status === 'shipped' ) { ?>
		<td>
			<div class="frg-checkbox regular small">
				<div class="inner">
					<input id="chkbox-option-<?php echo $i; ?>" type="checkbox" name="option-<?php echo $i; ?>" value="Option <?php echo $i; ?>">
					<div class="icon">
						<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</td>
	<?php } ?>
	<td>
		<a href="#">report</a>
	</td>
	<td>
		<span>version <?php echo $i + 1; ?>.0</span>
	</td>
	<td>
		<span>April 7th, 2016<span/>
	</td>
	<td>
		<a href="#">John Doe</a>
	</td>
	<td>
		<span>44Kb</span>
	</td>
	<td>
		<span>docx</span>
	</td>
	<td>
		<a href="#">share</a>
	</td>
	<td>
		<a href="#">preview</a>
	</td>
</tr>