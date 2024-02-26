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
    <div class="kd-box bg-white">
        <div class="container">
            <ul class="kd-links text-center">
                <li <?php if (!isset($_GET['status'])) {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['ticketsurl']; ?>/my-tickets.php">All Tickets</a></li>
                <li <?php if ($_GET['status'] == 'open') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['ticketsurl']; ?>/my-tickets.php?status=open">Open Tickets</a></li>
                <li <?php if ($_GET['status'] == 'closed') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['ticketsurl']; ?>/my-tickets.php?status=closed">Closed Tickets</a></li>
                <li <?php if ($_GET['status'] == 'onhold') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['ticketsurl']; ?>/my-tickets.php?status=onhold">On Hold Tickets</a></li>
                <li <?php if ($_GET['status'] == 'pending') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['ticketsurl']; ?>/my-tickets.php?status=pending">Pending Tickets</a></li>
            </ul>
        </div>
    </div>
    <div class="kd-separator"></div>
    <div class="kd-box-5 bg-grey-6">
        <div class="container">
            <div class="row align-items-center justify-content-between vertical-gap mnt-30 sm-gap mb-50">
                <div class="col-auto">
                    <h2 class="h4 mb-0 mt-0">Your Tickets</h2>
                </div>
                <div class="col pl-30 pr-30 d-none d-sm-block">
                    <div class="kd-separator ml-10 mr-10"></div>
                </div>
                <div class="col-auto">
                    <a href="ticket-submit.php" class="kd-btn kd-btn-md">Submit a ticket</a>
                </div>
            </div>
            <a href="single-ticket.php" class="kd-ticket-item kd-ticket-new kd-ticket-open kd-block-decorated">
                <span class="kd-ticket-img">
                    <img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/avatar-1.png" alt="">
                </span>
                <span class="kd-ticket-cont">
                    <span class="kd-ticket-name"> John Leonard </span>
                    <span class="kd-ticket-title h5"> Need help with customization. Some options are not appearing... </span>
                    <ul class="kd-ticket-info">
                        <li>Update: 5 Nov 2018</li>
                        <li>Product: Quantial</li>
                        <li>Comments: 2</li>
                        <li class="kd-ticket-new">New</li>
                    </ul>
                </span>
                <span class="kd-ticket-status"> Open </span>
            </a>
            <a href="single-ticket.php" class="kd-ticket-item kd-ticket-closed kd-block-decorated">
                <span class="kd-ticket-img">
                    <img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/avatar-default.svg" alt="">
                </span>
                <span class="kd-ticket-cont">
                    <span class="kd-ticket-name"> Bruno Rice </span>
                    <span class="kd-ticket-title h5"> Theme not updating in downloads </span>
                    <ul class="kd-ticket-info">
                        <li>Update: 4 Nov 2018</li>
                        <li>Product: Sensific</li>
                        <li>Comments: 11</li>
                    </ul>
                </span>
                <span class="kd-ticket-status"> Closed </span>
            </a>
        </div>
    </div>
    <div class="kd-separator"></div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>