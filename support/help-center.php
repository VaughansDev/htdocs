<?php
    require $_SERVER['DOCUMENT_ROOT'].'/inc/header.php';
?>
        <div class="kd-main">
            <header class="kd-header kd-box-1">
                <div class="container">
                    <div class="bg-image bg-image-parallax">
                        <img src="assets/images/bg-header-4.png" class="jarallax-img" alt="">
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
                $active = 'support';
                require $_SERVER['DOCUMENT_ROOT'].'/inc/support-nav.php';
            ?>
            <div class="kd-separator"></div>
            <div class="kd-box-5 bg-grey-6">
                <div class="container">
                    <div class="row justify-content-center vertical-gap">
                        <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                            <div class="kd-feature kd-feature-3 kd-feature-color-1 kd-block-decorated">
                                <div class="kd-feature-icon">
                                    <span class="icon pe-7s-copy-file"></span>
                                </div>
                                <div class="kd-feature-cont">
                                    <div class="kd-feature-title"><a href="documentations.php">Documentations</a></div>
                                    <div class="kd-feature-text">Phasellus interdum est diam, eu varius odio tincidunt eget ultrices et</div>
                                    <a href="documentations.php" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                            <div class="kd-feature kd-feature-3 kd-feature-color-2 kd-block-decorated">
                                <div class="kd-feature-icon">
                                    <span class="icon pe-7s-notebook"></span>
                                </div>
                                <div class="kd-feature-cont">
                                    <div class="kd-feature-title"><a href="articles.php">Knowledge Base</a></div>
                                    <div class="kd-feature-text">Aliquam id nisi sit amet massa mollis lobortis interdum felis integer at arcu mattis</div>
                                    <a href="articles.php" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                            <div class="kd-feature kd-feature-3 kd-feature-color-3 kd-block-decorated">
                                <div class="kd-feature-icon">
                                    <span class="icon pe-7s-chat"></span>
                                </div>
                                <div class="kd-feature-cont">
                                    <div class="kd-feature-title"><a href="forum.php">Forums</a></div>
                                    <div class="kd-feature-text">Sed eget nibh justo euismod maximus et vel nisl pellentesque suscipit nisi</div>
                                    <a href="forum.php" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                            <div class="kd-feature kd-feature-3 kd-feature-color-4 kd-block-decorated">
                                <div class="kd-feature-icon">
                                    <span class="icon pe-7s-ticket"></span>
                                </div>
                                <div class="kd-feature-cont">
                                    <div class="kd-feature-title"><a href="ticket.php">Ticket System</a></div>
                                    <div class="kd-feature-text">Vivamus sceleriue libero velit blandit, hendrerit nisl at,dapibus sollicitudin</div>
                                    <a href="ticket.php" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kd-separator"></div>
            <div class="kd-box-5 pb-100">
                <div class="container mt-4 mnb-7">
                    <div class="row align-items-center vertical-gap mnt-30 sm-gap mb-50">
                        <h2 class="col-auto h4 mb-0 mt-0">Popular Articles</h2>
                        <div class="col pl-30 pr-30 d-none d-sm-block">
                            <div class="kd-separator"></div>
                        </div>
                        <div class="col-auto kd-slider-arrows-clone"></div>
                    </div>
                    <!-- START: Slider Articles

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
                                <div class="kd-article kd-article-list">
                                    <h4 class="h6 mt-0">Quantial</h4>
                                    <ul class="kd-list">
                                        <li><a href="single-article.php">Make menu dropdown working without JavaScript</a></li>
                                        <li><a href="single-article.php">Google Analytics</a></li>
                                        <li><a href="single-article.php">How to manually import Demo data (if you faced with problems in one-click demo import)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="kd-article kd-article-list">
                                    <h4 class="h6 mt-0">Sensific</h4>
                                    <ul class="kd-list">
                                        <li><a href="single-article.php">WordPress Themes FAQ</a></li>
                                        <li><a href="single-article.php">Change navbar background color</a></li>
                                        <li><a href="single-article.php">Change images and banners overlay color</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="kd-article kd-article-list">
                                    <h4 class="h6 mt-0">Minist</h4>
                                    <ul class="kd-list">
                                        <li><a href="single-article.php">Add top menu link inside dropdown on mobile devices</a></li>
                                        <li><a href="single-article.php">Google Map API Warning (NoApiKeys)</a></li>
                                        <li><a href="single-article.php">Make dropdown items links working</a></li>
                                    </ul>
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