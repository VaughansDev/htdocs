<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
if (!isset($_SESSION['loggedin'])) { ?>
	<script>
		window.location.href = "<?php echo $_CONFIG['domain']; ?>/login.php";
	</script>
<?php }
?>
<div class="contact pt-80 pb-80">
	<div class="container">
		<?php if (isset($_GET['msgstatus']) && $_GET['msgstatus'] == 'success') { ?>
			<div class="row">
				<div class="col-12">
					<div class="alert alert-success contact__msg" style="display: none" role="alert">
						Your message was sent successfully.
					</div>
				</div>
			</div>
		<?php } elseif (isset($_GET['msgstatus']) && $_GET['msgstatus'] == 'error') { ?>
			<div class="row">
				<div class="col-12">
					<div class="alert alert-danger contact__msg" style="display: none" role="alert">
						There was an error and your message was not sent, Please try again.
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="pricing__item--btn" style="width: 15%;">
			<a class="btn pricing-btn" href="<?php echo $_CONFIG['domain']; ?>/support/my-tickets.php">Back to Ticket List</a>
		</div>
		<div class="row">
			<div class="contact__form">
				<div class="comment__template contact__template">
					<div class="comment__template--box input__form">
						<form action="<?php echo $_CONFIG['domain']; ?>/inc/contact-form.php" method="post" class="contact__php">
							<div class="input-group">
								<div class="single-input">
									<label for="firstname">First Name</label>
									<input type="text" id="firstname" name="firstname" placeholder="First Name" required="">
								</div>
								<div class="single-input">
									<label for="lastname">Last Name</label>
									<input type="text" id="lastname" name="lastname" placeholder="Last Name" required="">
								</div>
							</div>
							<div class="input-group">
								<div class="single-input">
									<label for="email">Email Address</label>
									<input type="email" id="email" name="email" placeholder="Your Email" required="" min="1">
								</div>
								<div class="single-input">
									<label for="subject">Message Subject</label>
									<input type="text" id="subject" name="subject" placeholder="Subject">
								</div>
							</div>
							<div class="textarea">
								<label for="msg">Message</label>
								<textarea id="msg" name="msg" placeholder="Your Message" required=""></textarea>
							</div>
							<div class="submit-btn">
								<button type="submit" class="main-btn">Send Message</button>
							</div>
						</form>
						<!-- end message -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
?>