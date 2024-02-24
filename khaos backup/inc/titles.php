<?php
    switch ($_SERVER['PHP_SELF']) {

    case "/404.php":
        $_PAGE['title'] = "Error 404";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/about.php":
        $_PAGE['title'] = "About Us";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/blog-details.php":
        $_PAGE['title'] = "Blog Details";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/blog-left.php":
        $_PAGE['title'] = "Blog Left";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/blog.php":
        $_PAGE['title'] = "Blog";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/career-details.php":
        $_PAGE['title'] = "Career Details";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/Career.php":
        $_PAGE['title'] = "Career";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/cart.php":
        $_PAGE['title'] = "Cart";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/checkout.php":
        $_PAGE['title'] = "Checkout";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/contact.php":
        $_PAGE['title'] = "Contact Us";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/faq.php":
        $_PAGE['title'] = "FAQ";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/home.php":
        $_PAGE['title'] = "Home";
        $_PAGE['breadcrumbs'] = false;
        break;

    case "/login.php":
        $_PAGE['title'] = "Login";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/register.php":
        $_PAGE['title'] = "Register";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/reset-password.php":
        $_PAGE['title'] = "Reset Password";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/verification.php":
        $_PAGE['title'] = "Verification";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/portfolio-details.php":
        $_PAGE['title'] = "Portfolio Details";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/portfolio.php":
        $_PAGE['title'] = "Portfolio";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/pricing.php":
        $_PAGE['title'] = "Pricing";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/apps-selfhost-pricing.php":
        $_PAGE['title'] = "Self Hosted Pricing";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/apps-cloudhost-pricing.php":
        $_PAGE['title'] = "Cloud Hosted Pricing";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/service.php":
        $_PAGE['title'] = "Service";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/service-details.php":
        $_PAGE['title'] = "Service Details";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/shop-details.php":
        $_PAGE['title'] = "Shop Details";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/shop.php":
        $_PAGE['title'] = "Shop";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/team-details.php":
        $_PAGE['title'] = "Team Details";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/team.php":
        $_PAGE['title'] = "Team";
        $_PAGE['breadcrumbs'] = true;
        break;

    case "/testimonial.php":
        $_PAGE['title'] = "Testimonials";
        $_PAGE['breadcrumbs'] = true;
        break;

    default:
        $_PAGE['title'] = "Khaos";
        $_PAGE['breadcrumbs'] = false;
    }
?>