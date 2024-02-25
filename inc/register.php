<?php
require 'dbcon.php';
if (isset($_POST['method']) && $_POST['method'] == 'discord') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['discord_email'];
    $emailverified = $_POST['discord_email_verified'];
    $username = $_POST['discord_displayname'];
    $discord_id = $_POST['discord_id'];
    $discord_username = $_POST['discord_username'];
    $discord_displayname = $_POST['discord_displayname'];
    $discord_avatar = $_POST['discord_avatar'];
    $discord_email = $_POST['discord_email'];
    $discord_email_verified = $_POST['discord_email_verified'];
    $profilepic = "https://cdn.discordapp.com/avatars/$discord_id/$discord_avatar.jpg";
    $accountid = uniqid();
    $regdate = date('d/m/Y-h:i:sA');
    $password = 'discordauth';
    $dicordlinked = 1;
    if ($stmt = $dbcon->prepare('SELECT * FROM users where users_username = ?')) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $msg = urlencode("That user name is already taken, Please try a differant one.");
            header("Location: " . $_CONFIG['accounturl'] . "/register.php?status=error&msg=" . $msg);
        } else {
            $sql = "INSERT INTO users (users_username, users_firstname, users_lastname, users_email, users_emailverified, users_accountid, users_regdate, users_profilepic, users_password, users_lastlogin, users_dicordlinked)
                    VALUES ('$username', '$firstname', '$lastname', '$email', '$emailverified', '$accountid', '$regdate', '$profilepic', '$password', '$regdate', '$dicordlinked')";
            $result = mysqli_query($dbcon, $sql);
            if ($result) {
                $sql2 = "INSERT INTO linked_discord_accounts (accountid, discord_id, discord_username, discord_displayname, discord_avatar, discord_email, discord_email_verified)
                        VALUES ('$accountid', '$discord_id', '$discord_username', '$discord_displayname', '$discord_avatar', '$discord_email', '$discord_email_verified')";
                $result2 = mysqli_query($dbcon, $sql2);
                if ($result2) {

                    session_set_cookie_params(
                        time() + 3600,      // $lifetime
                        '/',                // $path 
                        '.khaosdevelopment.com'
                    );
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['firstname'] = $firstname;
                    $_SESSION['lastname'] = $lastname;
                    $_SESSION['email'] = $email;
                    $_SESSION['emailverified'] = $emailverified;
                    $_SESSION['accountid'] = $accountid;
                    $_SESSION['regdate'] = $regdate;
                    $_SESSION['profilepic'] = $profilepic;
                    $_SESSION['password'] = $password;
                    $_SESSION['lastlogin'] = $regdate;
                    $_SESSION['users_dicordlinked'] = $dicordlinked;
                    $_SESSION['loggedin'] = TRUE;

                    header("location: " . $_CONFIG['accounturl']);
                } else {
                    header("location: " . $_CONFIG['accounturl'] . "/register.php?status=error");
                }
            } else {
                header("location: " . $_CONFIG['accounturl'] . "/register.php?status=error");
            }
        }
    }
    mysqli_close($dbcon);
} elseif (isset($_POST['register']) && $_POST['register'] == 'register') {
    if ($stmt = $dbcon->prepare('SELECT * FROM users where users_username = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $msg = urlencode("That user name is already taken, Please try a differant one.");
            header("Location: " . $_CONFIG['accounturl'] . "/register.php?status=error&msg=" . $msg);
        } else {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $accountid = uniqid();
            $regdate = date('d/m/Y-h:i:sA');
            $emailverified = 0;
            $profilepic = 'https://khaosdevelopment.com/assets/images/user.png';
            $dicordlinked = 0;
            $password = $_POST['password'];
            $confpassword = $_POST['confpassword'];
            if ($password === $confpassword) {
                $hashedpass = password_hash($password, PASSWORD_DEFAULT);
            } else {
                $msg = urlencode("The passwords you entered do not match, Please try again.");
                header("Location: " . $_CONFIG['url'] . "/register.php?status=error&msg=" . $msg);
                die();
            }
            $sql = "INSERT INTO users (users_username, users_firstname, users_lastname, users_email, users_emailverified, users_accountid, users_regdate, users_profilepic, users_password, users_lastlogin, users_dicordlinked)
                    VALUES ('$username', '$firstname', '$lastname', '$email', '$emailverified', '$accountid', '$regdate', '$profilepic', '$hashedpass', '$regdate', '$dicordlinked')";
            $result = mysqli_query($dbcon, $sql);
            if ($result) {
                $verificationcode = random_int(100000, 999999);
                $sql2 = "INSERT INTO email_verification (email, code) VALUES ('$email', '$verificationcode')";
                $result2 = mysqli_query($dbcon, $sql2);
                if ($result2) {
                    $to = $email;
                    $subject = $_CONFIG['sitename'] . " Account Verification";

                    $message = "
                        <html>
                        <head>
                        <title>" . $subject . "</title>
                        </head>
                        <body style='padding:20px;'>
                        <h1>" . $_CONFIG['sitename'] . " Verification</h1>
                        </div>
                        <br /><br />
                        <p>Dear " . $username . ",
                        <br>
                        <p>Please click on th following link to verify your" . $_CONFIG['sitename'] . "Account.</p>
                        <p><a href='" . $_CONFIG['accounturl'] . "/verification.php?email=" . $email . "&code=" . $verificationcode . "' target='_blank'>" . $_CONFIG['accounturl'] . "/verification.php?email=" . $email . "&code=" . $verificationcode . "</a></p>
                        <br>
                        <p>If the above link does not work enter the code below on the verification page.</p>
                        <p>" . $verificationcode . "</p>
                        <br>
                        <p>" . $_CONFIG['sitename'] . " Staff Team</p>
                        </body>
                        </html>";

                    // Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                    // More headers
                    $headers .= "From: " . $_CONFIG['sitename'] . "Staff Team" . "\r\n";

                    mail($to, $subject, $message, $headers);

                    session_set_cookie_params(
                        time() + 3600,      // $lifetime
                        '/',                // $path 
                        '.khaosdevelopment.com'
                    );
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['firstname'] = $firstname;
                    $_SESSION['lastname'] = $lastname;
                    $_SESSION['email'] = $email;
                    $_SESSION['emailverified'] = $emailverified;
                    $_SESSION['accountid'] = $accountid;
                    $_SESSION['regdate'] = $regdate;
                    $_SESSION['profilepic'] = $profilepic;
                    $_SESSION['password'] = $password;
                    $_SESSION['lastlogin'] = $regdate;
                    $_SESSION['users_dicordlinked'] = $dicordlinked;
                    $_SESSION['loggedin'] = TRUE;
                    header("location: " . $_CONFIG['accounturl']);
                } else {
                    echo "Error: " . $sql2 . "<br>" . mysqli_error($dbcon);
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
            }
        }
    }
    mysqli_close($dbcon);
} else {
    header('location: ../register.php?reg=error333');
}
