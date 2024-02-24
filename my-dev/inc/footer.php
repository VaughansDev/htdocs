<!-- footer -->
<footer class="footer footer-dark bg-dark py-9">
  <div class="container">
      <div class="row gutters-y">
          <div class="col-6 col-lg-3">
            <a href="#" class="logo d-block mb-4"><img src="<?php echo $_CONFIG['logo']; ?>" alt="Khaos Development" class="logo-dark"></a>
            <p>Wicodus is a online store where you can find digital goods at the best prices.</p>
            <div class="social-buttons">
              <a class="social-twitter" href="#"><i class="fab fa-twitter"></i></a>
              <a class="social-youtube" href="#"><i class="fab fa-youtube"></i></a>
              <a class="social-facebook" href="#"><i class="fab fa-facebook"></i></a>
            </div>
          </div>

          <div class="col-6 col-lg-2">
            <h6 class="text-uppercase fw-600 mb-4">About</h6>
            <div class="nav flex-column">
              <a class="nav-link" href="about.php">Our team</a>
              <a class="nav-link" href="about.php">Careers</a>
              <a class="nav-link" href="about.php">Cookie Policy</a>
              <a class="nav-link" href="about.php">Privacy Policy</a>

            </div>
          </div>

          <div class="col-6 col-lg-2">
            <h6 class="text-uppercase fw-600 mb-4">Community</h6>
            <div class="nav flex-column">
              <a class="nav-link" href="news.php">Forum</a>
              <a class="nav-link" href="news.php">Blog</a>
              <a class="nav-link" href="news.php">News</a>
              <a class="nav-link" href="news.php">Team</a>
            </div>
          </div>

          <div class="col-6 col-lg-2">
            <h6 class="text-uppercase fw-600 mb-4">Help</h6>
            <div class="nav flex-column">
              <a class="nav-link" href="contact.php">Contact Us</a>
              <a class="nav-link" href="contact.php">Support</a>
              <a class="nav-link" href="contact.php">Help Center</a>
              <a class="nav-link" href="contact.php">Forum</a>
            </div>
          </div>

          <div class="col col-lg-3 order-lg-last">
            <h6 class="text-uppercase fw-600 mb-4">Legal</h6>
            <div class="nav flex-column">
              <a class="nav-link" href="terms-and-conditions.php">Terms & Conditions</a>
              <a class="nav-link" href="privacy-policy.php">Privacy Policy</a>
              <a class="nav-link" href="refund-policy.php">Refund Policy</a>
              <a class="nav-link" href="cookie-policy.php">Cookie Policy</a>
            </div>
            <!--<div>
              <h6 class="mb-2">Reviews</h6>
              <div class="text-warning lead-1">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star text-secondary"></i>
              </div>
            </div>-->
          </div>
      </div>
  </div>
</footer>
<!-- /.footer -->

<!-- sign Up -->
<div class="modal fade" id="userLogin" tabindex="-1" role="dialog" aria-labelledby="userLoginTitle" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content bg-dark text-light">
      <div class="modal-header border-secondary">
        <h5 class="modal-title" id="userLoginTitle">Log in</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--<div>
          <div class="text-center my-6">
            <a class="btn btn-circle btn-sm btn-google mr-2" href=""><i class="fab fa-google"></i></a>
            <a class="btn btn-circle btn-sm btn-facebook mr-2" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-circle btn-sm btn-twitter" href=""><i class="fab fa-twitter"></i></a>
          </div>
          <span class="hr-text small my-6">Or</span>
        </div>-->
        <form class="input-transparent" method="post" action="inc/login.php">
          <div class="form-group">
            <input type="text" class="form-control border-secondary" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control border-secondary" name="password" placeholder="Password">
          </div>
          <div class="form-group d-flex justify-content-between">
            <!--<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" checked="" id="rememberMeCheck">
              <label class="custom-control-label" for="rememberMeCheck">Remember me</label>
            </div>-->
            <a class="small-3" href="forgot-password.php">Forgot password?</a>
          </div>
          <div class="form-group mt-6">
            <button class="btn btn-block btn-success" name="login" value="login" type="submit">Login</button>
          </div>
        </form>
        <span class="small">Don't have an account? <a href="register.php">Create an account</a></span>
      </div>
    </div>
  </div>
</div>
<!-- /.sign Up -->

<!-- offcanvas-cart -->
<!--<div id="offcanvas-cart" class="offcanvas-cart offcanvas text-light h-100 r-0 l-auto d-flex flex-column" data-animation="slideRight">
  <div>
    <button type="button" data-toggle="offcanvas-close" class="close float-right ml-4 text-light o-1 fw-100" data-dismiss="offcanvas" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <hr class="border-light o-20 mt-8 mb-4">
  </div>
  <div class="offcanvas-cart-body flex-1">
    <div class="offcanvas-cart-list row align-items-center no-gutters">
      <div class="ocs-cart-item col-12">
        <div class="row align-items-center no-gutters">
          <div class="col-3 item_img d-none d-sm-block">
            <a href="store-product.php"><img class="img bl-3 text-primary" src="assets/img/content/store/h-08.jpg" alt="Product"></a>
          </div>
          <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
            <a href="store-product.php"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Journey of the Solarcity</span></a>
            <div class="position-relative lh-1">
              <div class="number-input">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                <input class="quantity" min="0" name="quantity" value="1" type="number">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="row align-items-center h-100 no-gutters">
              <div class="ml-auto text-center">
                <a href="#"><i class="far fa-trash-alt"></i></a><br>
                <span class="fw-500 text-warning">€44.99</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ocs-cart-item col-12">
        <div class="row align-items-center no-gutters">
          <div class="col-3 item_img d-none d-sm-block">
            <a href="store-product.php"><img class="img bl-3 text-primary" src="assets/img/content/store/h-09.jpg" alt="Product"></a>
          </div>
          <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
            <a href="store-product.php"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Exploration Memories</span></a>
            <div class="position-relative lh-1">
              <div class="number-input">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                <input class="quantity" min="0" name="quantity" value="1" type="number">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="row align-items-center h-100 no-gutters">
              <div class="ml-auto text-center">
                <a href="#"><i class="far fa-trash-alt"></i></a><br>
                <span class="fw-500 text-warning">€27.59</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <a href="checkout-order.php" class="btn btn-lg btn-block btn-outline-light">View cart</a>
  </div>
</div>-->
<!-- /.offcanvas-cart -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- User JS -->
<script src="assets/js/scripts.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js" id="_mainJS" data-plugins="load"></script>
</body>
</html>
