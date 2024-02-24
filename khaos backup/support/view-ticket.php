<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
if (!isset($_SESSION['loggedin'])) { ?>
	<script>
		window.location.href = "<?php echo $_CONFIG['domain']; ?>/login.php";
	</script>
<?php }
if (!isset($_GET['tid'])) {	?>
	<script>
		window.location.href = "<?php echo $_CONFIG['domain']; ?>/support/my-tickets.php";
	</script>
<?php }
?>
<div class="product-view related-product pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="pd-view__grid">
				<div class="pd-view__grid--content">
					<div class="career-details__wrapper">
						<div class="career-details__info">
							<ul>
								<?php
								require $_SERVER['DOCUMENT_ROOT'] . '/support/inc/ticket-info.php';
								?>
								<li>
									<div class="d-flex item">
										<a href=""><span class="content">Close Ticket</span></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="blog-details__text--comment">
						<div class="comment__thread review__thread">
							<ul>
								<?php
									require $_SERVER['DOCUMENT_ROOT'] . '/support/inc/ticket-responses.php';
								?>
							</ul>
						</div>
						<!-- comment template -->
						<div class="comment__template review__template">
							<h5>Reply to Ticket</h5>
							<div class="comment__template--box" id="#comment-box">
								<form action="#">
									<div class="textarea">
										<textarea id="comment" placeholder="Your Response" required=""></textarea>
									</div>
									<button type="submit">Send Reply</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- product view end -->



<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
?>