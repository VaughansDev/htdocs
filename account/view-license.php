<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != TRUE) { ?>
    <script>
        window.location.href = "<?php echo $_CONFIG['accounturl']; ?>/login.php";
    </script>
<?php } ?>
<div class="kd-main">
    <?php
    $active = 'tickets';
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/support-nav.php';
    ?>
    <div class="kd-separator"></div>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row vertical-gap md-gap">
                <div class="col-lg-12">
                    <div class="kd-box kd-box-decorated">
                        <div class="kd-blog-post kd-ticket kd-ticket-open">
                            <div class="kd-blog-post-box pt-30 pb-30">
                                <h2 class="h4 mnt-5 mb-9 kd-ticket-title">License: <?php echo ''; ?></h2>
                                <!-- START: Breadcrumbs -->
                                <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
                                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>">My Account</a></li>
                                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>/licenses.php">My Licenses</a></li>
                                    <li>License: <?php echo $row['product'] . ' - ' . $row['license_type']; ?></li>
                                </ul>
                                <!-- END: Breadcrumbs -->
                                <span class="kd-ticket-status"></span>
                            </div>
                            <div class="kd-separator"></div>
                            <div style="background-color: #fafafa;">
                                <ul class="kd-blog-post-info kd-blog-post-info-style-2 mb-0 mt-0">
                                    <li><span><span class="kd-blog-post-info-title">Ticket Id</span>#1801</span></li>
                                    <li><span><span class="kd-blog-post-info-title">Status</span>Open</span></li>
                                    <li><span><span class="kd-blog-post-info-title">Date</span>1 Mar 2018, 9:17 am</span></li>
                                    <li><span><span class="kd-blog-post-info-title">Product</span>Quantial</span></li>
                                    <li><span><span class="kd-blog-post-info-title">Product</span>Quantial</span></li>
                                    <li><span><span class="kd-blog-post-info-title">Product</span>Quantial</span></li>
                                </ul>
                                <ul class="kd-blog-post-info kd-blog-post-info-style-2 mb-0 mt-0">
                                    <li><span><span class="kd-blog-post-info-title">Date</span>1 Mar 2018, 9:17 am</span></li>
                                    <li><span><span class="kd-blog-post-info-title">Date</span>1 Mar 2018, 9:17 am</span></li>
                                    <li><span><span class="kd-blog-post-info-title">Date</span>1 Mar 2018, 9:17 am</span></li>
                                </ul>
                            </div>
                            <div class="kd-separator"></div>
                            <div class="kd-comment kd-ticket-comment">
                                <div>
                                    <div class="kd-comment-img">
                                        <img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/avatar-1.png" alt="">
                                    </div>
                                    <div class="kd-comment-cont">
                                        <a href="#" class="kd-comment-name">John Leonard</a>
                                        <div class="kd-comment-date">12 Feb 2018 7:40 am</div>
                                        <div class="kd-comment-text">
                                            <p class="mb-0">Nullam ac dui et purus malesuada gravida id fermentum orci. In eu ipsum quis urna hendrerit condimentum vitae a mauris. In congue turpis purus, vitae tempus ante id. Donec orci arcu, sagittis ut finibus vitae.</p>
                                        </div>
                                        <a href="#" class="kd-comment-file kd-comment-file-jpg">
                                            <span class="kd-comment-file-img"><img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/icon-jpg.svg" alt="" width="36"></span>
                                            <span class="kd-comment-file-name">example-file.jpg</span>
                                            <span class="kd-comment-file-size">4.8 MB</span>
                                            <span class="kd-comment-file-icon"><span class="icon pe-7s-download"></span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>