<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != TRUE) { ?>
    <script>
        window.location.href = "<?php echo $_CONFIG['accounturl']; ?>/login.php";
    </script>
<?php } ?>
<div class="kd-main">
    <?php
    $active = 'tickets';
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/support-nav.php';
    ?>
    <div class="kd-separator"></div>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row vertical-gap md-gap">
                <div class="col-lg-12">
                    <div class="kd-box kd-box-decorated">
                        <div class="kd-blog-post kd-ticket kd-ticket-open">
                            <?php
                            require $_SERVER['DOCUMENT_ROOT'] . '/inc/ticket.php';
                            ?>
                            <div class="kd-separator mnt-1"></div>
                            <div class="kd-blog-post-box">
                                <h3 class="h6 mb-25">Write a Reply</h3>
                                <form class="kd-form" action="#">
                                    <div class="kd-form-group">
                                        <?php
                                        require $_SERVER['DOCUMENT_ROOT'] . '/inc/ticket-msg-box.php';
                                        ?>
                                    </div>
                                    <div class="kd-form-group">
                                        <div class="row justify-content-between vertical-gap kd-dropzone-attachment">
                                            <div class="col-auto kd-dropzone-attachment-add">
                                                <label class="mb-0" class="mnt-7"><span class="icon fas fa-paperclip mr-10"></span><span>Add Attachment</span></label>
                                            </div>
                                            <div class="col-auto kd-dropzone-attachment-btn">
                                                <button class="kd-btn kd-btn-lg" style="background-color: grey;" type="button" name="button">Close ticket</button>
                                                <button class="kd-btn kd-btn-lg" type="button" name="button">Submit a ticket</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>