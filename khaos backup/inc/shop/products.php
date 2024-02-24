<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
if (isset($_GET['cat'])) {
    $cat = $_GET['cat'];
    $total_pages = $dbcon->query("SELECT * FROM products WHERE visable = 'true' AND category = '$cat'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 8;
    if ($stmt = $dbcon->prepare("SELECT * FROM products WHERE visable = 'true' AND category = ? LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('sii', $cat, $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result();
?>
        <div class="product__filter d-flex justify-content-between align-items-center pb-50">
            <div class="product__filter--filteroption d-flex gap-3 align-items-center">
                <button class="icon" title="Click For Grid Change"><i class="fa-solid fa-bars"></i></button>
                <h6 class="title">Showing <?php echo $result->num_rows; ?> Results</h6>
            </div>
        </div>
        <div class="display product__grid">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="product__single" title="<?php echo $row['productname']; ?>">
                    <div class="product__singlebox">
                        <div class="product__img">
                            <a href="<?php echo $_CONFIG['domain']; ?>/view-product.php?pid=<?php echo $row['pid']; ?>">
                                <img src="<?php echo $row['image1']; ?>" alt="">
                            </a>
                            <div class="product__hover">
                                <div class="product__action">
                                    <a href="<?php echo $_CONFIG['domain']; ?>/view-product.php?pid=<?php echo $row['pid']; ?>" class="action-btn">
                                        View
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product__content">
                            <h6 class="product-title">
                                <a href="<?php echo $_CONFIG['domain']; ?>/view-product.php?pid=<?php echo $row['pid']; ?>"><?php echo $row['productname']; ?></a>
                            </h6>
                            <div class="product-pr d-flex justify-content-between">
                                <div class="product-price">
                                    <span class="product-price__new"><?php echo $row['price']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="product__filter d-flex justify-content-between align-items-center pb-50">
            <div class="product__filter--filteroption d-flex gap-3 align-items-center">
                <button class="icon" title="Click For Grid Change"><i class="fa-solid fa-bars"></i></button>
                <h6 class="title">Showing <?php echo $result->num_rows; ?> Results</h6>
            </div>
        </div>
    <?php
        echo '<h4>No Products Found</h4>';
    } ?>
    <br>
    <?php if (ceil($total_pages / $num_results_on_page) > 0) { ?>
        <div class="pagination">
            <ul class="pagination-link">
                <?php if ($page > 1) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page - 1; ?>">
                            <i class="fa-light fa-arrow-left-long"></i>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($page > 3) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=1">1</a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:;">...</a>
                    </li>
                <?php } ?>

                <?php if ($page - 2 > 0) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page - 2 ?>">
                            <?php echo $page - 2 ?>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($page - 1 > 0) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page - 1 ?>">
                            <?php echo $page - 1 ?>
                        </a>
                    </li>
                <?php } ?>

                <li class="page-item active">
                    <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page; ?>"><?php echo $page; ?></a>
                </li>

                <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page + 1 ?>">
                            <?php echo $page + 1 ?>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($page + 2 < ceil($total_pages / $num_results_on_page) + 2) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page + 2 ?>">
                            <?php echo $page + 2 ?>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($page < ceil($total_pages / $num_results_on_page) - 2) { ?>
                    <li class="page-item">
                        <a href="javascript:;">...</a>
                    </li>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>">
                            <?php echo ceil($total_pages / $num_results_on_page) ?>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($page < ceil($total_pages / $num_results_on_page)) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page + 1 ?>">
                            <i class="fa-light fa-arrow-right-long"></i>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    <?php }
} elseif (isset($_GET['search'])) {
    $search = '%' . $_GET['search'] . '%';
    $total_pages = $dbcon->query("SELECT * FROM products WHERE visable = 'true' AND productname LIKE '%$search%'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 8;
    if ($stmt = $dbcon->prepare("SELECT * FROM products WHERE visable = 'true' AND productname LIKE ? LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('sii', $search, $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result();
    ?>
        <div class="product__filter d-flex justify-content-between align-items-center pb-50">
            <div class="product__filter--filteroption d-flex gap-3 align-items-center">
                <button class="icon" title="Click For Grid Change"><i class="fa-solid fa-bars"></i></button>
                <h6 class="title">Showing <?php echo $result->num_rows; ?> Results</h6>
            </div>
        </div>
        <div class="display product__grid">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="product__single" title="<?php echo $row['productname']; ?>">
                    <div class="product__singlebox">
                        <div class="product__img">
                            <a href="<?php echo $_CONFIG['domain']; ?>/view-product.php?pid=<?php echo $row['pid']; ?>">
                                <img src="<?php echo $row['image1']; ?>" alt="">
                            </a>
                            <div class="product__hover">
                                <div class="product__action">
                                    <a href="<?php echo $_CONFIG['domain']; ?>/view-product.php?pid=<?php echo $row['pid']; ?>" class="action-btn">
                                        View
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product__content">
                            <h6 class="product-title">
                                <a href="<?php echo $_CONFIG['domain']; ?>/view-product.php?pid=<?php echo $row['pid']; ?>"><?php echo $row['productname']; ?></a>
                            </h6>
                            <div class="product-pr d-flex justify-content-between">
                                <div class="product-price">
                                    <span class="product-price__new"><?php echo $row['price']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="product__filter d-flex justify-content-between align-items-center pb-50">
            <div class="product__filter--filteroption d-flex gap-3 align-items-center">
                <button class="icon" title="Click For Grid Change"><i class="fa-solid fa-bars"></i></button>
                <h6 class="title">Showing <?php echo $result->num_rows; ?> Results</h6>
            </div>
        </div>
    <?php
        echo '<h4>No Producdts Found</h4>';
    } ?>
    <br>
    <?php if (ceil($total_pages / $num_results_on_page) > 0) { ?>
        <div class="pagination">
            <ul class="pagination-link">
                <?php if ($page > 1) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page - 1; ?>">
                            <i class="fa-light fa-arrow-left-long"></i>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($page > 3) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=1">1</a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:;">...</a>
                    </li>
                <?php } ?>

                <?php if ($page - 2 > 0) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page - 2 ?>">
                            <?php echo $page - 2 ?>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($page - 1 > 0) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page - 1 ?>">
                            <?php echo $page - 1 ?>
                        </a>
                    </li>
                <?php } ?>

                <li class="page-item active">
                    <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page; ?>"><?php echo $page; ?></a>
                </li>

                <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page + 1 ?>">
                            <?php echo $page + 1 ?>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($page + 2 < ceil($total_pages / $num_results_on_page) + 2) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page + 2 ?>">
                            <?php echo $page + 2 ?>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($page < ceil($total_pages / $num_results_on_page) - 2) { ?>
                    <li class="page-item">
                        <a href="javascript:;">...</a>
                    </li>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>">
                            <?php echo ceil($total_pages / $num_results_on_page) ?>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($page < ceil($total_pages / $num_results_on_page)) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page + 1 ?>">
                            <i class="fa-light fa-arrow-right-long"></i>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    <?php }
} else {
    $total_pages = $dbcon->query("SELECT * FROM products WHERE visable = 'true'")->num_rows;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
    $num_results_on_page = 8;
    if ($stmt = $dbcon->prepare("SELECT * FROM products WHERE visable = 'true' LIMIT ?,?")) {
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('ii', $calc_page, $num_results_on_page);
        $stmt->execute();
        $result = $stmt->get_result();
    ?>
        <div class="product__filter d-flex justify-content-between align-items-center pb-50">
            <div class="product__filter--filteroption d-flex gap-3 align-items-center">
                <button class="icon" title="Click For Grid Change"><i class="fa-solid fa-bars"></i></button>
                <h6 class="title">Showing <?php echo $result->num_rows; ?> Results</h6>
            </div>
        </div>
        <div class="display product__grid">
            <?php
            while ($row = $result->fetch_assoc()) { ?>
                <div class="product__single" title="<?php echo $row['productname']; ?>">
                    <div class="product__singlebox">
                        <div class="product__img">
                            <a href="<?php echo $_CONFIG['domain']; ?>/view-product.php?pid=<?php echo $row['pid']; ?>">
                                <img src="<?php echo $row['image1']; ?>" alt="">
                            </a>
                            <div class="product__hover">
                                <div class="product__action">
                                    <a href="<?php echo $_CONFIG['domain']; ?>/view-product.php?pid=<?php echo $row['pid']; ?>" class="action-btn">
                                        View
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product__content">
                            <h6 class="product-title">
                                <a href="<?php echo $_CONFIG['domain']; ?>/view-product.php?pid=<?php echo $row['pid']; ?>"><?php echo $row['productname']; ?></a>
                            </h6>
                            <div class="product-pr d-flex justify-content-between">
                                <div class="product-price">
                                    <span class="product-price__new"><?php echo $row['price']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="product__filter d-flex justify-content-between align-items-center pb-50">
            <div class="product__filter--filteroption d-flex gap-3 align-items-center">
                <button class="icon" title="Click For Grid Change"><i class="fa-solid fa-bars"></i></button>
                <h6 class="title">Showing <?php echo $result->num_rows; ?> Results</h6>
            </div>
        </div>
    <?php
        echo '<h4>No Products Found</h4>';
    }
    ?>
    <br>
    <?php if (ceil($total_pages / $num_results_on_page) > 0) { ?>
        <div class="pagination">
            <ul class="pagination-link">
                <?php if ($page > 1) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page - 1; ?>">
                            <i class="fa-light fa-arrow-left-long"></i>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($page > 3) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=1">1</a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:;">...</a>
                    </li>
                <?php } ?>

                <?php if ($page - 2 > 0) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page - 2 ?>">
                            <?php echo $page - 2 ?>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($page - 1 > 0) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page - 1 ?>">
                            <?php echo $page - 1 ?>
                        </a>
                    </li>
                <?php } ?>

                <li class="page-item active">
                    <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page; ?>"><?php echo $page; ?></a>
                </li>

                <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page + 1 ?>">
                            <?php echo $page + 1 ?>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($page + 2 < ceil($total_pages / $num_results_on_page) + 2) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page + 2 ?>">
                            <?php echo $page + 2 ?>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($page < ceil($total_pages / $num_results_on_page) - 2) { ?>
                    <li class="page-item">
                        <a href="javascript:;">...</a>
                    </li>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>">
                            <?php echo ceil($total_pages / $num_results_on_page) ?>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($page < ceil($total_pages / $num_results_on_page)) { ?>
                    <li class="page-item">
                        <a href="<?php echo $_CONFIG['domain']; ?>/shop.php?page=<?php echo $page + 1 ?>">
                            <i class="fa-light fa-arrow-right-long"></i>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    <?php }
} ?>