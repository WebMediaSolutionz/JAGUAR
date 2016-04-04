<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="frg-icon icon-x-inverted close" aria-hidden="true"></span></button>
				<h4 class="modal-title hide" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				<form action="#" method="POST" enctype="multipart/form-data">
					<div class="inner-container gray_text clearfix">
						<div class="col-xs-6">
							<h4>Upload multiple documents at once</h4>

							<div class="browse_files">
								<h6>Upload your files here</h6>

							    <div id="yourBtn" class="left frg-input-field" onclick="getFile()"></div>

							    <!-- here you can have file submit button or you can write a simple script to upload the file automatically-->
							    <input class="left frg-browse frg-button" type="button" value='Browse Files' onclick="getFile()">

							    <!-- this is your file input tag, so i hide it!-->
							    <div class="hidden_control">
							    	<input class="upfile" type="file" name="document" value="upload" multiple>
							    </div>
							</div>	
						</div>
						<div class="col-xs-offset-2 col-xs-4">
							<img class="upload_csv" src="img/upload_csv.jpg">
						</div>
					</div>
					<div class="inner-container top_bottom_padding clearfix">
						<div class="clearfix">
							<div class="col-xs-6">
								
							</div>
							<div class="col-xs-6">
								<div class="col-xs-offset-4 col-xs-2 right_align">
									<a class="previous block" href="#">Cancel</a>
								</div>
								<div class="col-xs-6 right_align">
									<input class="frg-button color-green full_lenght js-uploaded-document" type="submit" value='Upload documents'>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer hide">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>