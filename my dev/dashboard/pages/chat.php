<?php
  require '../inc/header.php';
?>
<div class="main-content position-relative max-height-vh-100 h-100">

<nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
<div class="container-fluid py-1">
<nav aria-label="breadcrumb">
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
<li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Pages</a></li>
<li class="breadcrumb-item text-sm text-white active" aria-current="page">Chat</li>
</ol>
<h6 class="text-white font-weight-bolder ms-2">Chat</h6>
</nav>
<div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none">
<a href="javascript:;" class="nav-link text-white p-0">
<div class="sidenav-toggler-inner">
<i class="sidenav-toggler-line bg-white"></i>
<i class="sidenav-toggler-line bg-white"></i>
<i class="sidenav-toggler-line bg-white"></i>
</div>
</a>
</div>
<div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
<div class="ms-md-auto pe-md-3 d-flex align-items-center">
<div class="input-group">
<span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="Type here...">
</div>
</div>
<ul class="navbar-nav justify-content-end">
<li class="nav-item d-flex align-items-center">
<a href="../authentication/signin/illustration.html" class="nav-link text-white font-weight-bold px-0" target="_blank">
<i class="fa fa-user me-sm-1"></i>
<span class="d-sm-inline d-none">Sign In</span>
</a>
</li>
<li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
<a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
<div class="sidenav-toggler-inner">
<i class="sidenav-toggler-line bg-white"></i>
<i class="sidenav-toggler-line bg-white"></i>
<i class="sidenav-toggler-line bg-white"></i>
</div>
</a>
</li>
<li class="nav-item px-3 d-flex align-items-center">
<a href="javascript:;" class="nav-link text-white p-0">
<i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
</a>
</li>
<li class="nav-item dropdown pe-2 d-flex align-items-center">
<a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
<i class="fa fa-bell cursor-pointer"></i>
</a>
<ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownMenuButton">
<li class="mb-2">
<a class="dropdown-item border-radius-md" href="javascript:;">
<div class="d-flex py-1">
<div class="my-auto">
<img src="../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user image">
</div>
<div class="d-flex flex-column justify-content-center">
<h6 class="text-sm font-weight-normal mb-1">
<span class="font-weight-bold">New message</span> from Laur
</h6>
<p class="text-xs text-secondary mb-0">
<i class="fa fa-clock me-1"></i>
13 minutes ago
</p>
</div>
</div>
</a>
</li>
<li class="mb-2">
<a class="dropdown-item border-radius-md" href="javascript:;">
<div class="d-flex py-1">
<div class="my-auto">
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3" alt="logo spotify">
</div>
<div class="d-flex flex-column justify-content-center">
<h6 class="text-sm font-weight-normal mb-1">
<span class="font-weight-bold">New album</span> by Travis Scott
</h6>
<p class="text-xs text-secondary mb-0">
<i class="fa fa-clock me-1"></i>
1 day
</p>
</div>
</div>
</a>
</li>
<li>
<a class="dropdown-item border-radius-md" href="javascript:;">
<div class="d-flex py-1">
<div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
<svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<title>credit-card</title>
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="Rounded-Icons" transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
<g transform="translate(1716.000000, 291.000000)">
<g transform="translate(453.000000, 454.000000)">
<path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
<path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
</g>
</g>
</g>
</g>
</svg>
</div>
<div class="d-flex flex-column justify-content-center">
<h6 class="text-sm font-weight-normal mb-1">
Payment successfully completed
</h6>
<p class="text-xs text-secondary mb-0">
<i class="fa fa-clock me-1"></i>
2 days
</p>
</div>
</div>
</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</nav>

<div class="card shadow-lg mx-4 card-profile-bottom">
<div class="card-body p-3">
<div class="row gx-4">
<div class="col-auto">
<div class="avatar avatar-xl position-relative">
<img src="../../assets/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
</div>
</div>
<div class="col-auto my-auto">
<div class="h-100">
<h5 class="mb-1">
Sayo Kravits
</h5>
<p class="mb-0 font-weight-bold text-sm">
Public Relations
</p>
</div>
</div>
<div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
<div class="nav-wrapper position-relative end-0">
<ul class="nav nav-pills nav-fill p-1" role="tablist">
<li class="nav-item">
<a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
<i class="ni ni-app"></i>
<span class="ms-2">App</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
<i class="ni ni-email-83"></i>
<span class="ms-2">Messages</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
<i class="ni ni-settings-gear-65"></i>
<span class="ms-2">Settings</span>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid py-4">
<div class="row">
<div class="col-lg-4 col-md-5 col-12">
<div class="card blur shadow-blur max-height-vh-70 overflow-auto overflow-x-hidden mb-5 mb-lg-0">
<div class="card-header p-3">
<h6>Friends</h6>
<input type="email" class="form-control" placeholder="Search Contact" aria-label="Email">
</div>
<div class="card-body p-2">
<a href="javascript:;" class="d-block p-2 border-radius-lg bg-gradient-primary">
<div class="d-flex p-2">
<img alt="Image" src="../../assets/img/team-2.jpg" class="avatar shadow">
<div class="ms-3">
<div class="justify-content-between align-items-center">
<h6 class="text-white mb-0">Charlie Watson
<span class="badge badge-success"></span>
</h6>
<p class="text-white mb-0 text-sm">Typing...</p>
</div>
</div>
</div>
</a>
<a href="javascript:;" class="d-block p-2">
<div class="d-flex p-2">
<img alt="Image" src="../../assets/img/team-1.jpg" class="avatar shadow">
<div class="ms-3">
<h6 class="mb-0">Jane Doe</h6>
<p class="text-muted text-xs mb-2">1 hour ago</p>
<span class="text-muted text-sm col-11 p-0 text-truncate d-block">Computer users and programmers</span>
</div>
</div>
</a>
<a href="javascript:;" class="d-block p-2">
<div class="d-flex p-2">
<img alt="Image" src="../../assets/img/team-3.jpg" class="avatar shadow">
<div class="ms-3">
<h6 class="mb-0">Mila Skylar</h6>
<p class="text-muted text-xs mb-2">24 min ago</p>
<span class="text-muted text-sm col-11 p-0 text-truncate d-block">You can subscribe to receive weekly...</span>
</div>
</div>
</a>
<a href="javascript:;" class="d-block p-2">
<div class="d-flex p-2">
<img alt="Image" src="../../assets/img/team-5.jpg" class="avatar shadow">
<div class="ms-3">
<h6 class="mb-0">Sofia Scarlett</h6>
<p class="text-muted text-xs mb-2">7 hours ago</p>
<span class="text-muted text-sm col-11 p-0 text-truncate d-block">It’s an effective resource regardless..</span>
</div>
</div>
</a>
<a href="javascript:;" class="d-block p-2">
<div class="d-flex p-2">
<img alt="Image" src="../../assets/img/team-4.jpg" class="avatar shadow">
<div class="ms-3">
<div class="justify-content-between align-items-center">
<h6 class="mb-0">Tom Klein</h6>
<p class="text-muted text-xs mb-2">1 day ago</p>
</div>
<span class="text-muted text-sm col-11 p-0 text-truncate d-block">Be sure to check it out if your dev pro...</span>
</div>
</div>
</a>
</div>
</div>
</div>
<div class="col-lg-8 col-md-7 col-12">
<div class="card blur shadow-blur max-height-vh-70">
<div class="card-header shadow-lg">
<div class="row">
<div class="col-lg-10 col-8">
<div class="d-flex align-items-center">
<img alt="Image" src="../../assets/img/team-2.jpg" class="avatar">
<div class="ms-3">
<h6 class="mb-0 d-block">Charlie Watson</h6>
<span class="text-sm text-dark opacity-8">last seen today at 1:53am</span>
</div>
</div>
</div>
<div class="col-lg-1 col-2 my-auto pe-0">
<button class="btn btn-icon-only shadow-none text-dark mb-0 me-3 me-sm-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Video call">
<i class="ni ni-camera-compact"></i>
</button>
</div>
<div class="col-lg-1 col-2 my-auto ps-0">
<div class="dropdown">
<button class="btn btn-icon-only shadow-none text-dark mb-0" type="button" data-bs-toggle="dropdown">
<i class="ni ni-settings"></i>
</button>
<ul class="dropdown-menu dropdown-menu-end me-sm-n2 p-2" aria-labelledby="chatmsg">
<li>
<a class="dropdown-item border-radius-md" href="javascript:;">
Profile
</a>
</li>
<li>
<a class="dropdown-item border-radius-md" href="javascript:;">
Mute conversation
</a>
</li>
<li>
<a class="dropdown-item border-radius-md" href="javascript:;">
Block
</a>
</li>
<li>
<a class="dropdown-item border-radius-md" href="javascript:;">
Clear chat
</a>
</li>
<li>
<a class="dropdown-item border-radius-md text-danger" href="javascript:;">
Delete chat
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="card-body overflow-auto overflow-x-hidden">
<div class="row justify-content-start mb-4">
<div class="col-auto">
<div class="card ">
<div class="card-body py-2 px-3">
<p class="mb-1">
It contains a lot of good lessons about effective practices
</p>
<div class="d-flex align-items-center text-sm opacity-6">
<i class="ni ni-check-bold text-sm me-1"></i>
<small>3:14am</small>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-end text-right mb-4">
<div class="col-auto">
<div class="card bg-gray-200">
<div class="card-body py-2 px-3">
<p class="mb-1">
Can it generate daily design links that include essays and data visualizations ?<br>
</p>
<div class="d-flex align-items-center justify-content-end text-sm opacity-6">
<i class="ni ni-check-bold text-sm me-1"></i>
<small>4:42pm</small>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-4">
<div class="col-md-12 text-center">
<span class="badge text-dark">Wed, 3:27pm</span>
</div>
</div>
<div class="row justify-content-start mb-4">
<div class="col-auto">
<div class="card ">
<div class="card-body py-2 px-3">
<p class="mb-1">
Yeah! Responsive Design is geared towards those trying to build web apps
</p>
<div class="d-flex align-items-center text-sm opacity-6">
<i class="ni ni-check-bold text-sm me-1"></i>
<small>4:31pm</small>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-end text-right mb-4">
<div class="col-auto">
<div class="card bg-gray-200">
<div class="card-body py-2 px-3">
<p class="mb-1">
Excellent, I want it now !
</p>
<div class="d-flex align-items-center justify-content-end text-sm opacity-6">
<i class="ni ni-check-bold text-sm me-1"></i>
<small>4:42pm</small>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-start mb-4">
<div class="col-auto">
<div class="card ">
<div class="card-body py-2 px-3">
<p class="mb-1">
You can easily get it; The content here is all free
</p>
<div class="d-flex align-items-center text-sm opacity-6">
<i class="ni ni-check-bold text-sm me-1"></i>
<small>4:42pm</small>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-end text-right mb-4">
<div class="col-auto">
<div class="card bg-gray-200">
<div class="card-body py-2 px-3">
<p class="mb-1">
Awesome, blog is important source material for anyone who creates apps? <br>
Beacuse these blogs offer a lot of information about website development.
</p>
<div class="d-flex align-items-center justify-content-end text-sm opacity-6">
<i class="ni ni-check-bold text-sm me-1"></i>
<small>4:42pm</small>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-start mb-4">
<div class="col-5">
<div class="card ">
<div class="card-body p-2">
<div class="col-12 p-0">
<img src="https://images.unsplash.com/photo-1602142946018-34606aa83259?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1762&amp;q=80" alt="Rounded image" class="img-fluid mb-2 border-radius-lg">
</div>
<div class="d-flex align-items-center text-sm opacity-6">
<i class="ni ni-check-bold text-sm me-1"></i>
<small>4:47pm</small>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-end text-right mb-4">
<div class="col-auto">
<div class="card bg-gray-200">
<div class="card-body py-2 px-3">
<p class="mb-0">
At the end of the day … the native dev apps is where users are
</p>
<div class="d-flex align-items-center justify-content-end text-sm opacity-6">
<i class="ni ni-check-bold text-sm me-1"></i>
<small>4:42pm</small>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-start">
<div class="col-auto">
<div class="card ">
<div class="card-body py-2 px-3">
<p class="mb-0">
Charlie is Typing...
</p>
</div>
</div>
</div>
</div>
</div>
<div class="card-footer d-block">
<form class="align-items-center">
<div class="d-flex">
<div class="input-group">
<input type="text" class="form-control" placeholder="Type here" aria-label="Message example input">
</div>
<button class="btn bg-gradient-primary mb-0 ms-2">
<i class="ni ni-send"></i>
</button>
</div>
</form>
</div>
</div>
</div>
</div>
<footer class="footer pt-3  ">
<div class="container-fluid">
<div class="row align-items-center justify-content-lg-between">
<div class="col-lg-6 mb-lg-0 mb-4">
<div class="copyright text-center text-sm text-muted text-lg-start">
© <script>
                  document.write(new Date().getFullYear())
                </script>,
made with <i class="fa fa-heart"></i> by
<a href="https://www.creative-tim.com/" class="font-weight-bold" target="_blank">Creative Tim</a>
for a better web.
</div>
</div>
<div class="col-lg-6">
<ul class="nav nav-footer justify-content-center justify-content-lg-end">
<li class="nav-item">
<a href="https://www.creative-tim.com/" class="nav-link text-muted" target="_blank">Creative Tim</a>
</li>
<li class="nav-item">
<a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
</li>
<li class="nav-item">
<a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
</li>
<li class="nav-item">
<a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
</li>
</ul>
</div>
</div>
</div>
</footer>
</div>
</div>
<div class="fixed-plugin">
<a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
<i class="fa fa-cog py-2"> </i>
</a>
<div class="card shadow-lg">
<div class="card-header pb-0 pt-3 bg-transparent ">
<div class="float-start">
<h5 class="mt-3 mb-0">Argon Configurator</h5>
<p>See our dashboard options.</p>
</div>
<div class="float-end mt-4">
<button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
<i class="fa fa-close"></i>
</button>
</div>

</div>
<hr class="horizontal dark my-1">
<div class="card-body pt-sm-3 pt-0 overflow-auto">

<div>
<h6 class="mb-0">Sidebar Colors</h6>
</div>
<a href="javascript:void(0)" class="switch-trigger background-color">
<div class="badge-colors my-2 text-start">
<span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
<span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
<span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
<span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
<span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
<span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
</div>
</a>

<div class="mt-3">
<h6 class="mb-0">Sidenav Type</h6>
<p class="text-sm">Choose between 2 different sidenav types.</p>
</div>
<div class="d-flex">
<button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
<button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
</div>
<p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>

<div class="d-flex my-3">
<h6 class="mb-0">Navbar Fixed</h6>
<div class="form-check form-switch ps-0 ms-auto my-auto">
<input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
</div>
</div>
<hr class="horizontal dark mb-1">
<div class="d-flex my-4">
<h6 class="mb-0">Sidenav Mini</h6>
<div class="form-check form-switch ps-0 ms-auto my-auto">
<input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
</div>
</div>
<hr class="horizontal dark my-sm-4">
<div class="mt-2 mb-5 d-flex">
<h6 class="mb-0">Light / Dark</h6>
<div class="form-check form-switch ps-0 ms-auto my-auto">
<input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
</div>
</div>
<a class="btn btn-primary w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro">Buy now</a>
<a class="btn btn-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free demo</a>
<a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard">View documentation</a>
<div class="w-100 text-center">
<a class="github-button" href="https://github.com/creativetimofficial/ct-argon-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
<h6 class="mt-3">Thank you for sharing!</h6>
<a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
<i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
</a>
<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
<i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
</a>
</div>
</div>
</div>
</div>

<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>
<script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>

<script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
<script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

<script async defer src="../../../../buttons.github.io/buttons.js"></script>

<script src="../../assets/js/argon-dashboard.min9c7f.js?v=2.0.5"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"84a5f6275bef7c9c","b":1,"version":"2024.1.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/pages/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 05:44:24 GMT -->
</html>