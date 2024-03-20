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
                            <?php
                            require $_SERVER['DOCUMENT_ROOT'] . '/inc/forum-post.php';
                            ?>
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