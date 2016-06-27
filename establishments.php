<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header3.php' ); ?>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container vertical_padding30 clearfix">
		<h3 class="gray_text bottom_margin20">Select an organization</h3>
		<input class="frg-input-field search_field full_width" placeholder="What are you looking for?" />
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="establishments top_bottom_padding">
			<div class="row">
				<?php for ( $i = 1; $i <= 90; $i++ ) { ?>
					<div class="col-xs-4 top_bottom_smaller_padding">
						<a class="establishment" href="#">ABC Company <?php echo $i; ?></a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>