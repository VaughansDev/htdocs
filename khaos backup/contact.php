<?php
require 'inc/header.php';
?>
<div class="contact pt-80 pb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="contact__single">
					<div class="contact__single--item">
						<div class="icon">
							<i class="fa-solid fa-phone"></i>
						</div>
						<a href="mailto:contact@khaosdevelopment.com">
							<div class="content">
								<h6 class="title">General Contact</h6>
								<p>E-Mail Us</p>
								<p>contact@khaosdevelopment.com</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="contact__single">
					<div class="contact__single--item">
						<div class="icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>

						<a href="<?php echo $_CONFIG['domain']; ?>/support/new-ticket.php">
							<div class="content">
								<h6 class="title">Support Ticket</h6>
								<p>Submit a Ticket</p>
								<p>in our support department</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="contact__single">
					<div class="contact__single--item">
						<div class="icon">
							<i class="fa-regular fa-clock"></i>
						</div>
						<a href="mailto:support@khaosdevelopment.com">
							<div class="content">
								<h6 class="title">Support</h6>
								<p>E-Mail Us</p>
								<p>support@khaosdevelopment.com</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
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
require 'inc/footer.php';
?>