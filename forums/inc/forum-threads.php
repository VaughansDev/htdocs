<?php
$sql = "SELECT * FROM forum_threads";
$result = $dbcon->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $threadId = $row['thread_id']; ?>
        <tr>
            <th scope="row">
                <a href="<?php echo $_CONFIG['forumsurl']; ?>/topics.php?threadId=<?php echo $threadId; ?>" class="kd-table-default-title"><?php echo $row['thread_title']; ?></a>
                <p class="mb-0"><?php echo $row['thread_description']; ?></p>
            </th>
            <?php $sql2 = "SELECT * FROM forum_topics WHERE topic_thread_id = '$threadId'";
            $result2 = $dbcon->query($sql2);
            $topicCount = $result2->num_rows; ?>
            <td><?php echo $topicCount; ?></td>
            <?php
            $sql3 = "SELECT * FROM forum_posts WHERE post_thread_id = '$threadId'";
            $result3 = $dbcon->query($sql3);
            $postCount = $result3->num_rows; ?>
            <td><?php echo $postCount; ?></td>
            <?php if ($postCount > 0) { ?>
                <td class="kd-table-lastPost">
                    <div class="kd-table-default-info">
                        <p class="mb-0">by <?php echo $row['post_username']; ?><span class="dib"><?php echo $row['post_create_date']; ?>,</span> <span class="dib"><?php echo $row['post_create_time']; ?></span></p>
                    </div>
                </td>
            <?php } else { ?>
                <td class="kd-table-lastPost">
                    <div class="kd-table-default-info">
                        <p class="mb-0">No recent posts</p>
                    </div>
                </td>
            <?php }
            ?>
        </tr>
<?php }
}
$dbcon->close(); ?>