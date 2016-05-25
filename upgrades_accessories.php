<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="title">Select accessories for: </h3>
		
				<?php include( 'partials/edit_name.php' ); ?>	
			</div>
		</div>
	</div>
</div>

<div class="outer-container secondary_bg purple_bg hidden-xs">
	<div class="inner-container clearfix">
		<div class="clearfix">
			<?php if ( !$home_page1 ) { ?>
				<nav class="left filter_nav device">
					<ul class="no_styles">
						<li class="left"><a class="current block" href="#">Audio</a></li>
						<li class="left"><a class="block" href="#">Cases &amp; protection</a></li>
						<li class="left"><a class="block" href="#">Charging</a></li>
						<li class="left"><a class="block" href="#">Health &amp; fitness</a></li>
						<li class="left"><a class="block" href="#">Smart watches</a></li>
						<li class="left"><a class="block" href="#">Other</a></li>
					</ul>
				</nav>

				<nav class="left filter_nav brand hide">
					<ul class="no_styles">
						<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
						<li class="left"><a class="block js-filter" data-filter="audio" href="#">Audio</a></li>
					</ul>
				</nav>
			<?php } ?>
		</div>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding">
	<div class="inner-container clearfix">
		<div class="row">
			<div class="col-xs-12">
				<div class="page current clearfix">
					<?php 
						for ( $i = 1; $i < 21; $i++ ) {
							include( 'partials/accessory.php' );

							if ( $i % 9 === 0 ) {
								echo "</div><div class='page hide clearfix'>";
							}	
						} 
					?>
				</div>
				<?php include( 'partials/paging.php' ); ?>
			</div>
		</div>	
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>