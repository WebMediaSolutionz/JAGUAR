<div class="pagin clearfix">
	<?php if ( $page === 'subscriber' || $page === 'order_management' ) { ?>
		<div class="col-xs-4">
			<a href="#">Showing 1-10 of 50</a>
		</div>
		<div class="col-xs-4 center_text">
			<div class="col-xs-4">
				<a class="js-previous" href="#">Previous 10</a>
			</div>
			<div class="col-xs-4 separator">
				<a class="js-next" href="#">Next 10</a>
			</div>
			<div class="col-xs-4 separator">
				<a class="js-view_all" href="#">View all</a>
			</div>
		</div>
	<?php } else { ?>
		<div class="col-xs-offset-4 col-xs-4 center_text">
			<div class="col-xs-4">
				<a class="js-previous" href="#">Previous 10</a>
			</div>
			<div class="col-xs-4 separator">
				<a class="js-next" href="#">Next 10</a>
			</div>
			<div class="col-xs-4 separator">
				<a class="js-view_all" href="#">View all</a>
			</div>
		</div>
	<?php } ?>
</div>