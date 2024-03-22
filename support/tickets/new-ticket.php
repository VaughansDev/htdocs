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
                                        <label for="select-product" class="mnt-7">Select Product</label>
                                        <div class="dropdown bootstrap-select form-control kd-select-ticket"><select class="form-control kd-select-ticket" name="" id="select-product" tabindex="null">
                                            <option value="1" data-content="<img src='<?php echo $_CONFIG['supporturl']; ?>/assets/images/product-1-xs.png' alt=''> Quantial"></option>
                                            <option value="2" data-content="<img src='<?php echo $_CONFIG['supporturl']; ?>/assets/images/product-2-xs.png' alt=''> Sensific"></option>
                                            <option value="3" data-content="<img src='<?php echo $_CONFIG['supporturl']; ?>/assets/images/product-3-xs.png' alt=''> Minist"></option>
                                            <option value="4" data-content="<img src='<?php echo $_CONFIG['supporturl']; ?>/assets/images/product-4-xs.png' alt=''> Desty"></option>
                                            <option value="5" data-content="<img src='<?php echo $_CONFIG['supporturl']; ?>/assets/images/product-5-xs.png' alt=''> Silies"></option>
                                        </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="select-product" title="Quantial">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner"><img src="assets/images/product-1-xs.png" alt=""> Quantial</div>
                                                </div>
                                            </div>
                                        </button>
                                        <div class="dropdown-menu" style="max-height: 398.422px; overflow: hidden; min-height: 224px;">
                                            <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" aria-activedescendant="bs-select-1-0" style="max-height: 380.422px; overflow-y: auto; min-height: 206px;">
                                                <ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                                                    <li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-1-0" tabindex="0" aria-setsize="5" aria-posinset="1" aria-selected="true"><span class="text"><img src="assets/images/product-1-xs.png" alt=""> Quantial</span></a></li>
                                                    <li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0" aria-setsize="5" aria-posinset="2"><span class="text"><img src="assets/images/product-2-xs.png" alt=""> Sensific</span></a></li>
                                                    <li><a role="option" class="dropdown-item" id="bs-select-1-2" tabindex="0" aria-setsize="5" aria-posinset="3"><span class="text"><img src="assets/images/product-3-xs.png" alt=""> Minist</span></a></li>
                                                    <li><a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0" aria-setsize="5" aria-posinset="4"><span class="text"><img src="assets/images/product-4-xs.png" alt=""> Desty</span></a></li>
                                                    <li class=""><a role="option" class="dropdown-item" id="bs-select-1-4" tabindex="0" aria-setsize="5" aria-posinset="5"><span class="text"><img src="assets/images/product-5-xs.png" alt=""> Silies</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kd-form-group">
                                    <div class="alert kd-alert kd-alert-primary" role="alert">* Your License. Purchase Date: 5 Nov 2018</div>
                                </div>
                            </div>
                            <div class="kd-separator"></div>
                            <div class="kd-box-content">
                                <div class="kd-form-group">
                                    <label for="subject" class="mnt-7">Subject</label>
                                    <input type="text" class="form-control form-control-style-2" id="subject" placeholder="Enter Subject">
                                </div>
                                <div class="kd-form-group">
                                    <label class="mnt-7">Description</label>
                                    <div class="kd-editor-quill">
                                        <div class="kd-editor" data-editor-height="150" data-editor-maxHeight="250"></div>
                                    </div>
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