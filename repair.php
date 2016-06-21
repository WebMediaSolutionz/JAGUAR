<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<p class="h1">
			<span class="frg-icon icon-repair gray_text left"></span><span class="block left page_title">Repair</span>
		</p>
	</div>
</div>

<div class="js-all-required-fields">
	<?php include( 'partials/banner4.php' ); ?>

	<div class="outer-container secondary_bg white_bg">
		<div class="inner-container clearfix">
			<div class="error_message_container"></div>

			<div class="left gray_text">
				<h4 class="no_padding">Repair item</h4>
			</div>
		</div>
	</div>

	<div class="outer-container content white_bg order_details small">
		<div class="inner-container clearfix">
			<table class="gray_text wide datagrid">
				<thead class="gray_text">
					<tr class="wide">
						<th>Device Information</th>
						<th colspan="3">Repair Details</th>
						<th class="right_align">Minimum Repair Fee</th>
					</tr>
				</thead>
				<tbody>
					<tr class="<?php echo ( $page !== 'confirm_repair' ) ? 'wide' : ''; ?>">
						<td>
							<span>Device: Apple iPhone 6S</span><br />
							<span>IMEI: 890123451234567<span/>
						</td>
						<td>
							<label class="block bold">Administrator Name</label>

							<input class='frg-input-field short full_width' />
						</td>
						<td>
							<label class="block bold">Administrator Phone Number</label>

							<input class='frg-input-field short full_width' />
						</td>
						<td>
							<label class="block bold">Administrator Email</label>

							<input class='frg-input-field short full_width' />
						</td>
						<td class="right_align">
							<span class="purple_text">$325.00</span>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td colspan="3">
							<table class="wide datagrid">
								<tr class="wide">
									<td>
										<div class="top_bottom_small_padding">
											<label class="block bold">What is/was the device phone number?</label>

											<input class='frg-input-field short full_width' />
										</div>
									</td>
									<td>
										<div class="top_bottom_small_padding">
											<label class="block bold">What is the billing account number of this device?</label>

											<div class='frg-select-container full_width color-light'>
												<select autocomplete="off">
													<option selected>Select</option>
													<option>Black</option>
													<option>White</option>
												</select>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</td>
						<td>
						</td>
					</tr>
					<tr class="<?php echo ( $page !== 'confirm_repair' ) ? 'wide' : ''; ?>">
						<td>
						</td>
						<td colspan="3">
							<div class="top_bottom_small_padding">
								<label class="bold">What is the issue?</label>

								<div class='frg-select-container full_width color-light'>
									<select autocomplete="off">
										<option selected>Select</option>
										<option>Audio issue (i.e. Headset Jack / Earpiece or speaker)</option>
										<option>Button/keys issue (i.e. Damage/ fell off or loose / unresponsive)</option>
										<option>Camera issue (i.e. Cracked or damaged/Flash issue)</option>
										<option>Connectivity (i.e. Bluetooth/ Wi-Fi/ Receptions)</option>
										<option>Housing (i.e. Cracked or damaged/ SIM Slot issue/ Slider or Flip)</option>
										<option>LCD/Touch screen (i.e. Cracked or damaged/ Display issue/ unresponsive)</option>
										<option>Power (i.e. Excessive heat/ Charge Port Damaged / Device Reset / Not holding charge)</option>
										<option>Software (i.e. Freeze or no response/ Specific Application Error)</option>
										<option>Trackpad (i.e. Damaged /Fell Off or Loose / Unresponsive)</option>
										<option>Other</option>
									</select>
								</div>
							</div>
						</td>
						<td>
						</td>
					</tr>
					<tr class="<?php echo ( $page !== 'confirm_repair' ) ? 'wide' : ''; ?>">
						<td>
						</td>
						<td colspan="3">
							<div class="top_bottom_small_padding">
								<label class="bold">Please provide any additional details on the issue or symptom:</label>

								<input class='frg-input-field textarea full_width js-required' />
							</div>
						</td>
						<td>
						</td>
					</tr>
					<tr class="<?php echo ( $page !== 'confirm_repair' ) ? 'wide' : ''; ?>">
						<td>
						</td>
						<td colspan="3">
							<div class="top_bottom_small_padding">
								<label class="bold">What did you try to solve the problem?</label>

								<input class='frg-input-field textarea full_width' />

								<div class="top_bottom_small_padding">
									<label class="bold">This issue is continuous</label>

									<div class="gap_left">
										<div class="frg-checkbox regular">
											<div class="inner">
												<input class="vertical_gap_top small_gap js-required" id="radio-option1" type="radio" name="option_1" value="Option 1">
												<div class="icon vertical_gap_top small_gap"></div>
												<label for="radio-option1">
													<strong>
														<span class="value" data-value="yes">yes</span>
													</strong>
												</label>
											</div>
										</div>

										<div class="frg-checkbox regular">
											<div class="inner">
												<input class="vertical_gap_top small_gap js-required" id="radio-option2" type="radio" name="option_1" value="Option 2">
												<div class="icon vertical_gap_top small_gap"></div>
												<label for="radio-option2">
													<strong>
														<span class="value" data-value="no">no</span>
													</strong>
												</label>
											</div>
										</div>
									</div>

									<label class="bold">The device has physical damage</label>

									<div class="gap_left">
										<div class="frg-checkbox regular">
											<div class="inner">
												<input class="vertical_gap_top small_gap js-required" id="radio-option1" type="radio" name="option_2" value="Option 1">
												<div class="icon vertical_gap_top small_gap"></div>
												<label for="radio-option1">
													<strong>
														<span class="value" data-value="yes">yes</span>
													</strong>
												</label>
											</div>
										</div>

										<div class="frg-checkbox regular">
											<div class="inner">
												<input class="vertical_gap_top small_gap js-required" id="radio-option2" type="radio" name="option_2" value="Option 2">
												<div class="icon vertical_gap_top small_gap"></div>
												<label for="radio-option2">
													<strong>
														<span class="value" data-value="no">no</span>
													</strong>
												</label>
											</div>
										</div>
									</div>

									<label class="bold">The device has liquid damage</label>

									<div class="gap_left">
										<div class="frg-checkbox regular">
											<div class="inner">
												<input class="vertical_gap_top small_gap js-required" id="radio-option1" type="radio" name="option_3" value="Option 1">
												<div class="icon vertical_gap_top small_gap"></div>
												<label for="radio-option1">
													<strong>
														<span class="value" data-value="yes">yes</span>
													</strong>
												</label>
											</div>
										</div>

										<div class="frg-checkbox regular">
											<div class="inner">
												<input class="vertical_gap_top small_gap js-required" id="radio-option2" type="radio" name="option_3" value="Option 2">
												<div class="icon vertical_gap_top small_gap"></div>
												<label for="radio-option2">
													<strong>
														<span class="value" data-value="no">no</span>
													</strong>
												</label>
											</div>
										</div>
									</div>

									<label class="bold">I need to loan a device while this device is being repaired</label>

									<div class="gap_left">
										<div class="frg-checkbox regular">
											<div class="inner">
												<input class="vertical_gap_top small_gap js-required" id="radio-option1" type="radio" name="option_4" value="Option 1">
												<div class="icon vertical_gap_top small_gap"></div>
												<label for="radio-option1">
													<strong>
														<span class="value" data-value="yes">yes</span>
													</strong>
												</label>
											</div>
										</div>

										<div class="frg-checkbox regular">
											<div class="inner">
												<input class="vertical_gap_top small_gap js-required" id="radio-option2" type="radio" name="option_4" value="Option 2">
												<div class="icon vertical_gap_top small_gap"></div>
												<label for="radio-option2">
													<strong>
														<span class="value" data-value="no">no</span>
													</strong>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</td>
						<td>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="outer-container content white_bg order_details small">
		<div class="inner-container clearfix">
			<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator light_gray no_padding clearfix">
				<div class="right">
					<table class="right_align subtotal">
						<tr>
							<td class="longer top_bottom_small_padding gray_text">Sub total</td>
							<td class="right_align top_bottom_small_padding">$500.00</td>
						</tr>
						<tr>
							<td class="top_bottom_small_padding gray_text">Shipping</td>
							<td class="right_align top_bottom_small_padding">Free</td>
						</tr>
						<tr>
							<td class="top_bottom_small_padding gray_text">Taxes HST</td>
							<td class="right_align top_bottom_small_padding">$65.00</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="outer-container content white_bg order_details small">
		<div class="inner-container clearfix">
			<div class="col-xs-6 col-xs-offset-6 top_horizontal_separator bottom_horizontal_separator light_gray no_padding clearfix">
				<div class="right">
					<table class="right_align total">
						<tr>
							<td class="longer top_bottom_small_padding gray_text">Estimated total repair cost</td>
							<td class="right_align top_bottom_small_padding">$565.00</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<br />

	<?php include( 'partials/checkout_sticky.php' ); ?>
</div>

<?php include( 'partials/footer.php' ); ?>