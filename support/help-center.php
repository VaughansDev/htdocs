<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
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
    $active = 'support';
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/support-nav.php';
    ?>
    <div class="kd-separator"></div>
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
    <div class="kd-separator"></div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>