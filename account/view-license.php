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
                <li><a href="<?php echo $_CONFIG['accounturl']; ?>">My Account</a></li>
                <li><a href="<?php echo $_CONFIG['accounturl']; ?>/licenses.php">My Licenses</a></li>
                <li><a href="<?php echo $_CONFIG['accounturl']; ?>/my-invoices.php">My Invoices</a></li>
                <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>">My Tickets</a></li>
            </ul>
        </div>
    </div>
    <div class="kd-separator"></div>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row vertical-gap md-gap">
                <div class="col-lg-12">
                    <div class="kd-box kd-box-decorated">
                        <?php
                        require $_SERVER['DOCUMENT_ROOT'] . '/account/inc/viewlicense.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>