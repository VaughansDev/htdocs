<?php
require '../inc/header.php';
$discord_id = $_GET['discord_id'];
$discord_username = $_GET['discord_username'];
$discord_displayname = $_GET['discord_displayname'];
$discord_avatar = $_GET['discord_avatar'];
$discord_email = $_GET['discord_email'];
$discord_email_verified = $_GET['discord_email_verified'];
$method = $_GET['method'];
?>
<div class="login pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-7">
                <div class="login__wrapper">
                    <div class="login__wrapper--title">
                        <p>Finish setting up your account</p>
                    </div>
                    <br>
                    <div class="login__form input__form">
                        <form action="<?php echo $_CONFIG['domain']; ?>/inc/register.php" method="post">
                            <div class="input-group">
                                <div class="single-input">
                                    <label for="firstname">First Name</label>
                                    <input type="text" id="firstname" placeholder="First Name" name="firstname" autocomplete="off" required>
                                </div>
                                <div class="single-input">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" id="lastname" placeholder="Last Name" name="lastname" autocomplete="off" required>
                                </div>
                            </div>
                            <input type="text" class="form-control" value="<?php echo $discord_id; ?>" id="discord_id" name="discord_id" autocomplete="off">
                            <input type="text" class="form-control" value="<?php echo $discord_username; ?>" id="discord_username" name="discord_username" autocomplete="off">
                            <input type="text" class="form-control" value="<?php echo $discord_displayname; ?>" id="discord_displayname" name="discord_displayname" autocomplete="off">
                            <input type="text" class="form-control" value="<?php echo $discord_avatar; ?>" id="discord_avatar" name="discord_avatar" autocomplete="off">
                            <input type="text" class="form-control" value="<?php echo $discord_email; ?>" id="discord_email" name="discord_email" autocomplete="off">
                            <input type="text" class="form-control" value="<?php echo $discord_email_verified; ?>" id="discord_email_verified" name="discord_email_verified" autocomplete="off">
                            <input type="text" class="form-control" value="<?php echo $method; ?>" id="method" name="method" autocomplete="off">

                            <div class="remember-me">
                                <label class="checkbox" for="check">
                                    <input type="checkbox" id="check" required>
                                    <span class="checkmark"></span>
                                    I agree to the <a href="<?php echo $_CONFIG['domain']; ?>/terms.php">Terms of Use</a> & <a href="<?php echo $_CONFIG['domain']; ?>/privacy.php">Privacy Policy</a>
                                </label>
                            </div>

                            <div class="login-button register-button">
                                <button type="submit" class="main-btn">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login end -->


<?php
require '../inc/footer.php';
?>