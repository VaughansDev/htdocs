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
                    <a class="kd-nav-link" href="<?php echo $_CONFIG['storeurl']; ?>"> Store </a>
                </li>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="<?php echo $_CONFIG['blogurl']; ?>"> Blog </a>
                </li>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="javascript:;"> Help Center </a>
                    <ul class="kd-navbar-dropdown">
                        <li>
                            <a class="kd-nav-link" href="<?php echo $_CONFIG['supporturl']; ?>"> Help Center </a>
                        </li>
                        <li>
                            <a class="kd-nav-link" href="<?php echo $_CONFIG['docsurl']; ?>"> Documentation </a>
                        </li>
                        <li>
                            <a class="kd-nav-link" href="<?php echo $_CONFIG['knowledgebaseurl']; ?>"> Knowledge Base </a>
                        </li>
                        <li>
                            <a class="kd-nav-link" href="<?php echo $_CONFIG['forumsurl']; ?>"> Forums </a>
                        </li>
                        <li class="kd-nav-item kd-nav-item-drop">
                            <a class="kd-nav-link" href="javascript:;"> Support Tickets </a>
                            <ul class="kd-navbar-dropdown">
                                <li>
                                    <a class="kd-nav-link" href="<?php echo $_CONFIG['ticketsurl']; ?>/my-tickets.php"> My Tickets </a>
                                </li>
                                <li>
                                    <a class="kd-nav-link" href="<?php echo $_CONFIG['ticketsurl']; ?>/new-ticket.php"> New Ticket </a>
                                </li>
                                <div class="kd-navbar-dropdown-triangle"></div>
                            </ul>
                        </li>
                        <div class="kd-navbar-dropdown-triangle"></div>
                    </ul>
                </li>
                <?php
                if (isset($_SESSION['']))
                ?>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="javascript:;"> Account </a>
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
                        <div class="kd-navbar-dropdown-triangle"></div>
                    </ul>
                </li>
            </ul>
            <ul class="kd-nav kd-nav-align-right">
                <?php
                require $_SERVER['DOCUMENT_ROOT'] . '/inc/cart.php';
                ?>
                <li class="kd-nav-item">
                    <a class="kd-nav-link" href="<?php echo $_CONFIG['accounturl']; ?>/login.php">Login</a>
                </li>
                <li class="kd-nav-item">
                    <span><a href="<?php echo $_CONFIG['accounturl']; ?>/register.php" class="kd-btn kd-btn-md kd-btn-transparent">Sign Up</a></span>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="kd-navbar kd-navbar-fullscreen">
    <div class="container">
        <button class="kd-navbar-burger">
            <span></span><span></span><span></span>
        </button>
        <div class="kd-navbar-content">
            <ul class="kd-nav kd-nav-align-left">
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="store.php"> Store </a>
                    <ul class="kd-navbar-dropdown">
                        <li>
                            <a class="kd-nav-link" href="store.php"> Store </a>
                        </li>
                        <li>
                            <a class="kd-nav-link" href="product.php"> Product </a>
                        </li>
                        <li>
                            <a class="kd-nav-link" href="checkout.php"> Checkout </a>
                        </li>
                        <div class="kd-navbar-dropdown-triangle"></div>
                    </ul>
                </li>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="blog.php"> Blog </a>
                    <ul class="kd-navbar-dropdown">
                        <li>
                            <a class="kd-nav-link" href="blog.php"> Blog </a>
                        </li>
                        <li>
                            <a class="kd-nav-link" href="single-post.php"> Single Post </a>
                        </li>
                        <div class="kd-navbar-dropdown-triangle"></div>
                    </ul>
                </li>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="help-center.php"> Help Center </a>
                    <ul class="kd-navbar-dropdown">
                        <li>
                            <a class="kd-nav-link" href="help-center.php"> Help Center </a>
                        </li>
                        <li class="kd-nav-item kd-nav-item-drop">
                            <a class="kd-nav-link" href="documentations.php"> Documentations </a>
                            <ul class="kd-navbar-dropdown">
                                <li>
                                    <a class="kd-nav-link" href="documentations.php"> Documentations </a>
                                </li>
                                <li>
                                    <a class="kd-nav-link" href="single-documentation.php"> Single documentation </a>
                                </li>
                                <div class="kd-navbar-dropdown-triangle"></div>
                            </ul>
                        </li>
                        <li class="kd-nav-item kd-nav-item-drop">
                            <a class="kd-nav-link" href="articles.php"> Knowledge Base </a>
                            <ul class="kd-navbar-dropdown">
                                <li>
                                    <a class="kd-nav-link" href="articles.php"> Knowledge Base </a>
                                </li>
                                <li>
                                    <a class="kd-nav-link" href="single-article-category.php"> Single Article Category </a>
                                </li>
                                <li>
                                    <a class="kd-nav-link" href="single-article.php"> Single Article </a>
                                </li>
                                <div class="kd-navbar-dropdown-triangle"></div>
                            </ul>
                        </li>
                        <li class="kd-nav-item kd-nav-item-drop">
                            <a class="kd-nav-link" href="forums.php"> Forums </a>
                            <ul class="kd-navbar-dropdown">
                                <li>
                                    <a class="kd-nav-link" href="forums.php"> Forums </a>
                                </li>
                                <li>
                                    <a class="kd-nav-link" href="topics.php"> Topics </a>
                                </li>
                                <li>
                                    <a class="kd-nav-link" href="single-topic.php"> Single Topic </a>
                                </li>
                                <div class="kd-navbar-dropdown-triangle"></div>
                            </ul>
                        </li>
                        <li class="kd-nav-item kd-nav-item-drop">
                            <a class="kd-nav-link" href="ticket.php"> Ticket System </a>
                            <ul class="kd-navbar-dropdown">
                                <li>
                                    <a class="kd-nav-link" href="ticket.php"> Ticket System </a>
                                </li>
                                <li>
                                    <a class="kd-nav-link" href="ticket-submit.php"> Submit Ticket </a>
                                </li>
                                <li>
                                    <a class="kd-nav-link" href="ticket-submit-2.php"> Submit Ticket 2 </a>
                                </li>
                                <li>
                                    <a class="kd-nav-link" href="single-ticket.php"> Single Ticket </a>
                                </li>
                                <div class="kd-navbar-dropdown-triangle"></div>
                            </ul>
                        </li>
                        <div class="kd-navbar-dropdown-triangle"></div>
                    </ul>
                </li>
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-link" href="account.php"> Account </a>
                    <ul class="kd-navbar-dropdown">
                        <li>
                            <a class="kd-nav-link" href="account.php"> Account </a>
                        </li>
                        <li>
                            <a class="kd-nav-link" href="account-licenses.php"> Licenses </a>
                        </li>
                        <li>
                            <a class="kd-nav-link" href="account-settings.php"> Settings </a>
                        </li>
                        <div class="kd-navbar-dropdown-triangle"></div>
                    </ul>
                </li>
            </ul>
            <ul class="kd-nav kd-nav-align-right">
                <li>
                    <a class="kd-nav-icon" href="checkout.php">
                        <span class="kd-nav-badge">2</span>
                        <span class="icon kd-icon-bag"></span>
                    </a>
                </li>
                <li>
                    <a data-fancybox data-touch="false" data-close-existing="true" data-src="#login" href="javascript:;">Log In</a>
                </li>
                <li>
                    <span><a data-fancybox data-touch="false" data-close-existing="true" data-src="#signup" href="javascript:;" class="kd-btn kd-btn-md kd-btn-transparent">Sign Up</a></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Navbar -->
</div>