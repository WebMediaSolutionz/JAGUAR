<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-xs-12">
				<div class="left">
					<h3 class="title">Set up subscribers for:</h3>
					
					<?php include( 'partials/edit_name.php' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="outer-container content white_bg confirmation">
	<div class="inner-container clearfix gray_text">
		<div class="row">
			<div class="col-xs-12">
				<p>
					Before you can proceed, please switch to a larger screen before continuing for the best experience.
				</p>

				<p>
					We've saved your order to make it easier for you to switch screens. 
				</p>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>