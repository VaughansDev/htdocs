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
                <h1 class="h4 mb-10 text-white text-center">My Invoices</h1>
            </div>
        </div>
    </header>
    <div class="kd-box bg-white">
        <div class="container">
            <ul class="kd-links text-center">
                <li <?php if (!isset($_GET['status'])) {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['accounturl']; ?>/my-invoices.php">All Invoices</a></li>
                <li <?php if ($_GET['status'] == 'paid') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['accounturl']; ?>/my-invoices.php?status=paid">Paid Invoices</a></li>
                <li <?php if ($_GET['status'] == 'unpaid') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['accounturl']; ?>/my-invoices.php?status=unpaid">Unpaid Invoices</a></li>
                <li <?php if ($_GET['status'] == 'due') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['accounturl']; ?>/my-invoices.php?status=due">Due Invoices</a></li>
            </ul>
        </div>
    </div>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <?php
                    require $_SERVER['DOCUMENT_ROOT'] . '/inc/myinvoices.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>