<?php
require 'config.php';

if (isset($_POST['maillist']) && $_POST['maillist'] == 'add') {

  $email = $_POST['email'];

  $sql = "INSERT INTO mailinglist (email) VALUES ('$email')";

  if ($dbcon->query($sql) === TRUE) {

    header('location: ../coming-soon.php?mailistadd=success');

  } else {

    header('location: ../coming-soon.php?maillistadd=error');

  }

  $dbcon->close();

} else {

  header('location: ../coming-soon.php?maillistadd=error');

}
?>
