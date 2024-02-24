<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-nav zi-3">
  <div class="container">
    <div class="row">
      <div class="col-4 col-sm-3 col-md-2 mr-auto">
        <a class="navbar-brand logo" href="index.php">
          <img src="<?php echo $_CONFIG['logo']; ?>" alt="Khaos Development" class="logo-light mx-auto">
        </a>
      </div>
      <div class="col-4 d-none d-lg-block mx-auto">
        <form class="input-group border-0 bg-transparent">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sm btn-success text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </form>
      </div>
      <div class="col-8 col-sm-8 col-md-8 col-lg-6 col-xl-4 ml-auto text-right">
        <?php if (!isset($_SESSION['loggedin'])) { ?>
          <a class="btn btn-sm btn-success text-secondary mr-2" href="#" data-toggle="modal" data-target="#userLogin">Sign in</a>
          <a class="btn btn-sm text-light d-none d-sm-inline-block" href="register.php">Sign up</a>
        <?php } else { ?>
          <a class="btn btn-sm text-light d-none d-sm-inline-block" href="logout.php">Logout</a>
        <?php } ?>
        <ul class="nav navbar-nav d-none d-sm-inline-flex flex-row">
          <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle small" href="#" id="dropdownGaming" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mr-2 fas fa-globe"></i>EN </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="dropdownGaming">
              <a class="dropdown-item" href="main.php">English</a>
              <a class="dropdown-item" href="main.php">Deutsch</a>
              <a class="dropdown-item" href="main.php">Español</a>
            </div>
          </li>-->
          <li class="nav-item">
            <a class="nav-link small" href="cart.php" data-toggle="offcanvas" data-target="#offcanvas-cart">
              <span class="p-relative d-inline-flex">
                <?php if (!empty($_SESSION["shopping_cart"])) {
                  $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                ?>
                  <span class="badge-cart badge badge-counter badge-success position-absolute l-1"><?php echo $cart_count; ?></span>
                <?php
                }
                ?>
                <i class="fas fa-shopping-cart"></i>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-fixed" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">☰</button>
    <div class="collapse navbar-collapse" id="collapsingNavbar">
      <ul class="navbar-nav">
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle pl-lg-0" href="store-product.php" id="dropdownGaming_games" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Games </a>
          <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_games">
            <a class="dropdown-item" href="store.php">Action</a>
            <a class="dropdown-item" href="store.php">Adventure</a>
            <a class="dropdown-item" href="store.php">Cooperative</a>
            <a class="dropdown-item" href="store.php">MMO</a>
            <a class="dropdown-item" href="store.php">RPG</a>
            <a class="dropdown-item" href="store.php">Simulation</a>
            <a class="dropdown-item" href="store.php">Economy</a>
            <a class="dropdown-item" href="store.php">Horror</a>
            <a class="dropdown-item" href="store.php">Arcade</a>
            <a class="dropdown-item" href="store.php">Hack & Slash</a>
            <a class="dropdown-item" href="store.php">Puzzle</a>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle" href="store.php" id="dropdownGaming_software" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Software </a>
          <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_software">
            <a class="dropdown-item" href="store.php">Animation & Modeling</a>
            <a class="dropdown-item" href="store.php">Audio Production</a>
            <a class="dropdown-item" href="store.php">Design & Illustration</a>
            <a class="dropdown-item" href="store.php">Education</a>
            <a class="dropdown-item" href="store.php">Game Development</a>
            <a class="dropdown-item" href="store.php">Photo Editing</a>
            <a class="dropdown-item" href="store.php">Utilities</a>
            <a class="dropdown-item" href="store.php">Video Production</a>
            <a class="dropdown-item" href="store.php">Web Publishing</a>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle" href="news.php" id="dropdownGaming_community" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community </a>
          <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_community">
            <a class="dropdown-item" href="news.php">Discussions</a>
            <a class="dropdown-item" href="news.php">Workshop</a>
            <a class="dropdown-item" href="news.php">Market</a>
            <a class="dropdown-item" href="news.php">Broadcasts</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">dashboard</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- /.End Navbar -->