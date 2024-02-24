<?php
require 'config.php';

$dbcon = new mysqli($_CONFIG['dbhost'], $_CONFIG['dbuser'], $_CONFIG['dbpass'], $_CONFIG['dbname']);
if ($dbcon->connect_error) {
    die("Connection Failed: " . $dbcon->connect_error);
}

$reqsite = $_SERVER['SERVER_NAME'];
echo $reqsite;
$sql = "SELECT * FROM cloudhosts WHERE subdomain = '$reqsite'";
$result = $dbcon->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $subdomain = $row['subdomain'];
        $database = $row['databasename'];
        $appname = $row['appname'];
        $license = $row['license'];

        //$apiurl = 'http://prod.khaosdevelopment.com/license/api.php?license=' . $licensekey . '&hostname=' . $subdomain;
        //$json = file_get_contents($apiurl);
        //$data = json_decode($json, true);
        //$apistatus = $data[0]["status"];
        $apistatus = "ACTIVE";
        if ($apistatus == "ACTIVE") {
            $_LICENSE['status'] = "VALID";
        } elseif ($apistatus != "ACTIVE") {
            $_LICENSE['status'] = "INVALID";
        }
        if ($_LICENSE['status'] == "VALID") {
            session_start();
            $_SESSION['subdomain'] = $subdomain;
            $_SESSION['database'] = $database;
            $_SESSION['appname'] = $appname;
            $_SESSION['license'] = $license;

            header("location: /$appname/index.php?dbn=$database");
        } else {
            header("Location: error.php?error=domainnotfound1");
        }
    }
} else {
    header("Location: error.php?error=domainnotfound2");
}
