<?php
if (isset($_POST['submit']) && $_POST['submit'] == 'submit') {
    if (isset($_POST['email'])) {
        require 'dbcon.php';
        $email = $_POST['email'];
        $sql = "INSERT INTO mailing_list (email) VALUES ('$email')";
        if ($result = $dbcon->query($sql)) {
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
