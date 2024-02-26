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
                                        <div class="kd-editor-quill">
                                            <div class="kd-editor" data-editor-height="150" data-editor-maxHeight="250"></div>
                                        </div>
                                    </div>
                                    <div class="kd-form-group">
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