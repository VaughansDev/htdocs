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
                                        <label class="mnt-7">Ticket Message</label>
                                        <?php
                                        require $_SERVER['DOCUMENT_ROOT'] . '/inc/ticket-msg-box.php';
                                        ?>
                                    </div>
                                    <div class="kd-form-group">
                                        <div class="col-md-6">
                                            <input type="file" name="ticketFile" id="ticketFile" class="form-control form-control-style-2">
                                        </div>
                                        <div class="col-md-6">
                                            <button class="kd-btn kd-btn-lg" type="submit" value="submit" style="background-color:grey;" name="submit">Close ticket</button>
                                            <button class="kd-btn kd-btn-lg" type="submit" value="submit" name="submit">Submit a ticket</button>
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