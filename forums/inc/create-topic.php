<?php
if (isset($_POST['submit']) && $_POST['submit'] == 'submit'){
    if (isset($_POST['topicTitle'])) {
        $threadId = $_POST['threadId'];
        $accountId = $_POST['accountId'];
        $username = $_POST['username'];
        $topicTitle = $_POST['topicTitle'];
        $topicId = '20151693' . date('YmdHis');
        $topicViews = 0;
        $topicCreateDate = date('j M Y');
        $topicCreateTime = date('h:i a');

        $sql = "INSERT INTO forum_topics (topic_id, topid_thread_id, topic_title, topic_creator_id, topic_create_date, topic_create_time, topic_creator_username, topic_views) 
        VALUES ('$topicId', '$threadId', '$topicTitle', '$accountId', '$topicCreateDate', '$topicCreateTime', '$username', '$topicViews')";
        if ($result = $dbcon->query($sql)) {
            header("location: " . $_CONFIG['forumsurl'] . "/topic.php?threadId=" . $threadId . "&topicId=".$topicId);
        } else {
            header("location: " . $_CONFIG['forumsurl'] . "/topics.php?threadId=" . $threadId . "&error=createError");
        }
    } else {
        header("location: ".$_CONFIG['forumsurl']."/topics.php?threadId=".$threadId."&error=emptyTopicTitle");
    }
} else {
    header("location: ".$_CONFIG['forumsurl']."/topics.php?threadId=".$threadId."&error=submitError");
}
?>