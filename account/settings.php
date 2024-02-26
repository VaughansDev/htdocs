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
                <h1 class="h4 mb-10 text-white text-center">Account Settings</h1>
                <!-- START: Breadcrumbs -->
                <ul class="kd-breadcrumbs text-center">
                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>">My Account</a></li>
                    <li>Account Settings</li>
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
                        <form action="<?php echo $_SERVER['DOCUMENT_ROOT'] . '/inc/accountsettings.php'; ?>" method="post" class="kd-form">
                            <div class="kd-box-content">
                                <div class="kd-form-group">
                                    <label for="firstname" class="mnt-7">First Name</label>
                                    <input type="text" class="form-control form-control-style-2" id="firstname" name="firstname" value="<?php echo $_SESSION['firstname']; ?>" readonly>
                                </div>
                                <div class="kd-form-group">
                                    <label for="lastname" class="mnt-7">Last Name</label>
                                    <input type="text" class="form-control form-control-style-2" id="lastname" name="lastname" value="<?php echo $_SESSION['lastname']; ?>" readonly>
                                </div>
                                <div class="kd-form-group">
                                    <label for="username" class="mnt-7">Display Name</label>
                                    <input type="text" class="form-control form-control-style-2" id="username" name="username" value="<?php echo $_SESSION['username']; ?>" readonly>
                                </div>
                                <div class="kd-form-group">
                                    <label for="email-address" class="mnt-7">Primary Email Address</label>
                                    <input type="email" aria-describedby="emailHelp" class="form-control form-control-style-2" id="email-address" name="email" value="<?php echo $_SESSION['email']; ?>">
                                </div>
                                <div class="kd-form-group">
                                    <label for="line-one" class="mnt-7">Address Line 1</label>
                                    <input type="text" class="form-control form-control-style-2" id="line-one" name="addressline1" <?php if (isset($_SESSION['addressline1'])) { ?> value="<?php echo $_SESSION['addressline1']; ?>" <?php } else { ?> placeholder="Enter Your Address" <?php } ?>>
                                </div>
                                <div class="kd-form-group">
                                    <label for="line-two" class="mnt-7">Address Line 2 (optional)</label>
                                    <input type="text" class="form-control form-control-style-2" id="line-two" name="addressline2" <?php if (isset($_SESSION['addressline2'])) { ?> value="<?php echo $_SESSION['addressline2']; ?>" <?php } else { ?> placeholder="Apt / Suite / PO Box" <?php } ?>>
                                </div>
                                <div class="kd-form-group">
                                    <label for="country" class="mnt-7">Country</label>
                                    <input type="text" class="form-control form-control-style-2" id="country" name="country" <?php if (isset($_SESSION['country'])) { ?> value="<?php echo $_SESSION['country']; ?>" <?php } else { ?> placeholder="Enter Country" <?php } ?>>
                                </div>
                                <div class="kd-form-group">
                                    <label for="state" class="mnt-7">State / Province</label>
                                    <input type="text" class="form-control form-control-style-2" id="state" name="state" <?php if (isset($_SESSION['state'])) { ?> value="<?php echo $_SESSION['state']; ?>" <?php } else { ?> placeholder="Enter State / Province" <?php } ?>>
                                </div>
                                <div class="kd-form-group">
                                    <label for="city" class="mnt-7">City / Town</label>
                                    <input type="text" class="form-control form-control-style-2" id="city" name="city" <?php if (isset($_SESSION['city'])) { ?> value="<?php echo $_SESSION['city']; ?>" <?php } else { ?> placeholder="Enter City Name" <?php } ?>>
                                </div>
                                <div class="kd-form-group">
                                    <label for="zip" class="mnt-7">ZIP / Postal Code</label>
                                    <input type="text" class="form-control form-control-style-2" id="zip" name="zip" <?php if (isset($_SESSION['zip'])) { ?> value="<?php echo $_SESSION['zip']; ?>" <?php } else { ?> placeholder="Enter ZIP / Postal Code" <?php } ?>>
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
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>