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
    </div>
<?php } ?>

<div class="kd-box kd-box-decorated">
    <div class="kd-blog-post">
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
                    <?php
                    $total_pages = $dbcon->query("SELECT * FROM forum_topics WHERE topic_thread_id = '$threadId'")->num_rows;
                    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
                    $num_results_on_page = 15;
                    $calc_page = ($page - 1) * $num_results_on_page;
                    $sql = "SELECT * FROM forum_topics WHERE topic_thread_id = '$threadId' ORDER BY id DESC LIMIT $calc_page, $num_results_on_page";
                    $result = $dbcon->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $topicId = $row['topic_id']; ?>
                            <tr>
                                <th scope="row" class="kd-table-topics">
                                    <a href="<?php echo $_CONFIG['forumsurl']; ?>/topic.php?threadId=<?php echo $threadId; ?>&topicId=<?php echo $topicId; ?>" class="kd-table-default-title"><?php echo $row['topic_title']; ?></a>
                                    <div class="kd-table-default-info">
                                        <p class="mb-0">by <?php if ($row['topic_creator_username'] == 'VaughanHD') {
                                                                echo '<span style="color: #FF0000;"><strong>[ADMIN]</strong> </span>' . $row['topic_creator_username'];
                                                            } else {
                                                                echo $row['topic_creator_username'];
                                                            } ?><br>
                                            on <span class="dib"><?php echo $row['topic_create_date']; ?>,</span> <span class="dib"><?php echo $row['topic_create_time']; ?></span></p>
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
                                                <p class="mb-0">by <?php if ($row3['post_username'] == 'VaughanHD') {
                                                                        echo '<span style="color: #FF0000;"><strong>[ADMIN]</strong> </span>' . $row3['post_username'];
                                                                    } else {
                                                                        echo $row3['post_username'];
                                                                    } ?><br>
                                                    on <span class="dib"><?php echo $row3['post_create_date']; ?>,</span> <span class="dib"><?php echo $row3['post_create_time']; ?></span>
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
    </div>
</div>
<?php if (ceil($total_pages / $num_results_on_page) > 0) { ?>
    <ul class="kd-pagination mt-40">
        <?php if ($page > 1) { ?>
            <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['forumsurl']; ?>/topics.php?threadId=<?php echo $threadId; ?>&page=<?php echo $page - 1; ?>"><i class="fa-solid fa-chevron-left"></i></a></li>
        <?php }
        if ($page > 3) { ?>
            <li><a href="<?php echo $_CONFIG['forumsurl']; ?>/topics.php?threadId=<?php echo $threadId; ?>&page=1">1</a></li>
            <li class="kd-pagination-space">...</li>
        <?php }
        if ($page - 2 > 0) { ?>
            <li><a href="<?php echo $_CONFIG['forumsurl']; ?>/topics.php?threadId=<?php echo $threadId; ?>&page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li>
        <?php }
        if ($page - 1 > 0) { ?>
            <li><a href="<?php echo $_CONFIG['forumsurl']; ?>/topics.php?threadId=<?php echo $threadId; ?>&page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li>
        <?php } ?>
        <li class="active"><a href="<?php echo $_CONFIG['forumsurl']; ?>/topics.php?threadId=<?php echo $threadId; ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
        <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1) { ?>
            <li>
                <a href="<?php echo $_CONFIG['forumsurl']; ?>/topics.php?threadId=<?php echo $threadId; ?>&page=<?php echo $page + 1 ?>">
                    <?php echo $page + 1 ?>
                </a>
            </li>
        <?php }
        if ($page + 2 < ceil($total_pages / $num_results_on_page) + 2) { ?>
            <li><a href="<?php echo $_CONFIG['forumsurl']; ?>/topics.php?threadId=<?php echo $threadId; ?>&page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li>
        <?php }
        if ($page < ceil($total_pages / $num_results_on_page) - 2) { ?>
            <li class="kd-pagination-space">...</li>
            <li>
                <a href="<?php echo $_CONFIG['forumsurl']; ?>/topics.php?threadId=<?php echo $threadId; ?>&page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a>
            </li>
        <?php }
        if ($page < ceil($total_pages / $num_results_on_page)) { ?>
            <li class="kd-pagination-icon"><a href="<?php echo $_CONFIG['forumsurl']; ?>/topics.php?threadId=<?php echo $threadId; ?>&page=<?php echo $page + 1 ?>"><i class="fa-solid fa-chevron-right"></i></a></li>
        <?php } ?>
    </ul>
<?php } ?>