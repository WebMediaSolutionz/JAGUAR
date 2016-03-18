<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php include( 'partials/check_progress_bar2.php' ); ?>

<div class="outer-container content white_bg shipping">
	<div class="inner-container clearfix">
		<div class="col-xs-7">
			<p class="h3">Confirm shipping information</p>

			<h5 class="gray_text">Please remember:</h5>

			<ul class="list gray_text">
				<li><span>Someone must be available to accept delivery at your selected shipping address</span></li>
				<li><span>Deliveries will arrive Monday to Friday between 9am to 5pm</span></li>
				<li><span>Use the Shipping Instructions box below if you have additional instructions</span></li>
			</ul>

			<span class="footnote gray_text">* Unfortunately we cannot deliver to P.O. Boxes, rural addresses or addresses outside Canada</span>
		</div>
		<div class="col-xs-4">
			<img class="telus_truck" src="img/TELUS_Van.jpg">
		</div>
	</div>
</div>

<div class="outer-container content purple_bg top_bottom_padding shipping gray_text">
	<div class="inner-container clearfix">
		<table class="gray_text">
			<tr>
				<td>
					<label>First name</label>
				</td>
				<td>
					<label>Last name</label>
				</td>
				<td>
					<label>Address</label>
				</td>
				<td>
					<label>Apt/Suite</label>
				</td>
				<td>
					<label>City</label>
				</td>
				<td>
					<label>Province</label>
				</td>
				<td>
					<label>Postal code</label>
				</td>
				<td>
					<label>Phone number</label>
				</td>
			</tr>
			<tr>
				<td><input class="js-form-complete" type="text" name="firstname"></td>
				<td><input class="js-form-complete" type="text" name="lastname"></td>
				<td><input class="js-form-complete" type="text" name="address"></td>
				<td><input type="text" name="apt_suite"></td>
				<td><input class="js-form-complete" type="text" name="city"></td>
				<td><input class="js-form-complete" type="text" name="province"></td>
				<td><input class="js-form-complete" type="text" name="postal_code"></td>
				<td><input class="js-form-complete js-phone_input_mask" type="text" name="phone_number"></td>
			</tr>
		</table>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding gray_text">
	<div class="inner-container clearfix">
		<h3>Or use an existing address</h3>

		<div class="address border gray_text clearfix">
			<div class="col-xs-1">
				<div class="frg-checkbox regular">
					<div class="inner">
						<input class="js-form-complete" id="radio-option1" type="radio" value="Option 1" name="option">
						<div class="icon"></div>
					</div>
				</div>
			</div>
			<div class="col-xs-2">
				<label class="bold">Name</label>
				<p>Jonathan Richman</p>
			</div>
			<div class="col-xs-2">
				<label class="bold">Address</label>
				<p>123 Main St.</p>
			</div>
			<div class="col-xs-1">
				<label class="bold">Apt/Suite</label>
				<p>101</p>
			</div>
			<div class="col-xs-1">
				<label class="bold">City</label>
				<p>Ottawa</p>
			</div>
			<div class="col-xs-1">
				<label class="bold">Province</label>
				<p>ON</p>
			</div>
			<div class="col-xs-2">
				<label class="bold">Postal code</label>
				<p>A1B C2D</p>
			</div>
			<div class="col-xs-2">
				<label class="bold">Phone number</label>
				<p>613 555 1234</p>
			</div>
		</div>

		<div class="address border gray_text clearfix">
			<div class="col-xs-1">
				<div class="frg-checkbox regular">
					<div class="inner">
						<input class="js-form-complete" id="radio-option2" type="radio" value="Option 2" name="option">
						<div class="icon"></div>
					</div>
				</div>
			</div>
			<div class="col-xs-2">
				<label class="bold">Name</label>
				<p>Jonathan Richman</p>
			</div>
			<div class="col-xs-2">
				<label class="bold">Address</label>
				<p>123 Main St.</p>
			</div>
			<div class="col-xs-1">
				<label class="bold">Apt/Suite</label>
				<p>101</p>
			</div>
			<div class="col-xs-1">
				<label class="bold">City</label>
				<p>Ottawa</p>
			</div>
			<div class="col-xs-1">
				<label class="bold">Province</label>
				<p>ON</p>
			</div>
			<div class="col-xs-2">
				<label class="bold">Postal code</label>
				<p>A1B C2D</p>
			</div>
			<div class="col-xs-2">
				<label class="bold">Phone number</label>
				<p>613 555 1234</p>
			</div>
		</div>

		<h3>Shipping Instructions</h3>

		<div class="col-xs-4 no_padding gray_text">
			<textarea class="instructions border">Lorem ipsum dolor sit amet, massa bibendum risus sit lorem et cras. Adipiscing pellentesque, fusce morbi, aliquam consequat ante et vestibulum, et amet pulvinar lacus elit dignissim malesuada, eros urna et.</textarea>
		</div>
	</div>
</div>

<?php include( 'partials/checkout_sticky.php' ); ?>

<?php include( 'partials/footer.php' ); ?>