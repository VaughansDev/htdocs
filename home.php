<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>
<div class="kd-main">
    <header class="kd-header kd-box-4">
        <div class="bg-image bg-image-parallax">
            <img src="<?php echo $_CONFIG['domain']; ?>/assets/images/bg-header.png" class="jarallax-img" alt="">
            <div style="background-color: rgba(27, 27, 27, .75);"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <h1 class="display-3 text-white">Khaos Development</h1>
                    <p class="lead text-1">High Quality Web Applications and
                        FiveM Scripts & Resources</p>
                    <a href="<?php echo $_CONFIG['storeurl']; ?>" class="kd-btn kd-btn-lg mt-10">View Products</a>
                </div>
            </div>
        </div>
    </header>
    <div class="kd-box-1">
        <div class="container">
            <div class="row vertical-gap lg-gap">
                <div class="col-lg-4">
                    <div class="kd-feature kd-feature-1">
                        <div class="kd-feature-decorated"></div>
                        <div class="kd-feature-icon">
                            <i class="fa-regular fa-face-smile"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title">149 +</div>
                            <div class="kd-feature-text">Happy Customers</div>
                        </div>
                    </div>
                    <div class="kd-feature kd-feature-1">
                        <div class="kd-feature-decorated"></div>
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title">125 +</div>
                            <div class="kd-feature-text">Active Licenses</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2>Who we are</h2>
                    <p class="mb-0">We a team of enthusiasts that creating powerful digital products, that help your businesses growth. For all products, we provide a year of support and lifetime security updates.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="kd-box-1 bg-dark-1">
        <div class="container">
            <div class="row mnt-40 mnb-40">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kd-feature kd-feature-2">
                        <div class="kd-feature-cont">
                            <div class="kd-feature-icon">
                                <span class="icon pe-7s-edit"></span>
                            </div>
                            <div class="kd-feature-title">Easy Setup</div>
                            <div class="kd-feature-text">We make our products easy to setup and customize.</div>
                        </div>
                        <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-dark.svg');"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kd-feature kd-feature-2">
                        <div class="kd-feature-cont">
                            <div class="kd-feature-icon">
                                <span class="icon pe-7s-paint-bucket"></span>
                            </div>
                            <div class="kd-feature-title">Perfect Design</div>
                            <div class="kd-feature-text">Choose our solutions and your website will be in a trend always.</div>
                        </div>
                        <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-dark.svg');"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kd-feature kd-feature-2">
                        <div class="kd-feature-cont">
                            <div class="kd-feature-icon">
                                <span class="icon pe-7s-timer"></span>
                            </div>
                            <div class="kd-feature-title">Lifetime Updates</div>
                            <div class="kd-feature-text">We improve our products after release and you will get it for free.</div>
                        </div>
                        <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-dark.svg');"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kd-feature kd-feature-2">
                        <div class="kd-feature-cont">
                            <div class="kd-feature-icon">
                                <span class="icon pe-7s-cloud-download"></span>
                            </div>
                            <div class="kd-feature-title">Freebies</div>
                            <div class="kd-feature-text">Not only paid products, but also freebies available.</div>
                        </div>
                        <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-dark.svg');"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kd-feature kd-feature-2">
                        <div class="kd-feature-cont">
                            <div class="kd-feature-icon">
                                <span class="icon pe-7s-portfolio"></span>
                            </div>
                            <div class="kd-feature-title">Clean Code</div>
                            <div class="kd-feature-text">All our products provided with best code quality and high performance.</div>
                        </div>
                        <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-dark.svg');"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kd-feature kd-feature-2">
                        <div class="kd-feature-cont">
                            <div class="kd-feature-icon">
                                <span class="icon pe-7s-headphones"></span>
                            </div>
                            <div class="kd-feature-title">Outstanding Support</div>
                            <div class="kd-feature-text">We provide fast and professional support through support system.</div>
                        </div>
                        <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-dark.svg');"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kd-box-1 bg-grey-6">
        <div class="container">
            <h2 class="text-center mb-60">Latest Products</h2>
            <div class="row vertical-gap">
                <?php
                require $_SERVER['DOCUMENT_ROOT'] . '/inc/featured-products.php';
                ?>
            </div>
            <div class="text-center mt-70">
                <a href="#" class="kd-btn kd-btn-lg">View Our Products</a>
            </div>
            <div class="kd-box-1">
                <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-light.svg');"></span>
            </div>
            <!--<h2 class="text-center mb-40">Reviews</h2>
                    <div class="kd-box">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="swiper-container kd-slider kd-slider-arrows kd-slider-reviews" data-swiper-speed="400" data-swiper-space="0" data-swiper-slides="6" data-swiper-arrows="true" data-swiper-arrows-clone="true" data-swiper-pagination-dynamic="true" data-swiper-breakpoints="true" data-swiper-loop="true" data-swiper-grabCursor="true">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="kd-swiper-slide">
                                                <div class="kd-review kd-block-decorated">
                                                    <div>
                                                        <div class="kd-review-title">Matthew Stewart</div>
                                                        <div class="kd-review-subtitle">Themeforest User</div>
                                                        <div class="kd-review-text lead">Theme is brilliantly designed. I will see how much is customizable and leave another review when planned is done on the theme. Good job guys.</div>
                                                    </div>
                                                    <div class="kd-review-rating">
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="kd-swiper-slide">
                                                <div class="kd-review kd-block-decorated">
                                                    <div>
                                                        <div class="kd-review-title">Paula Daniel</div>
                                                        <div class="kd-review-subtitle">Themeforest User</div>
                                                        <div class="kd-review-text lead">Quality template. Built-in design features made it applicable not only to game portals but also to a business/industrial sites.</div>
                                                    </div>
                                                    <div class="kd-review-rating">
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="kd-swiper-slide">
                                                <div class="kd-review kd-block-decorated">
                                                    <div>
                                                        <div class="kd-review-title">Robert Chase</div>
                                                        <div class="kd-review-subtitle">Themeforest User</div>
                                                        <div class="kd-review-text lead">It took a little while but I was finally able to get the demo data up and was able to get a handle on this theme. I am impressed with the features/functionality and with the responsiveness of the support group.</div>
                                                    </div>
                                                    <div class="kd-review-rating">
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="kd-swiper-slide">
                                                <div class="kd-review kd-block-decorated">
                                                    <div>
                                                        <div class="kd-review-title">Oliver Harris</div>
                                                        <div class="kd-review-subtitle">Themeforest User</div>
                                                        <div class="kd-review-text lead">Thanks, so much I love it... So far, I&#39;ve never seen a theme like it...I want to thank you for your quick response as well... thanks</div>
                                                    </div>
                                                    <div class="kd-review-rating">
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="kd-swiper-slide">
                                                <div class="kd-review kd-block-decorated">
                                                    <div>
                                                        <div class="kd-review-title">Matthew Stewart</div>
                                                        <div class="kd-review-subtitle">Themeforest User</div>
                                                        <div class="kd-review-text lead">Theme is brilliantly designed. I will see how much is customizable and leave another review when planned is done on the theme. Good job guys.</div>
                                                    </div>
                                                    <div class="kd-review-rating">
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="kd-swiper-slide">
                                                <div class="kd-review kd-block-decorated">
                                                    <div>
                                                        <div class="kd-review-title">Paula Daniel</div>
                                                        <div class="kd-review-subtitle">Themeforest User</div>
                                                        <div class="kd-review-text lead">Quality template. Built-in design features made it applicable not only to game portals but also to a business/industrial sites.</div>
                                                    </div>
                                                    <div class="kd-review-rating">
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-prev"><span class="icon pe-7s-angle-left"></span></div>
                                    <div class="swiper-button-next"><span class="icon pe-7s-angle-right"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="kd-slider-arrows-clone kd-slider-arrows-reviews"></div>
                    </div>-->
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-lg-6 bg-dark-1">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="container">
                        <div class="kd-box-1">
                            <h2 class="text-white">Latest Products</h2>
                            <p class="text-2">Join our newsletter to receive news, updates, new products and freebies in your inbox.</p>
                            <a data-fancybox data-touch="false" data-src="#subscribe" href="javascript:;" class="kd-btn kd-btn-lg kd-btn-transparent">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 bg-main-1">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="container">
                        <div class="kd-box-1">
                            <h2 class="text-white">Visit our Support Desk</h2>
                            <p class="text-white op-8">Need some help? Head over to our support center to quickly answer your questions.</p>
                            <a href="help-center.php" class="kd-btn kd-btn-lg kd-btn-transparent">Get support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>