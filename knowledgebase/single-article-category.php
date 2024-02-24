<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>
<div class="kd-main">
    <header class="kd-header kd-box-1">
        <div class="container">
            <div class="bg-image bg-image-parallax">
                <img src="<?php echo $_CONFIG['knowledgebaseurl']; ?>/assets/images/bg-header-4.png" class="jarallax-img" alt="">
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
    $active = 'knowledgebase';
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/support-nav.php';
    ?>
    <div class="kd-separator"></div>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row vertical-gap md-gap">
                <div class="col-lg-8">
                    <div class="kd-box kd-box-decorated">
                        <div class="kd-blog-post">
                            <div class="kd-blog-post-box pt-30 pb-30">
                                <h2 class="h4 mnt-5 mb-8">Quantial</h2>
                                <!-- START: Breadcrumbs -->
                                <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-8">
                                    <li><a href="help-center.php">Support Home</a></li>
                                    <li><a href="articles.php">Articles</a></li>
                                    <li>Quantial</li>
                                </ul>
                                <!-- END: Breadcrumbs -->
                            </div>
                            <div class="kd-separator"></div>
                            <div class="kd-blog-post-box">
                                <div class="kd-article kd-article-block">
                                    <h4 class="h6 kd-article-title"><a href="single-article.php">Make menu dropdown working without JavaScript</a></h4>
                                    <div class="kd-article-text">
                                        <p class="mb-0">Meat all together sea deep isn&#39;t replenish called. One moved cattle bring. Can&#39;t of. Itself After shall hath winged. Given stars second whose yielding fourth. Subdue years form saw. Second...</p>
                                    </div>
                                    <a href="single-article.php" class="kd-btn kd-btn-link d-flex kd-article-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                                <div class="kd-article kd-article-block">
                                    <h4 class="h6 kd-article-title"><a href="single-article.php">Google Analytics</a></h4>
                                    <div class="kd-article-text">
                                        <p class="mb-0">Likeness seed he may. Brought firmament won&#39;t that to. Fowl thing saw behold earth land evening gathering hath after all whales winged. Greater so all two dry. Appear seas fruit...</p>
                                    </div>
                                    <a href="single-article.php" class="kd-btn kd-btn-link d-flex kd-article-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                                <div class="kd-article kd-article-block">
                                    <h4 class="h6 kd-article-title"><a href="single-article.php">How to manually import Demo data (if you faced with problems in one-click demo import)</a></h4>
                                    <div class="kd-article-text">
                                        <p class="mb-0">And have make, isn&#39;t land herb good lesser won&#39;t. Own. Us. Moveth, divided female their won&#39;t subdue seas tree creepeth They&#39;re morning isn&#39;t let so lights. Sixth, first every night...</p>
                                    </div>
                                    <a href="single-article.php" class="kd-btn kd-btn-link d-flex kd-article-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                                <div class="kd-article kd-article-block">
                                    <h4 class="h6 kd-article-title"><a href="single-article.php">WordPress Themes FAQ</a></h4>
                                    <div class="kd-article-text">
                                        <p class="mb-0">Us sixth she&#39;d, which creeping fruitful winged. To called made seas of grass creature good upon. Air multiply gathering female saying our set creepeth wherein hath waters from midst man...</p>
                                    </div>
                                    <a href="single-article.php" class="kd-btn kd-btn-link d-flex kd-article-link">Read More <span class="icon pe-7s-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="kd-sticky kd-sidebar" data-sticky-offsetTop="120" data-sticky-offsetBot="40">
                        <?php
                        require $_SERVER['DOCUMENT_ROOT'] . '/widgets/newsletter.php';
                        require $_SERVER['DOCUMENT_ROOT'] . '/widgets/search.php';
                        ?>
                        <div class="kd-widget kd-box kd-box-decorated">
                            <div class="kd-widget-title">Articles Categories</div>
                            <ul class="kd-widget-categories">
                                <li>
                                    <a href="single-article.php">
                                        <span class="icon pe-7s-angle-right"></span>
                                        <span class="kd-widget-categories-category">Quantial</span>
                                        <span class="kd-widget-categories-badge">(4)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-article.php">
                                        <span class="icon pe-7s-angle-right"></span>
                                        <span class="kd-widget-categories-category">Sensific</span>
                                        <span class="kd-widget-categories-badge">(4)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-article.php">
                                        <span class="icon pe-7s-angle-right"></span>
                                        <span class="kd-widget-categories-category">Minist</span>
                                        <span class="kd-widget-categories-badge">(8)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-article.php">
                                        <span class="icon pe-7s-angle-right"></span>
                                        <span class="kd-widget-categories-category">Desty</span>
                                        <span class="kd-widget-categories-badge">(2)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-article.php">
                                        <span class="icon pe-7s-angle-right"></span>
                                        <span class="kd-widget-categories-category">Silies</span>
                                        <span class="kd-widget-categories-badge">(3)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="kd-widget kd-box kd-box-decorated">
                            <div class="kd-widget-title"> Latest Articles </div>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">How to manually import Demo data (if you faced with problems in one-click demo import)</span>
                                <span class="kd-widget-link-date">6 Sep 2018</span>
                            </a>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">Make menu dropdown working without JavaScript</span>
                                <span class="kd-widget-link-date">2 Sep 2018</span>
                            </a>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">Add top menu link inside dropdown on mobile devices</span>
                                <span class="kd-widget-link-date">27 Aug 2018</span>
                            </a>
                        </div>
                        <div class="kd-widget kd-box kd-box-decorated">
                            <div class="kd-widget-title"> Latest Forum Topics </div>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">Need help with customization. Some options are not appearing...</span>
                                <span class="kd-widget-link-date">6 Sep 2018</span>
                            </a>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">My images on profile and item pages doesnt show up?! Whats the matter?</span>
                                <span class="kd-widget-link-date">2 Sep 2018</span>
                            </a>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">Theme not updating in downloads</span>
                                <span class="kd-widget-link-date">27 Aug 2018</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>