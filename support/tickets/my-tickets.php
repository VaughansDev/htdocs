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
                <li <?php if ($_GET['status'] == 'OPEN') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['ticketsurl']; ?>/my-tickets.php?status=OPEN">Open</a></li>
                <li <?php if ($_GET['status'] == 'CLOSED') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['ticketsurl']; ?>/my-tickets.php?status=CLOSED">Closed</a></li>
                <li <?php if ($_GET['status'] == 'ONHOLD') {
                        echo 'class="active"';
                    } ?>><a href="<?php echo $_CONFIG['ticketsurl']; ?>/my-tickets.php?status=ONHOLD">On Hold</a></li>
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
                    <a href="<?php echo $_CONFIG['ticketsurl']; ?>new-ticket.php" class="kd-btn kd-btn-md">Submit a ticket</a>
                </div>
            </div>
            <?php
            require $_SERVER['DOCUMENT_ROOT'] . '/inc/mytickets.php';
            ?>
        </div>
    </div>
    <div class="kd-separator"></div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>