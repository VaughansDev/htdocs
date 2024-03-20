<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>
<div class="kd-main">
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
                                <h2 class="h4 mnt-5 mb-9">Forums</h2>
                                <!-- START: Breadcrumbs -->
                                <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
                                    <li><a href="<?php echo $_CONFIG['supporturl'] ?>">Support Home</a></li>
                                    <li>Forums</li>
                                </ul>
                                <!-- END: Breadcrumbs -->
                            </div>
                            <div class="table-responsive">
                                <table class="kd-table kd-table-default">
                                    <thead>
                                        <tr>
                                            <th scope="col">Forums</th>
                                            <th scope="col">Topics</th>
                                            <th scope="col">Posts</th>
                                            <th scope="col">Last Post</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        require $_SERVER['DOCUMENT_ROOT'] . '/inc/forum-threads.php';
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="kd-sticky kd-sidebar" data-sticky-offsetTop="120" data-sticky-offsetBot="40">
                        <?php
                        require $_SERVER['DOCUMENT_ROOT'] . '/widgets/search.php';
                        require $_SERVER['DOCUMENT_ROOT'] . '/widgets/latest-topics.php';
                        require $_SERVER['DOCUMENT_ROOT'] . '/widgets/newsletter.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>