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
								<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/product/01.jpg" alt="">
							</div>
							<div class="pd-main-image">
								<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/product/02.jpg" alt="">
							</div>
							<div class="pd-main-image">
								<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/product/04.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="pd-view__grid--content">
						<div class="pd-view__grid--content-title">
							<h5>Music Application Ui Design</h5>
						</div>
						<div class="pd-view__grid--content-pr">
							<div class="pd-view__grid--content-price">
								<span class="pd-price__new">$100.00</span> -
								<span class="pd-price__old">$120.00</span>
							</div>
							<div class="pd-view__grid--content-rating">
								<div class="rating-star">
									<i class="fa-regular fa-star"></i>
									<i class="fa-regular fa-star"></i>
									<i class="fa-regular fa-star"></i>
									<i class="fa-regular fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<div class="rating-text">(5.00 Rating)</div>
							</div>
						</div>
						<div class="pd-view__grid--content-desc">
							<p>We're not just about aesthetics we're about delivering measurable
								results. Our data-driven approach ensures that our creative
								efforts translate into business success.
							</p>
						</div>
						<div class="pd-view__actions">
							<div class="pd-cart detail-qty">
								<span class="minus"></span>
								<input class="form-control qty-val" type="number" name="quantity" value="1" min="1" max="100">
								<span class="plus"></span>
							</div>
							<div class="button">
								<a href="cart.html" class="add-cart">Add to Cart</a>
							</div>
							<div class="button">
								<a href="#">Wishlist <i class="fa-regular fa-heart"></i></a>
							</div>
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
								<span>Source File:</span>
								<a href="#">Figma File</a>
							</p>
						</div>
						<div class="blog-details__text--share">
							<div class="sharing-option">
								<h5>Share This:</h5>
								<ul>
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
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
												<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/author/author-1.jpg" alt="">
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
									<li>
										<div class="comment-item">
											<div class="reply-img">
												<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/author/author-1.jpg" alt="">
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
							<!-- comment template -->
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
										<div class="remember-me">
											<label class="checkbox" for="check">
												<input type="checkbox" name="color" value="check" id="check">
												<span class="checkmark"></span>
												Save my name, email, and website in the right browser for the next time
												I comment.
											</label>
										</div>
										<button type="submit">Review Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="related-product__title mb-50 mt-50">
				<h5>Related Products</h5>
			</div>
			<div class="row justify-content-sm-center justify-content-md-start">
				<div class="col-lg-4 col-md-6 col-sm-10">
					<!-- single product -->
					<div class="product__single mb-30" title="Music Application Ui Design">
						<div class="product__singlebox">
							<div class="product__img">
								<a href="shop-details.html">
									<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/product/03.jpg" alt="Music Application Ui Design">
								</a>
								<div class="product__hover">
									<div class="product__action">
										<button class="wish-btn">
											<i class="fa-regular fa-heart"></i>
										</button>
										<a href="cart.html" class="action-btn"> View
										</a>
									</div>
								</div>
							</div>
							<div class="product__content">
								<h6 class="product-title">
									<a href="shop-details.html">Music Application Ui Design</a>
								</h6>
								<div class="product-pr d-flex justify-content-between">
									<div class="product-price">
										<span class="product-price__new">$100.00</span> -
										<span class="product-price__old">$120.00</span>
									</div>
									<div class="product-pr__rating">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- single product end -->
				</div>
				<div class="col-lg-4 col-md-6 col-sm-10">
					<!-- single product -->
					<div class="product__single mb-30" title="Travel Application Ui">
						<div class="product__singlebox">
							<div class="product__img">
								<a href="shop-details.html">
									<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/product/02.jpg" alt="02">
								</a>
								<div class="product__hover">
									<div class="product__action">
										<button class="wish-btn">
											<i class="fa-regular fa-heart"></i>
										</button>
										<a href="cart.html" class="action-btn"> View
										</a>
									</div>
								</div>
							</div>
							<div class="product__content">
								<h6 class="product-title">
									<a href="shop-details.html">Travel Application Ui Design</a>
								</h6>
								<div class="product-pr d-flex justify-content-between">
									<div class="product-price">
										<span class="product-price__new">$90.00</span> -
										<span class="product-price__old">$100.00</span>
									</div>
									<div class="product-pr__rating">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- single product end -->
				</div>
				<div class="col-lg-4 col-md-6 col-sm-10">
					<!-- single product -->
					<div class="product__single mb-30" title="Mobile Application interface">
						<div class="product__singlebox">
							<div class="product__img">
								<a href="shop-details.html">
									<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/product/01.jpg" alt="">
								</a>
								<div class="product__hover">
									<div class="product__action">
										<button class="wish-btn">
											<i class="fa-regular fa-heart"></i>
										</button>
										<a href="#" class="action-btn">
											View
										</a>
									</div>
								</div>
							</div>
							<div class="product__content">
								<h6 class="product-title">
									<a href="shop-details.html">Social Media Ui Kit design</a>
								</h6>
								<div class="product-pr d-flex justify-content-between">
									<div class="product-price">
										<span class="product-price__new">$100.00</span> -
										<span class="product-price__old">$120.00</span>
									</div>
									<div class="product-pr__rating">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- single product end -->
				</div>
			</div>
		</div>
	</div>
	<!-- product view end -->



	<?php
	require 'inc/footer.php';
	?>