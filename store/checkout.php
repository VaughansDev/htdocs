<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != TRUE) { ?>
    <script>
        window.location.href = "<?php echo $_CONFIG['accounturl']; ?>/login.php";
    </script>
<?php } ?>
<div class="kd-main">
    <header class="kd-header kd-box-5">
        <div class="bg-image bg-image-parallax">
            <img src="<?php echo $_CONFIG['storeurl']; ?>/assets/images/bg-header-2.png" class="jarallax-img" alt="">
            <div style="background-color: rgba(27, 27, 27, .8);"></div>
        </div>
        <div class="container mnb-8">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <h1 class="h4 mb-10 text-white text-center">Checkout</h1>
                    <!-- START: Breadcrumbs -->
                    <ul class="kd-breadcrumbs text-center">
                        <li><a href="index-2.php">Home</a></li>
                        <li><a href="store.php">Store</a></li>
                        <li>Checkout</li>
                    </ul>
                    <!-- END: Breadcrumbs -->
                </div>
            </div>
        </div>
    </header>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row vertical-gap md-gap">
                <div class="col-lg-6">
                    <div class="kd-box kd-box-decorated">
                        <div class="kd-box-content">
                            <h2 class="h6 mnt-5 mnb-5">Product Information</h2>
                        </div>
                        <div class="kd-separator"></div>
                        <div class="table-responsive">
                            <table class="kd-table kd-table-checkout">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="kd-table-checkout-img">
                                            <a href="product.php">
                                                <img src="<?php echo $_CONFIG['storeurl']; ?>/assets/images/product-1-sm.png" alt="">
                                            </a>
                                        </th>
                                        <td class="kd-table-checkout-title">
                                            <a href="product.php">Sensific – Saying Beast Lesser for in Fruitful</a>
                                        </td>
                                        <td class="kd-table-checkout-price">
                                            <div class="kd-table-checkout-price">$59</div>
                                        </td>
                                        <td class="kd-table-checkout-quantity">
                                            <form action="#" class="kd-form kd-form-group-inputs kd-form-quantity" role="form">
                                                <a href="#" class="kd-form-quantity-minus">-</a>
                                                <input type="number" name="quantity" value="1" min="1" max="10" class="form-control form-control-style-2 kd-form-quantity-input">
                                                <a href="#" class="kd-form-quantity-plus">+</a>
                                            </form>
                                        </td>
                                        <td class="kd-table-checkout-delete">
                                            <a href="#">
                                                <span class="icon pe-7s-close"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="kd-table-checkout-img">
                                            <a href="product.php">
                                                <img src="<?php echo $_CONFIG['storeurl']; ?>/assets/images/product-2-sm.png" alt="">
                                            </a>
                                        </th>
                                        <td class="kd-table-checkout-title">
                                            <a href="product.php">Minist – Subdue Above for Signs Dry is Have Great</a>
                                        </td>
                                        <td class="kd-table-checkout-price">
                                            <div class="kd-table-checkout-price">$39</div>
                                        </td>
                                        <td class="kd-table-checkout-quantity">
                                            <form action="#" class="kd-form kd-form-group-inputs kd-form-quantity" role="form">
                                                <a href="#" class="kd-form-quantity-minus">-</a>
                                                <input type="number" name="quantity" value="1" min="1" max="10" class="form-control form-control-style-2 kd-form-quantity-input">
                                                <a href="#" class="kd-form-quantity-plus">+</a>
                                            </form>
                                        </td>
                                        <td class="kd-table-checkout-delete">
                                            <a href="#">
                                                <span class="icon pe-7s-close"></span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="kd-separator"></div>
                        <div class="kd-box-content">
                            <form action="#" class="kd-form mnt-10">
                                <label for="code" class="mnt-6">Discount Code</label>
                                <div class="kd-form-group-inputs">
                                    <input type="text" name="" value="" class="form-control form-control-style-2" placeholder="Enter your Code" id="code">
                                    <button class="kd-btn kd-btn-lg kd-btn-grey-1">Apply</button>
                                </div>
                            </form>
                        </div>
                        <div class="kd-separator"></div>
                        <div class="kd-box-content text-right">
                            <p class="text-dark-1 mnt-8 mnb-8">Total Payment: <strong class="fs-18">$98</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="kd-box kd-box-decorated">
                        <div class="kd-box-content">
                            <h2 class="h6 mnt-5 mnb-5">Payments Details</h2>
                        </div>
                        <div class="kd-separator"></div>
                        <div class="kd-box-content">
                            <p class="mnt-6 mb-3 text-dark-1">Choose Payment Method</p>
                            <ul class="nav kd-tab kd-tab-payment mnt-10 row vertical-gap sm-gap" role="tablist">
                                <li class="nav-item col-sm-6">
                                    <a class="nav-link active kd-tab-payment-method" id="card-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card" aria-selected="true">
                                        <img src="<?php echo $_CONFIG['storeurl']; ?>/assets/images/payment-card.png" alt="">
                                        <span class="kd-tab-payment-method-text">Credit Card</span>
                                    </a>
                                </li>
                                <li class="nav-item col-sm-6">
                                    <a class="nav-link kd-tab-payment-method" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false">
                                        <img src="<?php echo $_CONFIG['storeurl']; ?>/assets/images/payment-paypal.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade show active kd-tab-pane" id="card" role="tabpanel" aria-labelledby="card-tab">
                            <div class="kd-separator"></div>
                            <form action="#" class="kd-form">
                                <div class="kd-box-content">
                                    <div class="kd-form-group">
                                        <label for="firstname" class="mnt-7">First Name</label>
                                        <input type="text" class="form-control form-control-style-2" id="firstname" name="firstname" <?php if (isset($_SESSION['firstname'])) { ?> value="<?php echo $_SESSION['firstname']; ?>" <?php } else {} ?> placeholder="Enter your First Name">
                                    </div>
                                    <div class="kd-form-group">
                                        <label for="lastname" class="mnt-7">Last Name</label>
                                        <input type="text" class="form-control form-control-style-2" id="lastname" name="lastname" <?php if (isset($_SESSION['lastname'])) { ?> value="<?php echo $_SESSION['lastname']; ?>" <?php } else {} ?> placeholder="Enter your Last Name">
                                    </div>
                                    <div class="kd-form-group">
                                        <label for="email" class="mnt-7">Email</label>
                                        <input type="email" aria-describedby="emailHelp" class="form-control form-control-style-2" id="email" name="email" <?php if (isset($_SESSION['email'])) { ?> value="<?php echo $_SESSION['email']; ?>" <?php } else {} ?> placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="kd-separator"></div>
                                <div class="kd-box-content">
                                    <div class="kd-form-group">
                                        <label for="firstname" class="mnt-7">Address Line 1</label>
                                        <input type="text" class="form-control form-control-style-2" id="address1" name="address1" <?php if (isset($_SESSION['address1'])) { ?> value="<?php echo $_SESSION['address1']; ?>" <?php } else {} ?> placeholder="">
                                    </div>
                                    <div class="kd-form-group">
                                        <label for="lastname" class="mnt-7">Address Line 2</label>
                                        <input type="text" class="form-control form-control-style-2" id="address2" name="address2" <?php if (isset($_SESSION['address2'])) { ?> value="<?php echo $_SESSION['address2']; ?>" <?php } else {} ?> placeholder="">
                                    </div>
                                    <div class="kd-form-group">
                                        <label for="city" class="mnt-7">City / Town</label>
                                        <input type="text" class="form-control form-control-style-2" id="city" name="city" <?php if (isset($_SESSION['city'])) { ?> value="<?php echo $_SESSION['city']; ?>" <?php } else {} ?> placeholder="">
                                    </div>
                                    <div class="kd-form-group">
                                        <label for="state" class="mnt-7">State / Province</label>
                                        <input type="text" class="form-control form-control-style-2" id="state" name="state" <?php if (isset($_SESSION['state'])) { ?> value="<?php echo $_SESSION['state']; ?>" <?php } else {} ?> placeholder="">
                                    </div>
                                    <div class="kd-form-group">
                                        <label for="country" class="mnt-7">Country</label>
                                        <input type="text" class="form-control form-control-style-2" id="country" name="country" <?php if (isset($_SESSION['country'])) { ?> value="<?php echo $_SESSION['country']; ?>" <?php } else {} ?> placeholder="">
                                    </div>
                                    <div class="kd-form-group">
                                        <label for="postal" class="mnt-7">ZIP / Postal Code</label>
                                        <input type="text" class="form-control form-control-style-2" id="postal" name="postal" <?php if (isset($_SESSION['postal'])) { ?> value="<?php echo $_SESSION['postal']; ?>" <?php } else {} ?> placeholder="">
                                    </div>
                                </div>
                                <div class="kd-separator"></div>
                                <div class="kd-box-content">
                                    <div class="kd-form-group">
                                        <label for="name-card" class="mnt-7">Name on Card</label>
                                        <input type="text" class="form-control form-control-style-2" id="name-card" placeholder="Enter Full Name">
                                    </div>
                                    <div class="kd-form-group">
                                        <?php
                                        require 'payment/card.php';
                                        ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade kd-tab-pane" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                            <form method="post" action="<?php echo $_CONFIG['storeurl'] . '/assets/plugins/paypal/paypalcharge.php'; ?>">
                                <div class="kd-separator"></div>
                                <input name="itemname" value="test" hidden>
                                <input name="itemprice" value="97.99" hidden>
                                <input name="itemdescription" value="test" hidden>
                                <input name="itemquantity" value="1" hidden>
                                <input name="amount" value="97.99" hidden>
                                <div class="kd-box-content">
                                    <button name="submit" value="submit" type="submit" class="kd-btn kd-btn-xl kd-btn-block">Purchase $97.99</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>