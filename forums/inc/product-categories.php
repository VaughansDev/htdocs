<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
$sql = "SELECT * FROM product_categories";
$result = $dbcon->query($sql);
if ($result->num_rows > 0) {
    $sql2 = "SELECT * FROM products";
    $result2 = $dbcon->query($sql2); ?>
    <li <?php if (!isset($_GET['cat'])) {
            echo 'class="active"';
        } ?>><a href="<?php echo $_CONFIG['storeurl']; ?>">All Products <span>(<?php echo $result2->num_rows; ?>)</span></a></li>
    <?php
    while ($row = $result->fetch_assoc()) {
        $cat = $row['catlink'];
        $sql3 = "SELECT * FROM products WHERE category = '$cat'";
        $result3 = $dbcon->query($sql3);
        $productcount = $result3->num_rows;

        if ($productcount != 0) { ?>
            <li <?php if (isset($_GET['cat']) && $_GET['cat'] == $cat) { echo ' class="active"'; } ?>><a href="<?php echo $_CONFIG['storeurl']; ?>?cat=<?php echo $row['catlink']; ?>"><?php echo $row['catname']; ?> <span>(<?php echo $productcount; ?>)</span></a></li>
        <?php }
    }
} else {
    echo 'No categories found';
}
?>