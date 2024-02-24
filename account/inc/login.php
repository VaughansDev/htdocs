<?php
require 'dbcon.php';
if (isset($_GET['method']) && $_GET['method'] == 'discord') {
    $discord_id = $_GET['discord_id'];
    $discord_email = $_GET['discord_email'];

    $sql = "SELECT * FROM linked_discord_accounts WHERE discord_id='$discord_id' AND discord_email='$discord_email'";
    $result = $dbcon->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($stmt = $dbcon->prepare('SELECT * FROM users WHERE users_accountid = ?')) {
                $stmt->bind_param('s', $row['accountid']);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($users_id, $users_username, $users_firstname, $users_lastname, $users_email, $users_emailverified, $users_accountid, $users_regdate, $users_profilepic, $users_password, $users_lastlogin, $users_dicordlinked);
                    $stmt->fetch();

                    $thislogin = date("Y/m/d - h:i:sa");
                    $stmt2 = $dbcon->prepare("UPDATE users SET users_lastlogin = '$thislogin' WHERE users_accountid = '$accountid'");
                    $stmt2->execute();

                    session_name('Khaos Development');
                    session_set_cookie_params(0, '/', '.khaosdevelopment.com');
                    session_start();
                    $_SESSION['id'] = $users_id;
                    $_SESSION['username'] = $users_username;
                    $_SESSION['firstname'] = $users_firstname;
                    $_SESSION['lastname'] = $users_lastname;
                    $_SESSION['email'] = $users_email;
                    $_SESSION['emailverified'] = $users_emailverified;
                    $_SESSION['accountid'] = $users_accountid;
                    $_SESSION['regdate'] = $users_regdate;
                    $_SESSION['profilepic'] = $users_profilepic;
                    $_SESSION['password'] = $users_password;
                    $_SESSION['lastlogin'] = $users_lastlogin;
                    $_SESSION['users_dicordlinked'] = $users_dicordlinked;
                    $_SESSION['loggedin'] = TRUE;
                    
                    echo 'test';
                    header("location: " . $_CONFIG['accounturl']);
                } else {
                    $msg = urlencode("No account was found with that username.");
                    header("Location: " . $_CONFIG['accounturl'] . "/login.php?status=error&msg=" . $msg);
                }
            } else {
                $msg = urlencode("No account was found with that username.");
                header("Location: " . $_CONFIG['accounturl'] . "/login.php?status=error&msg=" . $msg);
            }
        }
    } else {
        $msg = urlencode("An error occured while dbconecting to the database, please try again.");
        header("Location: " . $_CONFIG['accounturl'] . "/login.php?status=error&msg=" . $msg);
    }

    $stmt->close();
    mysqli_close($dbcon);
} elseif (isset($_POST['login']) && $_POST['login'] == 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($stmt = $dbcon->prepare('SELECT * FROM users WHERE users_username = ?')) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($users_id, $users_username, $users_firstname, $users_lastname, $users_email, $users_emailverified, $users_accountid, $users_regdate, $users_profilepic, $users_password, $users_lastlogin, $users_dicordlinked);
            $stmt->fetch();
            if (password_verify($_POST['password'], $users_password)) {
                $thislogin = date("Y/m/d - h:i:sa");
                $stmt2 = $dbcon->prepare("UPDATE users SET users_lastlogin = '$thislogin' WHERE users_username = '$username'");
                $stmt2->execute();

                session_name('Khaos Development');
                session_set_cookie_params(0, '/', '.khaosdevelopment.com');
                session_start();
                $_SESSION['id'] = $users_id;
                $_SESSION['username'] = $users_username;
                $_SESSION['firstname'] = $users_firstname;
                $_SESSION['lastname'] = $users_lastname;
                $_SESSION['email'] = $users_email;
                $_SESSION['emailverified'] = $users_emailverified;
                $_SESSION['accountid'] = $users_accountid;
                $_SESSION['regdate'] = $users_regdate;
                $_SESSION['profilepic'] = $users_profilepic;
                $_SESSION['password'] = $users_password;
                $_SESSION['lastlogin'] = $users_lastlogin;
                $_SESSION['users_dicordlinked'] = $users_dicordlinked;
                $_SESSION['loggedin'] = TRUE;
                header("location: " . $_CONFIG['accounturl']);
            }
        } else {
            $msg = urlencode("No account was found with that username.");
            header("Location: " . $_CONFIG['accounturl'] . "/login.php?status=error&msg=" . $msg);
        }
    } else {
        $msg = urlencode("An error occured while dbconecting to the database, please try again.");
        header("Location: " . $_CONFIG['accounturl'] . "/login.php?status=error&msg=" . $msg);
    }

    $stmt->close();
    mysqli_close($dbcon);
} else {
    header("Location: " . $_CONFIG['accounturl'] . "/login.php");
}
