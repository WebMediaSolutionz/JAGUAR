<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container content purple_bg">
	<div class="inner-container clearfix">
			<h3 class="title">Set up your subscribers for:</h3>
			<p class="h3">Oder-1 Galaxy Prime (50 devices) <a class="small" href="#">edit name</a></p>
		</div>
		<div class="col-xs-offset-3 col-xs-3 no_padding">
			<?php include( 'partials/shopping_cart.php' ); ?>
		</div>
	</div>
</div>

<div class="outer-container secondary_bg purple_bg multiple_actions">
	<div class="inner-container clearfix">
		<div class="right">
			<div class="frg-select-container color-light left gap_right">
				<select class="advanced_option">
					<option value="advanced_option" selected="selected">Advanced options</option>
					<option value="import">Import</option>
				</select>
			</div>
			<div class="frg-select-container color-light left">
				<select>
					<option>Actions</option>
					<option>Copy</option>
					<option>Duplicate to all</option>
					<option>Paste</option>
					<option>Clear</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding subscriber">
	<div class="inner-container clearfix">
		<table class="vertical_align_top">
			<thead class="gray_text">
				<tr>
					<th></th>
					<th>Name</th>
					<th>Port</th>
					<th>Calling city</th>
					<th>Preferred<br />area code</th>
					<th class="existing_phone_nbr hide">Existing<br />Phone #</th>
					<th class="account_nbr hide">Account #</th>
					<th>Voicemail<br />language</th>
					<th>SIM</th>
					<th class="sim_nbr hide">SIM #</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					for ( $i = 0; $i < 50; $i++ ) { 
						include( 'partials/subscriber_row.php' );
					}
				?>
			</tbody>
		</table>

		<?php include( 'partials/paging.php' ); ?>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>