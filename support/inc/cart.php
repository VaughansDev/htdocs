<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
if (isset($_SESSION['accountid'])) {
    $accountid = $_SESSION['accountid'];
    $sql = "SELECT * FROM cart_items WHERE cart_id = '$accountid'";
    $result = $dbcon->query($sql);
    if ($result->num_rows > 0) {
?>
        <li class="kd-nav-item kd-nav-item-drop">
            <a class="kd-nav-icon" href="javascript:;" role="button">
                <span class="kd-nav-badge"><?php echo $result->num_rows; ?></span>
                <img class="icon" width="22" src="<?php echo $_CONFIG['storeurl']; ?>/assets/images/icon-bag.svg">
            </a>
            <div class="kd-navbar-dropdown kd-navbar-dropdown-left kd-dropdown-checkout">
                <div class="kd-navbar-dropdown-triangle"></div>
                <table class="kd-table kd-table-checkout">
                    <tbody>
                        <tr>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <th scope="row" class="kd-table-checkout-img">
                                    <a href="<?php echo $row['item_link']; ?>"><img src="<?php echo $row['item_image']; ?>" alt=""></a>
                                </th>
                                <td class="kd-table-checkout-title">
                                    <a href="<?php echo $row['item_link']; ?>"><?php echo $row['item_name']; ?></a>
                                </td>
                                <td class="kd-table-checkout-price">
                                    <div class="kd-table-checkout-price">$<?php echo $row['item_price']; ?></div>
                                </td>
                                <td class="kd-table-checkout-delete">
                                    <a href="#"><i style="color: red;" class="fa-solid fa-xmark"></i></a>
                                </td>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between kd-box-content pt-0 pb-0 mt-15 mnb-6">
                    <span>Total Payment:</span><span><strong>$98</strong></span>
                </div>
                <div class="kd-box-content">
                    <a href="checkout.php" class="kd-btn kd-btn-md kd-btn-block">Checkout</a>
                </div>
            </div>
        </li>
    <?php } else { ?>
        <li class="kd-nav-item kd-nav-item-drop">
            <a class="kd-nav-icon" href="javascript:;" role="button">
                <img class="icon" width="22" src="<?php echo $_CONFIG['storeurl']; ?>/assets/images/icon-bag.svg">
            </a>
            <div class="kd-navbar-dropdown kd-navbar-dropdown-left kd-dropdown-checkout">
                <div class="kd-navbar-dropdown-triangle"></div>
                <table class="kd-table kd-table-checkout">
                    <tbody>
                        <tr>
                            <td class="kd-table-checkout-title">
                                Your cart is empty
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="kd-box-content">
                    <a href="<?php echo $_CONFIG['storeurl']; ?>" class="kd-btn kd-btn-md kd-btn-block">Browse our Store</a>
                </div>
            </div>
        </li>
    <?php }
} else { ?>
    <li class="kd-nav-item kd-nav-item-drop">
        <a class="kd-nav-icon" href="javascript:;" role="button">
            <img class="icon" width="22" src="<?php echo $_CONFIG['storeurl']; ?>/assets/images/icon-bag.svg">
        </a>
        <div class="kd-navbar-dropdown kd-navbar-dropdown-left kd-dropdown-checkout">
            <div class="kd-navbar-dropdown-triangle"></div>
            <table class="kd-table kd-table-checkout">
                <tbody>
                    <tr>
                        <td class="kd-table-checkout-title">
                            Your must login to access your cart
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php } ?>