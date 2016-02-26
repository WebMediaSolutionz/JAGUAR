<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar.php' ); ?>

<div class="outer-container secondary_bg purple_bg">
	<div class="inner-container clearfix">
		<h3 class="title">Select add-ons for:</h3>
		<p class="h3"><strong>Order-1 Galaxy Prime (50 devices)</strong> <input class='frg-input-field hide js-auto_save' placeholder="press 'enter' to save" value='Order-1 Galaxy Prime (50 devices)'/> <a class="small edit_name" href="#">edit name</a></p>

		<?php if ( !$home_page1 ) { ?>
			<nav>
				<ul class="no_styles">
					<li class="left"><a class="current block js-filter" data-filter="all" href="#">All</a></li>
					<li class="left"><a class="block js-filter" data-filter="roaming" href="#">Roaming</a></li>
					<li class="left"><a class="block js-filter" data-filter="data" href="#">Data</a></li>
					<li class="left"><a class="block js-filter" data-filter="services" href="#">Services</a></li>
					<li class="left"><a class="block js-filter" data-filter="other" href="#">Other</a></li>
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

<?php if ( $status === 'error' ) { ?>
	<div class="outer-container content white_bg top_bottom_small_padding">
		<div class="inner-container row alert error no_padding clearfix">
			<span class="frg-icon icon-warning-inverted"></span> <strong>Your selection does not meet the minimum monthly service commitment of $50.00/subscriber</strong>
		</div>
	</div>
<?php } ?>

<div class="outer-container content white_bg <?php echo ( $status === 'error' ) ? 'padding_bottom' : 'top_bottom_padding'; ?>">
	<div class="inner-container row clearfix">
		<div data-filter="roaming" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>

		<div data-filter="data" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>

		<div data-filter="services" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>

		<div data-filter="services" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>

		<div data-filter="roaming" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>

		<div data-filter="data" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>

		<div data-filter="services" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>

		<div data-filter="services" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>

		<div data-filter="roaming" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>

		<div data-filter="data" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>

		<div data-filter="services" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>

		<div data-filter="services" class="service object col-xs-3 clearfix frg-drop-shadow">
			<h3>TELUS link</h3>
			
			<div>
				<h6 class="price"><span>$60</span> per month</h6>
			</div>

			<div>
				<p class="js-ellipsis" data-maxlen="175">Link service turns your mobile phone into a two-way radio so you can connect to individuals or teams with the push of a button from virtually anywhere in North America.
				</p>
			</div>

			<br />

			<div class="center_text">
				<a class="frg-button select" href="#">Add service</a>
			</div>
		</div>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>