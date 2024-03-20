<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';

$sql = "SELECT * FROM forum_topics";
$result = $dbcon->query($sql);
if ($result->num_rows > 0) { ?>
    <div class="kd-widget kd-box kd-box-decorated">
        <div class="kd-widget-title">Articles Categories</div>
        <ul class="kd-widget-categories">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <li>
                    <a href="single-article.php">
                        <i class="fa-solid fa-caret-right"></i>
                        <span class="kd-widget-categories-category">Quantial</span>
                        <?php $catid = $row['category_id'];
                        $sql2 = "SELECT * FROM kb_articles WHERE category_id = '$catid'";
                        $result2 = $dbcon->query($sql2); 
                        $catnum = $result2->num_rows; ?>
                        <span class="kd-widget-categories-badge">(<?php echo $catnum; ?>)</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
<?php }
$dbcon->close(); ?>