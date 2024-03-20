<div class="kd-widget kd-box kd-box-decorated">
    <div class="kd-widget-title"> Latest Topics </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';

    $sql = "SELECT * FROM forum_topics DESC";
    $result = $dbcon->query($sql);
    if ($result->num_rows > 0) { 
        while ($row = $result->fetch_assoc()) { ?>
        <a href="single-article.php" class="kd-widget-link">
            <span class="kd-widget-link-text"><?php echo $row['topic_title'];?></span>
            <span class="kd-widget-link-date"><?php echo $row['topic_post_date'];?></span>
        </a>
    <?php } 
    } else { ?>
        <a href="single-article.php" class="kd-widget-link">
            <span class="kd-widget-link-text">No new topics found</span>
        </a>
    <?php } 
    $dbcon->close(); ?>
</div>