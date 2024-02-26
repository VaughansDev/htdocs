<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
if (isset($_GET['cat'])) {
    $cat = $_GET['cat'];
    $accountid = $_SESSION['accountid'];
    $total_pages = $dbcon->query("SELECT * FROM licenses WHERE account_id = '$accountid' AND category = '$cat'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 12;
    if ($stmt = $dbcon->prepare("SELECT * FROM licenses WHERE account_id = ? AND category = ? LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('ssii', $accountid, $cat, $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result(); ?>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <a href="<?php echo $_CONFIG['accounturl']; ?>/view-licenses.php?lid=<?php echo $row['license_id']; ?>">
                <tr>
                    <th scope="row" class="kd-table-default-product"><?php echo $row['product']; ?></th>
                    <td class="kd-table-licenseKey"><?php echo $row['license_key']; ?></td>
                    <td class="kd-table-licenseKey"><?php echo $row['license_type']; ?></td>
                    <td class="kd-table-website kd-table-default-website"><?php echo $row['hostname']; ?></td>
                    <td><?php echo $row['ip_address']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>
            </a>
        <?php } ?>
    <?php } else {
        echo '<h4>No Licenses Found</h4>';
    } ?>
    <br>
    <?php if (ceil($total_pages / $num_results_on_page) > 0) { ?>
        <div class="text-center mt-70">
            <ul class="kd-pagination mt-40">
                <?php if ($page > 1) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page - 1; ?>"><i class="fa-solid fa-chevron-left"></i></a></li>
                <?php }
                if ($page > 3) { ?>
                    <li><a href="<?php echo $_CONFIG['storeurl']; ?>?page=1">1</a></li>
                    <li class="kd-pagination-space">...</li>
                <?php }
                if ($page - 2 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li>
                <?php }
                if ($page - 1 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li>
                <?php } ?>
                <li class="active"><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1) { ?>
                    <li>
                        <a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page + 1 ?>">
                            <?php echo $page + 1 ?>
                        </a>
                    </li>
                <?php }
                if ($page + 2 < ceil($total_pages / $num_results_on_page) + 2) { ?>
                    <li><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page) - 2) { ?>
                    <li class="kd-pagination-space">...</li>
                    <li>
                        <a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a>
                    </li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page)) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page + 1 ?>"><i class="fa-solid fa-chevron-right"></i></a></li>
                <?php } ?>
            </ul>
        </div>
    <?php }
} else {
    $accountid = $_SESSION['accountid'];
    $total_pages = $dbcon->query("SELECT * FROM licenses WHERE account_id = '$accountid'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 5;
    if ($stmt = $dbcon->prepare("SELECT * FROM licenses WHERE account_id = ? LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('sii', $accountid, $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result(); ?>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <a href="<?php echo $_CONFIG['accounturl']; ?>/view-licenses.php?lid=<?php echo $row['license_id']; ?>">
                <tr>
                    <th scope="row" class="kd-table-default-product"><?php echo $row['product']; ?></th>
                    <td class="kd-table-licenseKey"><?php echo $row['license_key']; ?></td>
                    <td class="kd-table-licenseKey"><?php echo $row['license_type']; ?></td>
                    <td class="kd-table-website kd-table-default-website"><?php echo $row['hostname']; ?></td>
                    <td><?php echo $row['ip_address']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>
            </a>
        <?php } ?>
    <?php } else {
        echo '<h4>No Licenses Found</h4>';
    } ?>
    <br>
    <?php if (ceil($total_pages / $num_results_on_page) > 0) { ?>
        <div class="text-center mt-70">
            <ul class="kd-pagination mt-40">
                <?php if ($page > 1) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page - 1; ?>"><i class="fa-solid fa-chevron-left"></i></a></li>
                <?php }
                if ($page > 3) { ?>
                    <li><a href="<?php echo $_CONFIG['storeurl']; ?>?page=1">1</a></li>
                    <li class="kd-pagination-space">...</li>
                <?php }
                if ($page - 2 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li>
                <?php }
                if ($page - 1 > 0) { ?>
                    <li><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li>
                <?php } ?>
                <li class="active"><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1) { ?>
                    <li>
                        <a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page + 1 ?>">
                            <?php echo $page + 1 ?>
                        </a>
                    </li>
                <?php }
                if ($page + 2 < ceil($total_pages / $num_results_on_page) + 2) { ?>
                    <li><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page) - 2) { ?>
                    <li class="kd-pagination-space">...</li>
                    <li>
                        <a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a>
                    </li>
                <?php }
                if ($page < ceil($total_pages / $num_results_on_page)) { ?>
                    <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['storeurl']; ?>?page=<?php echo $page + 1 ?>"><i class="fa-solid fa-chevron-right"></i></a></li>
                <?php } ?>
            </ul>
        </div>
<?php }
} ?>