<?php
    switch ($_SERVER['PHP_SELF']) {

    case "/home.php":
        $_PAGE['title'] = "Home";
        break;

    default:
        $_PAGE['title'] = "Home";
    }
?>