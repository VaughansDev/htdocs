<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>
<div class="kd-main">
    <header class="kd-header kd-box-1">
        <div class="container">
            <div class="bg-image bg-image-parallax">
                <img src="<?php echo $_CONFIG['storeurl']; ?>/assets/images/bg-header-2.png" class="jarallax-img" alt="">
                <div style="background-color: rgba(27, 27, 27, .8);"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <h1 class="h2 mb-30 text-white text-center">Digital Products</h1>
                    <form action="#" class="kd-form kd-form-group-inputs">
                        <input type="text" name="" value="" class="form-control" placeholder="Keyword search...">
                        <button class="kd-btn kd-btn-lg">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="kd-isotope-container">
        <div class="kd-box bg-white">
            <div class="container">
                <ul class="kd-links kd-isotope-filter text-center">
                    <?php
                    require $_SERVER['DOCUMENT_ROOT'] . '/inc/product-categories.php';
                    ?>
                </ul>
            </div>
        </div>
        <div class="kd-separator"></div>
        <div class="kd-box-5 pb-100 bg-grey-6">
            <div class="container">
                <?php
                require $_SERVER['DOCUMENT_ROOT'] . '/inc/products.php';
                ?>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>