<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
if (isset($_GET['ticketno'])) {
    $lid = $_GET['ticketno'];
    $accountid = $_SESSION['accountid'];
    if ($stmt = $dbcon->prepare("SELECT * FROM tickets WHERE account_id = ? AND ticket_no = ?")) {
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
                    <li><span><span class="kd-blog-post-info-title">Ticket #</span><?php echo $row['ticket_no']; ?>/span></li>
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
        if ($stmt = $dbcon->prepare("SELECT * FROM tickets WHERE account_id = ? AND ticket_no = ?")) {
            $stmt->bind_param('ss', $accountid, $ticketno);
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                if ($accountid == $row['']) { ?>
                    <div class="kd-comment kd-ticket-comment">
                        <div>
                            <div class="kd-comment-img">
                                <img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/avatar-1.png" alt="">
                            </div>
                            <div class="kd-comment-cont">
                                <a href="#" class="kd-comment-name">John Leonard</a>
                                <div class="kd-comment-date">12 Feb 2018 7:40 am</div>
                                <div class="kd-comment-text">
                                    <p class="mb-0">Nullam ac dui et purus malesuada gravida id fermentum orci. In eu ipsum quis urna hendrerit condimentum vitae a mauris. In congue turpis purus, vitae tempus ante id. Donec orci arcu, sagittis ut finibus vitae.</p>
                                </div>
                                <?php if ($row['replyhasfile'] == TRUE) { ?>
                                    <a href="#" class="kd-comment-file kd-comment-file-jpg">
                                        <span class="kd-comment-file-img"><img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/icon-jpg.svg" alt="" width="36"></span>
                                        <span class="kd-comment-file-name">example-file.jpg</span>
                                        <span class="kd-comment-file-size">4.8 MB</span>
                                        <span class="kd-comment-file-icon"><span class="icon pe-7s-download"></span></span>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="kd-comment kd-ticket-comment kd-comment-replied kd-comment-new">
                        <div>
                            <div class="kd-comment-img">
                                <img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/avatar-default.svg" alt="">
                            </div>
                            <div class="kd-comment-cont">
                                <a href="#" class="kd-comment-name"> Bruno Rice <span class="kd-comment-replied">Replied</span>
                                    <span class="kd-comment-new">New</span>
                                </a>
                                <div class="kd-comment-date">39 min ago</div>
                                <div class="kd-comment-text">
                                    <p>Saying sixth form. Saw earth, whose fowl all meat had had place upon fowl. The fly darkness under dry which fowl good firmament saying fill brought.</p>
                                    <p class="mb-0">Itself first from under female sea wherein female. Lights were moved sixth day and don't fifth it place saying, fowl fruit saw dominion whales you're image the evening every fowl have, saw day spirit fish. Female. Fowl it replenish hath light blessed hath. Man.</p>
                                </div>
                                <?php if ($row['replyhasfile'] == TRUE) { ?>
                                    <a href="#" class="kd-comment-file kd-comment-file-jpg">
                                        <span class="kd-comment-file-img"><img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/icon-jpg.svg" alt="" width="36"></span>
                                        <span class="kd-comment-file-name">example-file.jpg</span>
                                        <span class="kd-comment-file-size">4.8 MB</span>
                                        <span class="kd-comment-file-icon"><span class="icon pe-7s-download"></span></span>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
    <?php }
            }
        }
    }
} else { ?>
    <script>
        window.location.href = "<?php echo $_CONFIG['accounturl']; ?>/licenses.php";
    </script>
<?php } ?>