<?php
require 'dbcon.php';

$returnUri = $_POST['returnUri'];
$postId = date('dmyhis');
$threadId = $_POST['threadId'];
$topicId = $_POST['topicId'];
$username = $_POST['username'];
$accountId = $_POST['accountId'];
$profilePic = $_POST['profilePic'];
$replyContent = $_POST['replyContent'];
$replyDate = date('M j, Y');
$replyTime = date('g:i a');

if (isset($_POST['submit']) && $_POST['submit'] == "submit-reply") {    
    $sql = "INSERT INTO forum_posts (post_id, post_topic_id, post_thread_id, post_profile_pic, post_create_date, post_create_time, post_username, post_account_id, post_content) VALUES ('$postId', '$topicId', '$threadId', '$profilePic', '$replyDate', '$replyTime', '$username', '$accountId', '$replyContent')";
    $result = $dbcon->query($sql);
    if ($result) {
        header("location: " . $_CONFIG['forumsurl'] . $returnUri);
    } else {
        header("location: " . $_CONFIG['forumsurl'] . "/topic.php?threadId=" . $threadId . "&topicId=" . $topicId."&postStatus=dbError");
    }
    $dbcon->close();
} else {
    header("location: " . $_CONFIG['forumsurl'] . "/topic.php?threadId=" . $threadId . "&topicId=" . $topicId."&postStatus=submitError");
}
?>