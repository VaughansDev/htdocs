<?php
require 'inc/header.php';
?>
	<div class="checkout pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout__form">
						<h5 class="title">Billing Details</h5>
						<form action="#" method="post">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="checkout__form--input">
										<label for="fname">First Name *</label>
										<input type="text" id="fname" placeholder="First Name" class="form-control" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="checkout__form--input">
										<label for="lname">Last Name *</label>
										<input type="text" id="lname" placeholder="Last Name" class="form-control" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="checkout__form--input">
										<label for="email">Your Email *</label>
										<input type="email" id="email" placeholder="Your Email" class="form-control" required>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="checkout__form--input">
										<label for="phone">Phone *</label>
										<input type="number" id="phone" placeholder="Your Phone Number" class="form-control" required>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="checkout__form--input">
										<label for="country">Country *</label>
										<select name="country" id="country">
											<option value="">Select Country</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="India">India</option>
											<option value="USA">USA</option>
											<option value="UK">UK</option>
											<option value="Canada">Canada</option>
											<option value="Japan">Japan</option>
											<option value="China">China</option>
											<option value="Russia">Russia</option>
											<option value="France">France</option>
											<option value="Germany">Germany</option>
											<option value="Spain">Spain</option>
											<option value="Italy">Italy</option>
											<option value="South Korea">South Korea</option>
											<option value="South Africa">South Africa</option>
											<option value="South America">South America</option>

										</select>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="checkout__form--input">
										<label for="region">Region *</label>
										<select name="region" id="region">
											<option value="">Select Region</option>
											<option value="Dhaka">Dhaka</option>
											<option value="Khulna">Khulna</option>
											<option value="Barisal">Barisal</option>
											<option value="Rajshahi">Rajshahi</option>
											<option value="Chittagong">Chittagong</option>
											<option value="Rangpur">Rangpur</option>
											<option value="Mymensingh">Mymensingh</option>
											<option value="Bogura">Bogura</option>
											<option value="Comilla">Comilla</option>


										</select>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="checkout__form--input">
										<label for="city">City / Town *</label>
										<input type="text" id="city" placeholder="Your City" class="form-control" required>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="checkout__form--input">
										<label for="area">Area *</label>
										<input type="text" id="area" placeholder="Area" class="form-control" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="checkout__form--input">
										<label for="address">Address</label>
										<input type="text" id="address" placeholder="Your Address" class="form-control" required>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="checkout__form--input">
										<label for="zip">Zip Code *</label>
										<input type="number" id="zip" placeholder="Zip Code" class="form-control" required>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="checkout__order">
						<h5 class="title">Your Order</h5>
						<div class="checkout__order--list">
							<div class="checkout__order--list--item">
								<div class="item">
									<span>Figma Dashboard</span><span class="price">$250.00</span>
								</div>
								<div class="item">
									<span>Figma Dashboard</span><span class="price">$250.00</span>
								</div>
								<div class="item">
									<span>Service Fee</span><span class="price">$10.00</span>
								</div>
							</div>
							<div class="checkout__order--subtotal">
								<div class="item">
									<span>Subtotal</span><span class="price">$250.00</span>
								</div>
							</div>
							<div class="checkout__order--total">

							</div>
							<div class="checkout__order--paymentmethod">
								<button class="method mastercard" type="button"><img src="<?php echo $_CONFIG['domain']; ?>/assets/img/icon/mastercard-full-svgrepo-com.svg" alt=""></button>
								<button class="method visa" type="button"><img src="<?php echo $_CONFIG['domain']; ?>/assets/img/icon/visa-4-logo-svgrepo-com.svg" alt=""></button>
								<button class="method paypal" type="button"><img src="<?php echo $_CONFIG['domain']; ?>/assets/img/icon/paypal.svg" alt=""></button>
								<button class="method stripe" type="button"><img src="<?php echo $_CONFIG['domain']; ?>/assets/img/icon/stripe-svgrepo-com.svg" alt=""></button>
							</div>
							<p>Your personal data will be used to process your
								order, support your experience through this websiteand for the purposes described in our
								privacy policy
							</p>
							<div class="checkout__order--btn">
								<button type="submit" class="order-btn">Place Order</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- checkout start end -->

	<?php
	require 'inc/footer.php';
	?>