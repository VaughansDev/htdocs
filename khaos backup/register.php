<?php
require 'inc/header.php';
?>
<div class="login pt-100 pb-100">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 col-xl-7">
				<div class="login__wrapper">
					<div class="login__social">
						<ul class="d-flex justify-content-center gap-3">
							<li class="social-item">
								<a href="<?php echo $_CONFIG['domain']; ?>/oauth/discord-oauth.php?req_type=register"><i class="fa-brands fa-discord"></i> Sign Up With
									Discord</a>
							</li>
						</ul>
					</div>
					<div class="bordered__line elements">
						<p>OR</p>
					</div>
					<div class="login__wrapper--title">
						<p>enter your credentials to access your account</p>
					</div>
					<br>
					<div class="login__form input__form">
						<form action="<?php echo $_CONFIG['domain']; ?>/inc/register.php" method="post">
							<div class="input-group">
								<div class="single-input">
									<label for="firstname">First Name</label>
									<input type="text" id="firstname" placeholder="First Name" name="firstname" required>
								</div>
								<div class="single-input">
									<label for="lastname">Last Name</label>
									<input type="text" id="lastname" placeholder="Last Name" name="lastname" required>
								</div>
							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Choose a Username" required>
							</div>
							<div class="form-group">
								<label for="email">Email address</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required>
							</div>
							<div class="form-group">
								<label for="confpassword">Confirm Password</label>
								<input type="password" class="form-control" id="confpassword" name="confpassword" placeholder="Confirm Password" required>
							</div>

							<div class="remember-me">
								<label class="checkbox" for="check">
									<input type="checkbox" name="color" value="check" id="check" required>
									<span class="checkmark"></span>
									I agree to the <a href="<?php echo $_CONFIG['domain']; ?>/terms.php">Terms of Use</a> & <a href="<?php echo $_CONFIG['domain']; ?>/privacy.php">Privacy Policy</a>
								</label>
							</div>

							<div class="login-button register-button">
								<button type="submit" name="register" value="register" class="main-btn">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- login end -->


<?php
require 'inc/footer.php';
?>