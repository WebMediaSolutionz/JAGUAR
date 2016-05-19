<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<input type="hidden" name="nbr_device" value="50" />

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container clearfix">
		<h3 class="title">Select a plan for:</h3>
		
		<?php include( 'partials/edit_name.php' ); ?>
	</div>
</div>
<div class="visible-xs-block bottom_margin20"></div>

<div class="outer-container content white_bg top_bottom_small_padding hidden-xs">
	<div class="inner-container clearfix">
		<span class="gray_text small">You have selected a voice &amp; data service category with plans starting at $50/month</span>
	</div>
</div>

<div class="outer-container content white_bg">
	<div class="inner-container clearfix">
		<div class="row">
			<?php for ( $i = 0; $i < 4; $i++ ) { ?>
				<div class="col-md-6 js-element">
					<?php include( 'partials/plan2.php' ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>