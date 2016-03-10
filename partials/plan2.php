<?php
	$service_category = null;

	if ( $i % 2 === 0 ) {
		$service_category = 'both';
	} else if ( $i % 3 === 0 ) {
		$service_category = 'voice';
	} else {
		$service_category = 'data';
	}
?>

<div data-filter="<?php echo $service_category; ?>" class="plan clearfix frg-drop-shadow">
	<div class="vertical_gap big_gap clearfix">
		<div class="left">
			<h5>Local Talk 50</h5>
			<ul class="no_styles">
				<li><span class="frg-icon icon-checkmark"></span> 300 sharable local minutes</li>
				<li><span class="frg-icon icon-checkmark"></span> Call display, voice mail, call waiting,</li>
				<li><span class="frg-icon icon-checkmark"></span> Access to shared data</li>
				<li><span class="frg-icon icon-checkmark"></span> Voice mail to text</li>
				<li><span class="frg-icon icon-checkmark"></span> Roam ready USA</li>
			</ul>

			<div>
				<ul class="extra_features no_styles">
					<li><span class="frg-icon icon-checkmark"></span> No commitment, contracts or credit checks</li>
					<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
					<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
					<li><span class="frg-icon icon-checkmark"></span> No commitment, contracts or credit checks</li>
					<li><span class="frg-icon icon-checkmark"></span> Low calling rates of $0.15 per min</li>
					<li><span class="frg-icon icon-checkmark"></span> Voice Mail 3, call display, call waiting and conference calling for free</li>
				</ul>

				<a class="js-view_more closed gap_left" href="#"><span class="text">View all</span> <span class="frg-icon icon-plus-circled purple_text"></span></a>
			</div>
		</div>
		<div class="right_align clearfix vertical_gap_top small_gap right">
			<div><h6 class="price"><span>$60</span> per month</h6></div>
		</div>
	</div>
	<a class="frg-button select full_width" href="#">Select</a>
	<input type="hidden" name="price_per_month" value="60" />
</div>