<!DOCTYPE html>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/config.php';
require $_SERVER['DOCUMENT_ROOT'] . '/inc/titles.php';
session_set_cookie_params(
    time() + 3600,      // $lifetime
    '/',                // $path 
    '.khaosdevelopment.com'
);
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_PAGE['title'] . ' | ' . $_CONFIG['sitename']; ?></title>
    <meta name="description" content="Amdesk - Help Center HTML template for your digital products">
    <meta name="keywords" content="helpdesk, forum, template, HTML template, responsive, clean">
    <meta name="author" content="Khaos Development">
    <link rel="icon" type="image/png" href="<?php echo $_CONFIG['domain']; ?>/assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- START: Styles -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700%7cMaven+Pro:400,500,700" rel="stylesheet"><!-- %7c -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/vendor/fancybox/dist/jquery.fancybox.min.css">
    <!-- Pe icon 7 stroke -->
    <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/vendor/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <!-- Swiper -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_CONFIG['domain']; ?>/assets/vendor/swiper/swiper-bundle.min.css">
    <!-- Bootstrap Select -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_CONFIG['domain']; ?>/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <!-- Dropzone -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_CONFIG['domain']; ?>/assets/vendor/dropzone/dist/min/dropzone.min.css">
    <!-- Quill -->
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cef1fcc158.js" crossorigin="anonymous"></script>
    <!-- Amdesk -->
    <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/khaos.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/custom.css">
    <!-- END: Styles -->
    <!-- jQuery -->
    <script src="<?php echo $_CONFIG['domain']; ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/nav.php';
    ?>