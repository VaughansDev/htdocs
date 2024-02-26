<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
if (isset($_GET['lid'])) {
    $lid = $_GET['lid'];
    $accountid = $_SESSION['accountid'];
    if ($stmt = $dbcon->prepare("SELECT * FROM licenses WHERE account_id = ? AND license_id = ?")) {
        $stmt->bind_param('ss', $accountid, $lid);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) { ?>
            <div class="kd-blog-post kd-ticket kd-ticket-open">
                <div class="kd-blog-post-box pt-30 pb-30">
                    <h2 class="h4 mnt-5 mb-9 kd-ticket-title">License: <?php echo $row['product'] . ' - ' . $row['license_type']; ?></h2>
                    <!-- START: Breadcrumbs -->
                    <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
                        <li><a href="<?php echo $_CONFIG['accounturl']; ?>">My Account</a></li>
                        <li><a href="<?php echo $_CONFIG['accounturl']; ?>/licenses.php">My Licenses</a></li>
                        <li>License: <?php echo $row['product'] . ' - ' . $row['license_type']; ?></li>
                    </ul>
                    <!-- END: Breadcrumbs -->
                </div>
                <div class="kd-separator"></div>
                <div style="background-color: #fafafa;">
                    <ul class="kd-blog-post-info kd-blog-post-info-style-2 mb-0 mt-0">
                        <li><span><span class="kd-blog-post-info-title">License Id</span><?php echo $row['license_id']; ?></span></li>
                        <li><span><span class="kd-blog-post-info-title">Product</span><?php echo $row['product']; ?></span></li>
                        <li><span><span class="kd-blog-post-info-title">License Type</span><?php echo $row['license_type']; ?></span></li>
                        <li><span><span class="kd-blog-post-info-title">Purchase Date</span><?php echo $row['purchasedate']; ?></span></li>
                        <li><span><span class="kd-blog-post-info-title">Status</span>
                            <?php
                            if ($row['status'] == 'active') {
                                echo '<div style="color: green;">ACTIVE</div>';
                            } elseif ($row['status'] == 'inactive') {
                                echo '<div style="color: red;">INACTIVE</div>';
                            } elseif ($row['status'] == 'suspended') {
                                echo '<div style="color: orange;">SUSPENDED</div>';
                            } else {
                                echo '<div style="color: blue;">UNKNOWN</div>';
                            }
                            ?>
                        </span></li>
                    </ul>
                    <div class="kd-separator"></div>
                    <ul class="kd-blog-post-info kd-blog-post-info-style-2 mb-0 mt-0">
                        <li><span><span class="kd-blog-post-info-title">License Key</span><?php echo $row['license_key']; ?></span></li>
                        <li><span><span class="kd-blog-post-info-title">Domain</span><?php echo $row['hostname']; ?></span></li>
                        <li><span><span class="kd-blog-post-info-title">IP Address</span><?php echo $row['ip_address']; ?></span></li>
                    </ul>
                </div>
                <div class="kd-separator"></div>
                <div class="kd-comment kd-ticket-comment">
                    <div>
                        <div class="col-lg-4">
                            <div class="kd-comment-name">
                                <h4>File Download:</h4>
                            </div>
                            <div class="kd-comment-name"><?php echo $row['product']; ?></div>
                            <div class="kd-comment-date"><?php echo $row['license_type']; ?></div>
                        </div>
                        <div class="col-lg-8">
                            <?php
                            $pid = $row['productid'];
                            $sql2 = "SELECT * FROM downloads WHERE productid = '$pid'";
                            $result2 = $dbcon->query($sql2);
                            if ($result2->num_rows > 0) {
                                while ($row2 = $result2->fetch_assoc()) {
                            ?>
                                    <a href="https://cdn.khaosdevelopment.com/downloads/get-file.php?productid=<?php echo $row['productid']; ?>&return=<?php echo 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" class="kd-comment-file kd-comment-file-jpg">
                                        <span class="kd-comment-file-img"><img src="<?php echo $_CONFIG['domain']; ?>/assets/images/icon-zip.svg" alt="" width="36"></span>
                                        <span class="kd-comment-file-name"><?php echo $row2['filename']; ?></span>
                                        <span class="kd-comment-file-size"><?php echo $row2['filesize']; ?></span>
                                        <span class="kd-comment-file-icon"><span class="icon pe-7s-download"></span></span>
                                    </a>
                                <?php }
                            } else { ?>
                                <div>
                                    <h6 style="color: red;">Download Disabled</h6>
                                    <p>If you see this for more then 24 hours contact support.</p>
                                    <p>You can submit a ticket by <a href="<?php echo $_CONFIG['ticketsurl']; ?>/new-ticket.php">clicking here</a>, or</p>
                                    <p>Email support at <a href="mailto:support@khaosdevelopment.com">support@khaosdevelopment.com</a></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    }
} else { ?>
    <script>
        window.location.href = "<?php echo $_CONFIG['accounturl']; ?>/licenses.php";
    </script>
<?php } ?>