<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
if (isset($_GET['ticketno'])) {
    $ticketno = $_GET['ticketno'];
    $accountid = $_SESSION['accountid'];
    if ($stmt = $dbcon->prepare("SELECT * FROM tickets WHERE ticket_accountid = ? AND ticket_no = ?")) {
        $stmt->bind_param('ss', $accountid, $ticketno);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) { ?>
            <div class="kd-blog-post-box pt-30 pb-30">
                <h2 class="h4 mnt-5 mb-9 kd-ticket-title"><?php echo $row['ticket_title']; ?></h2>
                <!-- START: Breadcrumbs -->
                <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
                    <li><a href="<?php echo $_CONFIG['supporturl']; ?>">Support Home</a></li>
                    <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>/my-tickets.php">My Tickets</a></li>
                    <li><?php echo $row['ticket_title']; ?></li>
                </ul>
                <!-- END: Breadcrumbs -->
                <span class="kd-ticket-status"></span>
            </div>
            <div class="kd-separator"></div>
            <div style="background-color: #fafafa;">
                <ul class="kd-blog-post-info kd-blog-post-info-style-2 mb-0 mt-0">
                    <li><span><span class="kd-blog-post-info-title">Ticket #</span><?php echo $row['ticket_no']; ?></span></li>
                    <li><span><span class="kd-blog-post-info-title">Status</span>
                            <?php
                            if ($row['ticket_status'] == 'OPEN') {
                                echo '<div style="color: green;">OPEN</div>';
                            } elseif ($row['ticket_status'] == 'CLOSED') {
                                echo '<div style="color: red;">CLOSED</div>';
                            } elseif ($row['ticket_status'] == 'ONHOLD') {
                                echo '<div style="color: orange;">ONHOLD</div>';
                            } else {
                                echo '<div style="color: blue;">UNKNOWN</div>';
                            }
                            ?>
                        </span></li>
                    <li><span><span class="kd-blog-post-info-title">Date</span><?php echo $row['ticket_createdate'] . ', ' . $row['ticket_createtime']; ?></span></li>
                    <li><span><span class="kd-blog-post-info-title">Product</span><?php echo $row['ticket_product']; ?></span></li>
                </ul>
            </div>
        <?php } ?>
        <div class="kd-separator"></div>
        <?php
        if ($stmt = $dbcon->prepare("SELECT * FROM ticket_responses WHERE ticket_no = ?")) {
            $stmt->bind_param('s', $ticketno);
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                if ($accountid == $row['accountid']) { ?>
                    <div class="kd-comment kd-ticket-comment">
                        <div>
                            <div class="kd-comment-img">
                                <img src="<?php echo $_CONFIG['domain']; ?>/assets/images/avatar-1.png" alt="">
                            </div>
                            <div class="kd-comment-cont">
                                <a href="#" class="kd-comment-name"><?php echo $row['firstname'].' '.$row['lastname']; ?></a>
                                <div class="kd-comment-date"><?php echo $row['replydate'].' at '.$row['replytime']; ?></div>
                                <div class="kd-comment-text">
                                    <p class="mb-0"><?php echo $row['message']; ?></p>
                                </div>
                                <?php if ($row['replyhasfile'] == 'TRUE') { ?>
                                    <a href="<?php echo $row['filedownloadlink']; ?>" class="kd-comment-file kd-comment-file-jpg">
                                        <span class="kd-comment-file-img"><img src="<?php echo $_CONFIG['domain']; ?>/assets/images/icon-zip.svg" alt="" width="36"></span>
                                        <span class="kd-comment-file-name"><?php echo $row['filename']; ?></span>
                                        <span class="kd-comment-file-size"><?php echo $row['filesize'] ?></span>
                                        <span class="kd-comment-file-icon"><i class="fa-solid fa-download"></i></span>
                                    </a>
                                <?php } else {

                                } ?>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="kd-comment kd-ticket-comment kd-comment-replied kd-comment-new">
                        <div>
                            <div class="kd-comment-img">
                                <img src="<?php echo $_CONFIG['domain']; ?>/assets/images/avatar-default.svg" alt="">
                            </div>
                            <div class="kd-comment-cont">
                                <a href="#" class="kd-comment-name"><?php echo $row['firstname'].' '.$row['lastname']; ?><span class="kd-comment-replied">Replied</span></a>
                                <div class="kd-comment-date"><?php echo $row['replydate'].' at '.$row['replytime']; ?></div>
                                <div class="kd-comment-text">
                                    <p class=mb-0""><?php echo $row['message']; ?></p>
                                </div>
                                <?php if ($row['replyhasfile'] == 'TRUE') { ?>
                                    <a href="<?php echo $row['filedownloadlink']; ?>" class="kd-comment-file kd-comment-file-jpg">
                                        <span class="kd-comment-file-img"><img src="<?php echo $_CONFIG['domain']; ?>/assets/images/icon-zip.svg" alt="" width="36"></span>
                                        <span class="kd-comment-file-name"><?php echo $row['filename']; ?></span>
                                        <span class="kd-comment-file-size"><?php echo $row['filesize'] ?></span>
                                        <span class="kd-comment-file-icon"><i class="fa-solid fa-download"></i></span>
                                    </a>
                                <?php } else {

                                } ?>
                            </div>
                        </div>
                    </div>
    <?php }
            }
        }
    }
} else { ?>
    <script>
        window.location.href = "<?php echo $_CONFIG['ticketsurl']; ?>";
    </script>
<?php } ?>