<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php'; ?>
<div class="kd-main">
    <div class="kd-separator"></div>
    <div class="kd-box bg-white">
        <div class="container">
            <ul class="kd-links text-center">
                <li <?php if (!isset($_GET['view'])) {
                        echo 'class="active"';
                    } ?>><a href="https://status.khaosdevelopment.com/index.php">Live Status</a></li>
                <li <?php if (isset($_GET['view']) && $_GET['view'] == 'OPEN') {
                        echo 'class="active"';
                    } ?>><a href="https://status.khaosdevelopment.com/index.php?view=ongoing-issues">Ongoing Issues</a></li>
                <li <?php if (isset($_GET['view']) && $_GET['view'] == 'CLOSED') {
                        echo 'class="active"';
                    } ?>><a href="https://status.khaosdevelopment.com/index.php?view=past-issues">Past Issues</a></li>
                <li <?php if (isset($_GET['view']) && $_GET['view'] == 'ONHOLD') {
                        echo 'class="active"';
                    } ?>><a href="https://status.khaosdevelopment.com/index.php?view=planned-maintenance">Planned Maintenance </a></li>
            </ul>
        </div>
    </div>
    <div class="kd-separator"></div>
    <div class="kd-box-5 bg-grey-6">
        <?php
            if (!isset($_GET['view'])) { ?>
                <div class="container">
                    <div class="row align-items-center justify-content-between vertical-gap mnt-30 sm-gap mb-50">
                        <div class="col-auto">
                            <h2 class="h4 mb-0 mt-0">System Status</h2>
                        </div>
                        <div class="col pl-30 pr-30 d-none d-sm-block">
                            <div class="kd-separator ml-10 mr-10"></div>
                        </div>
                        <div class="col-auto">
                            <a href="https://status.khaosdevelopment.com/report-issue.php" class="kd-btn kd-btn-md">Report an Issue</a>
                        </div>
                    </div>
                    <?php
                    require $_SERVER['DOCUMENT_ROOT'] . '/inc/livestatus.php';
                    ?>`
                </div>
            <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'ongoing-issues') { ?>
                <div class="container">
                    <div class="row align-items-center justify-content-between vertical-gap mnt-30 sm-gap mb-50">
                        <div class="col-auto">
                            <h2 class="h4 mb-0 mt-0">Ongoing Issues</h2>
                        </div>
                        <div class="col pl-30 pr-30 d-none d-sm-block">
                            <div class="kd-separator ml-10 mr-10"></div>
                        </div>
                        <div class="col-auto">
                            <a href="https://status.khaosdevelopment.com/report-issue.php" class="kd-btn kd-btn-md">Report an Issue</a>
                        </div>
                    </div>
                    <?php
                    require $_SERVER['DOCUMENT_ROOT'] . '/inc/ongoingissues.php';
                    ?>
                </div>
            <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'past-issues') { ?>                
                <div class="container">
                    <div class="row align-items-center justify-content-between vertical-gap mnt-30 sm-gap mb-50">
                        <div class="col-auto">
                            <h2 class="h4 mb-0 mt-0">Past Issues</h2>
                        </div>
                        <div class="col pl-30 pr-30 d-none d-sm-block">
                            <div class="kd-separator ml-10 mr-10"></div>
                        </div>
                        <div class="col-auto">
                            <a href="https://status.khaosdevelopment.com/report-issue.php" class="kd-btn kd-btn-md">Report an Issue</a>
                        </div>
                    </div>
                    <?php
                    require $_SERVER['DOCUMENT_ROOT'] . '/inc/pastissues.php';
                    ?>
                </div>
            <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'planned-maintenance') { ?>                
                <div class="container">
                    <div class="row align-items-center justify-content-between vertical-gap mnt-30 sm-gap mb-50">
                        <div class="col-auto">
                            <h2 class="h4 mb-0 mt-0">Planned Maintenance</h2>
                        </div>
                        <div class="col pl-30 pr-30 d-none d-sm-block">
                            <div class="kd-separator ml-10 mr-10"></div>
                        </div>
                        <div class="col-auto">
                            <a href="https://status.khaosdevelopment.com/report-issue.php" class="kd-btn kd-btn-md">Report an Issue</a>
                        </div>
                    </div>
                    <?php
                    require $_SERVER['DOCUMENT_ROOT'] . '/inc/plannedmaintenance.php';
                    ?>
                </div>
            <?php } else { ?>                
                <div class="container">
                    <div class="row align-items-center justify-content-between vertical-gap mnt-30 sm-gap mb-50">
                        <div class="col-auto">
                            <h2 class="h4 mb-0 mt-0">System Status</h2>
                        </div>
                        <div class="col pl-30 pr-30 d-none d-sm-block">
                            <div class="kd-separator ml-10 mr-10"></div>
                        </div>
                        <div class="col-auto">
                            <a href="https://status.khaosdevelopment.com/report-issue.php" class="kd-btn kd-btn-md">Report an Issue</a>
                        </div>
                    </div>
                    <?php
                    require $_SERVER['DOCUMENT_ROOT'] . '/inc/livestatus.php';
                    ?>
                </div>
            <?php }
        ?>
    </div>
    <div class="kd-separator"></div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>