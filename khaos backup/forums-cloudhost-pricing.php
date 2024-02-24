<?php
require 'inc/header.php';
?>
<div class="product-view related-product pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="pd-view__grid">
				<div class="pd-view__grid--images">
					<div class="slider-for">
						<div class="pd-main-image">
							<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/project/coming-soon.png" alt="">
						</div>
					</div>
				</div>
				<div class="pd-view__grid--content">
					<div class="pd-view__grid--content-title">
						<h5>Khaos Forums - Cloud Hosted</h5>
					</div>
					<div class="pd-view__grid--content-pr">
						<div class="pd-view__grid--content-price">
							<span class="pd-price__new">COMING SOON</span>
							<!--<span class="pd-price__new">$16</span> -
							<span class="pd-price__new">$160</span>-->
						</div>
						<!--<div class="pd-view__grid--content-rating">
							<div class="rating-star">
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<div class="rating-text">(5.00 Rating)</div>
						</div>-->
					</div>
					<!--<div class="pd-view__grid--content-desc">
						<p>A well designed application system for gaming communities with dynamic applications, user management, discord integration & more.
						</p>
					</div>
					<div class="pd-block-tags">
						<p class="tags">
							<span>Tags:</span>
							<a href="#">Web Design</a>
							<a href="#">Trending</a>
						</p>
						<p class="cat">
							<span>Category:</span>
							<a href="#">Ui Uix</a>
						</p>
						<p class="sourch">
							<span>Source Code Access:</span>
							<a href="#">LOCKED</a>
						</p>
					</div>-->
				</div>
				<br>
			</div>

			<!--<div class="pricing pt-120 pb-70">
				<div class="container">
					<div class="row align-items-center justify-content-md-center">
						<div class="col-lg-4 col-md-10">
							<div class="pricing__item popular">
								<div class="pricing__item--title">
									<h5>Cloud Hosted Monthly</h5>
								</div>
								<div class="pricing__item--price">
									<div class="price"><span><sub>$</sub>16</span> <em>per Month</em></div>
								</div>
								<ul class="pricing__item--list">
									<li>Full Application System</li>
									<li>Single Site License Key</li>
									<li>Cloud Hosted Discord Bot For Full Integration</li>
									<li>Cloud Hosting For You Application System</li>
									<li>FREE Subdomain</li>
									<li>Access To Support &#8321;</li>
									<li>Access To Updates &#8321;</li>
								</ul>
								<div class="pricing__item--btn">
									<a class="btn pricing-btn" href="register.html">Purchase Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-10">
							<div class="pricing__item popular">
								<div class="pricing__item--title">
									<h5>Cloud Hosted Yearly</h5>
								</div>
								<div class="pricing__item--price">
									<div class="price"><span><sub>$</sub>160</span> <em>per Year</em></div>
								</div>
								<ul class="pricing__item--list">
									<li>Full Application System</li>
									<li>Single Site License Key</li>
									<li>Cloud Hosted Discord Bot For Full Integration</li>
									<li>Cloud Hosting For You Application System</li>
									<li>FREE Subdomain</li>
									<li>Access To Support &#8321;</li>
									<li>Access To Updates &#8321;</li>
								</ul>
								<div class="pricing__item--btn">
									<a class="btn pricing-btn" href="register.html">Purchase Now</a>
								</div>
							</div>
						</div>
					</div>
					<div style="text-align: center;">
						<p>&#8321; While your subscription is active</p>
					</div>
				</div>
			</div>
			<-- pricing table end --
			<div class="product-view__meta">
				<div class="product-tab tab__element">
					<button class="tab__button active" data-tab="description">Description</button>
					<button class="tab__button" data-tab="review">Review</button>
				</div>
				<div class="product-tab__content tab__content open" id="description">
					<p>Creative Agency is a dynamic and innovative creative agency dedicated to transforming your
						business vision into captivating and memorable experiences. With a
						team of seasoned designers, writers, strategists, and marketers, we're here to breathe life
						into your brand and help it flourish in today's competitive landscape.
						Creative Agency, creativity knows no bounds. We specialize in a wide array of creative
						services, from brand development and graphic design to content creation and
						digital marketing. With years of experience under our belt, we've honed our skills to
						deliver results that exceed expectations.
					</p>
					<div class="bullet-list">
						<ul>
							<li>Content is king in the digital age. Creative services can help you create engaging
								written content</li>
							<li>Creative services can help you create engaging written content</li>
							<li>Crafting compelling and persuasive copy for your website, advertisements, and other
								marketing</li>
							<li>If your business uses printed materials, such as business cards, brochures, or
								banners,</li>
						</ul>
					</div>

				</div>
				<div class="product-tab__content tab__content" id="review">
					<div class="blog-details__text--comment">
						<div class="comment__thread review__thread">
							<ul>
								<li>
									<div class="comment-item">
										<div class="reply-img">
											<img src="<?php //echo $_CONFIG['domain']; ?>/assets/img/author/author-1.jpg" alt="">
										</div>
										<div class="reply-details">
											<div class="d-flex justify-content-between align-items-center">
												<div class="name">
													<h6>Md. Asifur Rahman </h6>
													<span>July 15.15.2023 - 3.18pm</span>
												</div>
												<div class="rating-star">
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-solid fa-star"></i>
													<i class="fa-regular fa-star"></i>
												</div>
											</div>
											<p>Our portfolio speaks for itself. We've successfully partnered with a
												diverse range of clients fromstartups to established brands, to help
												them achieve their creative goals.
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<?php //if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE) { 
						?>
							<div class="comment__template review__template">
								<h5>Add a review</h5>
								<p>Your email address will not be published. Required Fields or Marked *</p>
								<div class="comment__template--box" id="#comment-box">
									<form action="#">
										<div class="input-group">
											<div class="single-input">
												<label for="name">Full Name</label>
												<input type="text" id="name" placeholder="Your Name" required="">
											</div>
											<div class="single-input">
												<label for="email">Email Address</label>
												<input type="text" id="email" placeholder="Your email" required="">
											</div>
										</div>
										<div class="rating-star d-flex align-items-center gap-3">
											<span>Your Rating: </span>
											<span class="star">
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-regular fa-star"></i>
											</span>
										</div>
										<div class="textarea">
											<textarea id="comment" placeholder="Your Review" required=""></textarea>
										</div>
										<button type="submit">Submit Review</button>
									</form>
								</div>
							</div>
						<?php //} 
						?>
					</div>
				</div>
			</div>-->
		</div>
		<!--<div class="related-product__title mb-50 mt-50">
			<h5>Related Products</h5>
		</div>
		<div class="row justify-content-sm-center justify-content-md-start">
			<div class="col-lg-4 col-md-6 col-sm-10">
				<div class="product__single mb-30" title="Application System - Self Hosted">
					<div class="product__singlebox">
						<div class="product__img">
							<a href="<?php //echo $_CONFIG['domain']; 
										?>/apps-selfhost-pricing.php">
								<img src="<?php //echo $_CONFIG['domain']; 
											?>/assets/img/product/app-system/apps-dashboard.png" alt="Application System - Self Hosted">
							</a>
							<div class="product__hover">
								<div class="product__action">
									<a href="<?php //echo $_CONFIG['domain']; 
												?>/apps-selfhost-pricing.php" class="action-btn"> View
									</a>
								</div>
							</div>
						</div>
						<div class="product__content">
							<h6 class="product-title">
								<a href="<?php //echo $_CONFIG['domain']; 
											?>/apps-selfhost-pricing.php">Application System - Cloud Hosted</a>
							</h6>
							<div class="product-pr d-flex justify-content-between">
								<div class="product-price">
									<span class="product-price__new">Starting @ $13</span>
								</div>
								<--<div class="product-pr__rating">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>--
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
	</div>
</div>
	<!-- product view end -->

	<?php
	require 'inc/footer.php';
	?>