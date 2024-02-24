<!DOCTYPE html>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/config.php';
require $_SERVER['DOCUMENT_ROOT'] . '/inc/titles.php';
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_PAGE['title'].' | '.$_CONFIG['sitename']; ?></title>
    <meta name="description" content="Amdesk - Help Center HTML template for your digital products">
    <meta name="keywords" content="helpdesk, forum, template, HTML template, responsive, clean">
    <meta name="author" content="Khaos Development">
    <link rel="icon" type="image/png" href="<?php echo $_CONFIG['supporturl']; ?>/assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- START: Styles -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700%7cMaven+Pro:400,500,700" rel="stylesheet"><!-- %7c -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $_CONFIG['supporturl']; ?>/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="<?php echo $_CONFIG['supporturl']; ?>/assets/vendor/fancybox/dist/jquery.fancybox.min.css">
    <!-- Pe icon 7 stroke -->
    <link rel="stylesheet" href="<?php echo $_CONFIG['supporturl']; ?>/assets/vendor/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <!-- Swiper -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_CONFIG['supporturl']; ?>/assets/vendor/swiper/swiper-bundle.min.css">
    <!-- Bootstrap Select -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_CONFIG['supporturl']; ?>/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <!-- Dropzone -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_CONFIG['supporturl']; ?>/assets/vendor/dropzone/dist/min/dropzone.min.css">
    <!-- Quill -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_CONFIG['supporturl']; ?>/assets/vendor/quill/dist/quill.snow.css">
    <!-- Font Awesome -->
    <script defer src="<?php echo $_CONFIG['supporturl']; ?>/assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="<?php echo $_CONFIG['supporturl']; ?>/assets/vendor/fontawesome-free/js/v4-shims.js"></script>
    <!-- Amdesk -->
    <link rel="stylesheet" href="<?php echo $_CONFIG['supporturl']; ?>/assets/css/khaos.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo $_CONFIG['supporturl']; ?>/assets/css/custom.css">
    <!-- END: Styles -->
    <!-- jQuery -->
    <script src="<?php echo $_CONFIG['supporturl']; ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/nav.php';
    ?>