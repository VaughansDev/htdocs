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
                        <a href="javascript:;" class="kd-comment-name"><?php if ($row['post_username'] == 'VaughanHD') { echo '<span style="color: #FF0000;"><strong>[ADMIN]</strong> </span>'.$row['post_username']; } else { echo $row['post_username'];} ?></a>
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
    <form class="kd-form" method="post" action="<?php echo $_CONFIG['forumsurl']; ?>/inc/post-reply.php">
        <div class="kd-form-group">
            <div class="kd-editor-quill">
                <div class="ql-toolbar ql-snow">
                    <span class="ql-formats">
                        <button type="button" class="ql-bold">
                            <svg viewBox="0 0 18 18">
                                <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path>
                            </svg>
                        </button>
                        <button type="button" class="ql-italic">
                            <svg viewBox="0 0 18 18">
                                <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                            </svg>
                        </button>
                        <button type="button" class="ql-underline">
                            <svg viewBox="0 0 18 18">
                                <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect>
                            </svg>
                        </button>
                        <button type="button" class="ql-strike">
                            <svg viewBox="0 0 18 18">
                                <line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line>
                                <path class="ql-fill" d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"></path>
                                <path class="ql-fill" d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"></path>
                            </svg>
                        </button>
                    </span>
                    <span class="ql-formats">
                        <button type="button" class="ql-clean">
                            <svg class="" viewBox="0 0 18 18">
                                <line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line>
                                <line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line>
                                <line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line>
                                <line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line>
                                <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"></rect>
                            </svg>
                        </button>
                    </span>
                    <span class="ql-formats">
                        <button type="button" class="ql-list" value="ordered">
                            <svg viewBox="0 0 18 18">
                                <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line>
                                <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line>
                                <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line>
                                <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line>
                                <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path>
                                <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path>
                                <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path>
                            </svg>
                        </button>
                        <button type="button" class="ql-list" value="bullet">
                            <svg viewBox="0 0 18 18">
                                <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line>
                                <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line>
                                <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line>
                                <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line>
                                <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line>
                                <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line>
                            </svg>
                        </button>
                    </span>
                    <span class="ql-formats">
                        <button type="button" class="ql-link">
                            <svg viewBox="0 0 18 18">
                                <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
                                <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path>
                                <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path>
                            </svg>
                        </button>
                    </span>
                </div>
                <div class="kd-editor ql-container ql-snow" data-editor-height="150" data-editor-maxheight="250" style="min-height: 150px; max-height: 250px;">
                <div class="ql-editor" data-gramm="false" contenteditable="true"></div>
                <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                <div class="ql-tooltip ql-editing ql-hidden" style="left: -18.3646px; top: 34px;" data-mode="link">
                    <a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a>
                    <input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL" placeholder="https://quilljs.com">
                        <a class="ql-action"></a>
                        <a class="ql-remove"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kd-form-group">
            <div class="row justify-content-between vertical-gap kd-dropzone-attachment">
                <div class="col-auto kd-dropzone-attachment-btn">
                    <button class="kd-btn kd-btn-lg" type="submit" name="submit">Post Reply</button>
                </div>
            </div>
            <!-- END: Dropzone -->
        </div>
    </form>
</div>

<script>
    var quill = new Quill('#ql-editor', {
      theme: 'snow'
    });
  </script>

<?php $dbcon->close(); ?>