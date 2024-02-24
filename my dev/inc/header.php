<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_CONFIG['sitename'] . ' - ' . $title; ?></title>

    <!-- CSS -->
    <link href="assets/css/fonts/etline-font.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cef1fcc158.js" crossorigin="anonymous"></script>
    <link href="assets/css/fonts/fontawesome/all.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/css/fonts/themify-icons.css" rel="stylesheet">

    <link href="assets/plugins/owl.carousel/owl.carousel.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- SEO Meta description -->
    <meta name="description" content="<?php echo $_CONFIG['description']; ?>">
    <meta name="author" content="<?php echo $_CONFIG['sitename']; ?>">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="<?php echo $_CONFIG['sitename']; ?>" /> <!-- website name -->
    <meta property="og:site" content="<?php echo $_CONFIG['url']; ?>" /> <!-- website link -->
    <meta property="og:title" content="<?php echo $_CONFIG['sitename'] . '-' . $_CONFIG['url']; ?>" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="<?php echo $_CONFIG['description']; ?>" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="<?php echo $_CONFIG['logo']; ?>" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="<?php echo $_CONFIG['url']; ?>" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="page-body">
