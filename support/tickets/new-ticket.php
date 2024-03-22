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
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="kd-box kd-box-decorated">
                        <div class="kd-box-content">
                            <h2 class="h6 mb-6">Submit a Support Ticket</h2>
                            <!-- START: Breadcrumbs -->
                            <ul class="kd-breadcrumbs text-left kd-breadcrumbs-dark mnb-6 fs-14">
                                <li><a href="<?php echo $_CONFIG['supporturl']; ?>">Support Home</a></li>
                                <li><a href="<?php echo $_CONFIG['ticketsurl']; ?>">My Tickets</a></li>
                                <li>Submit Ticket</li>
                            </ul>
                            <!-- END: Breadcrumbs -->
                        </div>
                        <div class="kd-separator"></div>
                        <form action="#" class="kd-form">
                            <div class="kd-box-content">
                                <div class="kd-form-group">
                                    <label for="selectDepartment" class="mnt-7">Select a Department</label>
                                    <select class="form-control form-control-style-2" name="selectDepartment" id="selectDepartment" tabindex="null">
                                        <option value="General">General</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Support">Support</option>
                                        <option value="Billing">Billing</option>
                                        <option value="Account">Account</option>
                                    </select>
                                </div>
                            </div>
                            <div class="kd-separator"></div>
                            <div class="kd-box-content">
                                <div class="kd-form-group">
                                    <label for="selectProduct" class="mnt-7">Select Product</label>
                                    <select class="form-control form-control-style-2" name="selectProduct" id="selectProduct" tabindex="null">
                                        <option value="No Product">No Product</option>
                                        <option value="Khaos Applications">Khaos Applications</option>
                                    </select>
                                </div>
                            </div>
                            <div class="kd-separator"></div>
                            <div class="kd-box-content">
                                <div class="kd-form-group">
                                    <label for="ticketTitle" class="mnt-7">Ticket Subject</label>
                                    <input type="text" class="form-control form-control-style-2" id="ticketTitle" placeholder="Enter Ticket Subject">
                                </div>
                                <div class="kd-form-group">
                                    <label class="mnt-7">Ticket Message</label>
                                    <?php
                                        require $_SERVER['DOCUMENT_ROOT'].'/inc/ticket-msg-box.php';
                                    ?>
                                </div>
                            </div>
                        </form>
                        <div class="kd-box-content pt-0">
                            <!-- STRART: Dropzone

                            Additional Attributes:
                            data-dropzone-action
                            data-dropzone-maxMB
                            data-dropzone-maxFiles
                        -->
                            <form class="kd-dropzone" action="#" data-dropzone-maxMB="5" data-dropzone-maxFiles="5">
                                <div class="dz-message">
                                    <div class="kd-dropzone-icon">
                                        <span class="icon pe-7s-cloud-upload"></span>
                                    </div>
                                    <div class="h6 kd-dropzone-title">Drop files here or click to upload</div>
                                    <div class="kd-dropzone-text">
                                        <p class="mnb-5 mnt-1">You can upload up to 5 files (maximum 5 MB each) of the following types: .jpg, .jpeg, .png, .zip.</p>
                                    </div>
                                </div>
                            </form>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>