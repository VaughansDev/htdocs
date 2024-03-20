<?php
if (isset($_POST['submit']) && $_POST['submit'] == 'submit') {
    if (isset($_POST['email'])) {
        require 'dbcon.php';
        $email = $_POST['email'];
        $sql = "SELECT * FROM mailing_list WHERE email = '$email'";
        $result = $dbcon->query($sql);
        if ($result->num_rows > 0) {
            header("location: " . $_CONFIG['domain'] . "/home.php?mailist=emailAlreadyRegistered");
        }
        $sql2 = "INSERT INTO mailing_list (email) VALUES ('$email')";
        if ($result2 = $dbcon->query($sql2)) {
            header("location: " . $_CONFIG['domain'] . "/home.php?mailist=success");
        } else {
            header("location: " . $_CONFIG['domain'] . "/home.php?mailist=error");
        }
    } else {
        header("location: " . $_CONFIG['domain'] . "/home.php?mailist=error");
    }
} else {
    header("location: " . $_CONFIG['domain'] . "/home.php?mailist=error");
}
