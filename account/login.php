<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>
<div class="kd-main">
    <div class="kd-separator"></div>
    <div class="kd-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <h2 class="text-center">Login to your Account</h2>
                    <div class="kd-box kd-box-decorated">
                        <form action="<?php echo $_CONFIG['domain']; ?>/inc/login.php" method="post" class="kd-form">
                            <div class="kd-box-content">
                                <div class="kd-form-group">
                                    <a href="<?php echo $_CONFIG['domain']; ?>/oauth/discord-oauth.php?req_type=login" class="kd-btn kd-btn-block kd-btn-popup kd-btn-discord d-flex align-items-center justify-content-center">
                                        <span class="fa-brands fa-discord mr-20"></span><span>Login with Discord</span>
                                    </a>
                                </div>
                            </div>
                            <h4 class="text-center">- OR -</h4>
                            <p class="text-center">enter your username and password</p>
                            <div class="kd-box-content">
                                <div class="kd-form-group">
                                    <label for="username" class="mnt-7">Username</label>
                                    <input type="text" class="form-control form-control-style-2" name="username" id="username" placeholder="john.smith">
                                </div>
                                <div class="kd-form-group">
                                    <label for="password" class="mnt-7">Password</label>
                                    <input type="password" class="form-control form-control-style-2" name="password" id="password" placeholder="********">
                                </div>
                            </div>
                            <div class="kd-box-content pt-0">
                                <div class="row justify-content-between vertical-gap kd-dropzone-attachment">
                                    <div class="col-auto kd-dropzone-attachment-btn">
                                        <button class="kd-btn kd-btn-lg" type="submit" name="login" value="login">Login</button>
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