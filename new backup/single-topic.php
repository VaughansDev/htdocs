<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>
<div class="kd-main">
    <header class="kd-header kd-box-1">
        <div class="container">
            <div class="bg-image bg-image-parallax">
                <img src="assets/images/bg-header-4.png" class="jarallax-img" alt="">
                <div style="background-color: rgba(27, 27, 27, .8);"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <h1 class="h2 mb-30 text-white text-center">How can we help you?</h1>
                    <form action="#" class="kd-form kd-form-group-inputs">
                        <input type="text" name="" value="" class="form-control" placeholder="Keyword search...">
                        <button class="kd-btn kd-btn-lg">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <?php
    $active = 'forums';
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/support-nav.php';
    ?>
    <div class="kd-separator"></div>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row vertical-gap md-gap">
                <div class="col-lg-8">
                    <div class="kd-box kd-box-decorated">
                        <div class="kd-blog-post">
                            <div class="kd-blog-post-box pt-30 pb-30">
                                <h2 class="h4 mnt-5 mb-9">Having problem with Logo</h2>
                                <!-- START: Breadcrumbs -->
                                <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
                                    <li><a href="help-center.php">Support Home</a></li>
                                    <li><a href="forums.php">Forums</a></li>
                                    <li><a href="topics.php">Design with pleasure</a></li>
                                    <li>Having problem with Logo</li>
                                </ul>
                                <!-- END: Breadcrumbs -->
                            </div>
                            <div class="kd-separator"></div>
                            <div class="kd-comment kd-topic-comment">
                                <div>
                                    <div class="kd-comment-img">
                                        <img src="assets/images/avatar-1.png" alt="">
                                    </div>
                                    <div class="kd-comment-cont">
                                        <div class="kd-comment-head">
                                            <a href="#" class="kd-comment-name">John Leonard</a>
                                            <span class="text-3 fs-14 mnt-5">#5630</span>
                                        </div>
                                        <div class="kd-comment-date">12 Sep 2018 7:40 am</div>
                                        <div class="kd-comment-text">
                                            <p class="mb-0">Nullam ac dui et purus malesuada gravida id fermentum orci. In eu ipsum quis urna hendrerit condimentum vitae a mauris. In congue turpis purus, vitae tempus ante id. Donec orci arcu, sagittis ut finibus vitae.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kd-comment kd-topic-comment">
                                <div>
                                    <div class="kd-comment-img">
                                        <img src="assets/images/avatar-default.svg" alt="">
                                    </div>
                                    <div class="kd-comment-cont">
                                        <div class="kd-comment-head">
                                            <a href="#" class="kd-comment-name">Bruno Rice</a>
                                            <span class="text-3 fs-14 mnt-5">#5631</span>
                                        </div>
                                        <div class="kd-comment-date">12 Sep 2018 8:22 am</div>
                                        <div class="kd-comment-text">
                                            <p>Nullam ac dui et purus malesuada gravida id fermentum orci. In eu ipsum quis urna hendrerit condimentum vitae a mauris. In congue turpis purus, vitae tempus ante id. Donec orci arcu, sagittis ut finibus vitae.</p>
                                            <blockquote class="kd-blockquote kd-blockquote-style-2">
                                                <span class="kd-blockquote-title mnt-6">Quote by John Leonard:</span>
                                                <p class="mnb-6">Suspendisse, litora pellentesque habitasse nisi, maecenas conubia mauris lectus nec purus gravida integer netus cras viverra eleifend, diam aenean. Rutrum Mauris nisi scelerisque adipiscing facilisi mi metus.</p>
                                            </blockquote>
                                            <p class="mb-0">Consectetuer facilisi dictumst ad scelerisque. Ultrices dignissim bibendum turpis pulvinar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kd-blog-post-box pt-30 pb-30">
                                <ul class="kd-pagination">
                                    <li class="kd-pagination-icon"><a href="#"><span class="icon pe-7s-angle-left"></span></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="kd-pagination-space">...</li>
                                    <li><a href="#">8</a></li>
                                    <li class="active"><a href="#">9</a></li>
                                    <li><a href="#">10</a></li>
                                    <li class="kd-pagination-space">...</li>
                                    <li><a href="#">18</a></li>
                                    <li class="kd-pagination-icon"><a href="#"><span class="icon pe-7s-angle-right"></span></a></li>
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