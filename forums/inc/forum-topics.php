<?php
require 'dbcon.php';
$threadId = $_GET['threadId'];
$sql2 = "SELECT * FROM forum_threads WHERE thread_id = '$threadId'";
$result2 = $dbcon->query($sql2);
while ($row2 = $result2->fetch_assoc()) { ?>
    <div class="kd-blog-post-box pt-30 pb-30">
        <h2 class="h4 mnt-5 mb-9"><?php echo $row2['thread_title']; ?></h2>
        <!-- START: Breadcrumbs -->
        <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
            <li><a href="<?php echo $_CONFIG['supporturl']; ?>">Support Home</a></li>
            <li><a href="<?php echo $_CONFIG['forumsurl']; ?>">Forums</a></li>
            <li><?php echo $row2['thread_title']; ?></li>
        </ul>
        <!-- END: Breadcrumbs -->
        <div class="col-auto">
            <a href="<?php echo $_CONFIG['ticketsurl']; ?>/new-ticket.php" class="kd-btn kd-btn-md">Submit a ticket</a>
        </div>    </div>
<?php } ?>
<div class="table-responsive">
    <table class="kd-table kd-table-default">
        <thead>
            <tr>
                <th scope="col">Topic</th>
                <th scope="col">Views</th>
                <th scope="col">Replies</th>
                <th scope="col">Last Post</th>
            </tr>
        </thead>
        <tbody>
            <?php $sql = "SELECT * FROM forum_topics WHERE topic_thread_id = '$threadId'";
            $result = $dbcon->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $topicId = $row['topic_id']; ?>
                    <tr>
                        <th scope="row" class="kd-table-topics">
                            <a href="<?php echo $_CONFIG['forumsurl']; ?>/topic.php?threadId=<?php echo $threadId; ?>&topicId=<?php echo $topicId; ?>" class="kd-table-default-title"><?php echo $row['topic_title']; ?></a>
                            <div class="kd-table-default-info">
                                <p class="mb-0">by <?php echo $row['topic_creator_username']; ?> <span class="dib"><?php echo $row['topic_create_date']; ?>,</span> <span class="dib"><?php echo $row['topic_create_time']; ?></span></p>
                            </div>
                        </th>
                        <td><?php echo $row['topic_views']; ?></td>
                        <?php
                        $sql4 = "SELECT * FROM forum_posts WHERE post_thread_id = '$threadId' AND post_topic_id = '$topicId'";
                        $result4 = $dbcon->query($sql4);
                        $postCount = $result4->num_rows; ?>
                        <td><?php echo $postCount; ?></td>
                        <?php if ($postCount > 0) {
                            $sql3 = "SELECT * FROM forum_posts WHERE post_thread_id = '$threadId' AND post_topic_id = '$topicId' ORDER BY id DESC LIMIT 1";
                            $result3 = $dbcon->query($sql3);
                            while ($row3 = $result3->fetch_assoc()) { ?>
                                <td class="kd-table-lastPost">
                                    <div class="kd-table-default-info">
                                        <p class="mb-0">by <?php echo $row3['post_username']; ?><br>
                                            <span class="dib"><?php echo $row3['post_create_date']; ?>,</span> <span class="dib"><?php echo $row3['post_create_time']; ?></span>
                                        </p>
                                    </div>
                                </td>
                            <?php }
                        } else { ?>
                            <td class="kd-table-lastPost">
                                <div class="kd-table-default-info">
                                    <p class="mb-0">No recent posts</p>
                                </div>
                            </td>
                        <?php } ?>
                    </tr>
            <?php }
            }
            $dbcon->close(); ?>
        </tbody>
    </table>
</div>