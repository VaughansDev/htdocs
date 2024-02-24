<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
$sql1 = "SELECT * FROM featured_products WHERE id = 1";
$result1 = $dbcon->query($sql1);
if ($result1->num_rows > 0) {
    while ($row1 = $result1->fetch_assoc()) {
?>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="kd-portfolio-item kd-block-decorated">
                <div class="kd-portfolio-item-image">
                    <div class="kd-portfolio-item-overlay" style="background-color: rgba(27, 27, 27, .8);">
                        <a href="<?php echo $row1['demolink']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Live Demo</a>
                        <a href="<?php echo $row1['storelink']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Buy Now</a>
                    </div>
                    <img src="<?php echo $row1['img']; ?>" alt="">
                </div>
                <a href="product.php" class="kd-portfolio-item-info">
                    <span class="kd-portfolio-item-title"><?php echo $row1['name']; ?></span>
                    <span class="kd-portfolio-item-price">$<?php echo $row1['price']; ?></span>
                </a>
            </div>
        </div>
    <?php
    }
}
$sql2 = "SELECT * FROM featured_products WHERE id = 2";
$result2 = $dbcon->query($sql2);
if ($result2->num_rows > 0) {
    while ($row2 = $result2->fetch_assoc()) {
    ?>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="kd-portfolio-item kd-block-decorated">
                <div class="kd-portfolio-item-image">
                    <div class="kd-portfolio-item-overlay" style="background-color: rgba(27, 27, 27, .8);">
                        <a href="<?php echo $row2['demolink']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Live Demo</a>
                        <a href="<?php echo $row2['storelink']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Buy Now</a>
                    </div>
                    <img src="<?php echo $row2['img']; ?>" alt="">
                </div>
                <a href="product.php" class="kd-portfolio-item-info">
                    <span class="kd-portfolio-item-title"><?php echo $row2['name']; ?></span>
                    <span class="kd-portfolio-item-price">$<?php echo $row2['price']; ?></span>
                </a>
            </div>
        </div>
    <?php
    }
}
$sql3 = "SELECT * FROM featured_products WHERE id = 3";
$result3 = $dbcon->query($sql3);
if ($result3->num_rows > 0) {
    while ($row3 = $result3->fetch_assoc()) {
    ?>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="kd-portfolio-item kd-block-decorated">
                <div class="kd-portfolio-item-image">
                    <div class="kd-portfolio-item-overlay" style="background-color: rgba(27, 27, 27, .8);">
                        <a href="<?php echo $row3['demolink']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Live Demo</a>
                        <a href="<?php echo $row3['storelink']; ?>" class="kd-btn kd-btn-md kd-btn-transparent-style-2 m-10">Buy Now</a>
                    </div>
                    <img src="<?php echo $row3['img']; ?>" alt="">
                </div>
                <a href="product.php" class="kd-portfolio-item-info">
                    <span class="kd-portfolio-item-title"><?php echo $row3['name']; ?></span>
                    <span class="kd-portfolio-item-price">$<?php echo $row3['price']; ?></span>
                </a>
            </div>
        </div>
<?php
    }
}
$dbcon->close();
?>