<?php
if (isset($_POST['login']) && $_POST['login'] == 'login'){
  require 'config.php';
  $username = $_POST['username'];
  if ($stmt = $dbcon->prepare('SELECT * FROM accounts WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
      $stmt->bind_result($id, $accountid, $username, $password, $firstname, $lastname, $regdate, $lastlogin, $status, $email, $profileimg, $emailverified, $credit);
      $stmt->fetch();

      if (password_verify($_POST['password'], $password)) {
        if ($emailverified != 1) {
          $msg = urlencode("You have not verified your email, Please check your inbox for the verification email.");
          header("Location: ../verification?status=error&msg=".$msg);
        }
        $username = $_POST['username'];
        $thislogin = date("d/m/Y-h:i:sA");
        $stmt2 = $dbcon->prepare("UPDATE accounts SET lastlogin = '$thislogin' WHERE username = '$username'");
        $stmt2->execute();

        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['regdate'] = $regdate;
        $_SESSION['lastlogin'] = $lastlogin;
        $_SESSION['emailverified'] = $emailverified;
        $_SESSION['accountid'] = $accountid;
        $_SESSION['profileimg'] = $profileimg;
        $_SESSION['creditbalance'] = $credit;
        $_SESSION['status'] = $status;
        $_SESSION['loggedin'] = TRUE;
        $msg = urlencode("You have been successfully logged.");
        header("Location: ../profile.php?status=success&msg=".$msg);
      } else {
        $msg = urlencode("The password you entered was incorrect, please try again or reset your password.");
        header("Location: ../login.php?status=error&msg=".$msg);
      }
    } else {
      $msg = urlencode("No account was found with that username.");
      header("Location: ../login.php?status=error&msg=".$msg);
    }
 } else {
   $msg = urlencode("An error occured while connecting to the database, please try again.");
   header("Location: ../login.php?status=error&msg=".$msg);
 }

 $stmt->close();
 mysqli_close($conn);
} else {
  header('location ../login.php?login=error');
}
