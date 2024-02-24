<?php
    require $_SERVER['DOCUMENT_ROOT'].'/inc/header.php';
?>
        <div class="kd-main">
            <header class="kd-header kd-box-1">
                <div class="container">
                    <div class="bg-image bg-image-parallax">
                        <img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/bg-header-4.png" class="jarallax-img" alt="">
                        <div style="background-color: rgba(27, 27, 27, .8);"></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <h1 class="h2 mb-30 text-white text-center">How can we help you?</h1>
                            <form action="#" class="kd-form kd-form-group-inputs">
                                <input type="text" name="" value="" class="form-control" placeholder="Keyword search...">
                                <button class="kd-btn kd-btn-lg">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <?php
                $active = 'tickets';
                require $_SERVER['DOCUMENT_ROOT'].'/inc/support-nav.php';
            ?>
            <div class="kd-separator"></div>
            <div class="kd-box-5 bg-grey-6">
                <div class="container">
                    <div class="row align-items-center justify-content-between vertical-gap mnt-30 sm-gap mb-50">
                        <div class="col-auto">
                            <h2 class="h4 mb-0 mt-0">Your Tickets</h2>
                        </div>
                        <div class="col pl-30 pr-30 d-none d-sm-block">
                            <div class="kd-separator ml-10 mr-10"></div>
                        </div>
                        <div class="col-auto">
                            <a href="ticket-submit.php" class="kd-btn kd-btn-md">Submit a ticket</a>
                        </div>
                    </div>
                    <a href="single-ticket.php" class="kd-ticket-item kd-ticket-new kd-ticket-open kd-block-decorated">
                        <span class="kd-ticket-img">
                            <img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/avatar-1.png" alt="">
                        </span>
                        <span class="kd-ticket-cont">
                            <span class="kd-ticket-name"> John Leonard </span>
                            <span class="kd-ticket-title h5"> Need help with customization. Some options are not appearing... </span>
                            <ul class="kd-ticket-info">
                                <li>Update: 5 Nov 2018</li>
                                <li>Product: Quantial</li>
                                <li>Comments: 2</li>
                                <li class="kd-ticket-new">New</li>
                            </ul>
                        </span>
                        <span class="kd-ticket-status"> Open </span>
                    </a>
                    <a href="single-ticket.php" class="kd-ticket-item kd-ticket-closed kd-block-decorated">
                        <span class="kd-ticket-img">
                            <img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/avatar-default.svg" alt="">
                        </span>
                        <span class="kd-ticket-cont">
                            <span class="kd-ticket-name"> Bruno Rice </span>
                            <span class="kd-ticket-title h5"> Theme not updating in downloads </span>
                            <ul class="kd-ticket-info">
                                <li>Update: 4 Nov 2018</li>
                                <li>Product: Sensific</li>
                                <li>Comments: 11</li>
                            </ul>
                        </span>
                        <span class="kd-ticket-status"> Closed </span>
                    </a>
                </div>
            </div>
            <div class="kd-separator"></div>
            <div class="kd-box-5 pb-100">
                <div class="container mt-4 mnb-7">
                    <div class="row align-items-center justify-content-between vertical-gap mnt-30 sm-gap mb-50">
                        <h2 class="col-auto h4 mb-0 mt-0">Featured Articles</h2>
                        <div class="col pl-30 pr-30 d-none d-sm-block">
                            <div class="kd-separator ml-10 mr-10"></div>
                        </div>
                        <div class="col-auto kd-slider-arrows-clone"></div>
                    </div>
                    <!-- START: Slider Ffeatured Articles

        Additional Classes:
        .kd-slider-arrows (clone arrows)

    Additional Attributes:
        data-swiper-speed                (numbers)
        data-swiper-space                (numbers)
        data-swiper-autoPlay             (numbers)
        data-swiper-slides               (numbers)
        data-swiper-slidesAuto           (true or false)
        data-swiper-arrows-clone         (true or false)
        data-swiper-grabCursor           (true or false)
        data-swiper-lazy                 (true or false)
        data-swiper-breakpoints          (true or false)
        data-swiper-arrows               (true or false)
        data-swiper-pagination           (true or false)
        data-swiper-pagination-dynamic   (true or false)
        data-swiper-pagination-scrollbar (true or false)
        data-swiper-autoHeight           (true or false)
        data-swiper-freeMode             (true or false)
        data-swiper-loop                 (true or false)

-->
                    <div class="swiper-container kd-slider kd-slider-arrows kd-slider-articles" data-swiper-speed="400" data-swiper-space="50" data-swiper-slides="3" data-swiper-breakpoints="true" data-swiper-arrows="true" data-swiper-arrows-clone="true" data-swiper-loop="true" data-swiper-autoHeight="true" data-swiper-grabCursor="true">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="kd-article kd-article-block">
                                    <h4 class="h6 kd-article-title"><a href="single-article.php">Make menu dropdown working without JavaScript</a></h4>
                                    <div class="kd-article-text">
                                        <p class="mb-0">Meat all together sea deep isn&#39;t replenish called. One moved cattle bring. Can&#39;t of. Itself After shall hath winged. Given stars second whose yielding fourth. Subdue years form saw. Second...</p>
                                    </div>
                                    <a href="single-article.php" class="kd-btn kd-btn-link d-flex kd-article-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="kd-article kd-article-block">
                                    <h4 class="h6 kd-article-title"><a href="single-article.php">Google Analytics</a></h4>
                                    <div class="kd-article-text">
                                        <p class="mb-0">Likeness seed he may. Brought firmament won&#39;t that to. Fowl thing saw behold earth land evening gathering hath after all whales winged. Greater so all two dry. Appear seas fruit...</p>
                                    </div>
                                    <a href="single-article.php" class="kd-btn kd-btn-link d-flex kd-article-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="kd-article kd-article-block">
                                    <h4 class="h6 kd-article-title"><a href="single-article.php">How to manually import Demo data (if you faced with problems in one-click demo import)</a></h4>
                                    <div class="kd-article-text">
                                        <p class="mb-0">And have make, isn&#39;t land herb good lesser won&#39;t. Own. Us. Moveth, divided female their won&#39;t subdue seas tree creepeth They&#39;re morning isn&#39;t let so lights. Sixth, first every night...</p>
                                    </div>
                                    <a href="single-article.php" class="kd-btn kd-btn-link d-flex kd-article-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="kd-article kd-article-block">
                                    <h4 class="h6 kd-article-title"><a href="single-article.php">WordPress Themes FAQ</a></h4>
                                    <div class="kd-article-text">
                                        <p class="mb-0">Us sixth she&#39;d, which creeping fruitful winged. To called made seas of grass creature good upon. Air multiply gathering female saying our set creepeth wherein hath waters from midst man...</p>
                                    </div>
                                    <a href="single-article.php" class="kd-btn kd-btn-link d-flex kd-article-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev"><span class="icon pe-7s-angle-left"></span></div>
                        <div class="swiper-button-next"><span class="icon pe-7s-angle-right"></span></div>
                    </div>
                </div>
            </div>
            <?php
    require $_SERVER['DOCUMENT_ROOT'].'/inc/footer.php';
?>