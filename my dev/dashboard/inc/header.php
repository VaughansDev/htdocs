<?php
    require 'config.php';
    require 'titles.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_CONFIG['url']; ?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo $_CONFIG['url']; ?>/assets/img/favicon.png">
    <title>
        <?php echo $pagetitle; ?> | VaughanHD
    </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="<?php echo $_CONFIG['url']; ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?php echo $_CONFIG['url']; ?>/assets/css/nucleo-svg.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?php echo $_CONFIG['url']; ?>/assets/css/nucleo-svg.css" rel="stylesheet" />

    <link id="pagestyle" href="<?php echo $_CONFIG['url']; ?>/assets/css/argon-dashboard.min9c7f.css?v=2.0.5" rel="stylesheet" />



</head>

<body class="g-sidenav-show  landing bg-gray-100">

    <div class="h-100 bg-gradient-primary position-absolute w-100"></div>
    <?php
        require 'nav.php';
    ?>
