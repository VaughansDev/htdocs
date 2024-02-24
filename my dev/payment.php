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
                  <div class="timeline-item flex-1 p-0" data-step="&#xe721;">
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
                    <h4>Payment Options</h4>
                    <hr class="border-secondary my-4">
                    <span class="d-block small-1 o-90 mb-4">Select Payment Method</span>
                    <div>
                      <div id="accordion-5" class="accordion accordion-connected accordion-no-header">
                        <div class="card">
                          <div class="card-header" id="Card">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" href="#collapse-5-3" class="collapsed d-flex align-items-center">
                                <span class="icon"><i class="fa-solid fa-credit-card text-success lead-5"></i></span>
                                Credit Card
                              </a>
                            </h5>
                          </div>
                          <div id="collapse-5-3" class="collapse" aria-labelledby="Card" data-parent="#accordion-5">
                            <div class="card-body">
                              <div class="mb-2">
                                <h6 class="text-uppercase fw-600 mb-4">Accepted Cards</h6>
                                <div class="text-light lead-5">
                                  <a href="store.php" class="mr-2"><i class="fab fa-cc-visa"></i></a>
                                  <a href="store.php" class="mr-2"><i class="fab fa-cc-mastercard"></i></a>
                                  <a href="store.php" class="mr-2"><i class="fab fa-cc-amex"></i></a>
                                  <a href="store.php" class="mr-2"><i class="fab fa-cc-discover"></i></a>
                                  <a href="store.php" class="mr-2"><i class="fab fa-cc-jcb"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="Paypal">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" href="#collapse-5-1" class="collapsed d-flex align-items-center">
                                <span class="icon"><i class="fab fa-paypal text-success lead-5"></i></span>
                                Paypal
                              </a>
                            </h5>
                          </div>
                          <div id="collapse-5-1" class="collapse" aria-labelledby="Paypal" data-parent="#accordion-5">
                            <div class="card-body">
                              <form class="input-transparent" action="assets/plugins/paypal/paypalcharge.php" method="post">
                                <center>
                                  <input name="amount" type="text" value="100.00" hidden>
                                  <input class="btn btn-lg btn-block btn-success mt-4" style="width: 60%;" type="submit" name="submit" value="Pay with PayPal">
                                </center>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <?php
                  require 'inc/address.php';
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
