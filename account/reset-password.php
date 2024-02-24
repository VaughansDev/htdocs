<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>
<div class="kd-main">
    <div class="kd-separator"></div>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <h2 class="text-center">Reset your Password</h2>
                    <div class="kd-box kd-box-decorated">
                        <form action="#" class="kd-form">
                            <div class="kd-box-content">
                                <div class="kd-form-group">
                                    <label for="email" class="mnt-7">Email</label>
                                    <input type="email" class="form-control form-control-style-2" name="email" id="email" placeholder="email@example.com">
                                </div>
                            </div>
                            <div class="kd-box-content pt-0">
                                <div class="row justify-content-between vertical-gap kd-dropzone-attachment">
                                    <div class="col-auto kd-dropzone-attachment-btn">
                                        <button class="kd-btn kd-btn-lg" type="submit" name="register" value="register">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>