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
                <h1 class="h4 mb-10 text-white text-center">My Account</h1>
            </div>
        </div>
    </header>
    <div class="kd-box-5 bg-grey-6">
        <div class="container">
            <div class="row justify-content-center vertical-gap">
                <div class="col-12 col-md-4 col-lg-4 kd-feature-variable">
                    <div class="kd-feature kd-feature-3 kd-block-decorated">
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-key" style="color: #ffe600;"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title"><a href="<?php echo $_CONFIG['accounturl']; ?>/licenses.php?status=active">Active Licenses</a></div>
                            <div class="kd-feature-text">
                                <?php
                                require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
                                $accountid = $_SESSION['accountid'];
                                $sql = "SELECT * FROM licenses WHERE account_id = '$accountid' AND status = 'active'";
                                $result = $dbcon->query($sql);
                                if ($result->num_rows > 0) {
                                    $num = $result->num_rows;
                                    echo 'You have ' . $num . ' active license(s)';
                                }
                                ?>
                            </div>
                            <a href="<?php echo $_CONFIG['accounturl']; ?>/licenses.php?status=active" class="kd-btn kd-btn-link d-flex kd-feature-link">View My Licenses <i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 kd-feature-variable">
                    <div class="kd-feature kd-feature-3 kd-block-decorated">
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-file-invoice-dollar" style="color: #fc0b03;"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title"><a href="<?php echo $_CONFIG['accounturl']; ?>/my-invoices.php?status=due">Due Invoices</a></div>
                            <div class="kd-feature-text">
                                <?php
                                $accountid = $_SESSION['accountid'];
                                $sql = "SELECT * FROM invoices WHERE accountid = '$accountid' AND paymentstatus = 'due'";
                                $result = $dbcon->query($sql);
                                if ($result->num_rows > 0) {
                                    $num = $result->num_rows;
                                    echo 'You have ' . $num . ' due invoice(s)';
                                }
                                ?>
                            </div>
                            <a href="<?php echo $_CONFIG['accounturl']; ?>/my-invoices.php?status=due" class="kd-btn kd-btn-link d-flex kd-feature-link">View My Invoices <i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 kd-feature-variable">
                    <div class="kd-feature kd-feature-3 kd-block-decorated">
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-ticket" style="color: #03fc88;"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title"><a href="<?php echo $_CONFIG['ticketsurl']; ?>?status=open">My Tickets</a></div>
                            <div class="kd-feature-text">
                                <?php
                                $accountid = $_SESSION['accountid'];
                                $sql = "SELECT * FROM tickets WHERE ticket_accountid = '$accountid' AND ticket_status = 'OPEN'";
                                $result = $dbcon->query($sql);
                                if ($result->num_rows > 0) {
                                    $num = $result->num_rows;
                                    echo 'You have ' . $num . ' open ticket(s)';
                                }
                                ?>
                            </div>
                        <a href="<?php echo $_CONFIG['ticketsurl']; ?>?status=open" class="kd-btn kd-btn-link d-flex kd-feature-link">View My Tickets <i class="fa-solid fa-angle-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
?>