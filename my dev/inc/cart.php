
  <div class="archive border border-secondary rounded">
    <div class="bg-secondary px-4 py-1"><span class="fw-600 ls-1 text-uppercase lead-1">Cart Summary</span></div>
    <div class="p-4">
      <ul class="list-unstyled small mb-0">
        <li class="small-2">Cart Details</li>
        <li><hr class="my-3 border-secondary"></li>
        <li class="my-1">
          <div class="d-flex small-2 fw-600">
            <div>Subtotal</div>
            <div class="ml-auto">
              <?php if (isset($_SESSION['cartsubtotal'])) {
                echo '$'.$_SESSION['cartsubtotal'];
              } else {
                echo '$0.00';
              } ?>
            </div>
          </div>
        </li>
        <li class="my-1">
          <div class="d-flex text-info small-2 fw-600">
            <div>Discounts</div>
            <div class="ml-auto">
              <?php if (isset($_SESSION['cartdiscounts'])) {
                echo '$'.$_SESSION['cartdiscounts'];
              } else {
                echo '$0.00';
              } ?>
            </div>
          </div>
        </li>
        <li class="my-1">
          <div class="d-flex text-success small-2 fw-600">
            <div>Coupons</div>
            <div class="ml-auto">
              <?php if (isset($_SESSION['cartcoupons'])) {
                echo '$'.$_SESSION['cartcoupons'];
              } else {
                echo '$0.00';
              } ?>
            </div>
          </div>
        </li>
        <li class="my-1">
          <div class="d-flex small-2 fw-600">
            <div>Estimated Tax</div>
            <div class="ml-auto text-danger">
              <?php if (isset($_SESSION['carttax'])) {
                echo '$'.$_SESSION['carttax'];
              } else {
                echo '$0.00';
              } ?>
            </div>
          </div>
        </li>
        <li><hr class="my-3 border-secondary"></li>
        <li>
          <div class="d-flex small-1 fw-600">
            <div>Total</div>
            <div class="ml-auto text-success">
              <?php if (isset($_SESSION['carttotal'])) {
                echo '$'.$_SESSION['carttotal'];
              } else {
                echo '$0.00';
              } ?>
            </div>
          </div>
        </li>
        <li><hr class="my-3 border-secondary"></li>
        <?php
        switch ($_SERVER['PHP_SELF']) {

          case "/cart.php":
            $checkout = "order";
            break;

          case "/address.php":
            $checkout = "address";
            break;

          case "/payment.php":
            $checkout = "payment";
            break;
        }

        if ($checkout == "order") { ?>
          <li>
            <a href="checkout-address.php" class="btn btn-lg btn-block btn-success mt-4">Confirm Cart</a>
          </li>
        <?php } elseif ($checkout == "address") { ?>
          <li>
            <a href="checkout-payment.php" class="btn btn-lg btn-block btn-success mt-4">Continue to Payment</a>
          </li>
        <?php } ?>
        <li class="lh-1">
          <span class="small-4 text-lt w-100 mt-4 pb-1 d-inline-block">By clicking Place Order, you accept our <a href="refund-policy.php" target="_blank" class="text-rp text-primary text-underline">refund policy</a>, <a href="privacy-policy.php" target="_blank" class="text-rp text-primary text-underline">privacy policy</a> and <a href="terms-and-conditions.php" target="_blank" class="text-rp text-primary text-underline">terms and conditions</a>.</span>
        </li>
      </ul>
    </div>
  </div>
