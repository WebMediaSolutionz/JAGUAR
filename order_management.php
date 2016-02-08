<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left gray_text">
			<div class="h3">Order Management</div>
		</div>
	</div>
</div>

<div class="outer-container secondary_bg purple_bg">	
	<div class="inner-container clearfix">
		<div class="left">
			<nav>
				<ul class="no_styles">
					<li class="left"><a class="block" href="#">Pending approval</a></li>
					<li class="left"><a class="block" href="#">Orders with errors</a></li>
					<li class="left"><a class="block" href="#">Pending activation</a></li>
					<li class="left"><a class="block current" href="#">Show all</a></li> 
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
	<div class="inner-container advanced_search_table closed hide clearfix">
		<table>
			<tr>
				<td>
					<label class="block">Order ID (#)</label>
					<input class='frg-input-field small' placeholder='Order ID' />
				</td>
				<td>
					<label class="block">Date Range</label>
					<div class="form-group">
		                <div class='input-group date datepicker'>
		                    <input class="form-control frg-input-field" placeholder="Date From" />
		                    <span class="input-group-addon">
		                        <span class="frg-icon icon-calendar"></span>
		                    </span>
		                </div>
		            </div>
				</td>
				<td>
					<label class="block">&nbsp;</label>
					<div class="form-group">
		                <div class='input-group date datepicker'>
		                    <input class="form-control frg-input-field" placeholder="Date To" />
		                    <span class="input-group-addon">
		                        <span class="frg-icon icon-calendar"></span>
		                    </span>
		                </div>
		            </div>
				</td>
				<td>
					<label class="block">BAN</label>
					<input class='frg-input-field small' placeholder='BAN' />
				</td>
			</tr>
			<tr>
				<td>
					<label class="block">First Name</label>
					<input class='frg-input-field small' placeholder='First Name' />
				</td>
				<td>
					<label class="block">Last Name</label>
					<input class='frg-input-field small' placeholder='Last Name' />
				</td>
				<td>
					<label class="block">Phone Number</label>
					<input class='frg-input-field small' placeholder='Phone Number' />
				</td>
				<td>
					<label class="block">Email</label>
					<input class='frg-input-field small' placeholder='E-mail' />
				</td>
			</tr>
			<tr>
				<td>
					<label class="block">Status</label>
					<div class='frg-select-container color-light'>
						<select>
							<option>Select</option>
							<option>Select</option>
						</select>
					</div>
				</td>
				<td>
					<label class="block">Order Type</label>
					<div class='frg-select-container color-light'>
						<select>
							<option>Select</option>
							<option>Select</option>
						</select>
					</div>
				</td>
				<td>
					<label class="block">Shipping Postal Code</label>
					<input class='frg-input-field small' placeholder='Shipping Postal Code' />
				</td>
				<td>
					<label class="block">SKU</label>
					<input class='frg-input-field small' placeholder='SKU' />
				</td>
			</tr>
			<tr>
				<td>
					<label class="block">IMEI</label>
					<input class='frg-input-field small' placeholder='IMEI' />
				</td>
				<td>
					<label class="block">SIM Serial Number</label>
					<input class='frg-input-field small' placeholder='SIM Serial Number' />
				</td>
				<td></td>
				<td>
					<label class="block">&nbsp;</label>
					<a href='#' class='frg-button button-wide color-green'>Search</a>
				</td>
			</tr>
		</table>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding order_management">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Orders</h4>
		</div>
		<div class="right">
			<div class="frg-select-container color-light left">
				<select>
					<option>Actions</option>
					<option>Move to cart to edit</option>
					<option>Copy order to cart</option>
					<option>cancel order</option>
				</select>
			</div>
		</div>
	</div>
	<div class="inner-container clearfix">
		<table>
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
							<a class="block js-sort gray_text left" href="#">Payment Method</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="3" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<div>
							<a class="block js-sort gray_text left" href="#">Date Submitted</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="4" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<div>
							<a class="block js-sort gray_text left" href="#">Department</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="5" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<span>Type</span>
					</th>
					<th class="clearfix">
						<div>
							<a class="block js-sort gray_text left" href="#">Status</a> <a class="left js-sort frg-icon icon-arrow-down block purple_text" data-field="7" href="#"></a>
						</div>
					</th>
					<th class="clearfix">
						<span>Due Now</span>
					</th>
				</tr>
			</thead>
			<tbody id="sortable" class="small">
				<tr>
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon">
									<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td>
						<a class="underline" href="#">1234567890</a>
					</td>
					<td>
						<span>Stan a</span>
					</td>
					<td>
						<span>G</span>
					</td>
					<td>
						<span>Jan 15, 2016</span>
					</td>
					<td>
						<span>Sales</span>
					</td>
					<td>
						<span>Purchase</span>
					</td>
					<td>
						<span class="status positive">Pending approval</span>
					</td>
					<td>
						<span class="purple_text">$25,750</span>
					</td>
				</tr>
				<tr>
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon">
									<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td>
						<a class="underline" href="#">1234567890</a>
					</td>
					<td>
						<span>Stan b</span>
					</td>
					<td>
						<span>V</span>
					</td>
					<td>
						<span>Jan 15, 2016</span>
					</td>
					<td>
						<span>Sales</span>
					</td>
					<td>
						<span>Purchase</span>
					</td>
					<td>
						<span class="status positive">Pending approval</span>
					</td>
					<td>
						<span class="purple_text">$25,750</span>
					</td>
				</tr>
				<tr>
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon">
									<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td>
						<a class="underline" href="#">1234567890</a>
					</td>
					<td>
						<span>Stan c</span>
					</td>
					<td>
						<span>U</span>
					</td>
					<td>
						<span>Jan 15, 2016</span>
					</td>
					<td>
						<span>Sales</span>
					</td>
					<td>
						<span>Purchase</span>
					</td>
					<td>
						<span class="status positive">Pending approval</span>
					</td>
					<td>
						<span class="purple_text">$25,750</span>
					</td>
				</tr>
				<tr>
					<td>
						<div class="frg-checkbox regular small">
							<div class="inner">
								<input id="chkbox-option-2" type="checkbox" name="option-2" value="Option 2">
								<div class="icon">
									<span class="frg-icon icon-checkmark" aria-hidden="true"></span>
								</div>
								<label for="chkbox-option-2"></label>
							</div>
						</div>
					</td>
					<td>
						<a class="underline" href="#">1234567890</a>
					</td>
					<td>
						<span>Stan d</span>
					</td>
					<td>
						<span>E</span>
					</td>
					<td>
						<span>Jan 15, 2016</span>
					</td>
					<td>
						<span>Sales</span>
					</td>
					<td>
						<span>Purchase</span>
					</td>
					<td>
						<span class="status positive">A</span>
					</td>
					<td>
						<span class="purple_text">$25,750</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="outer-container content white_bg top_bottom_padding order_management">
	<div class="inner-container clearfix">
		<?php include( 'partials/paging.php' ); ?>		
	</div>
</div>

<?php include( 'partials/footer.php' ); ?>