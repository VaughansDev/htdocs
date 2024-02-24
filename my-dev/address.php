<?php
  require 'inc/pageloader.php';
?>

    <!-- main content -->
    <main class="checkout-order-body main-content gradient-lg position-relative">

      <!-- overlay -->
      <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets/img/bg/bg_shape.png);"></div>
      <!-- /.overlay -->

      <!-- content area -->
      <div class="content-section text-light">
        <div class="container">
          <header class="header text-center mb-6">
            <div class="row gutters-y">
              <div class="col-12 pt-8">
                <div class="timeline-horizontal">
                  <div class="timeline-item flex-1 p-0" data-step="&#xe60d;">
                    <div class="pt-8 pb-7 px-2 px-sm-4 border-left border-bottom border-secondary">
                      <span class="text-uppercase small-3 fw-600">Your Cart</span>
                    </div>
                  </div>
                  <div class="timeline-item flex-1 p-0" data-step="&#xe69b;">
                    <div class="pt-8 pb-7 px-2 px-sm-4 border-bottom border-secondary">
                      <span class="text-uppercase small-3 fw-600">Address</span>
                    </div>
                  </div>
                  <div class="timeline-item flex-1 border-secondary p-0" data-step="&#xe721;">
                    <div class="pt-8 pb-7 px-2 px-sm-4 border-bottom border-secondary border-right">
                      <span class="text-uppercase small-3 fw-600">Payment</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <div class="position-relative">
            <div class="row">
              <div class="col-lg-8 mb-8 mb-lg-0">
                <div>
                  <div>
                    <h4>Billing details</h4>
                    <hr class="border-secondary my-4">
                    <div class="mb-9">
                      <form class="input-transparent">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label class="small-1" for="firstName">First name *</label>
                            <input class="form-control" id="firstName" type="text" name="firstName" required="">
                          </div>
                          <div class="form-group col-md-6">
                            <label class="small-1" for="lastName">Last name *</label>
                            <input class="form-control" id="lastName" type="text" name="lastName" required="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="small-1" for="country">Country *</label>
                          <select class="form-control" id="country">
                            <option>Argentina</option>
                            <option>Germany</option>
                            <option>Japan</option>
                            <option>South Korea</option>
                            <option>United Kingdom (UK)</option>
                            <option>United States (US)</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="small-1" for="billing_address_1">Street address *</label>
                          <input name="billing_address_1" type="text" class="form-control" required="" placeholder="House number and street name" id="billing_address_1">
                        </div>
                        <div class="form-group">
                          <input name="billing_address_2" type="text" class="form-control" required="" placeholder="Apartment, suite, unit etc. (optional)" id="billing_address_2">
                        </div>
                        <div class="form-group">
                          <label class="small-1" for="billing_city">Town / City *</label>
                          <input name="billing_city" type="text" class="form-control" required="" id="billing_city">
                        </div>
                        <div class="form-group">
                          <label class="small-1" for="state">State *</label>
                          <select class="form-control" id="state">
                            <option>Alabama</option>
                            <option>Colorado</option>
                            <option>Louisiana</option>
                            <option>New York</option>
                            <option>Ohio</option>
                            <option>Wyoming</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="small-1" for="billing_postcode">ZIP *</label>
                          <input name="billing_postcode" type="text" class="form-control" required="" id="billing_postcode">
                        </div>
                        <div class="form-group">
                          <label class="small-1" for="billing_phone">Phone *</label>
                          <input name="billing_phone" type="text" class="form-control" required="" id="billing_phone">
                        </div>
                        <div class="form-group">
                          <label class="small-1" for="billing_email">Email address *</label>
                          <input name="billing_email" type="email" class="form-control" required="" id="billing_email">
                        </div>
                      </form>
                    </div>
                    <hr class="border-secondary my-7">
                    <h4 class="mb-6">Shipping details</h4>
                    <div>
                      <form class="input-transparent">
                        <div class="form-group custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" value="" id="ship_to_different_address">
                          <label class="custom-control-label" for="ship_to_different_address">
                            Ship to a different address?
                          </label>
                        </div>
                        <div class="form-group">
                          <label class="small-1" for="order_comments">Order notes (optional)</label>
                          <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" rows="3"></textarea>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <?php
                  require 'inc/cart.php';
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content area -->

    </main>

<?php
  require 'inc/footer.php';
?>
