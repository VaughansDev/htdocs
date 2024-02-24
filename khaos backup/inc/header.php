<!DOCTYPE html>
<?php
require 'config.php';
require 'titles.php';
session_start();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Khaos Development - Web Development, SaaS Products and Consulting">
  <meta name="keywords" content="Development, Khaos, Khaos Development, SaaS, Hosting, FiveM, FiveM Plugins, Servers, Applications, Application system">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Khaos Development">
  <title>
    <?php echo $_PAGE['title'] . ' | ' . $_CONFIG['sitename']; ?>
  </title>
  <link rel="icon" type="image/png" href="<?php echo $_CONFIG['domain']; ?>/assets/img/logo/favicon.ico">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/kursor.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/slick-theme.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/nice-select.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/normalize.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/modal-video.min.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/sal.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/swiper.min.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="<?php echo $_CONFIG['domain']; ?>/assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
  <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
  <div id="preloader" class="inso-preloader">
    <span class="loader"></span>
  </div>
  <div class="o-hidden">
    <div class="offcanvase">
      <div class="offcanvase__menu">
        <div class="offcanvase__menu--content">
          <div class="offcanvase__menu--top mb-30 d-flex justify-content-between">
            <div class="offcanvase__menu--logo">
              <div class="offcanvase__logo">
                <a href="<?php echo $_CONFIG['domain']; ?>index.php">
                  <img src="<?php echo $_CONFIG['domain']; ?>/assets/img/logo/logo.png" alt="Khaos Development">
                </a>
              </div>
            </div>
            <div class="offcanvase__menu--close-icon">
              <div class="close-menu pointer"><i class="fa-sharp fa-regular fa-xmark"></i></div>
            </div>
          </div>
          <div class="offcanvase-menu o-hidden mb-30"></div>
          <div class="offcanvase__button mb-30">
            <a class="login" href="<?php echo $_CONFIG['domain']; ?>/login.php">Login</a>
            <a class="signup" href="<?php echo $_CONFIG['domain']; ?>/register.php">Sign Up</a>
          </div>
          <div class="offcanvase__menu--contact center">
            <h4 class="offcanvase__menu--contact-title mb-20">Contact Us</h4>
            <div class="offcanvase__menu--contact-text">
              <ul>
                <li><a href="mailto:contact@khaosdevelopment.com">contact@khaosdevelopment.com</a></li>
                <li><a href="mailto:support@khaosdevelopment.com">support@khaosdevelopment.com</a></li>
              </ul>
            </div>
          </div>
          <div class="offcanvase__menu--social">
            <ul class="d-flex justify-content-center gap-3">
              <li class="social-item"><a href="#" target="_blank"><i class="fa-brands fa-discord"></i></a></li>
              <li class="social-item"><a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
              <li class="social-item"><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="offcanvas__overlay"></div>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="header__wrapper">
          <div class="header__logo">
            <a href="<?php echo $_CONFIG['domain']; ?>/index.php"><img src="<?php echo $_CONFIG['domain']; ?>/assets/img/logo/logo.png" alt="Khaos Development Logo"></a>
          </div>
          <div class="header__menu">
            <nav Id="offcanvase__menu">
              <ul>
                <li>
                  <a href="<?php echo $_CONFIG['domain']; ?>/index.php">Home</a>
                </li>
                <li><a href="<?php echo $_CONFIG['domain']; ?>/shop.php">Shop</a></li>
                <li class="has-children">
                  <a href="javascript:;">Cloud Pricing</a>
                  <ul class="submenu">
                    <li><a href="<?php echo $_CONFIG['domain']; ?>/apps-cloudhost-pricing.php">Khaos Applications</a></li>
                    <li><a href="<?php echo $_CONFIG['domain']; ?>/cad-cloudhost-pricing.php">Khaos CAD</a></li>
                    <li><a href="<?php echo $_CONFIG['domain']; ?>/cms-cloudhost-pricing.php">Khaos CMS</a></li>
                    <li><a href="<?php echo $_CONFIG['domain']; ?>/forums-cloudhost-pricing.php">Khaos Forums</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo $_CONFIG['domain']; ?>/shop.php?cat=fivem">FiveM Scripts</a></li>
                <li class="has-children">
                  <a href="javascript:;">Resources</a>
                  <ul class="submenu">
                    <li><a href="<?php echo $_CONFIG['domain']; ?>/contact.php">Contact Us</a></li>
                    <li><a href="<?php echo $_CONFIG['domain']; ?>/support/">Support</a></li>
                    <li><a href="<?php echo $_CONFIG['domain']; ?>/docs/">Documentation</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo $_CONFIG['domain']; ?>/resellers.php">Reseller Program</a></li>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE) { ?>
                  <li class="has-children">
                    <a href="javascript:;"><?php echo $_SESSION['username']; ?></a>
                    <ul class="submenu">
                      <li><a href="<?php echo $_CONFIG['domain']; ?>/profile.php">Profile</a></li>
                      <li><a href="<?php echo $_CONFIG['domain']; ?>/logout.php">Logout</a></li>
                    </ul>
                  </li>
              </ul>
            </nav>
          </div>
          <div class="header__right">
          <?php } else { ?>
            </ul>
            </nav>
          </div>
          <div class="header__right">
            <div class="header__right--btn">
              <a class="login" href="<?php echo $_CONFIG['domain']; ?>/login.php">Login</a>
              <a class="signup" href="<?php echo $_CONFIG['domain']; ?>/register.php">Sign Up</a>
            </div>
          <?php } ?>
          <button class="menu-icon d-md-block d-lg-none"><i class="fa-sharp fa-solid fa-bars"></i>
          </button>
          </div>
        </div>
      </div>
    </div>
  </header>