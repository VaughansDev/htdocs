<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
                    <img src="<?php echo $row['post_profile_pic']; ?>" alt="">
                </div>
                <div class="kd-comment-cont">
                    <div class="kd-comment-head">
                        <a href="javascript:;" class="kd-comment-name"><?php if ($row['post_username'] == 'VaughanHD') {
                                                                            echo '<span style="color: #FF0000;"><strong>[ADMIN]</strong> </span>' . $row['post_username'];
                                                                        } else {
                                                                            echo $row['post_username'];
                                                                        } ?></a>
                    </div>
                    <div class="kd-comment-date"><?php echo $row['post_create_date'] . ', ' . $row['post_create_time']; ?></div>
                    <div class="kd-separator"></div>
                    <div class="kd-comment-text">
                        <?php echo $row['post_content']; ?>
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

<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'true') { ?>
    <div class="kd-separator"></div>
    <div class="kd-blog-post-box">
        <h3 class="h6 mb-25">Write a Reply</h3>
        <form class="kd-form" method="post" id="post-reply" action="<?php echo $_CONFIG['forumsurl']; ?>/inc/post-reply.php">
            <div class="kd-form-group">
                <input type="text" name="topicId" value="<?php echo $_GET['topicId']; ?>" hidden>
                <input type="text" name="threadId" value="<?php echo $_GET['threadId']; ?>" hidden>
                <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" hidden>
                <input type="text" name="accountId" value="<?php echo $_SESSION['accountid']; ?>" hidden>
                <input type="text" name="profilePic" value="<?php echo $_SESSION['profilepic']; ?>" hidden>
                <textarea name="replyContent" id="textarea" style="display:none;" hidden></textarea>
            </div>
            <div class="kd-form-group">
                <div id="summernote"></div>
            </div>
            <div class="kd-form-group">
                <div class="row justify-content-between vertical-gap kd-dropzone-attachment">
                    <div class="col-auto kd-dropzone-attachment-btn">
                        <button class="kd-btn kd-btn-lg" type="submit" value="submit-reply" name="submit">Post Reply</button>
                    </div>
                </div>
                <!-- END: Dropzone -->
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Type your reply here...',
                tabsize: 2,
                height: 200
            });
        });
    </script>
    <script>
        $("#post-reply").on("submit", function() {
            var editor = document.querySelector('#editor')
            var content = editor.children[0].innerHTML
            $("#textarea").val(content);
        })
    </script>
<?php } else { ?>
    <div class="kd-separator"></div>
    <div class="kd-blog-post-box">
        <div class="align-center text-center center" style="text-align:center;">
            <h3 class="h6 mb-25">You must be logged in to reply</h3>
            <span><a href="<?php echo $_CONFIG['accounturl']; ?>/login.php" class="kd-btn kd-btn-md">Login</a></span>
            <span><a href="<?php echo $_CONFIG['accounturl']; ?>/register.php" class="kd-btn kd-btn-md">Sign Up</a></span>
        </div>
    </div>
<?php }
$dbcon->close(); ?>