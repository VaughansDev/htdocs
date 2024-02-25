<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != TRUE) { ?>
    <script>
        window.location.href = "<?php echo $_CONFIG['accounturl']; ?>/login.php";
    </script>
<?php } ?>
<div class="kd-main">
    <header class="kd-header kd-box-5">
        <div class="container">
            <div class="bg-image bg-image-parallax">
                <img src="<?php echo $_CONFIG['accounturl']; ?>/assets/images/bg-header-5.png" class="jarallax-img" alt="">
                <div style="background-color: rgba(27, 27, 27, .8);"></div>
            </div>
            <div class="container mnb-8">
                <h1 class="h4 mb-10 text-white text-center">Invoices</h1>
                <!-- START: Breadcrumbs -->
                <ul class="kd-breadcrumbs text-center">
                    <li><a href="index-2.php">Home</a></li>
                    <li>Items &amp; Licenses</li>
                </ul>
                <!-- END: Breadcrumbs -->
            </div>
        </div>
    </header>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="kd-box-decorated">
                        <div class="table-responsive">
                            <table class="kd-table kd-table-default">
                                <thead>
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">License Key</th>
                                        <th scope="col">License</th>
                                        <th scope="col">Website</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="kd-table-default-product">
                                            <a href="product.php">Quantial – Moving Upon Signs Moveth Lesser</a>
                                        </th>
                                        <td class="kd-table-licenseKey">98vbjy-t46879ug-fd9iytvh-578g0-8ubfyj00</td>
                                        <td>Standard</td>
                                        <td class="kd-table-website kd-table-default-website"><a href="#">https://example.info/</a></td>
                                        <td>21.07.2018</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="kd-table-default-product">
                                            <a href="product.php">Sensific – Saying Beast Lesser for in Fruitful</a>
                                        </th>
                                        <td class="kd-table-licenseKey">98vbjy-t46879ug-fd9iytvh-578g0-8ubfyj00</td>
                                        <td>Extended</td>
                                        <td class="kd-table-website kd-table-default-website">Not activated</td>
                                        <td>18.07.2018</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="kd-table-default-product">
                                            <a href="product.php">Minist – Subdue Above for Signs Dry is Have Great</a>
                                        </th>
                                        <td class="kd-table-licenseKey">98vbjy-t46879ug-fd9iytvh-578g0-8ubfyj00</td>
                                        <td>Standard</td>
                                        <td class="kd-table-website kd-table-default-website"><a href="#" class="kd-btn kd-btn-md kd-btn-grey-2">Deactivate</a></td>
                                        <td>18.07.2018</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="kd-table-default-product">
                                            <a href="product.php">Desty – She'd Under Light Over Multiply Stars Winged</a>
                                        </th>
                                        <td class="kd-table-licenseKey">98vbjy-t46879ug-fd9iytvh-578g0-8ubfyj00</td>
                                        <td>Extended</td>
                                        <td class="kd-table-website kd-table-default-website">Not activated</td>
                                        <td>15.07.2018</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="kd-table-default-product">
                                            <a href="product.php">Silies – Grass Living Fly Subdue After Fruitful</a>
                                        </th>
                                        <td class="kd-table-licenseKey">98vbjy-t46879ug-fd9iytvh-578g0-8ubfyj00</td>
                                        <td>Extended</td>
                                        <td class="kd-table-website kd-table-default-website">Not activated</td>
                                        <td>03.07.2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>