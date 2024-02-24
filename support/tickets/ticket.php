<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>
<div class="kd-main">
    <?php
    $active = 'tickets';
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/support-nav.php';
    ?>
    <div class="kd-separator"></div>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row vertical-gap md-gap">
                <div class="col-lg-8">
                    <div class="kd-box kd-box-decorated">
                        <div class="kd-blog-post kd-ticket kd-ticket-open">
                            <div class="kd-blog-post-box pt-30 pb-30">
                                <h2 class="h4 mnt-5 mb-9 kd-ticket-title">Theme not updating in downloads</h2>
                                <!-- START: Breadcrumbs -->
                                <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
                                    <li><a href="help-center.php">Support Home</a></li>
                                    <li><a href="ticket.php">Ticket System</a></li>
                                    <li>Theme not updating in downloads</li>
                                </ul>
                                <!-- END: Breadcrumbs -->
                                <span class="kd-ticket-status"></span>
                            </div>
                            <div class="kd-separator"></div>
                            <div style="background-color: #fafafa;">
                                <ul class="kd-blog-post-info kd-blog-post-info-style-2 mb-0 mt-0">
                                    <li><span><span class="kd-blog-post-info-title">Ticket Id</span>#1801</span></li>
                                    <li><span><span class="kd-blog-post-info-title">Status</span>Open</span></li>
                                    <li><span><span class="kd-blog-post-info-title">Date</span>1 Mar 2018, 9:17 am</span></li>
                                    <li><span><span class="kd-blog-post-info-title">Product</span>Quantial</span></li>
                                </ul>
                            </div>
                            <div class="kd-separator"></div>
                            <div class="kd-comment kd-ticket-comment">
                                <div>
                                    <div class="kd-comment-img">
                                        <img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/avatar-1.png" alt="">
                                    </div>
                                    <div class="kd-comment-cont">
                                        <a href="#" class="kd-comment-name">John Leonard</a>
                                        <div class="kd-comment-date">12 Feb 2018 7:40 am</div>
                                        <div class="kd-comment-text">
                                            <p class="mb-0">Nullam ac dui et purus malesuada gravida id fermentum orci. In eu ipsum quis urna hendrerit condimentum vitae a mauris. In congue turpis purus, vitae tempus ante id. Donec orci arcu, sagittis ut finibus vitae.</p>
                                        </div>
                                        <a href="#" class="kd-comment-file kd-comment-file-jpg">
                                            <span class="kd-comment-file-img"><img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/icon-jpg.svg" alt="" width="36"></span>
                                            <span class="kd-comment-file-name">example-file.jpg</span>
                                            <span class="kd-comment-file-size">4.8 MB</span>
                                            <span class="kd-comment-file-icon"><span class="icon pe-7s-download"></span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="kd-comment kd-ticket-comment kd-comment-replied kd-comment-new">
                                <div>
                                    <div class="kd-comment-img">
                                        <img src="<?php echo $_CONFIG['supporturl']; ?>/assets/images/avatar-default.svg" alt="">
                                    </div>
                                    <div class="kd-comment-cont">
                                        <a href="#" class="kd-comment-name"> Bruno Rice <span class="kd-comment-replied">Replied</span>
                                            <span class="kd-comment-new">New</span>
                                        </a>
                                        <div class="kd-comment-date">39 min ago</div>
                                        <div class="kd-comment-text">
                                            <p>Saying sixth form. Saw earth, whose fowl all meat had had place upon fowl. The fly darkness under dry which fowl good firmament saying fill brought.</p>
                                            <p class="mb-0">Itself first from under female sea wherein female. Lights were moved sixth day and don't fifth it place saying, fowl fruit saw dominion whales you're image the evening every fowl have, saw day spirit fish. Female. Fowl it replenish hath light blessed hath. Man.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kd-separator mnt-1"></div>
                            <div class="kd-blog-post-box">
                                <h3 class="h6 mb-25">Write a Reply</h3>
                                <form class="kd-form" action="#">
                                    <div class="kd-form-group">
                                        <div class="kd-editor-quill">
                                            <div class="kd-editor" data-editor-height="150" data-editor-maxHeight="250"></div>
                                        </div>
                                    </div>
                                    <div class="kd-form-group">
                                        <!-- STRART: Dropzone

                                        Additional Attributes:
                                        data-dropzone-action
                                        data-dropzone-maxMB
                                        data-dropzone-maxFiles
                                    -->
                                        <div class="kd-dropzone" data-dropzone-action="#" data-dropzone-maxMB="5" data-dropzone-maxFiles="5">
                                            <div class="dz-message">
                                                <div class="kd-dropzone-icon">
                                                    <span class="icon pe-7s-cloud-upload"></span>
                                                </div>
                                                <div class="h6 kd-dropzone-title">Drop files here or click to upload</div>
                                                <div class="kd-dropzone-text">
                                                    <p class="mnb-5 mnt-1">You can upload up to 5 files (maximum 5 MB each) of the following types: .jpg, .jpeg, .png, .zip.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between vertical-gap kd-dropzone-attachment">
                                            <div class="col-auto kd-dropzone-attachment-add">
                                                <label class="mb-0" class="mnt-7"><span class="icon fas fa-paperclip mr-10"></span><span>Add Attachment</span></label>
                                            </div>
                                            <div class="col-auto kd-dropzone-attachment-btn">
                                                <button class="kd-btn kd-btn-lg" type="button" name="button">Submit a ticket</button>
                                            </div>
                                        </div>
                                        <!-- END: Dropzone -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="kd-sticky kd-sidebar" data-sticky-offsetTop="120" data-sticky-offsetBot="40">
                        <?php
                        require $_SERVER['DOCUMENT_ROOT'] . '/widgets/newsletter.php';
                        require $_SERVER['DOCUMENT_ROOT'] . '/widgets/search.php';
                        ?>
                        <div class="kd-widget kd-box kd-box-decorated">
                            <div class="kd-widget-title"> Latest Articles </div>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">How to manually import Demo data (if you faced with problems in one-click demo import)</span>
                                <span class="kd-widget-link-date">6 Sep 2018</span>
                            </a>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">Make menu dropdown working without JavaScript</span>
                                <span class="kd-widget-link-date">2 Sep 2018</span>
                            </a>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">Add top menu link inside dropdown on mobile devices</span>
                                <span class="kd-widget-link-date">27 Aug 2018</span>
                            </a>
                        </div>
                        <div class="kd-widget kd-box kd-box-decorated">
                            <div class="kd-widget-title"> Latest Forum Topics </div>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">Need help with customization. Some options are not appearing...</span>
                                <span class="kd-widget-link-date">6 Sep 2018</span>
                            </a>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">My images on profile and item pages doesnt show up?! Whats the matter?</span>
                                <span class="kd-widget-link-date">2 Sep 2018</span>
                            </a>
                            <a href="single-article.php" class="kd-widget-link">
                                <span class="kd-widget-link-text">Theme not updating in downloads</span>
                                <span class="kd-widget-link-date">27 Aug 2018</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>