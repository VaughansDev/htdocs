<?php
require 'config.php';

$dbcon = new mysqli($_CONFIG['dbhost'], $_CONFIG['dbuser'], $_CONFIG['dbpass'], $_CONFIG['dbname']);
if ($dbcon->connect_error) {
    die("Connection Failed: " . $dbcon->connect_error);
}
