<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != TRUE) { ?>
    <script>
        window.location.href = "<?php echo $_CONFIG['accounturl']; ?>/login.php";
    </script>
<?php } ?>
<div class="kd-main">
    <header class="kd-header kd-box-5">
        <div class="container">
            <div class="bg-image bg-image-parallax">
                <img src="<?php echo $_CONFIG['accounturl']; ?>/assets/images/bg-header-5.png" class="jarallax-img" alt="">
                <div style="background-color: rgba(27, 27, 27, .8);"></div>
            </div>
            <div class="container mnb-8">
                <h1 class="h4 mb-10 text-white text-center">Account</h1>
                <!-- START: Breadcrumbs -->
                <ul class="kd-breadcrumbs text-center">
                    <li><a href="index-2.php">Home</a></li>
                    <li>Account</li>
                </ul>
                <!-- END: Breadcrumbs -->
            </div>
        </div>
    </header>
    <div class="kd-box-5 bg-grey-6">
        <div class="container">
            <div class="row justify-content-center vertical-gap">
                <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                    <div class="kd-feature kd-feature-3 kd-feature-color-1 kd-block-decorated">
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title"><a href="documentations.php">Documentations</a></div>
                            <div class="kd-feature-text">Phasellus interdum est diam, eu varius odio tincidunt eget ultrices et</div>
                            <a href="documentations.php" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                    <div class="kd-feature kd-feature-3 kd-feature-color-2 kd-block-decorated">
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-book-bookmark"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title"><a href="articles.php">Knowledge Base</a></div>
                            <div class="kd-feature-text">Aliquam id nisi sit amet massa mollis lobortis interdum felis integer at arcu</div>
                            <a href="articles.php" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                    <div class="kd-feature kd-feature-3 kd-feature-color-3 kd-block-decorated">
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title"><a href="forum.php">Forums</a></div>
                            <div class="kd-feature-text">Sed eget nibh justo euismod maximus et vel nisl pellentesque suscipit nisi</div>
                            <a href="forum.php" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                    <div class="kd-feature kd-feature-3 kd-feature-color-4 kd-block-decorated">
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-ticket"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title"><a href="ticket.php">Ticket System</a></div>
                            <div class="kd-feature-text">Vivamus sceleriue libero velit blandit, hendrerit nisl at,dapibus sollicitudin</div>
                            <a href="ticket.php" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>