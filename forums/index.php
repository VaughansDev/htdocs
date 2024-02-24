<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>
<div class="kd-main">
    <header class="kd-header kd-box-1">
        <div class="container">
            <div class="bg-image bg-image-parallax">
                <img src="<?php echo $_CONFIG['forumsurl']; ?>/assets/images/bg-header-4.png" class="jarallax-img" alt="">
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
    $active = 'forums';
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
                                <h2 class="h4 mnt-5 mb-9">Forums</h2>
                                <!-- START: Breadcrumbs -->
                                <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
                                    <li><a href="help-center.php">Support Home</a></li>
                                    <li>Forums</li>
                                </ul>
                                <!-- END: Breadcrumbs -->
                            </div>
                            <div class="table-responsive">
                                <table class="kd-table kd-table-default">
                                    <thead>
                                        <tr>
                                            <th scope="col">Forums</th>
                                            <th scope="col">Topics</th>
                                            <th scope="col">Posts</th>
                                            <th scope="col">Last Post</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <a href="topics.php" class="kd-table-default-title">Design with pleasure</a>
                                                <p class="mb-0">Sodales pharetra condimentum. Curabitur hendrerit odio, ad libero tempus dis duis suspendisse euismod.</p>
                                            </th>
                                            <td>45</td>
                                            <td>367</td>
                                            <td class="kd-table-lastPost">
                                                <div class="kd-table-default-info">
                                                    <p class="mb-0">by <a href="#">Joseph Harper</a><span class="dib">24 Feb 2018,</span> <span class="dib">09:00 am</span></p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <a href="topics.php" class="kd-table-default-title">Web Design Jobs & Developer Jobs</a>
                                                <p class="mb-0">Mattis nonummy massa aliquam ad pretium. Ipsum mi litora penatibus.</p>
                                            </th>
                                            <td>12</td>
                                            <td>206</td>
                                            <td class="kd-table-lastPost">
                                                <div class="kd-table-default-info">
                                                    <p class="mb-0">by <a href="#">Paul Shaw</a><span class="dib">23 Feb 2018,</span> <span class="dib">11:02 am</span></p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <a href="topics.php" class="kd-table-default-title">Group Testing</a>
                                                <p class="mb-0">Testing.</p>
                                            </th>
                                            <td>05</td>
                                            <td>98</td>
                                            <td class="kd-table-lastPost">
                                                <div class="kd-table-default-info">
                                                    <p class="mb-0">by <a href="#">Gramziu</a><span class="dib">22 Feb 2018,</span> <span class="dib">10:24 am</span></p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <a href="topics.php" class="kd-table-default-title">Upcomming Features</a>
                                                <p class="mb-0">Vel dui sapien condimentum sodales pretium nostra parturient. Pulvinar odio.</p>
                                            </th>
                                            <td>91</td>
                                            <td>614</td>
                                            <td class="kd-table-lastPost">
                                                <div class="kd-table-default-info">
                                                    <p class="mb-0">by <a href="#">Mary Cain</a><span class="dib">20 Feb 2018,</span> <span class="dib">10:42 am</span></p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <a href="topics.php" class="kd-table-default-title">Web Designer Forum News</a>
                                                <p class="mb-0">Iaculis libero neque. Sociosqu pretium nisi blandit consequat posuere leo.</p>
                                            </th>
                                            <td>08</td>
                                            <td>37</td>
                                            <td class="kd-table-lastPost">
                                                <div class="kd-table-default-info">
                                                    <p class="mb-0">by <a href="#">Robert Holmes</a><span class="dib">19 Feb 2018,</span> <span class="dib">8:59 am</span></p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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