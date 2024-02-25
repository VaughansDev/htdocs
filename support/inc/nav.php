<nav class="kd-navbar kd-navbar-top kd-navbar-collapse kd-navbar-sticky kd-navbar-expand-lg kd-navbar-dropdown-triangle kd-navbar-autohide">
    <div class="container">
        <a href="<?php echo $_CONFIG['domain']; ?>" class="kd-nav-logo">
            <img src="<?php echo $_CONFIG['storeurl']; ?>/assets/images/logo.png" alt="" width="88px">
        </a>
        <button class="kd-navbar-burger">
            <span></span><span></span><span></span>
        </button>
        <div class="kd-navbar-content">
            <ul class="kd-nav">
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php echo $_CONFIG['domain']; ?>"> Home </a>
                </li>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php echo $_CONFIG['storeurl']; ?>"> Store </a>
                </li>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php echo $_CONFIG['cloudhosturl']; ?>"> Cloud Hosting </a>
                </li>
                <!--<li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php //echo $_CONFIG['blogurl']; 
                                                    ?>"> Blog </a>
                </li>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php //echo $_CONFIG['domain']; 
                                                    ?>/partners.php"> Our Partners </a>
                </li>-->
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php echo $_CONFIG['supporturl']; ?>"> Support </a>
                </li>
            </ul>
            <ul class="kd-nav kd-nav-align-right">
                <?php
                require $_SERVER['DOCUMENT_ROOT'] . '/inc/cart.php';
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                ?>
                    <li class="kd-nav-item kd-nav-item-drop">
                        <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>">
                            <img height="50px" src="<?php echo $_SESSION['profilepic']; ?>">
                            <?php echo $_SESSION['username']; ?>
                        </a>
                        <ul class="kd-navbar-dropdown">
                            <li>
                                <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>"> My Account </a>
                            </li>
                            <li>
                                <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>/licenses.php"> My Licenses </a>
                            </li>
                            <li>
                                <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>/settings.php"> Account Settings </a>
                            </li>
                            <li>
                                <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>/logout.php"> Logout </a>
                            </li>
                            <div class="kd-navbar-dropdown-triangle"></div>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li class="kd-nav-item">
                        <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>/login.php">Login</a>
                    </li>
                    <li class="kd-nav-item">
                        <span><a href="<?php echo $_CONFIG['accounturl']; ?>/register.php" class="kd-btn kd-btn-md kd-btn-transparent">Sign Up</a></span>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<div class="kd-navbar kd-navbar-fullscreen kd-navbar-fullscreen-closed" style="z-index: -1000;">
    <div class="container">
        <button class="kd-navbar-burger">
            <span></span><span></span><span></span>
        </button>
        <div class="kd-navbar-content">
            <ul class="kd-nav kd-nav-align-left">
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php echo $_CONFIG['domain']; ?>"> Home </a>
                </li>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php echo $_CONFIG['storeurl']; ?>"> Store </a>
                </li>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php echo $_CONFIG['cloudhosturl']; ?>"> Cloud Hosting </a>
                </li>
                <!--<li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php //echo $_CONFIG['blogurl']; 
                                                    ?>"> Blog </a>
                </li>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php //echo $_CONFIG['domain']; 
                                                    ?>/partners.php"> Our Partners </a>
                </li>-->
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php echo $_CONFIG['supporturl']; ?>"> Support </a>
                </li>
            </ul>
            <ul class="kd-nav kd-nav-align-right">
                <li>
                    <a class="kd-nav-icon" href="<?php echo $_CONFIG['storeurl']; ?>/checkout.php">
                        <span class="icon kd-icon-bag"></span>
                    </a>
                </li>
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                ?>
                    <li class="kd-nav-item kd-nav-item-drop">
                        <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>">
                            <img height="50px" src="<?php echo $_SESSION['profilepic']; ?>">
                            <?php echo $_SESSION['username']; ?>
                        </a>
                        <ul class="kd-navbar-dropdown">
                            <li>
                                <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>"> My Account </a>
                            </li>
                            <li>
                                <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>/licenses.php"> My Licenses </a>
                            </li>
                            <li>
                                <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>/settings.php"> Account Settings </a>
                            </li>
                            <li>
                                <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>/logout.php"> Logout </a>
                            </li>
                            <div class="kd-navbar-dropdown-triangle"></div>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li class="kd-nav-item">
                        <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>/login.php">Login</a>
                    </li>
                    <li class="kd-nav-item">
                        <span><a href="<?php echo $_CONFIG['accounturl']; ?>/register.php" class="kd-btn kd-btn-md kd-btn-transparent">Sign Up</a></span>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <!-- END: Navbar -->
</div>