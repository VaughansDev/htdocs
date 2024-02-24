<?php
require 'inc/header.php';
?>
<div class="cart pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="cart__table" title="please scroll me for view full table when you use mobile">
					<table class="table-bordered cf">
						<thead class="cf">
							<tr>
								<th></th>
								<th class="Thumbnail">Thumbnail</th>
								<th class="Product">Product</th>
								<th class="Product">Product Type</th>
								<th class="Product">License Type</th>
								<th class="Price">Price</th>
							</tr>
						</thead>
						<tbody>
							<!-- single cart -->
							<tr>
								<td data-title="delete">
									<div class="cart__delete">
										<i class="fa-solid fa-xmark"></i>
									</div>
								</td>
								<td data-title="Thumbnail">
									<div class="thumb">
										<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/product/02.jpg" alt="">
									</div>
								</td>
								<td data-title="Title" class="title">
									<a href="shop-details.html">
										Physical Exercise App Ui</a>
								</td>
								<td data-title="Price" class="price">$50</td>
								<td data-title="Quantity">
									<div class="quantity">
										<input type="number" name="quantity" id="item1" min="1" max="100" value="1">
									</div>
								</td>
								<td data-title="Sub-Total" class="total">$50</td>
							</tr>
							<!-- single cart end -->
							<!-- single cart -->
							<tr>
								<td data-title="delete">
									<div class="cart__delete">
										<i class="fa-solid fa-xmark"></i>
									</div>
								</td>
								<td data-title="Thumbnail">
									<div class="thumb">
										<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/product/01.jpg" alt="">
									</div>
								</td>
								<td data-title="Title" class="title"><a href="shop-details.html">Task Management Application</a></td>
								<td data-title="Price" class="price">$50</td>
								<td data-title="Quantity">
									<div class="quantity">
										<input type="number" name="quantity" id="item2" min="1" max="100" value="1">
									</div>
								</td>
								<td data-title="Sub-Total" class="total">$50</td>
							</tr>
							<!-- single cart end -->
							<!-- single cart -->
							<tr>
								<td data-title="delete">
									<div class="cart__delete">
										<i class="fa-solid fa-xmark"></i>
									</div>
								</td>
								<td data-title="Thumbnail">
									<div class="thumb">
										<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/product/03.jpg" alt="">
									</div>
								</td>
								<td data-title="Title" class="title"><a href="shop-details.html">Company Management Application</a></td>
								<td data-title="Price" class="price">$50</td>
								<td data-title="Quantity">
									<div class="quantity">
										<input type="number" name="quantity" id="item3" min="1" max="100" value="1">
									</div>
								</td>
								<td data-title="Sub-Total" class="total">$50</td>
							</tr>
							<!-- single cart end -->
						</tbody>
					</table>
				</div>
				<div class="cart__option">
					<div class="cart__option--left">
						<div class="cart__option--discount">
							<h6>Discount</h6>
							<p>Enter your coupon code if you have one.</p>
							<form action="#">
								<input type="text" placeholder="Coupon code">
								<button type="submit">Apply Coupon</button>
							</form>
						</div>
					</div>
					<div class="cart__option--right">
						<div class="cart__option--total">
							<h6>Cart Total</h6>
							<div class="sub-total">
								<span>Sub-Total</span>
								<span class="price">$50</span>
							</div>
							<div class="total">
								<span>Total:</span>
								<span class="price">$50</span>
							</div>
							<div class="checkout">
								<a href="checkout.html">Check Out</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- cart end -->

<?php
require 'inc/footer.php';
?>