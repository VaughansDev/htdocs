<!--
    START: Navbar

    Additional Classes:
        .kd-navbar-sticky || .kd-navbar-fixed
        .kd-navbar-autohide
        .kd-navbar-dropdown-triangle
        .kd-navbar-dropdown-dark - only <ul>
        .kd-navbar-expand || .kd-navbar-expand-lg || .kd-navbar-expand-xl
-->
<nav class="kd-navbar kd-navbar-top kd-navbar-collapse kd-navbar-sticky kd-navbar-expand-lg kd-navbar-dropdown-triangle kd-navbar-autohide">
    <div class="container">
        <a href="index-2.php" class="kd-nav-logo">
            <img src="<?php echo $_CONFIG['blogurl']; ?>/assets/images/logo.svg" alt="" width="88px">
        </a>
        <button class="kd-navbar-burger">
            <span></span><span></span><span></span>
        </button>
        <div class="kd-navbar-content">
            <ul class="kd-nav">
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
                <li class="kd-nav-item kd-nav-item-drop">
                    <a class="kd-nav-icon" href="#" role="button">
                        <span class="kd-nav-badge">2</span>
                        <img class="icon" width="22" src="<?php echo $_CONFIG['blogurl']; ?>/assets/images/icon-bag.svg">
                    </a>
                    <div class="kd-navbar-dropdown kd-navbar-dropdown-left kd-dropdown-checkout">
                        <div class="kd-navbar-dropdown-triangle"></div>
                        <table class="kd-table kd-table-checkout">
                            <tbody>
                                <tr>
                                    <th scope="row" class="kd-table-checkout-img">
                                        <a href="product.php"><img src="<?php echo $_CONFIG['blogurl']; ?>/assets/images/product-1-sm.png" alt=""></a>
                                    </th>
                                    <td class="kd-table-checkout-title">
                                        <a href="product.php">Sensific – Saying Beast Lesser for in Fruitful</a>
                                    </td>
                                    <td class="kd-table-checkout-price">
                                        <div class="kd-table-checkout-price">$59</div>
                                    </td>
                                    <td class="kd-table-checkout-delete">
                                        <a href="#"><span class="icon pe-7s-close"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="kd-table-checkout-img">
                                        <a href="product.php"><img src="<?php echo $_CONFIG['blogurl']; ?>/assets/images/product-2-sm.png" alt=""></a>
                                    </th>
                                    <td class="kd-table-checkout-title">
                                        <a href="product.php">Minist – Subdue Above for Signs Dry is Have Great</a>
                                    </td>
                                    <td class="kd-table-checkout-price">
                                        <div class="kd-table-checkout-price">$39</div>
                                    </td>
                                    <td class="kd-table-checkout-delete">
                                        <a href="#"><span class="icon pe-7s-close"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between kd-box-content pt-0 pb-0 mt-15 mnb-6">
                            <span>Total Payment:</span><span><strong>$98</strong></span>
                        </div>
                        <div class="kd-box-content">
                            <a href="checkout.php" class="kd-btn kd-btn-md kd-btn-block">Checkout</a>
                        </div>
                    </div>
                </li>
                <li class="kd-nav-item">
                    <a class="kd-nav-link" data-fancybox data-touch="false" data-close-existing="true" data-src="#login" href="javascript:;">Log In</a>
                </li>
                <li class="kd-nav-item">
                    <span><a data-fancybox data-touch="false" data-close-existing="true" data-src="#signup" href="javascript:;" class="kd-btn kd-btn-md kd-btn-transparent">Sign Up</a></span>
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
</div>
<!-- END: Navbar -->