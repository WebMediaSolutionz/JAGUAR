<?php include_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container top_bottom_padding clearfix">
		<div class="left">
			<p class="h3">Order Document Name: Report</p>

			<h4 class="no_padding gray_text">Status: <span class="frg-icon <?php echo ( $status === 'pending_approval' ) ? 'icon-warning-inverted' : 'icon-checkmark-inverted'; ?>"></span> <?php echo ( $status === 'pending_approval' ) ? 'Pending approval' : 'Shipped'; ?></h4>
		</div>
	</div>
</div>

<div class="outer-container secondary_bg white_bg">
	<div class="inner-container clearfix">
		<div class="left gray_text">
			<h4 class="no_padding">Document details</h4>
		</div>
		<?php if ( $status === 'shipped' ) { ?>
			<div class="frg-select-container right color-light">
				<select autocomplete="off">
					<option>Action</option>
					<option>Select all</option>
					<option>Remove item(s)</option>
					<option>Deselect all</option>
				</select>
			</div>
		<?php } ?>
	</div>
</div>

<div class="outer-container content white_bg order_details">
	<div class="inner-container clearfix">
		<table class="gray_text wide datagrid">
			<thead class="gray_text">
				<tr class="wide outline">
					<?php if ( $status === 'shipped' ) { ?>
						<th>Select</th>
					<?php } ?>
					<th>Document name</th>
					<th>Version</th>
					<th>Date submitted</th>
					<th class="wide">submitter</th>
					<th>File size</th>
					<th>File type</th>
					<th>Share</th>
					<th>Preview</th>
				</tr>
			</thead>
			<tbody class="small">
				<?php
					for ( $i = 0; $i < 3; $i++ ) { 
						include( 'partials/document_details_row.php' );
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<br /><br />

<?php include( 'partials/comments_section.php' ); ?>

<br /><br />

<?php include( 'partials/footer.php' ); ?>