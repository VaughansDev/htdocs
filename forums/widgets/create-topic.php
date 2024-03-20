<div class="kd-widget kd-box kd-box-decorated">
    <div class="col-auto" style="width: 100%;">
        <a data-fancybox data-touch="false" data-src="#create-new-thread" href="javascript:;" class="kd-btn kd-btn-lg" style="color: white; width: 100%;">Create New Topic</a>
    </div>
</div>
<div id="reate-new-thread" class="kd-popup kd-popup-modal kd-popup-subscribe">
    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
            <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
        </svg></button>
    <div class="kd-box kd-box-decorated">
        <div class="kd-box-content">
            <h6 class="mnt-5 mnb-5">Create New Topic</h6>
        </div>
        <div class="kd-separator"></div>
        <div class="kd-box-content">
            <p class="mnt-5 fs-15">Enter the name of your new topic and click create.</p>
            <form action="<?php echo $_CONFIG['forumsurl']; ?>/inc/create-topic.php" method="post" class="kd-form kd-form-group-inputs">
                <input type="text" name="topicTitle" class="form-control form-control-style-2" placeholder="Topic Title">
                <input type="text" name="threadId" value="<?php echo $_GET['threadId']; ?>" hidden>
                <input type="text" name="accountId" value="<?php echo $_SESSION['accountid']; ?>" hidden>
                <button type="submit" value="submit" name="submit" class="kd-btn kd-btn-lg kd-btn-icon"><span class="icon fas fa-paper-plane"></span></button>
            </form>
        </div>
    </div>
</div>