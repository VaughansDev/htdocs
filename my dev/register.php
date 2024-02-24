<?php
  require 'inc/pageloader.php';
?>

<main class="main-content">

  <!-- Start Content Area -->
  <section class="content-section">
    <div class="container">
      <div class="row gutters-y">
        <div class="col-lg-7 text-light" style="margin: auto;">
          <div class="mb-6">
            <h3>Account Registration</h3>
            <p class="lead-1">Sign up for a Khaos Development account, an account is require to purchase our products, manage your licenses and access files after purchase.</p>
          </div>
          <form action="inc/register.php" class="input-transparent" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="text" name="firstname" placeholder="First Name" required>
                </div>

                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="text" name="lastname" placeholder="Last Name" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input name="email" type="email" class="form-control form-control-lg" placeholder="Your Email" required>
                </div>

                <div class="form-group col-md-6">
                  <input name="username" type="text" class="form-control form-control-lg" placeholder="Username" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="password" name="confpassword" placeholder="Confirm Password" required>
                </div>
              </div>

              <div class="form-group custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" value="true" name="termsconditions" id="terms-conditions" required>
                <label class="custom-control-label" for="terms-conditions">
                  I accept the Terms & Conditions
                </label>
              </div>

              <div class="form-group custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" value="true" name="privacypolicy" id="privacy-policy" required>
                <label class="custom-control-label" for="privacy-policy">
                  I accept the Privacy Policy
                </label>
              </div>

              <div class="form-group custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="maillist" value="true" id="mailing-list">
                <label class="custom-control-label" for="mailing-list">
                  Subscribe to the mailing list<br>(We will only send promotional offers and discounts. We won't spam you)
                </label>
              </div>
              <button class="btn btn-lg btn-success" name="register" value="register" type="submit">Create Account</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
  require 'inc/footer.php';
?>
