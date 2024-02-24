<?php
require 'inc/header.php';
?>
<div class="product pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php require $_SERVER['DOCUMENT_ROOT'] . '/inc/shop/products.php'; ?>
			</div>


				<div class="col-lg-4">
					<div class="sidebar">
						<div class="sidebar__widget">
							<div class="sidebar__widget--search">
								<form action="<?php echo $_CONFIG['domain']; ?>/shop.php?filter=true&" method="get">
									<input type="text" placeholder="Search Product Name or ID" id="search" name="search">
									<button type="submit"><i class="fa-regular fa-search"></i></button>
								</form>
							</div>
						</div>

						<div class="sidebar__widget">
							<h5>product Categories</h5>
							<div class="sidebar__widget--category">
								<ul>
									<?php require $_SERVER['DOCUMENT_ROOT'] . '/inc/shop/product-categories.php'; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- product end -->


	<!-- Modal -->
	<div class="modal pd-view fade" id="product-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div class="close-btn" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></div>
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
								<h5>Figma Dashboard Ui Kit data design</h5>
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
				</div>
			</div>
		</div>
	</div>


	<?php
	require 'inc/footer.php';
	?>