<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    $accountid = $_SESSION['accountid'];
    $total_pages = $dbcon->query("SELECT * FROM tickets WHERE ticket_accountid = '$accountid' AND ticket_status = '$status'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 12;
    if ($stmt = $dbcon->prepare("SELECT * FROM tickets WHERE ticket_accountid = ? AND ticket_status = ? LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('ssii', $accountid, $status, $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) { ?>
            <a href="<?php echo $_CONFIG['ticketsurl']; ?>/ticket.php?ticketno=<?php echo $row['ticket_no']; ?>" class="kd-ticket-item kd-ticket-new kd-ticket-open kd-block-decorated">
                <span class="kd-ticket-img">
                    <img src="<?php echo $row['lastreplyimg']; ?>" alt="">
                </span>
                <span class="kd-ticket-cont">
                    <span class="kd-ticket-name"> <?php echo $row['lastreplyname']; ?> </span>
                    <span class="kd-ticket-title h5"> <?php echo $row['lastreplymsg']; ?> </span>
                    <ul class="kd-ticket-info">
                        <li>Last Update: <?php echo $row['lastreplydate'] . ' at ' . $row['lastreplyname']; ?></li>
                        <li>Product: <?php echo $row['ticket_product']; ?></li>
                        <li>Status:
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
                            ?></li>
                        <?php if ($row['lastreplyaccountid'] != $_SESSION['accountid']) { ?>
                            <li class="kd-ticket-new">New Reply</li>
                        <?php } ?>
                    </ul>
                </span>
            </a>
        <?php } ?>
    <?php } else { ?>
        <a href="<?php echo $_CONFIG['ticketsurl']; ?>/new-ticket.php" class="kd-ticket-item kd-ticket-new kd-ticket-open kd-block-decorated">
            <span class="kd-ticket-cont">
                <h4>You dont have any tickets.</h4>
            </span>
        </a>
    <?php } ?>
    <br>
    <?php if (ceil($total_pages / $num_results_on_page) > 0) { ?>
        <div class="text-center mt-70">
            <ul class="kd-pagination mt-40">
                <?php if ($page > 1) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['ticketsurl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page - 1; ?>"><i class="fa-solid fa-chevron-left"></i></a></li>
                <?php }
                if ($page > 3) { ?>
                    <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>?status=<?php echo $status; ?>&page=1">1</a></li>
                    <li class="kd-pagination-space">...</li>
                <?php }
                if ($page - 2 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li>
                <?php }
                if ($page - 1 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li>
                <?php } ?>
                <li class="active"><a href="<?php echo $_CONFIG['ticketsurl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1) { ?>
                    <li>
                        <a href="<?php echo $_CONFIG['ticketsurl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page + 1 ?>">
                            <?php echo $page + 1 ?>
                        </a>
                    </li>
                <?php }
                if ($page + 2 < ceil($total_pages / $num_results_on_page) + 2) { ?>
                    <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page) - 2) { ?>
                    <li class="kd-pagination-space">...</li>
                    <li>
                        <a href="<?php echo $_CONFIG['ticketsurl']; ?>?status=<?php echo $status; ?>&page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a>
                    </li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page)) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['ticketsurl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page + 1 ?>"><i class="fa-solid fa-chevron-right"></i></a></li>
                <?php } ?>
            </ul>
        </div>
        <?php }
} else {
    $accountid = $_SESSION['accountid'];
    $total_pages = $dbcon->query("SELECT * FROM tickets WHERE ticket_accountid = '$accountid'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 5;
    if ($stmt = $dbcon->prepare("SELECT * FROM tickets WHERE ticket_accountid = ? LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('sii', $accountid, $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) { ?>
            <a href="<?php echo $_CONFIG['ticketsurl']; ?>/ticket.php?ticketno=<?php echo $row['ticket_no']; ?>" class="kd-ticket-item kd-ticket-new kd-ticket-open kd-block-decorated">
                <span class="kd-ticket-img">
                    <img src="<?php echo $row['lastreplyimg']; ?>" alt="">
                </span>
                <span class="kd-ticket-cont">
                    <span class="kd-ticket-name"> <?php echo $row['lastreplyname']; ?> </span>
                    <span class="kd-ticket-title h5"> <?php echo $row['lastreplymsg']; ?> </span>
                    <ul class="kd-ticket-info">
                        <li>Last Update: <?php echo $row['lastreplydate'] . ' at ' . $row['lastreplyname']; ?></li>
                        <li>Product: <?php echo $row['ticket_product']; ?></li>
                        <li>Status:
                            <?php
                            if ($row['ticket_status'] == 'OPEN') {
                                echo '<span style="color: green;">OPEN</span>';
                            } elseif ($row['ticket_status'] == 'CLOSED') {
                                echo '<span style="color: red;">CLOSED</span>';
                            } elseif ($row['ticket_status'] == 'ONHOLD') {
                                echo '<span style="color: orange;">ONHOLD</span>';
                            } else {
                                echo '<span style="color: blue;">UNKNOWN</span>';
                            }
                            ?></li>
                        <?php if ($row['lastreplyaccountid'] != $_SESSION['accountid']) { ?>
                            <li class="kd-ticket-new">New Reply</li>
                        <?php } ?>
                    </ul>
                </span>
            </a>
        <?php } ?>
    <?php } else { ?>
        <a href="<?php echo $_CONFIG['ticketsurl']; ?>/new-ticket.php" class="kd-ticket-item kd-ticket-new kd-ticket-open kd-block-decorated">
            <span class="kd-ticket-cont">
                <h4>You dont have any tickets.</h4>
            </span>
        </a>
    <?php } ?>
    <br>
    <?php if (ceil($total_pages / $num_results_on_page) > 0) { ?>
        <div class="text-center mt-70">
            <ul class="kd-pagination mt-40">
                <?php if ($page > 1) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['ticketsurl']; ?>?page=<?php echo $page - 1; ?>"><i class="fa-solid fa-chevron-left"></i></a></li>
                <?php }
                if ($page > 3) { ?>
                    <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>?page=1">1</a></li>
                    <li class="kd-pagination-space">...</li>
                <?php }
                if ($page - 2 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>?page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li>
                <?php }
                if ($page - 1 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li>
                <?php } ?>
                <li class="active"><a href="<?php echo $_CONFIG['ticketsurl']; ?>?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1) { ?>
                    <li>
                        <a href="<?php echo $_CONFIG['ticketsurl']; ?>?page=<?php echo $page + 1 ?>">
                            <?php echo $page + 1 ?>
                        </a>
                    </li>
                <?php }
                if ($page + 2 < ceil($total_pages / $num_results_on_page) + 2) { ?>
                    <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>?page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page) - 2) { ?>
                    <li class="kd-pagination-space">...</li>
                    <li>
                        <a href="<?php echo $_CONFIG['ticketsurl']; ?>?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a>
                    </li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page)) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['ticketsurl']; ?>?page=<?php echo $page + 1 ?>"><i class="fa-solid fa-chevron-right"></i></a></li>
                <?php } ?>
            </ul>
        </div>
<?php }
} ?>