<?php
  require 'inc/pageloader.php';
?>

    <main class="main-content">

      <!-- Start Content Area -->
      <section class="content-section">
        <div class="container">
          <div class="row gutters-y">
            <div class="col-lg-7 text-light">
              <div class="mb-6">
                <h3>Contact Us</h3>
                <p class="lead-1">Morbi aliquet felis nec nisl congue interdum. Quisque vitae sapien ullamcorper.</p>
              </div>
              <form data-form="contact_form" action="#" class="input-transparent" method="POST">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input class="form-control form-control-lg" type="text" name="name" placeholder="Your Name" required>
                    </div>

                    <div class="form-group col-md-6">
                      <input class="form-control form-control-lg" type="email" name="email" placeholder="Your Email Address" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <input name="subject" type="text" class="form-control" placeholder="Subject" required>
                  </div>

                  <div class="form-group">
                    <textarea class="form-control form-control-lg" rows="4" placeholder="Your Message" name="message" required></textarea>
                  </div>
                  <button class="btn btn-lg btn-success" type="submit">Send it over</button>
              </form>
            </div>
            <div class="col-lg-5">
              <div class="p-4 border border-secondary" data-overlay="9">
                <div class="p-relative">
                  <div class="mb-7">
                    <h5 class="lead-2 fw-500 text-success">Company</h5>
                    <ul class="list-unstyled">
                      <li class="d-flex align-items-center"><i class="fas fa-map-marker-alt mr-3" style="width: 10px"></i>M100 W Laurel Ln, Etowah, NC, 28729</li>
                      <li class="d-flex align-items-center"><i class="fas fa-phone mr-3" style="width: 10px"></i>(812) 445-3742</li>
                      <li class="my-3">Maecenas in odio lacus. Nulla neque diam, molestie quis fringilla in, tempus eget leo.</li>
                    </ul>
                  </div>
                  <div class="mb-7">
                    <h5 class="lead-2 fw-500 text-success">Office</h5>
                    <ul class="list-unstyled">
                      <li>2265 N 2453rd Rd, Marseilles, IL, 61341 (815) 795-9748</li>
                      <li>Lee St, Orwigsburg, PA, 17961</li>
                      <li>637 Lee St, Orwigsburg, PA, 17961</li>
                      <li>200 Sunset Ct, Hahnville, LA, 70057</li>
                    </ul>
                  </div>
                  <div>
                    <h5 class="lead-2 fw-500 text-success">Follow Us</h5>
                    <div class="social-buttons">
                      <a class="mr-3 unset social-twitter" href="#"><i class="fab fa-twitter"></i></a>
                      <a class="mr-3 unset social-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                      <a class="mr-3 unset social-dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                      <a class="mr-3 unset social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Content Area -->

      <!-- Start Content Area -->
      <div class="map_box">
        <div class="py-13" data-map="true" data-map-style="custom" data-lat="35.61030245" data-lng="140.11365268" data-marker-lat="35.61030245" data-marker-lng="140.11365268" data-marker-animation="drop" data-marker-title="Office" data-zoom="12"></div>
      </div>
      <!-- End Content Area -->

    </main>

<?php
  require 'inc/footer.php';
?>
