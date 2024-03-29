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
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="kd-box kd-box-decorated">
                        <div class="kd-box-content">
                            <h2 class="h6 mb-6">Submit a Ticket</h2>
                            <!-- START: Breadcrumbs -->
                            <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
                                <li><a href="help-center.php">Support Home</a></li>
                                <li><a href="ticket.php">Ticket System</a></li>
                                <li>Submit Ticket</li>
                            </ul>
                            <!-- END: Breadcrumbs -->
                        </div>
                        <div class="kd-separator"></div>
                        <div class="kd-box-content">
                            <form action="#" class="kd-form">
                                <div class="kd-form-group">
                                    <label for="select-product" class="mnt-7">Select Product</label>
                                    <select class="form-control kd-select-ticket" name="" id="select-product">
                                        <option value="1" data-content='<img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/product-1-xs.png" alt=""> Quantial'></option>
                                        <option value="2" data-content='<img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/product-2-xs.png" alt=""> Sensific'></option>
                                        <option value="3" data-content='<img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/product-3-xs.png" alt=""> Minist'></option>
                                        <option value="4" data-content='<img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/product-4-xs.png" alt=""> Desty'></option>
                                        <option value="5" data-content='<img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/product-5-xs.png" alt=""> Silies'></option>
                                    </select>
                                </div>
                                <div class="kd-form-group">
                                    <a href="ticket-submit-2.php" class="kd-btn kd-btn-block kd-btn-xl kd-btn-envato d-flex align-items-center justify-content-center">
                                        <span class="fas fa-leaf mr-20"></span><span>Log in with Envato</span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>