<!-- START: Footer -->
<footer class="kd-footer">
    <div class="kd-box-1">
        <div class="container">
            <div class="row vertical-gap lg-gap">
                <div class="col-sm-6 col-lg-4">
                    <div class="kd-widget-footer">
                        <div class="kd-widget-title">
                            <a href="index-2.php" class="kd-widget-logo">
                                <img src="<?php echo $_CONFIG['domain']; ?>/assets/images/logo.png" alt="" width="88px">
                            </a>
                        </div>
                        <div class="kd-widget-text">
                            <p class="mb-0">Copyright &copy; <?php echo date('Y'); ?> <span class="dib">Khaos Development</span>. <span class="dib">All rights reserved.</span></p><br>
                            <p class="mb-0"><a href="mailto:contact@khaosdevelopment.com"> contact@khaosdevelopment.com</a></p>
                            <p class="mb-0"><a href="mailto:support@khaosdevelopment.com"> support@khaosdevelopment.com</a></p>
                        </div>
                        <div class="kd-widget-text">
                            <ul class="kd-social-links mnt-3">
                                <li><a href="#"><span class="fab fa-behance-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                                <li><a href="#"><span class="fab fa-github"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="kd-widget-footer">
                        <div class="kd-widget-title"> Useful Links </div>
                        <ul class="kd-widget-list">
                            <li><a href="<?php echo $_CONFIG['storeurl']; ?>">Store</a></li>
                            <li><a href="<?php echo $_CONFIG['domain']; ?>/reseller-program.php">Resellers</a></li>
                            <li><a href="<?php echo $_CONFIG['domain']; ?>/cloud-hosting.php">Cloud Hosting</a></li>
                        </ul>
                        <ul class="kd-widget-list">
                            <li><a href="<?php echo $_CONFIG['accounturl']; ?>help-center.php">My Account</a></li>
                            <li><a href="<?php echo $_CONFIG['accounturl']; ?>/licenses.php">My Licenses</a></li>
                            <li><a href="<?php echo $_CONFIG['accounturl']; ?>/my-invoices.php">My Invoices</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="kd-widget-footer">
                        <div class="kd-widget-title"> Support Center </div>
                        <ul class="kd-widget-list">
                            <li><a href="<?php echo $_CONFIG['supporturl']; ?>">Support Home</a></li>
                            <li><a href="<?php echo $_CONFIG['knowledgebaseurl']; ?>">Knowledge Base</a></li>
                            <li><a href="<?php echo $_CONFIG['docsurl']; ?>">Documentation</a></li>
                        </ul>
                        <ul class="kd-widget-list">
                            <li><a href="<?php echo $_CONFIG['forumsurl']; ?>">Forums</a></li>
                            <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>">My Tickets</a></li>
                            <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>/new-ticket.php">New Ticket</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="kd-widget-footer">
                        <div class="kd-widget-title"> Legal </div>
                        <ul class="kd-widget-list">
                            <li><a href="<?php echo $_CONFIG['domain']; ?>/legal/terms.php">Terms & Conditions</a></li>
                            <li><a href="<?php echo $_CONFIG['domain']; ?>/legal/privacy.php">Privacy Policy</a></li>
                            <li><a href="<?php echo $_CONFIG['domain']; ?>/legal/cookies.php">Cookie Policy</a></li>
                            <li><a href="<?php echo $_CONFIG['domain']; ?>/legal/refunds.php">Refund Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->
</div>
<div id="subscribe" class="kd-popup kd-popup-modal kd-popup-subscribe">
    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
            <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
        </svg></button>
    <div class="kd-box kd-box-decorated">
        <div class="kd-box-content">
            <h6 class="mnt-5 mnb-5">Subscribe to Newsletter</h6>
        </div>
        <div class="kd-separator"></div>
        <div class="kd-box-content">
            <p class="mnt-5 fs-15">Join the newsletter to receive news, updates, new products and freebies in your inbox.</p>
            <form action="<?php echo $_CONFIG['domain']; ?>/inc/mailinglist.php" method="post" class="kd-form kd-form-group-inputs">
                <input type="email" name="email" aria-describedby="emailHelp" class="form-control form-control-style-2" placeholder="Your Email Address">
                <button type="submit" value="submit" name="submit" class="kd-btn kd-btn-lg kd-btn-icon"><span class="icon fas fa-paper-plane"></span></button>
            </form>
        </div>
    </div>
</div>
<!-- START: Scripts -->
<!-- Object Fit Images -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/object-fit-images/dist/ofi.min.js"></script>
<!-- Popper -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Fancybox -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
<!-- Cleave -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/cleave.js/dist/cleave.min.js"></script>
<!-- Validator -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/validator/validator.min.js"></script>
<!-- Sticky Kit -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
<!-- Jarallax -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/jarallax/dist/jarallax-video.min.js"></script>
<!-- Isotope -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>
<!-- ImagesLoaded -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Swiper -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- Gist Embed -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/gist-embed/dist/gist-embed.min.js"></script>
<!-- Bootstrap Select -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<!-- Dropzone -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
<!-- Quill -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/vendor/quill/dist/quill.min.js"></script>
<!-- The Amdesk -->
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/js/khaos.min.js"></script>
<script src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/js/khaos-init.js"></script>
<!-- END: Scripts -->
</body>

</html>