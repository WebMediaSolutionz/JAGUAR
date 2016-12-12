<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container clearfix">
		<div class="left">
			<h3 class="title">Set up your subscribers for:</h3>
			
			<?php include( 'partials/edit_name.php' ); ?>
		</div>
		<div class="right advanced_options clearfix">
			<div class="left">Actions: </div>
			<a class="frg-button left color-purple gap_left_small advanced_import" href="#">Advanced import</a>
			<a class="frg-button left color-purple gap_left_small" href="#">Clear row(s)</a>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding subscriber">
	<div class="inner-container clearfix">
		<input type="hidden" name="base_total" value="25500.00" />

		<div class="error_message_container"></div>

		<table class="view_all vertical_align_top grid js-all-required-fields" data-from="0">
			<thead class="gray_text">
				<tr>
					<th>
						<div class="frg-checkbox js-select-all regular small vertical_gap_top very_small_gap">
							<div class="inner">
								<input id="chkbox-option-all" type="checkbox" name="option-all" value="Option all">
								<div class="icon">
									<span class="frg-icon" aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Port</th>
					<th>Calling city</th>
					<th>Area code</th>
					<th class="existing_phone_nbr hide">Existing<br />Phone #</th>
					<th class="account_nbr hide">Account #</th>
					<th>Voicemail</th>

					<?php if ( $byod ) { ?>
						<th class="sim_nbr hide">SIM #</th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php 
					for ( $i = 0; $i < 5; $i++ ) { 
						include( 'partials/subscriber_row.php' );
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>