<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left">
			<p class="h1">Order management</p>
		</div>
	</div>
</div>

<div class="outer-container secondary_bg purple_bg">	
	<div class="inner-container clearfix">
		<div class="left">
			<nav>
				<ul class="no_styles">
					<li class="left"><a class="block current" href="#">Show all</a></li>
					<li class="left"><a class="block" href="#">Pending approval</a></li>
					<li class="left"><a class="block" href="#">Orders approved</a></li>
					<li class="left"><a class="block" href="#">Returns</a></li>
					<li class="left"><a class="block" href="#">Repairs</a></li>
				</ul>
			</nav>
		</div>
		<div class="right padding_top">
			<a class="block advanced_search" href="#">
				<div class="left icon-plus-inverted toggle_panel">Show advanced search</div> 
				<div class="left frg-icon icon-plus-inverted toggle_panel"></div>
			</a>
		</div>
	</div>
	<?php include( 'partials/advanced_search.php' ); ?>
</div>

<div class="outer-container content white_bg top_bottom_padding order_management">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Orders</h4>
		</div>
		<div class="right">
			<div class="frg-select-container color-light left">
				<select autocomplete="off">
					<option>Actions</option>
					<option>Edit</option>
					<option>Copy order to cart</option>
					<option>Cancel order</option>
				</select>
			</div>
		</div>
	</div>
	<div class="inner-container js-loaded-content clearfix">
		<table class="grid wide">
			<thead class="gray_text">
				<tr>
					<th class="clearfix">
						<span>Select</span>
					</th>
					<th class="clearfix">
						<span>Order ID (#)</span>
					</th>
					<th class="clearfix">
						<div>
							<a class="block js-sort gray_text left" href="#">Submitter</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="2" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<div>	
							<a class="block js-sort gray_text left" href="#">Payment method</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="3" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<div>
							<a class="block js-sort gray_text left" href="#">Date submitted</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="4" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<span>Type</span>
					</th>
					<th class="clearfix">
						<div>
							<a class="block js-sort gray_text left" href="#">Status</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="6" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<span>Due now</span>
					</th>
				</tr>
			</thead>
			<tbody id="sortable" class="small">
				<?php 
					for ( $i = 0; $i < 4; $i++ ) { 
						include( 'partials/order_management_row.php' );
					}
				?>
			</tbody>
		</table>
	</div>

	<?php include( 'partials/loading.php' ); ?>
</div>

<div class="outer-container content white_bg top_bottom_padding order_management">
	<div class="inner-container clearfix">
		<?php include( 'partials/paging.php' ); ?>		
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>