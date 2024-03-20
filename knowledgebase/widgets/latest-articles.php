<div class="kd-widget kd-box kd-box-decorated">
    <div class="kd-widget-title"> Latest Articles </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';

    $sql = "SELECT * FROM forum_topics ORDER BY id DESC";
    $result = $dbcon->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <a href="topic.php?tid=<?php echo $row['article_id']; ?>" class="kd-widget-link">
                <span class="kd-widget-link-text"><?php echo $row['article_title']; ?></span>
                <span class="kd-widget-link-date"><?php echo $row['article_create_date']; ?></span>
            </a>
        <?php }
    } else { ?>
        <a class="kd-widget-link">
            <span class="kd-widget-link-text">No new articles found</span>
        </a>
    <?php }
    $dbcon->close(); ?>
</div>