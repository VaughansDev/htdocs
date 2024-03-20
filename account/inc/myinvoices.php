<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    $accountid = $_SESSION['accountid'];
    $total_pages = $dbcon->query("SELECT * FROM invoices WHERE accountid = '$accountid' AND paymentstatus = '$status'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 12;
    if ($stmt = $dbcon->prepare("SELECT * FROM invoices WHERE accountid = ? AND paymentstatus = ? LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('ssii', $accountid, $status, $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result(); ?>
        <div class="kd-box-decorated">
            <div class="table-responsive">
                <table class="kd-table kd-table-default">
                    <thead>
                        <tr>
                            <th scope="col">Invoice #</th>
                            <th scope="col">Invoice Date</th>
                            <th scope="col">Total</th>
                            <th scope="col">License Type</th>
                            <th scope="col">Product Type</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <th scope="row" class="kd-table-default-product"><a href="<?php echo $_CONFIG['accounturl']; ?>/invoice/view-invoice.php?invnum=<?php echo $row['invoicenum']; ?>" target="_blank"><?php echo $row['invoicenum']; ?></a></th>
                                <td><?php echo $row['invoicedate']; ?></td>
                                <td><?php echo $row['invoicetotal']; ?></td>
                                <td class="kd-table-licenseKey"><?php echo $row['licensetype']; ?></td>
                                <td class="kd-table-licenseKey"><?php echo $row['producttype']; ?></td>
                                <td>
                                    <?php
                                    if ($row['paymentstatus'] == 'PAID') {
                                    echo '<div style="color: green;">PAID</div>';
                                    } elseif ($row['paymentstatus'] == 'DUE') {
                                    echo '<div style="color: red;">DUE</div>';
                                    } elseif ($row['paymentstatus'] == 'UNPAID') {
                                    echo '<div style="color: orange;">UNPAID</div>';
                                    } else {
                                    echo '<div style="color: blue;">UNKNOWN</div>';
                                    }
                                    ?>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <div class="kd-box-decorated">
            <div class="table-responsive">
                <table class="kd-table kd-table-default">
                    <thead>
                        <tr>
                            <th scope="col">Invoice #</th>
                            <th scope="col">Invoice Date</th>
                            <th scope="col">Total</th>
                            <th scope="col">License Type</th>
                            <th scope="col">Product Type</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <h4>No Licenses Found</h4>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
    <br>
    <?php if (ceil($total_pages / $num_results_on_page) > 0) { ?>
        <div class="text-center mt-70">
            <ul class="kd-pagination mt-40">
                <?php if ($page > 1) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['accounturl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page - 1; ?>"><i class="fa-solid fa-chevron-left"></i></a></li>
                <?php }
                if ($page > 3) { ?>
                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>?status=<?php echo $status; ?>&page=1">1</a></li>
                    <li class="kd-pagination-space">...</li>
                <?php }
                if ($page - 2 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li>
                <?php }
                if ($page - 1 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li>
                <?php } ?>
                <li class="active"><a href="<?php echo $_CONFIG['accounturl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1) { ?>
                    <li>
                        <a href="<?php echo $_CONFIG['accounturl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page + 1 ?>">
                            <?php echo $page + 1 ?>
                        </a>
                    </li>
                <?php }
                if ($page + 2 < ceil($total_pages / $num_results_on_page) + 2) { ?>
                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page) - 2) { ?>
                    <li class="kd-pagination-space">...</li>
                    <li>
                        <a href="<?php echo $_CONFIG['accounturl']; ?>?status=<?php echo $status; ?>&page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a>
                    </li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page)) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['accounturl']; ?>?status=<?php echo $status; ?>&page=<?php echo $page + 1 ?>"><i class="fa-solid fa-chevron-right"></i></a></li>
                <?php } ?>
            </ul>
        </div>
    <?php }
} else {
    $accountid = $_SESSION['accountid'];
    $total_pages = $dbcon->query("SELECT * FROM invoices WHERE accountid = '$accountid'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 5;
    if ($stmt = $dbcon->prepare("SELECT * FROM invoices WHERE accountid = ? LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('sii', $accountid, $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result(); ?>
        <div class="kd-box-decorated">
            <div class="table-responsive">
                <table class="kd-table kd-table-default">
                    <thead>
                        <tr>
                            <th scope="col">Invoice #</th>
                            <th scope="col">Invoice Date</th>
                            <th scope="col">Total</th>
                            <th scope="col">License Type</th>
                            <th scope="col">Product Type</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <th scope="row" class="kd-table-default-product"><a href="<?php echo $_CONFIG['accounturl']; ?>/invoice/view-invoice.php?invnum=<?php echo $row['invoicenum']; ?>"><?php echo $row['invoicenum']; ?></a></th>
                                <td><?php echo $row['invoicedate']; ?></td>
                                <td><?php echo $row['invoicetotal']; ?></td>
                                <td class="kd-table-licenseKey"><?php echo $row['licensetype']; ?></td>
                                <td class="kd-table-licenseKey"><?php echo $row['producttype']; ?></td>
                                <td><?php echo $row['paymentstatus']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <div class="kd-box-decorated">
            <div class="table-responsive">
                <table class="kd-table kd-table-default">
                    <thead>
                        <tr>
                            <th scope="col">Invoice #</th>
                            <th scope="col">Invoice Date</th>
                            <th scope="col">Total</th>
                            <th scope="col">License Type</th>
                            <th scope="col">Product Type</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <h4>No Licenses Found</h4>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
    <br>
    <?php if (ceil($total_pages / $num_results_on_page) > 0) { ?>
        <div class="text-center mt-70">
            <ul class="kd-pagination mt-40">
                <?php if ($page > 1) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['accounturl']; ?>?page=<?php echo $page - 1; ?>"><i class="fa-solid fa-chevron-left"></i></a></li>
                <?php }
                if ($page > 3) { ?>
                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>?page=1">1</a></li>
                    <li class="kd-pagination-space">...</li>
                <?php }
                if ($page - 2 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>?page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li>
                <?php }
                if ($page - 1 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li>
                <?php } ?>
                <li class="active"><a href="<?php echo $_CONFIG['accounturl']; ?>?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1) { ?>
                    <li>
                        <a href="<?php echo $_CONFIG['accounturl']; ?>?page=<?php echo $page + 1 ?>">
                            <?php echo $page + 1 ?>
                        </a>
                    </li>
                <?php }
                if ($page + 2 < ceil($total_pages / $num_results_on_page) + 2) { ?>
                    <li><a href="<?php echo $_CONFIG['accounturl']; ?>?page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page) - 2) { ?>
                    <li class="kd-pagination-space">...</li>
                    <li>
                        <a href="<?php echo $_CONFIG['accounturl']; ?>?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a>
                    </li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page)) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['accounturl']; ?>?page=<?php echo $page + 1 ?>"><i class="fa-solid fa-chevron-right"></i></a></li>
                <?php } ?>
            </ul>
        </div>
<?php }
} ?>