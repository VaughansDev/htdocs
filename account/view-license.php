<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != TRUE) { ?>
    <script>
        window.location.href = "<?php echo $_CONFIG['accounturl']; ?>/login.php";
    </script>
<?php } ?>
<div class="kd-main">
    <div class="kd-box bg-white">
        <div class="container">
            <ul class="kd-links text-center">
                <li <?php if (!isset($_GET['status'])) {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['accounturl']; ?>">My Account</a></li>
                <li <?php if ($_GET['status'] == 'paid') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['accounturl']; ?>/licenses.php">My Licenses</a></li>
                <li <?php if ($_GET['status'] == 'unpaid') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['accounturl']; ?>/my-invoices.php">My Invoices</a></li>
                <li <?php if ($_GET['status'] == 'due') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['ticketsurl']; ?>">My Tickets</a></li>
            </ul>
        </div>
    </div>
    <div class="kd-separator"></div>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row vertical-gap md-gap">
                <div class="col-lg-12">
                    <div class="kd-box kd-box-decorated">
                        <div class="kd-blog-post kd-ticket kd-ticket-open">
                            <div class="kd-blog-post-box pt-30 pb-30">
                                <h2 class="h4 mnt-5 mb-9 kd-ticket-title">License: <?php echo $row['product'] . ' - ' . $row['license_type']; ?></h2>
                                <!-- START: Breadcrumbs -->
                                <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
                                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>">My Account</a></li>
                                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>/licenses.php">My Licenses</a></li>
                                    <li>License: <?php echo $row['product'] . ' - ' . $row['license_type']; ?></li>
                                </ul>
                                <!-- END: Breadcrumbs -->
                            </div>
                            <div class="kd-separator"></div>
                            <div style="background-color: #fafafa;">
                                <ul class="kd-blog-post-info kd-blog-post-info-style-2 mb-0 mt-0">
                                    <li><span><span class="kd-blog-post-info-title">License Id</span><?php echo $row['license_id']; ?></span></li>
                                    <li><span><span class="kd-blog-post-info-title">Product</span><?php echo $row['product']; ?></span></li>
                                    <li><span><span class="kd-blog-post-info-title">License Type</span><?php echo $row['license_type']; ?></span></li>
                                    <li><span><span class="kd-blog-post-info-title">Purchase Date</span><?php echo $row['purchasedate']; ?></span></li>
                                </ul>
                                <div class="kd-separator"></div>
                                <ul class="kd-blog-post-info kd-blog-post-info-style-2 mb-0 mt-0">
                                    <li><span><span class="kd-blog-post-info-title">License Key</span><?php echo $row['license_key']; ?></span></li>
                                    <li><span><span class="kd-blog-post-info-title">Domain</span><?php echo $row['hostname']; ?></span></li>
                                    <li><span><span class="kd-blog-post-info-title">IP Address</span><?php echo $row['ip_address']; ?></span></li>
                                </ul>
                            </div>
                            <div class="kd-separator"></div>
                            <div class="kd-comment kd-ticket-comment">
                                <div>
                                    <div class="kd-comment-img">
                                        <img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/avatar-1.png" alt="">
                                    </div>
                                    <div class="kd-comment-cont">
                                        <a href="#" class="kd-comment-name"><?php echo $row['product']; ?></a>
                                        <div class="kd-comment-date"><?php echo $row['license_type']; ?></div>
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