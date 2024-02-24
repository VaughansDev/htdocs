<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
$sql = "SELECT * FROM product_tags";
$result = $dbcon->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <li class="tag-item"><a href="<?php echo $_CONFIG['domain']; ?>/shop.php?tag=<?php echo $row['taglink']; ?>"><?php echo $row['tagname']; ?></a></li>
    <?php }
} else {
    echo 'No tags found';
}
?>