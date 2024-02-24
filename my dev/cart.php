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
                  <div class="timeline-item flex-1 border-secondary p-0" data-step="&#xe69b;">
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
                  <div class="mb-7">
                    <h4>Your cart</h4>
                    <hr class="border-secondary my-4">
                    <div class="row">
                      <?php
                        require 'inc/cartitems.php';
                      ?>
                    </div>
                    <hr class="border-secondary my-4">
                  </div>
                  <div>
                    <h4 class="mb-5">Coupons</h4>
                    <form class="input-transparent">
                      <div class="form-group input-group mb-0">
                        <input type="text" class="form-control" placeholder="Enter Your Code">
                        <div class="input-group-append ml-3">
                          <button class="btn btn-success" type="button">Apply</button>
                        </div>
                      </div>
                    </form>
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
