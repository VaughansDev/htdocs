	<footer class="footer pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer__widget">
						<h5>Contact Us</h5>
						<div class="footer__widget--contact">
							<ul>
								<li><i class="fa-regular fa-envelope"></i><a href="mailto:contact@khaosdevelopment.com">contact@khaosdevelopment.com</a></li>
								<li><i class="fa-regular fa-envelope"></i><a href="mailto:support@khaosdevelopment.com">support@khaosdevelopment.com</a></li>
							</ul>
							<div class="footer__social">
								<a href="<?php echo $_CONFIG['domain']; ?>/"><i class="fa-brands fa-discord"></i></a>
								<a href="<?php echo $_CONFIG['domain']; ?>/"><i class="fa-brands fa-twitter"></i></a>
								<a href="<?php echo $_CONFIG['domain']; ?>/"><i class="fa-brands fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="footer__widget">
						<h5>Links</h5>
						<div class="footer__widget--link">
							<ul>
								<li><a href="<?php echo $_CONFIG['domain']; ?>/shop.php">Shop</a></li>
								<li><a href="javascript:;">FiveM Scripts</a></li>
								<li><a href="<?php echo $_CONFIG['domain']; ?>/positions.php">Join Our Team</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="footer__widget">
						<h5>Resources</h5>
						<div class="footer__widget--resource">
							<ul>
								<li><a href="<?php echo $_CONFIG['domain']; ?>/contact.php">Contact Us</a></li>
								<li><a href="<?php echo $_CONFIG['domain']; ?>/support/">Support</a></li>
								<li><a href="<?php echo $_CONFIG['domain']; ?>/docs/">Documentation</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="footer__widget">
						<h5>Newsletter</h5>
						<div class="footer__widget--newsletter">
							<p>Sign up for our newsletter to be the first to know about Sales, Deals, New Releases and Updates.
							</p>
							<form action="<?php echo $_CONFIG['domain']; ?>/inc/mailing-list.php" class="newsletter-box" method="post">
								<input type="email" name="email" placeholder="Email Address">
								<button type="submit" name="submit" value="submit">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="footer-credit">
		<div class="container">
			<div class="footer-credit--img">
				<a href="<?php echo $_CONFIG['domain']; ?>/index.php"><img src="<?php echo $_CONFIG['domain']; ?>/assets/img/logo/footer-logo.png" alt="footer logo"></a>
			</div>
			<div class="footer-credit__wrapper">
				<div class="copy-right">
					Copyright © <a href="<?php echo $_CONFIG['domain']; ?>/index.php"><?php echo $_CONFIG['sitename']; ?></a> 2024, All Rights Reserved
				</div>
				<div class="footer-links">
					<ul>
						<li><a href="<?php echo $_CONFIG['domain']; ?>/terms.php">Terms & Conditions</a> |</li>
						<li><a href="<?php echo $_CONFIG['domain']; ?>/privacy.php">Privacy Policy</a> |</li>
						<li><a href="<?php echo $_CONFIG['domain']; ?>/refunds.php">Refund Policy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll active-scroll">
		<svg class="scroll__circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 244.073px;">
			</path>
		</svg>
	</div>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/Jquery-3.7.0.js"></script>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/kursor.min.js"></script>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/slick.min.js"></script>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/appear.min.js"></script>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/jquery-modal-video.min.js"></script>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/jquery.meanmenu.min.js"></script>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/sal.js"></script>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/swiper.min.js"></script>
	<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/css.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/javascript.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/json.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/lua.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/php.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/sql.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/yaml.min.js"></script>
	</body>

	</html>