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
                            require $_SERVER['DOCUMENT_ROOT'] . '/inc/forum-topics.php';
                            ?>
                        </div>
                    </div>
                    <ul class="kd-pagination mt-40">
                        <li class="kd-pagination-icon"><a href="#"><i class="fa-solid fa-angle-left"></i></span></a></li>
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
                <div class="col-lg-4">
                    <div class="kd-sticky kd-sidebar" data-sticky-offsetTop="120" data-sticky-offsetBot="40">
                        <?php
                        require $_SERVER['DOCUMENT_ROOT'] . '/widgets/create-topic.php';
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