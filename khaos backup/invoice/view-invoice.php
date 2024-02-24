<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Invoice | Khaos Development</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_GET['invnum'])) {
        $invoiceno = $_GET['invnum'];
        $sql = "SELECT * FROM invoices WHERE invoicenum = '$invoiceno'";
        $result = $dbcon->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
    ?>
                <section id="invoice">
                    <div class="container my-md-5 py-5 bg-color">

                        <div class=" d-md-flex justify-content-between align-items-center  mb-5  ">
                            <div class="mt-5 mt-md-0">
                                <h2 class="display-6 text-khaos fw-bold">Invoice</h2>
                                <p class="m-0">Invoice No: <?php echo $row['invoicenum']; ?></p>
                            </div>
                            <div class="mt-5 mt-md-0">
                                <img src="<?php echo $_CONFIG['domain']; ?>/assets/img/logo/logo.png" alt="">
                            </div>


                        </div>

                        <div class="bg-light rounded-5 p-5">
                            <div class="d-md-flex justify-content-between">
                                <div>
                                    <p class="text-khaos fw-bold">Invoice To</p>
                                    <h5><?php echo $row['clientname']; ?></h5>
                                    <ul class="list-unstyled">
                                        <li><?php echo $row['clientemail']; ?></li>
                                        <li><?php echo $row['clientaddress']; ?></li>
                                        <li><?php echo $row['clientcity'] . ', ' . $row['clientcountry'] . ', ' . $row['clientpostal']; ?></li>
                                    </ul>
                                </div>
                                <div class="text-md-end mt-5 mt-md-0">
                                    <p class="text-khaos fw-bold">Invoice From</p>
                                    <h5>Khaos Development</h5>
                                    <ul class="list-unstyled">
                                        <li>Billing Dept.</li>
                                        <li>billing@khaosdevelopment.com</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="d-md-flex justify-content-between mt-4">
                                <div class="mt-5 mt-md-0">
                                    <p class="text-khaos fw-bold">Payment Method</p>
                                    <h5>Payment Info</h5>
                                    <ul class="list-unstyled">
                                        <?php if ($row['paymentstatus'] == 'PAID') { ?>
                                            <li><span class="fw-semibold">Payment Status: </span>
                                                <span class="fw-bold" style="color: #66ff00;">PAID</span>
                                            </li>
                                            <li><span class="fw-semibold">Transaction No: </span> <?php echo $row['transactionnum']; ?></li>
                                            <li><span class="fw-semibold">Payment Type: </span> <?php echo $row['paymenttype']; ?></li>
                                            <li><span class="fw-semibold">Payment Date: </span> <?php echo $row['paymentdate']; ?></li>
                                        <?php } elseif ($row['paymentstatus'] == 'UNPAID') { ?>
                                            <li><span class="fw-semibold">Payment Status: </span><span class="fw-bold" style="color: #ff3300;">UNPAID</span>
                                            </li>
                                        <?php } else { ?>
                                            <li><span class="fw-semibold">Payment Status: </span>
                                                <span class="fw-bold" style="color: #ff3300;">UNPAID</span>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="text-md-end mt-5 mt-md-0">
                                    <p class="text-khaos fw-bold">Date</p>
                                    <h5>Invoice Date</h5>
                                    <ul class="list-unstyled">
                                        <li><span class="fw-semibold">Invoice Date:</span> <?php echo $row['invoicedate']; ?></li>
                                        <li><span class="fw-semibold">Due Date:</span> <?php echo $row['invoiceduedate']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                        <table class="table border my-5">
                            <thead>
                                <tr class="bg-khaos">
                                    <th scope="col" class="text-black">Product Name</th>
                                    <th scope="col" class="text-black">Product Type</th>
                                    <th scope="col" class="text-black">License Type</th>
                                    <th scope="col" class="text-black">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['productname']; ?></td>
                                    <td><?php echo $row['producttype']; ?></td>
                                    <td><?php echo $row['licensetype']; ?></td>
                                    <td>$<?php echo $row['productprice']; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="fw-bold">Sub-Total</td>
                                    <td class="fw-bold">$<?php echo $row['invoicesubtotal']; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="fw-bold">Discount</td>
                                    <td class="fw-bold">$<?php echo $row['invoicediscount']; ?> (<?php echo $row['invoicediscountpercent']; ?>%)</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="fw-bold">Tax (15%)</td>
                                    <td class="fw-bold">$<?php echo $row['invoicetax']; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="text-khaos fs-5 fw-bold">Grand-Total</td>
                                    <td class="text-khaos fs-5 fw-bold">$<?php echo $row['invoicetotal']; ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bg-light rounded-5 p-5">
                            <div class="row mt-4 mb-5">
                                <div class="col-md-6">

                                    <h5 class="fw-bold mb-4">Contact Info</h5>
                                    <ul class="list-unstyled">
                                        <li><iconify-icon class="social-icon text-khaos fs-5 me-2" icon="ic:baseline-email" style="vertical-align:text-bottom"></iconify-icon> <a href="mailto:billing@khaosdevelopment.com">billing@khaosdevelopment.com</a></li>
                                        <li><iconify-icon class="social-icon text-khaos fs-5 me-2" icon="ic:baseline-email" style="vertical-align:text-bottom"></iconify-icon> <a href="mailto:support@khaosdevelopment.com">support@khaosdevelopment.com</a></li>
                                        <li><iconify-icon class="social-icon text-khaos fs-5 me-2" icon="ic:baseline-email" style="vertical-align:text-bottom"></iconify-icon> <a href="mailto:contact@khaosdevelopment.com">contact@khaosdevelopment.com</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-6 mt-5 mt-md-0">
                                    <h5 class="fw-bold mb-4">Legal</h5>
                                    <ul class="list-unstyled">
                                        <li><a href="<?php echo $_CONFIG['domain']; ?>/terms.php">Terms & Conditions</a></li>
                                        <li><a href="<?php echo $_CONFIG['domain']; ?>/privacy.php">Privacy Policy</a></li>
                                        <li><a href="<?php echo $_CONFIG['domain']; ?>/refund.php">Refund Policy</a></li>
                                    </ul>
                                </div>

                            </div>

                            <div class="text-center mt-5">
                                <p class="text-muted"><span class="fw-semibold">NOTICE: </span> An interest charge of 3.5% will be
                                    added to unpaid balances every 30 days.</p>
                            </div>
                        </div>

                        <div id="footer-bottom">
                            <div class="container mt-5 border-top">
                                <div class="row mt-4">
                                    <div class="col-md-6 copyright">
                                        <p>Copyright © <?php echo date('Y'); ?> Khaos Development. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>



                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
                <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <?php }
        }
    } else {
        //header("location: ".$_CONFIG['domain']."/dashboard");
    } ?>
</body>

</html>