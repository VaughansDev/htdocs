<?php
if (isset($_POST['register']) && $_POST['register'] == 'register') {

  require 'config.php';

  $chars = '1234567890abcefghijklmnopqrstuvwxyz';
  $accountid = substr(str_shuffle($chars), 0, 10).'-'.substr(str_shuffle($chars), 0, 4).'-'.substr(str_shuffle($chars), 0, 12);
  $username = $_POST['username'];
  if ($_POST['password'] == $_POST['confpassword']) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  } else {
    header('location: ../register.php?reg=passwords-do-not-match');
  }
  $email = $_POST['email'];
  $maillist = $_POST['maillist'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $datecreated = date('d/m/Y-h:i:sA');
  $status = 'active';

  $sql = "INSERT INTO accounts (accountid, firstname, lastname, email, username, password, datecreated, status) VALUES ('$accountid', '$firstname', '$lastname', '$email', '$username', '$password', '$datecreated', '$status')";

  if ($dbcon->query($sql) === TRUE) {
    header('location: ../profile.php?reg=success');
  } else {
    header('location: ../register.php?reg=error');
  }

  $dbcon->close();
} else {
  header('location: ../register.php?reg=error');
}
