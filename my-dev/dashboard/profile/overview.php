<?php
  require '../inc/header.php';
?>
<div class="main-content position-relative max-height-vh-100 h-100">

<nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
<div class="container-fluid py-1">
<nav aria-label="breadcrumb">
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
<li class="breadcrumb-item text-sm"><a class="text-white opacity-8" href="javascript:;">Pages</a></li>
<li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile Overview</li>
</ol>
<h6 class="text-white font-weight-bolder ms-2">Profile Overview</h6>
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
<a href="../../authentication/signin/illustration.html" class="nav-link text-white font-weight-bold px-0" target="_blank">
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
<img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user image">
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
<img src="../../../assets/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
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
<div class="row mt-3">
<div class="col-12 col-md-6 col-xl-4">
<div class="card h-100">
<div class="card-header pb-0 p-3">
<h6 class="mb-0">Platform Settings</h6>
</div>
<div class="card-body p-3">
<h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
<ul class="list-group">
<li class="list-group-item border-0 px-0">
<div class="form-check form-switch ps-0">
<input class="form-check-input ms-0" type="checkbox" id="flexSwitchCheckDefault" checked>
<label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
</div>
</li>
<li class="list-group-item border-0 px-0">
<div class="form-check form-switch ps-0">
<input class="form-check-input ms-0" type="checkbox" id="flexSwitchCheckDefault1">
<label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
</div>
</li>
<li class="list-group-item border-0 px-0">
<div class="form-check form-switch ps-0">
<input class="form-check-input ms-0" type="checkbox" id="flexSwitchCheckDefault2" checked>
<label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
</div>
</li>
</ul>
<h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
<ul class="list-group">
<li class="list-group-item border-0 px-0">
<div class="form-check form-switch ps-0">
<input class="form-check-input ms-0" type="checkbox" id="flexSwitchCheckDefault3">
<label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
</div>
</li>
<li class="list-group-item border-0 px-0">
<div class="form-check form-switch ps-0">
<input class="form-check-input ms-0" type="checkbox" id="flexSwitchCheckDefault4" checked>
<label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
</div>
</li>
<li class="list-group-item border-0 px-0 pb-0">
<div class="form-check form-switch ps-0">
<input class="form-check-input ms-0" type="checkbox" id="flexSwitchCheckDefault5">
<label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-xl-4 mt-md-0 mt-4">
<div class="card h-100">
<div class="card-header pb-0 p-3">
<div class="row">
<div class="col-md-8 d-flex align-items-center">
<h6 class="mb-0">Profile Information</h6>
</div>
<div class="col-md-4 text-end">
<a href="javascript:;">
<i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
</a>
</div>
</div>
</div>
<div class="card-body p-3">
<p class="text-sm">
Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
</p>
<hr class="horizontal gray-light my-4">
<ul class="list-group">
<li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; Alec M. Thompson</li>
<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; <a href="https://demos.creative-tim.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3554595056415d5a5845465a5b7558545c591b565a58">[email&#160;protected]</a></li>
<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; USA</li>
<li class="list-group-item border-0 ps-0 pb-0">
<strong class="text-dark text-sm">Social:</strong> &nbsp;
<a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
<i class="fab fa-facebook fa-lg"></i>
</a>
<a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
<i class="fab fa-twitter fa-lg"></i>
</a>
<a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
<i class="fab fa-instagram fa-lg"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-12 col-xl-4 mt-xl-0 mt-4">
<div class="card h-100">
<div class="card-header pb-0 p-3">
<h6 class="mb-0">Conversations</h6>
</div>
<div class="card-body p-3">
<ul class="list-group">
<li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
<div class="avatar me-3">
<img src="../../../assets/img/kal-visuals-square.jpg" alt="kal" class="border-radius-lg shadow">
</div>
<div class="d-flex align-items-start flex-column justify-content-center">
<h6 class="mb-0 text-sm">Sophie B.</h6>
<p class="mb-0 text-xs">Hi! I need more information..</p>
</div>
<a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
</li>
<li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
<div class="avatar me-3">
<img src="../../../assets/img/marie.jpg" alt="kal" class="border-radius-lg shadow">
</div>
<div class="d-flex align-items-start flex-column justify-content-center">
<h6 class="mb-0 text-sm">Anne Marie</h6>
<p class="mb-0 text-xs">Awesome work, can you..</p>
</div>
<a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
</li>
<li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
<div class="avatar me-3">
<img src="../../../assets/img/ivana-square.jpg" alt="kal" class="border-radius-lg shadow">
</div>
<div class="d-flex align-items-start flex-column justify-content-center">
<h6 class="mb-0 text-sm">Ivanna</h6>
<p class="mb-0 text-xs">About files I can..</p>
</div>
<a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
</li>
<li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
<div class="avatar me-3">
<img src="../../../assets/img/team-4.jpg" alt="kal" class="border-radius-lg shadow">
</div>
<div class="d-flex align-items-start flex-column justify-content-center">
<h6 class="mb-0 text-sm">Peterson</h6>
<p class="mb-0 text-xs">Have a great afternoon..</p>
</div>
<a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
</li>
<li class="list-group-item border-0 d-flex align-items-center px-0">
<div class="avatar me-3">
<img src="../../../assets/img/team-3.jpg" alt="kal" class="border-radius-lg shadow">
</div>
<div class="d-flex align-items-start flex-column justify-content-center">
<h6 class="mb-0 text-sm">Nick Daniel</h6>
<p class="mb-0 text-xs">Hi! I need more information..</p>
</div>
<a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="row mt-4">
<div class="col-12">
<div class="card mb-4">
<div class="card-header pb-0 p-3">
<h6 class="mb-1">Projects</h6>
<p class="text-sm">Architects design houses</p>
</div>
<div class="card-body p-3">
<div class="row">
<div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
<div class="card card-blog card-plain">
<div class="position-relative">
<a class="d-block shadow-xl border-radius-xl">
<img src="../../../assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
</a>
</div>
<div class="card-body px-1 pb-0">
<p class="text-gradient text-dark mb-2 text-sm">Project #1</p>
<a href="javascript:;">
<h5>
Bubbles
</h5>
</a>
<p class="mb-4 text-sm">
As Bubble works through a huge amount of internal management turmoil.
</p>
<div class="d-flex align-items-center justify-content-between">
<button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
<div class="avatar-group mt-2">
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
<img alt="Image placeholder" src="../../../assets/img/team-1.jpg">
</a>
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
<img alt="Image placeholder" src="../../../assets/img/team-2.jpg">
</a>
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
<img alt="Image placeholder" src="../../../assets/img/team-3.jpg">
</a>
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
<img alt="Image placeholder" src="../../../assets/img/team-4.jpg">
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
<div class="card card-blog card-plain">
<div class="position-relative">
<a class="d-block shadow-xl border-radius-xl">
<img src="../../../assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
</a>
</div>
<div class="card-body px-1 pb-0">
<p class="text-gradient text-dark mb-2 text-sm">Project #2</p>
<a href="javascript:;">
<h5>
Scandinavian
</h5>
</a>
<p class="mb-4 text-sm">
Music is something that every person has his or her own specific opinion about.
</p>
<div class="d-flex align-items-center justify-content-between">
<button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
<div class="avatar-group mt-2">
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
<img alt="Image placeholder" src="../../../assets/img/team-3.jpg">
</a>
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
<img alt="Image placeholder" src="../../../assets/img/team-4.jpg">
</a>
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
<img alt="Image placeholder" src="../../../assets/img/team-1.jpg">
</a>
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
<img alt="Image placeholder" src="../../../assets/img/team-2.jpg">
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
<div class="card card-blog card-plain">
<div class="position-relative">
<a class="d-block shadow-xl border-radius-xl">
<img src="../../../assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
</a>
</div>
<div class="card-body px-1 pb-0">
<p class="text-gradient text-dark mb-2 text-sm">Project #3</p>
<a href="javascript:;">
<h5>
Minimalist
</h5>
</a>
<p class="mb-4 text-sm">
Different people have different taste, and various types of music.
</p>
<div class="d-flex align-items-center justify-content-between">
<button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
<div class="avatar-group mt-2">
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
<img alt="Image placeholder" src="../../../assets/img/team-4.jpg">
</a>
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
<img alt="Image placeholder" src="../../../assets/img/team-3.jpg">
</a>
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
<img alt="Image placeholder" src="../../../assets/img/team-2.jpg">
</a>
<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
<img alt="Image placeholder" src="../../../assets/img/team-1.jpg">
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
<div class="card h-100 card-plain border">
<div class="card-body d-flex flex-column justify-content-center text-center">
<a href="javascript:;">
<i class="fa fa-plus text-secondary mb-3"></i>
<h5 class=" text-secondary"> New project </h5>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer pt-3  ">
<div class="container-fluid">
<div class="row align-items-center justify-content-lg-between">
<div class="col-lg-6 mb-lg-0 mb-4">
<div class="copyright text-center text-sm text-muted text-lg-start">
© <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
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

<script src="../../../assets/js/core/popper.min.js"></script>
<script src="../../../assets/js/core/bootstrap.min.js"></script>
<script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>

<script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
<script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

<script async defer src="../../../../../buttons.github.io/buttons.js"></script>

<script src="../../../assets/js/argon-dashboard.min9c7f.js?v=2.0.5"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"84a5f6112abf7c9c","b":1,"version":"2024.1.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/pages/profile/overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 05:44:18 GMT -->
</html>