<?php
require 'dbcon.php';
$threadId = $_GET['threadId'];
$topicId = $_GET['topicId'];

$sql3 = "SELECT topic_views FROM forum_topics WHERE topic_thread_id = '$threadId' AND topic_id = '$topicId'";
$result3 = $dbcon->query($sql3);
while ($row3 = $result3->fetch_assoc()) {
    $curViews = $row3['topic_views'];
    $newViews = $curViews + 1;
    $sql4 = "UPDATE forum_topics SET topic_views = '$newViews' WHERE topic_thread_id = '$threadId' AND topic_id = '$topicId'";
    $dbcon->query($sql4);
}

$sql5 = "SELECT * FROM forum_threads WHERE thread_id = '$threadId'";
$result5 = $dbcon->query($sql5);
while ($row5 = $result5->fetch_assoc()) {
    $threadTitle = $row5['thread_title'];
}
$sql2 = "SELECT * FROM forum_topics WHERE topic_thread_id = '$threadId' AND topic_id = '$topicId'";
$result2 = $dbcon->query($sql2);
while ($row2 = $result2->fetch_assoc()) { ?>
    <div class="kd-blog-post-box pt-30 pb-30">
        <h2 class="h4 mnt-5 mb-9"><?php echo $row2['topic_title']; ?></h2>
        <!-- START: Breadcrumbs -->
        <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
            <li><a href="<?php echo $_CONFIG['supporturl']; ?>">Support Home</a></li>
            <li><a href="<?php echo $_CONFIG['forumsurl']; ?>">Forums</a></li>
            <li><a href="<?php echo $_CONFIG['forumsurl']; ?>/topics.php?threadId=<?php echo $threadId; ?>"><?php echo $threadTitle; ?></a></li>
            <li><?php echo $row2['topic_title']; ?></li>
        </ul>
        <!-- END: Breadcrumbs -->
    </div>
    <div class="kd-separator"></div>
    <?php }
$sql = "SELECT * FROM forum_posts WHERE post_thread_id = '$threadId' AND post_topic_id = '$topicId'";
$result = $dbcon->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <div class="kd-comment kd-topic-comment">
            <div>
                <div class="kd-comment-img">
                    <img src="<?php echo $_CONFIG['accounturl']; ?>/assets/images/avatar-1.png" alt="">
                </div>
                <div class="kd-comment-cont">
                    <div class="kd-comment-head">
                        <a href="#" class="kd-comment-name"><?php echo $row['post_username']; ?></a>
                    </div>
                    <div class="kd-comment-date"><?php echo $row['post_create_date'] . ', ' . $row['post_create_time']; ?></div>
                    <div class="kd-comment-text">
                        <p class="mb-0"><?php echo $row['post_content']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="kd-separator"></div>
<?php }
} ?>


<div class="kd-blog-post-box pt-30 pb-30">
    <ul class="kd-pagination">
        <li class="kd-pagination-icon"><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
        <li><a href="#">1</a></li>
        <li class="kd-pagination-space">...</li>
        <li><a href="#">8</a></li>
        <li class="active"><a href="#">9</a></li>
        <li><a href="#">10</a></li>
        <li class="kd-pagination-space">...</li>
        <li><a href="#">18</a></li>
        <li class="kd-pagination-icon"><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
    </ul>
</div>


<div class="kd-separator"></div>
<div class="kd-blog-post-box">
    <h3 class="h6 mb-25">Write a Reply</h3>
    <form class="kd-form" action="#">
        <div class="kd-form-group">
            <div class="kd-editor-quill">
                <div class="kd-editor" data-editor-height="150" data-editor-maxHeight="250"></div>
            </div>
        </div>
        <div class="kd-form-group">
            <div class="row justify-content-between vertical-gap kd-dropzone-attachment">
                <div class="col-auto kd-dropzone-attachment-btn">
                    <button class="kd-btn kd-btn-lg" type="button" name="button">Post Reply</button>
                </div>
            </div>
            <!-- END: Dropzone -->
        </div>
    </form>
</div>
<?php $dbcon->close(); ?>