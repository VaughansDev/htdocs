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
								<a href="<?php echo $_CONFIG['domain']; ?>/oauth/discord-oauth.php?req_type=login"><i class="fa-brands fa-discord"></i> Login With
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
						<form action="<?php echo $_CONFIG['domain']; ?>/inc/login.php" method="post">
							<div class="form-group">
								<label for="username">Username or Email</label>
								<input type="text" name="username" class="form-control" id="username" placeholder="Enter Your Username or Email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Enter Your Password">
							</div>
							<div class="login-button">
								<button type="submit" name="login" value="login" class="main-btn">Login</button>
							</div>
							<div class="input-group justify-content-between align-items-center">
								<div class="register-button">
									<p>don't have an Account? Please <a href="<?php echo $_CONFIG['domain']; ?>/register.php">Register</a></p>
								</div>
								<div class="forgot-password"><a href="#">Forgot Password?</a></div>
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