<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg top_bottom_padding white_bg">
	<div class="inner-container clearfix">
		<p class="h3"><span class="frg-icon icon-paper-inverted gray_text"></span> Plans</p>
	</div>
</div>

<div class="outer-container secondary_bg separation white_bg">
	<div class="inner-container clearfix">
		<span>Select your device type:</span>
		<div class='frg-select-container color-light vertical_gap clearfix'>
			<select class="js-sort-by" autocomplete="off">
				<option>Select</option>
				<option value="smartphone" selected>Smartphone / BlackBerry 10+</option>
				<option value="tablet">Tablet</option>
				<option value="modem">Modem / smart hub / internet key</option>
				<option value="legacy">Legacy BlackBerry</option>
				<option value="regular">Regular cell phone</option>
			</select>
		</div>
	</div>

	<div class="inner-container clearfix">
		<?php if ( !$home_page1 ) { ?>
			<nav class="left">
				<ul class="no_styles">
					<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
					<li class="left"><a class="block js-filter" data-filter="both" href="#">Voice &amp; data</a></li>
					<li class="left"><a class="block js-filter" data-filter="voice" href="#">Voice only</a></li>
					<li class="left"><a class="block js-filter" data-filter="data" href="#">Data only</a></li>
				</ul>
			</nav>
		<?php } ?>
		<?php if ( $page === 'device' ) { ?>
			<div class="shopping_cart clearfix right">
				<div class="col-xs-2">
					<div class="item_count"><span>5</span></div>
					<span class="frg-icon icon-cart"></span>
				</div>
				<div class="col-xs-10 status">
					<div>Cart empty</div>
					<div>Last saved: 2:38 PM EST</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_small_padding">
	<div class="inner-container clearfix">
		<span class="gray_text small">Minimum Monthly Service Commitment: $20/subscriber</span>
	</div>
</div>

<div class="outer-container content white_bg">
	<div class="inner-container clearfix">
		<div data-filter="both" class="plan object clearfix frg-drop-shadow">
			<div class="popular abs gap_left">Popular</div>
			<div class="col-xs-5 top_bottom_padding vertical_gap_top">
				<p class="h2 big">Unlimited nation wide minutes</p>
				<p>The right choice for occasional local calls. Plus you get unlimited weelemds and evenings after 6pm.</p>
			</div>
			<div class="col-xs-4 top_bottom_padding vertical_gap_top">
				<p class="big">Features included:</p>
				<ul class="no_styles">
					<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
					<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
					<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
				</ul>

				<div>
					<ul class="extra_features no_styles">
						<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
						<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
						<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
						<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
						<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
						<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
					</ul>

					<a class="js-view_more closed gap_left" href="#"><span class="text">View all</span> <span class="frg-icon icon-plus-circled purple_text"></span></a>
				</div>
			</div>
			<div class="col-xs-3 right_align vertical_gap_top clearfix">
				<div class="left_align">
					<h6 class="price"><span>$60</span> per month</h6>
				</div>

				<div class="left_align gray_text">
					<p class="h4">Quantity</p>
					<input class='frg-input-field short' value='1'/>
				</div>

				<a class="frg-button color-green vertical_gap_top full_lenght left" href="#">Add to cart</a>
			</div>
		</div>

		<div data-filter="voice" class="plan object clearfix frg-drop-shadow">
			<div class="col-xs-5 top_bottom_padding vertical_gap_top">
				<p class="h2 big">Unlimited nation wide minutes</p>
				<p>The right choice for occasional local calls. Plus you get unlimited weelemds and evenings after 6pm.</p>
			</div>
			<div class="col-xs-4 top_bottom_padding vertical_gap_top">
				<p class="big">Features included:</p>
				<ul class="no_styles">
					<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
					<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
					<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
				</ul>

				<div>
					<ul class="extra_features no_styles">
						<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
						<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
						<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
						<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
						<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
						<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
					</ul>

					<a class="js-view_more closed gap_left" href="#"><span class="text">View all</span> <span class="frg-icon icon-plus-circled purple_text"></span></a>
				</div>
			</div>
			<div class="col-xs-3 right_align vertical_gap_top clearfix">
				<div class="left_align">
					<h6 class="price"><span>$55</span> per month</h6>
				</div>

				<div class="left_align gray_text">
					<p class="h4">Quantity</p>
					<input class='frg-input-field short' value='1'/>
				</div>

				<a class="frg-button color-green vertical_gap_top full_lenght left" href="#">Add to cart</a>
			</div>
		</div>

		<div data-filter="data" class="plan object clearfix frg-drop-shadow">
			<div class="col-xs-5 top_bottom_padding vertical_gap_top">
				<p class="h2 big">Unlimited nation wide minutes</p>
				<p>The right choice for occasional local calls. Plus you get unlimited weelemds and evenings after 6pm.</p>
			</div>
			<div class="col-xs-4 top_bottom_padding vertical_gap_top">
				<p class="big">Features included:</p>
				<ul class="no_styles">
					<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
					<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
					<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
				</ul>

				<div>
					<ul class="extra_features no_styles">
						<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
						<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
						<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
						<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
						<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
						<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
					</ul>

					<a class="js-view_more closed gap_left" href="#"><span class="text">View all</span> <span class="frg-icon icon-plus-circled purple_text"></span></a>
				</div>
			</div>
			<div class="col-xs-3 right_align vertical_gap_top clearfix">
				<div class="left_align">
					<h6 class="price"><span>$50</span> per month</h6>
				</div>

				<div class="left_align gray_text">
					<p class="h4">Quantity</p>
					<input class='frg-input-field short' value='1'/>
				</div>

				<a class="frg-button color-green vertical_gap_top full_lenght left" href="#">Add to cart</a>
			</div>
		</div>

		<div data-filter="both" class="plan object clearfix frg-drop-shadow">
			<div class="col-xs-5 top_bottom_padding vertical_gap_top">
				<p class="h2 big">Unlimited nation wide minutes</p>
				<p>The right choice for occasional local calls. Plus you get unlimited weelemds and evenings after 6pm.</p>
			</div>
			<div class="col-xs-4 top_bottom_padding vertical_gap_top">
				<p class="big">Features included:</p>
				<ul class="no_styles">
					<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
					<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
					<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
				</ul>

				<div>
					<ul class="extra_features no_styles">
						<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
						<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
						<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
						<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
						<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
						<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
					</ul>

					<a class="js-view_more closed gap_left" href="#"><span class="text">View all</span> <span class="frg-icon icon-plus-circled purple_text"></span></a>
				</div>
			</div>
			<div class="col-xs-3 right_align vertical_gap_top clearfix">
				<div class="left_align">
					<h6 class="price"><span>$45</span> per month</h6>
				</div>

				<div class="left_align gray_text">
					<p class="h4">Quantity</p>
					<input class='frg-input-field short' value='1'/>
				</div>

				<a class="frg-button color-green vertical_gap_top full_lenght left" href="#">Add to cart</a>
			</div>
		</div>

		<div data-filter="data" class="plan object clearfix frg-drop-shadow">
			<div class="col-xs-5 top_bottom_padding vertical_gap_top">
				<p class="h2 big">Unlimited nation wide minutes</p>
				<p>The right choice for occasional local calls. Plus you get unlimited weelemds and evenings after 6pm.</p>
			</div>
			<div class="col-xs-4 top_bottom_padding vertical_gap_top">
				<p class="big">Features included:</p>
				<ul class="no_styles">
					<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
					<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
					<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
				</ul>

				<div>
					<ul class="extra_features no_styles">
						<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
						<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
						<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
						<li><span class="frg-icon icon-checkmark"></span> no commitment, contracts or credit checkes</li>
						<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
						<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
					</ul>

					<a class="js-view_more closed gap_left" href="#"><span class="text">View all</span> <span class="frg-icon icon-plus-circled purple_text"></span></a>
				</div>
			</div>
			<div class="col-xs-3 right_align vertical_gap_top clearfix">
				<div class="left_align">
					<h6 class="price"><span>$40</span> per month</h6>
				</div>

				<div class="left_align gray_text">
					<p class="h4">Quantity</p>
					<input class='frg-input-field short' value='1'/>
				</div>

				<a class="frg-button color-green vertical_gap_top full_lenght left" href="#">Add to cart</a>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>