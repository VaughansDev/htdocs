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
                    <p class="mb-0">We a team of gamers and developers who like to push the limits and create beautiful and functional web applications for gaming communities.</p>
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
                                <i class="fa-solid fa-pen-ruler"></i>
                            </div>
                            <div class="kd-feature-title">Modern Design</div>
                            <div class="kd-feature-text">Beautiful and Modern Design in all of our Apps.</div>
                        </div>
                        <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-dark.svg');"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kd-feature kd-feature-2">
                        <div class="kd-feature-cont">
                            <div class="kd-feature-icon">
                                <i class="fa-solid fa-gauge-high"></i>
                            </div>
                            <div class="kd-feature-title">Beautiful UIs</div>
                            <div class="kd-feature-text">All of our Web Applications use Clean and Modern UIs.</div>
                        </div>
                        <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-dark.svg');"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kd-feature kd-feature-2">
                        <div class="kd-feature-cont">
                            <div class="kd-feature-icon">
                                <i class="fa-solid fa-link"></i>
                            </div>
                            <div class="kd-feature-title">Fully Discord Integrated</div>
                            <div class="kd-feature-text">Webhooks Link our systems to your Discord server.</div>
                        </div>
                        <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-dark.svg');"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kd-feature kd-feature-2">
                        <div class="kd-feature-cont">
                            <div class="kd-feature-icon">
                                <i class="fa-solid fa-ticket"></i>
                            </div>
                            <div class="kd-feature-title">Dedicated Support</div>
                            <div class="kd-feature-text">Brfore Buying, During Setup or Found a Bug. We're Here.</div>
                        </div>
                        <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-dark.svg');"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kd-feature kd-feature-2">
                        <div class="kd-feature-cont">
                            <div class="kd-feature-icon">
                                <i class="fa-solid fa-server"></i>
                            </div>
                            <div class="kd-feature-title">Cloud Hosting</div>
                            <div class="kd-feature-text">Don't want to manage your system? We can for you.</div>
                        </div>
                        <span class="kd-decorated" style="background-image: url('<?php echo $_CONFIG['domain']; ?>/assets/images/decorated-pattern-dark.svg');"></span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kd-feature kd-feature-2">
                        <div class="kd-feature-cont">
                            <div class="kd-feature-icon">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>
                            <div class="kd-feature-title">Reseller Program</div>
                            <div class="kd-feature-text">Take advantage of discounted licenses the more you sell.</div>
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
                <a href="<?php echo $_CONFIG['storeurl']; ?>" class="kd-btn kd-btn-lg">View Our Products</a>
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
                            <h2 class="text-white">Stay in the Loop</h2>
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
                            <h2 class="text-white">Visit our Support Center</h2>
                            <p class="text-white op-8">Need some help? Head over to our support center to quickly answer your questions.</p>
                            <a href="<?php echo $_CONFIG['supporturl']; ?>" class="kd-btn kd-btn-lg kd-btn-transparent">Get support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>