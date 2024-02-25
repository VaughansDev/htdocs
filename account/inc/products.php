<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
if (isset($_GET['cat'])) {
    $cat = $_GET['cat'];
    $total_pages = $dbcon->query("SELECT * FROM products WHERE visable = 'true' AND category = '$cat'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 12;
    if ($stmt = $dbcon->prepare("SELECT * FROM products WHERE visable = 'true' AND category = ? LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('sii', $cat, $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result(); ?>
        <div class="row vertical-gap kd-isotope-grid">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="col-12 col-md-6 col-lg-4 kd-isotope-grid-item theme">
                    <div class="kd-portfolio-item kd-block-decorated">
                        <div class="kd-portfolio-item-image">
                            <div class="kd-portfolio-item-overlay" style="background-color: rgba(27, 27, 27, .8);">
                                <a href="<?php echo $_CONFIG['demourl']; ?>/?dem=<?php echo $row['demoname']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Live Demo</a>
                                <a href="<?php echo $_CONFIG['storeurl']; ?>/item.php?pid=<?php echo $row['pid']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Buy Now</a>
                            </div>
                            <img src="<?php echo $_CONFIG['domain'] . $row['image1']; ?>" alt="">
                        </div>
                        <a href="product.php" class="kd-portfolio-item-info">
                            <span class="kd-portfolio-item-title"><?php echo $row['productname']; ?></span>
                            <span class="kd-portfolio-item-price">$<?php echo $row['price']; ?></span>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else {
        echo '<h4>No Products Found</h4>';
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
    <?php } ?>
    <?php } elseif (isset($_GET['search'])) {
    $search = '%' . $_GET['search'] . '%';
    $total_pages = $dbcon->query("SELECT * FROM products WHERE visable = 'true' AND productname LIKE '%$search%'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 12;
    if ($stmt = $dbcon->prepare("SELECT * FROM products WHERE visable = 'true' AND productname LIKE ? LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('sii', $search, $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result(); ?>
        <div class="row vertical-gap kd-isotope-grid">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="col-12 col-md-6 col-lg-4 kd-isotope-grid-item theme">
                    <div class="kd-portfolio-item kd-block-decorated">
                        <div class="kd-portfolio-item-image">
                            <div class="kd-portfolio-item-overlay" style="background-color: rgba(27, 27, 27, .8);">
                                <a href="<?php echo $_CONFIG['demourl']; ?>/?dem=<?php echo $row['demoname']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Live Demo</a>
                                <a href="<?php echo $_CONFIG['storeurl']; ?>/item.php?pid=<?php echo $row['pid']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Buy Now</a>
                            </div>
                            <img src="<?php echo $_CONFIG['domain'].$row['image1']; ?>" alt="">
                        </div>
                        <a href="product.php" class="kd-portfolio-item-info">
                            <span class="kd-portfolio-item-title"><?php echo $row['productname']; ?></span>
                            <span class="kd-portfolio-item-price">$<?php echo $row['price']; ?></span>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else {
        echo '<h4>No Products Found</h4>';
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
    $total_pages = $dbcon->query("SELECT * FROM products WHERE visable = 'true'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 12;
    if ($stmt = $dbcon->prepare("SELECT * FROM products WHERE visable = 'true' LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('ii', $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result(); ?>
        <div class="row vertical-gap kd-isotope-grid">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="col-12 col-md-6 col-lg-4 kd-isotope-grid-item theme">
                    <div class="kd-portfolio-item kd-block-decorated">
                        <div class="kd-portfolio-item-image">
                            <div class="kd-portfolio-item-overlay" style="background-color: rgba(27, 27, 27, .8);">
                                <a href="<?php echo $_CONFIG['demourl']; ?>/?dem=<?php echo $row['demoname']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Live Demo</a>
                                <a href="<?php echo $_CONFIG['storeurl']; ?>/item.php?pid=<?php echo $row['pid']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Buy Now</a>
                            </div>
                            <img src="<?php echo $_CONFIG['domain'] . $row['image1']; ?>" alt="">
                        </div>
                        <a href="product.php" class="kd-portfolio-item-info">
                            <span class="kd-portfolio-item-title"><?php echo $row['productname']; ?></span>
                            <span class="kd-portfolio-item-price">$<?php echo $row['price']; ?></span>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else {
        echo '<h4>No Products Found</h4>';
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