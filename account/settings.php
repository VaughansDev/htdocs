<?php
    require $_SERVER['DOCUMENT_ROOT'].'/inc/header.php';
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != TRUE) {
    header("location: " . $_CONFIG['accounturl'] . "/login.php");
}
?>
        <div class="kd-main">
            <header class="kd-header kd-box-5">
                <div class="container">
                    <div class="bg-image bg-image-parallax">
                        <img src="<?php echo $_CONFIG['accounturl']; ?>/assets/images/bg-header-5.png" class="jarallax-img" alt="">
                        <div style="background-color: rgba(27, 27, 27, .8);"></div>
                    </div>
                    <div class="container mnb-8">
                        <h1 class="h4 mb-10 text-white text-center">Settings</h1>
                        <!-- START: Breadcrumbs -->
                        <ul class="kd-breadcrumbs text-center">
                            <li><a href="index-2.php">Home</a></li>
                            <li>Settings</li>
                        </ul>
                        <!-- END: Breadcrumbs -->
                    </div>
                </div>
            </header>
            <div class="kd-box-5 pb-100 bg-grey-6">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="kd-box-decorated">
                                <div class="kd-box-content">
                                    <h2 class="h6 mnt-5 mnb-5">Profile Information</h2>
                                </div>
                                <div class="kd-separator"></div>
                                <form action="#" class="kd-form">
                                    <div class="kd-box-content">
                                        <div class="kd-form-group">
                                            <label for="first-name" class="mnt-7">First Name</label>
                                            <input type="text" class="form-control form-control-style-2" id="first-name" placeholder="Enter First Name">
                                        </div>
                                        <div class="kd-form-group">
                                            <label for="last-name" class="mnt-7">Last Name</label>
                                            <input type="text" class="form-control form-control-style-2" id="last-name" placeholder="Enter Last Name">
                                        </div>
                                        <div class="kd-form-group">
                                            <label for="display-name" class="mnt-7">Display Name</label>
                                            <input type="text" class="form-control form-control-style-2" id="display-name" placeholder="John Leonard">
                                        </div>
                                        <div class="kd-form-group">
                                            <label for="email-address" class="mnt-7">Primary Email Address</label>
                                            <input type="email" aria-describedby="emailHelp" class="form-control form-control-style-2" id="email-address" placeholder="Enter Email Address">
                                        </div>
                                        <div class="kd-form-group">
                                            <label for="line-one" class="mnt-7">Line 1</label>
                                            <input type="text" class="form-control form-control-style-2" id="line-one" placeholder="">
                                        </div>
                                        <div class="kd-form-group">
                                            <label for="line-two" class="mnt-7">Line 2</label>
                                            <input type="text" class="form-control form-control-style-2" id="line-two" placeholder="">
                                        </div>
                                        <div class="kd-form-group">
                                            <label for="city" class="mnt-7">City</label>
                                            <input type="text" class="form-control form-control-style-2" id="city" placeholder="Enter City Name">
                                        </div>
                                        <div class="kd-form-group">
                                            <label for="zip" class="mnt-7">ZIP / Postal Code</label>
                                            <input type="text" class="form-control form-control-style-2" id="zip" placeholder="Enter ZIP / Postal Code">
                                        </div>
                                        <div class="kd-form-group">
                                            <button class="kd-btn kd-btn-xl kd-btn-block">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
    require $_SERVER['DOCUMENT_ROOT'].'/inc/footer.php';
?>