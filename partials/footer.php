		<div class="outer-container content purple_bg">
			<div class="inner-container">
				<div class="sub_footer center clearfix">
					<div class="col6 center_text left">
						<a class="support block" target="_blank" href="https://www.telus.com/support">
							<span class="support-footer__icon frg-icon icon-lifesaver"></span>
						</a>
						<a href="#">Get support online</a>
					</div>
					<div class="col6 separator center_text offline left">
						<div class="chat agentonline block">
							<span class="support-footer__icon frg-icon icon-chat-dots"></span>
						</div>
						<div>Chat offline</div>
					</div>
				</div>
			</div>
		</div>

		<div class="outer-container footer">
			<footer class="inner-container">
				<img class="logo" alt="TELUS logo" src="img/TELUS-logo-white.svg">
				<p>&copy; <?php echo date( 'Y' ); ?> TELUS Communications Company</p>
			</footer>
		</div>

		<?php include( 'partials/modals.php' ); ?>

		<script type="text/javascript" src="javascript/compressed/lib/jquery-1.8.3.js"></script>
		<script type="text/javascript" src="javascript/compressed/lib/bootstrap.js"></script>
		<script type="text/javascript" src="javascript/compressed/lib/bootstrap-modalmanager.js"></script>
		<script type="text/javascript" src="javascript/compressed/lib/bootstrap-modal.js"></script>
		<script type="text/javascript" src="javascript/compressed/lib/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="javascript/compressed/lib/dropit.js"></script>
		<script type="text/javascript" src="javascript/compressed/lib/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="javascript/compressed/lib/slick.js"></script>
		<script type="text/javascript" src="javascript/compressed/lib/jquery.hashchange.js"></script>
  		<script type="text/javascript" src="javascript/compressed/lib/jquery.easytabs.js"></script>
  		<script type="text/javascript" src="javascript/compressed/lib/loadingoverlay.js"></script>

		<script type="text/javascript" src="javascript/compressed/cities.js"></script>
		<script type="text/javascript" src="javascript/compressed/jaguar.js"></script>

		<script type="text/javascript">
			$( document ).ready( function () {
				JAG.init();
				// JAG.displayErrorMessage( 'warning', 'test', 'testing' );
			});
		</script>
	</body>
</html> 