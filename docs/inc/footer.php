<!-- START: Footer -->
<footer class="kd-footer">
    <div class="kd-box-1">
        <div class="container">
            <div class="row vertical-gap lg-gap">
                <div class="col-sm-6 col-lg-3">
                    <div class="kd-widget-footer">
                        <div class="kd-widget-title">
                            <a href="index-2.php" class="kd-widget-logo">
                                <img src="<?php echo $_CONFIG['domain']; ?>/assets/images/logo.png" alt="" width="88px">
                            </a>
                        </div>
                        <div class="kd-widget-text">
                            <p class="mb-0">&copy; 2019 <span class="dib">All rights reserved.</span> <span class="dib">Dexad &amp; nK.</span></p>
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
                            <li><a href="store.php">Store</a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                            <li><a href="forums.php">Forums</a></li>
                            <li><a href="blog.php">Blog</a></li>
                        </ul>
                        <ul class="kd-widget-list">
                            <li><a href="help-center.php">Help Center</a></li>
                            <li>
                                <a data-fancybox data-touch="false" data-close-existing="true" data-src="#signup" href="javascript:;">Sign Up</a>
                            </li>
                            <li>
                                <a data-fancybox data-touch="false" data-close-existing="true" data-src="#login" href="javascript:;">Log In</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="kd-widget-footer">
                        <div class="kd-widget-title"> Latest Products </div>
                        <div class="kd-widget-portfolio">
                            <a href="product.php">Quantial – Moving Upon Signs Moveth Lesser</a>
                            <a href="product.php">Sensific – Saying Beast Lesser for in Fruitful</a>
                            <a href="product.php">Minist – Subdue Above for Signs Dry is Have Great</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="kd-widget-footer">
                        <div class="kd-widget-title"> Latest Posts </div>
                        <a href="single-post.php" class="kd-widget-post">
                            <span class="kd-widget-post-text">
                                <span class="kd-widget-post-title">The Big Thing in Design</span>
                                <span class="kd-widget-post-date">25 Sep 2018</span>
                            </span>
                        </a>
                        <a href="single-post.php" class="kd-widget-post">
                            <span class="kd-widget-post-text">
                                <span class="kd-widget-post-title">Will Coding Ever Rule the World?</span>
                                <span class="kd-widget-post-date">24 Sep 2018</span>
                            </span>
                        </a>
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
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/object-fit-images/dist/ofi.min.js"></script>
<!-- Popper -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Fancybox -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
<!-- Cleave -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/cleave.js/dist/cleave.min.js"></script>
<!-- Validator -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/validator/validator.min.js"></script>
<!-- Sticky Kit -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
<!-- Jarallax -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/jarallax/dist/jarallax-video.min.js"></script>
<!-- Isotope -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>
<!-- ImagesLoaded -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Swiper -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- Gist Embed -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/gist-embed/dist/gist-embed.min.js"></script>
<!-- Bootstrap Select -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<!-- Dropzone -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
<!-- Quill -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/quill/dist/quill.min.js"></script>
<!-- The Amdesk -->
<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/khaos.min.css"></script>
<script src="<?php echo $_CONFIG['domain']; ?>/assets/js/khaos-init.js"></script>
<!-- END: Scripts -->
</body>

</html>