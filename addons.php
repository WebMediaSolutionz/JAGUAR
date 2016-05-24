<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="title">Select add-ons for:</h3>
		
				<?php include( 'partials/edit_name.php' ); ?>

				<div class='frg-select-container full_width color-light visible-xs-block'>
					<select>
						<option>Sort by: All</option>
						<option>Sort by: Roaming</option>
						<option>Sort by: Data</option>
						<option>Sort by: Services</option>
						<option>Sort by: Other</option>
					</select>
				</div>

				<?php if ( !$home_page1 ) { ?>
					<nav class="hidden-xs">
						<ul class="no_styles">
							<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
							<li class="left"><a class="block js-filter" data-filter="roaming" href="#">Roaming</a></li>
							<li class="left"><a class="block js-filter" data-filter="data" href="#">Data</a></li>
							<li class="left"><a class="block js-filter" data-filter="services" href="#">Services</a></li>
							<li class="left"><a class="block js-filter" data-filter="other" href="#">Other</a></li>
						</ul>
					</nav>
				<?php } ?>	
			</div>
		</div>
	</div>
</div>

<?php if ( $status === 'error' ) { ?>
	<div class="outer-container content white_bg top_bottom_small_padding">
		<div class="inner-container row alert error no_padding clearfix">
			<div class="row">
				<div class="col-xs-12">
					<span class="frg-icon icon-warning-inverted"></span> <strong>Your selection does not meet the minimum monthly service commitment of $50.00/subscriber</strong>	
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<div class="outer-container content white_bg <?php echo ( $status === 'error' ) ? 'padding_bottom' : 'top_bottom_padding'; ?>">
	<div class="inner-container row clearfix">
		<div class="row">
			<div class="col-xs-12">
				<?php
					for ( $i = 0; $i < 16; $i++ ) { 
						include( 'partials/addon.php' );
					}
				?>	
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>