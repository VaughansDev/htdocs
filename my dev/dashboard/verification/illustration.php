<?php
  require '../inc/altheader.php';
?>
<body class>


<div class="container position-sticky z-index-sticky top-0">
<div class="row">
<div class="col-12">

<nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
<div class="container-fluid ps-2 pe-0">
<a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="<?php echo $_CONFIG['url']; ?>/dashboards/default.php">
Argon Dashboard 2 PRO
</a>
<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon mt-2">
<span class="navbar-toggler-bar bar1"></span>
<span class="navbar-toggler-bar bar2"></span>
<span class="navbar-toggler-bar bar3"></span>
</span>
</button>
<div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
<ul class="navbar-nav navbar-nav-hover mx-auto">
<li class="nav-item dropdown dropdown-hover mx-2">
<a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
Pages
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
</a>
<div class="dropdown-menu dropdown-menu-animation dropdown-xl p-3 border-radius-xl mt-0 mt-lg-3 shadow-none" aria-labelledby="dropdownMenuPages">
<div class="row d-none d-lg-block">
<div class="col-12 px-4 py-2">
<div class="row">
<div class="col-4 position-relative">
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
<i class="ni ni-spaceship me-3 text-primary"></i>
Dashboards
</div>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/landing.php" class="dropdown-item border-radius-md">
<span class="ps-3">Landing</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/default.php" class="dropdown-item border-radius-md">
<span class="ps-3">Default</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/automotive.php" class="dropdown-item border-radius-md">
<span class="ps-3">Automotive</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/smart-home.php" class="dropdown-item border-radius-md">
<span class="ps-3">Smart Home</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/virtual-reality.php" class="dropdown-item border-radius-md">
<span class="ps-3">Virtual Reality</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/crm.php" class="dropdown-item border-radius-md">
<span class="ps-3">CRM</span>
</a>
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
<i class="ni ni-circle-08 me-3 text-primary"></i>
Users
</div>
<a href="<?php echo $_CONFIG['url']; ?>/pages/users/reports.php" class="dropdown-item border-radius-md">
<span class="ps-3">Reports</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/users/new-user.php" class="dropdown-item border-radius-md">
<span class="ps-3">New User</span>
</a>
<hr class="vertical dark">
</div>
<div class="col-4 position-relative">
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
<i class="ni ni-badge me-3 text-primary"></i>
Profile
</div>
<a href="<?php echo $_CONFIG['url']; ?>/pages/profile/overview.php" class="dropdown-item border-radius-md">
<span class="ps-3">Overview</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/profile/teams.php" class="dropdown-item border-radius-md">
<span class="ps-3">Teams</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/profile/projects.php" class="dropdown-item border-radius-md">
<span class="ps-3">Projects</span>
</a>
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
<i class="ni ni-app me-3 text-primary"></i>
Projects
</div>
<a href="<?php echo $_CONFIG['url']; ?>/pages/projects/general.php" class="dropdown-item border-radius-md">
<span class="ps-3">General</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/projects/timeline.php" class="dropdown-item border-radius-md">
<span class="ps-3">Timeline</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/projects/new-project.php" class="dropdown-item border-radius-md">
<span class="ps-3">New Project</span>
</a>
<hr class="vertical dark">
</div>
<div class="col-4">
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
<i class="ni ni-single-02 me-3 text-primary"></i>
Account
</div>
<a href="<?php echo $_CONFIG['url']; ?>/pages/account/settings.php" class="dropdown-item border-radius-md">
<span class="ps-3">Settings</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/account/billing.php" class="dropdown-item border-radius-md">
<span class="ps-3">Billing</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/account/invoice.php" class="dropdown-item border-radius-md">
<span class="ps-3">Invoice</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/account/security.php" class="dropdown-item border-radius-md">
<span class="ps-3">Security</span>
</a>
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
<i class="ni ni-folder-17 me-3 text-primary"></i>
Extra
</div>
<a href="<?php echo $_CONFIG['url']; ?>/pages/pricing-page.php" class="dropdown-item border-radius-md">
<span class="ps-3">Pricing Page</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/rtl-page.php" class="dropdown-item border-radius-md">
<span class="ps-3">RTL Page</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/widgets.php" class="dropdown-item border-radius-md">
<span class="ps-3">Widgets</span>
</a>
</div>
</div>
</div>
</div>

<div class="d-lg-none">
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
<i class="ni ni-spaceship me-3 text-primary"></i>
Dashboards
</div>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/landing.php" class="dropdown-item border-radius-md ms-3">
Landing
</a>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/default.php" class="dropdown-item border-radius-md ms-3">
Default
</a>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/automotive.php" class="dropdown-item border-radius-md ms-3">
Automotive
</a>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/smart-home.php" class="dropdown-item border-radius-md ms-3">
Smart Home
</a>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/virtual-reality.php" class="dropdown-item border-radius-md ms-3">
Virtual Reality
</a>
<a href="<?php echo $_CONFIG['url']; ?>/dashboards/crm.php" class="dropdown-item border-radius-md ms-3">
CRM
</a>
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
<i class="ni ni-circle-08 me-3 text-primary"></i>
Users
</div>
<a href="<?php echo $_CONFIG['url']; ?>/pages/users/reports.php" class="dropdown-item border-radius-md ms-3">
Reports
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/users/new-user.php" class="dropdown-item border-radius-md ms-3">
New user
</a>
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
<i class="ni ni-badge me-3 text-primary"></i>
Profile
</div>
<a href="<?php echo $_CONFIG['url']; ?>/pages/profile/overview.php" class="dropdown-item border-radius-md ms-3">
Overview
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/profile/teams.php" class="dropdown-item border-radius-md ms-3">
Teams
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/profile/projects.php" class="dropdown-item border-radius-md ms-3">
Projects
</a>
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
<i class="ni ni-app me-3 text-primary"></i>
Projects
</div>
<a href="<?php echo $_CONFIG['url']; ?>/pages/projects/general.php" class="dropdown-item border-radius-md ms-3">
General
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/projects/timeline.php" class="dropdown-item border-radius-md ms-3">
Timeline
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/projects/new-project.php" class="dropdown-item border-radius-md ms-3">
New Project
</a>
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
<i class="ni ni-single-02 me-3 text-primary"></i>
Account
</div>
<a href="<?php echo $_CONFIG['url']; ?>/pages/account/settings.php" class="dropdown-item border-radius-md ms-3">
Settings
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/account/billing.php" class="dropdown-item border-radius-md ms-3">
Billing
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/account/invoice.php" class="dropdown-item border-radius-md ms-3">
Invoice
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/account/security.php" class="dropdown-item border-radius-md ms-3">
Security
</a>
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
<i class="ni ni-folder-17 me-3 text-primary"></i>
Extra
</div>
<a href="<?php echo $_CONFIG['url']; ?>/pages/pricing-page.php" class="dropdown-item border-radius-md ms-3">
Pricing Page
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/rtl-page.php" class="dropdown-item border-radius-md ms-3">
RTL Page
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/widgets.php" class="dropdown-item border-radius-md ms-3">
Widgets
</a>
</div>
</div>
</li>
<li class="nav-item dropdown dropdown-hover mx-2">
<a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
Authentication
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
</a>
<div class="dropdown-menu dropdown-menu-animation dropdown-lg border-radius-xl p-3 mt-0 mt-lg-3 shadow-none" aria-labelledby="dropdownMenuAccount">
<div class="row d-none d-lg-flex">
<div class="col-6">
<div class="py-6 h-100 w-100 d-flex border-radius-lg position-relative dropdown-image" style="background-image:url('https://images.unsplash.com/photo-1635944095210-23114a1fb7c0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1335&amp;q=80')">
<div class="mask bg-gradient-primary border-radius-lg"></div>
<div class="d-flex justify-content-center align-items-center text-center text-white font-weight-bold w-100 z-index-1 flex-column">
<span class="text-lg">Explore our<br>Authentication pages</span>
</div>
</div>
</div>
<div class="col-6 ps-0 d-flex justify-content-center flex-column">
<ul class="list-group">
<li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
<a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1" id="dropdownSignIn">
<span>Sign In</span>
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
</a>
<div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignIn">
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../signin/basic.php">
<span>Basic</span>
</a>
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../signin/cover.php">
<span>Cover</span>
</a>
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../signin/illustration.php">
<span>Illustration</span>
</a>
</div>
</li>
<li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
<a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1" id="dropdownSignUp">
<span>Sign Up</span>
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
</a>
<div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignUp">
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../signup/basic.php">
<span>Basic</span>
</a>
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../signup/cover.php">
<span>Cover</span>
</a>
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../signup/illustration.php">
<span>Illustration</span>
</a>
</div>
</li>
<li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
<a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1" id="dropdownPasswordReset">
<span>Reset Password</span>
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
</a>
<div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownPasswordReset">
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../reset/basic.php">
<span>Basic</span>
</a>
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../reset/cover.php">
<span>Cover</span>
</a>
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../reset/illustration.php">
<span>Illustration</span>
</a>
</div>
</li>
<li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
<a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1" id="dropdownLock">
<span>Lock</span>
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
</a>
<div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownLock">
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../lock/basic.php">
<span>Basic</span>
</a>
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../lock/cover.php">
<span>Cover</span>
</a>
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../lock/illustration.php">
<span>Illustration</span>
</a>
</div>
</li>
<li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
<a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1" id="dropdown2fa">
<span>2-Step Verification</span>
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
</a>
<div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdown2fa">
<a class="dropdown-item ps-3 border-radius-md mb-1" href="basic.php">
<span>Basic</span>
</a>
<a class="dropdown-item ps-3 border-radius-md mb-1" href="cover.php">
<span>Cover</span>
</a>
<a class="dropdown-item ps-3 border-radius-md mb-1" href="illustration.php">
<span>Illustration</span>
</a>
</div>
</li>
<li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
<a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1" id="dropdownError">
<span>Error</span>
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
</a>
<div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownError">
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../error/404.php">
<span>404</span>
</a>
<a class="dropdown-item ps-3 border-radius-md mb-1" href="../error/500.php">
<span>500</span>
</a>
</div>
</li>
</ul>
</div>
</div>
<div class="row d-lg-none">
<div class="col-12 d-flex justify-content-center flex-column">
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
Sign In
</h6>
<a href="../signin/basic.php" class="dropdown-item border-radius-md">
Basic
</a>
<a href="../signin/cover.php" class="dropdown-item border-radius-md">
Cover
</a>
<a href="../signin/illustration.php" class="dropdown-item border-radius-md">
Illustration
</a>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
Sign Up
</h6>
<a href="../signup/basic.php" class="dropdown-item border-radius-md">
Basic
</a>
<a href="../signup/cover.php" class="dropdown-item border-radius-md">
Cover
</a>
<a href="../signup/illustration.php" class="dropdown-item border-radius-md">
Illustration
</a>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
Reset Password
</h6>
<a href="../reset/basic.php" class="dropdown-item border-radius-md">
Basic
</a>
<a href="../reset/cover.php" class="dropdown-item border-radius-md">
Cover
</a>
<a href="../reset/illustration.php" class="dropdown-item border-radius-md">
Illustation
</a>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
Lock
</h6>
<a href="../lock/basic.php" class="dropdown-item border-radius-md">
Basic
</a>
<a href="../lock/cover.php" class="dropdown-item border-radius-md">
Cover
</a>
<a href="../lock/illustration.php" class="dropdown-item border-radius-md">
Illustration
</a>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
2-Step Verification
</h6>
<a href="basic.php" class="dropdown-item border-radius-md">
Basic
</a>
<a href="cover.php" class="dropdown-item border-radius-md">
Cover
</a>
<a href="illustration.php" class="dropdown-item border-radius-md">
Illustration
</a>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
Error
</h6>
<a href="../error/404.php" class="dropdown-item border-radius-md">
404
</a>
<a href="../error/500.php" class="dropdown-item border-radius-md">
500
</a>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown dropdown-hover mx-2">
<a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
Applications
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
</a>
<div class="dropdown-menu dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3 shadow-none" aria-labelledby="dropdownMenuBlocks">
<div class="d-none d-lg-block">
<ul class="list-group">
<li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
<a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo $_CONFIG['url']; ?>/applications/kanban.php">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-single-copy-04 text-primary"></i>
</div>
<div class="w-100 d-flex align-items-center justify-content-between">
<div>
<p class="dropdown-header text-dark p-0">Kanban</p>
</div>
</div>
</div>
</a>
</li>
<li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
<a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo $_CONFIG['url']; ?>/applications/wizard.php">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-laptop text-primary"></i>
</div>
<div class="w-100 d-flex align-items-center justify-content-between">
<div>
<p class="dropdown-header text-dark p-0">Wizard</p>
</div>
</div>
</div>
</a>
</li>
<li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
<a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo $_CONFIG['url']; ?>/applications/datatables.php">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-badge text-primary"></i>
</div>
<div class="w-100 d-flex align-items-center justify-content-between">
<div>
<p class="dropdown-header text-dark p-0">DataTables</p>
</div>
</div>
</div>
</a>
</li>
<li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
<a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo $_CONFIG['url']; ?>/applications/calendar.php">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-notification-70 text-primary"></i>
</div>
<div class="w-100 d-flex align-items-center justify-content-between">
<div>
<p class="dropdown-header text-dark p-0">Calendar</p>
</div>
</div>
</div>
</a>
</li>
</ul>
</div>

<div class="row d-lg-none">
<div class="col-md-12">
<a class="py-2 ps-3 border-radius-md" href="<?php echo $_CONFIG['url']; ?>/applications/kanban.php">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-single-copy-04 text-primary"></i>
</div>
<div class="w-100 d-flex align-items-center justify-content-between">
<div>
<p class="dropdown-header text-dark p-0">Kanban</p>
</div>
</div>
</div>
</a>
<a class="py-2 ps-3 border-radius-md" href="<?php echo $_CONFIG['url']; ?>/applications/wizard.php">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-laptop text-primary"></i>
</div>
<div class="w-100 d-flex align-items-center justify-content-between">
<div>
<p class="dropdown-header text-dark p-0">Wizard</p>
</div>
</div>
</div>
</a>
<a class="py-2 ps-3 border-radius-md" href="<?php echo $_CONFIG['url']; ?>/applications/datatables.php">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-badge text-primary"></i>
</div>
<div class="w-100 d-flex align-items-center justify-content-between">
<div>
<p class="dropdown-header text-dark p-0">DataTables</p>
</div>
</div>
</div>
</a>
<a class="py-2 ps-3 border-radius-md" href="<?php echo $_CONFIG['url']; ?>/applications/calendar.php">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-notification-70 text-primary"></i>
</div>
<div class="w-100 d-flex align-items-center justify-content-between">
<div>
<p class="dropdown-header text-dark p-0">Calendar</p>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown dropdown-hover mx-2">
<a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuEcommerce" data-bs-toggle="dropdown" aria-expanded="false">
Ecommerce
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
</a>
<div class="dropdown-menu dropdown-menu-animation dropdown-lg p-3 border-radius-xl mt-0 mt-lg-3 shadow-none" aria-labelledby="dropdownMenuEcommerce">
<div class="row d-none d-lg-block">
<div class="col-12 px-4 py-2">
<div class="row">
<div class="col-6 position-relative">
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
<i class="ni ni-cart text-primary me-3"></i>
Orders
</div>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/orders/list.php" class="dropdown-item border-radius-md">
<span class="ps-3">Order List</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/orders/details.php" class="dropdown-item border-radius-md">
<span class="ps-3">Order Details</span>
</a>
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
<i class="ni ni-box-2 text-primary me-3"></i>
General
</div>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/overview.php" class="dropdown-item border-radius-md">
<span class="ps-3">Overview</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/referral.php" class="dropdown-item border-radius-md">
<span class="ps-3">Referral</span>
</a>
<hr class="vertical dark">
</div>
<div class="col-6 position-relative">
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
<i class="ni ni-planet text-primary me-3"></i>
Products
</div>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/products/new-product.php" class="dropdown-item border-radius-md">
<span class="ps-3">New Product</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/products/edit-product.php" class="dropdown-item border-radius-md">
<span class="ps-3">Edit Product</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/products/product-page.php" class="dropdown-item border-radius-md">
<span class="ps-3">Product Page</span>
</a>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/products/products-list.php" class="dropdown-item border-radius-md">
<span class="ps-3">Products List</span>
</a>
</div>
</div>
</div>
</div>

<div class="d-lg-none">
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
<i class="ni ni-cart text-primary me-3"></i>
Orders
</div>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/orders/list.php" class="dropdown-item border-radius-md ms-3">
Order List
</a>
<a href="<?php echo $_CONFIG['url']; ?>/pages/orders/details.php" class="dropdown-item border-radius-md ms-3">
Order Details
</a>
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
<i class="ni ni-box-2 text-primary me-3"></i>
General
</div>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/overview.php" class="dropdown-item border-radius-md ms-3">
Overview
</a>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/referral.php" class="dropdown-item border-radius-md ms-3">
Referral
</a>
<div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
<i class="ni ni-planet text-primary me-3"></i>
Products
</div>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/products/new-product.php" class="dropdown-item border-radius-md ms-3">
New Product
</a>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/products/edit-product.php" class="dropdown-item border-radius-md ms-3">
Edit Product
</a>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/products/product-page.php" class="dropdown-item border-radius-md ms-3">
Product Page
</a>
<a href="<?php echo $_CONFIG['url']; ?>/ecommerce/products/products-list.php" class="dropdown-item border-radius-md ms-3">
Products List
</a>
</div>
</div>
</li>
<li class="nav-item dropdown dropdown-hover mx-2">
<a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
Docs
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
<img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
</a>
<div class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg shadow-none" aria-labelledby="dropdownMenuDocs">
<div class="d-none d-lg-block">
<ul class="list-group">
<li class="nav-item list-group-item border-0 p-0">
<a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-planet text-primary"></i>
</div>
<div>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Getting Started</h6>
<span class="text-sm">All about overview, quick start, license and contents</span>
</div>
</div>
</a>
</li>
<li class="nav-item list-group-item border-0 p-0">
<a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/colors/argon-dashboard">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-single-copy-04 text-primary"></i>
</div>
<div>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Foundation</h6>
<span class="text-sm">See our colors, icons and typography</span>
</div>
</div>
</a>
</li>
<li class="nav-item list-group-item border-0 p-0">
<a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/argon-dashboard">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-app text-primary"></i>
</div>
<div>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Components</h6>
<span class="text-sm">Explore our collection of fully designed components</span>
</div>
</div>
</a>
</li>
<li class="nav-item list-group-item border-0 p-0">
<a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/argon-dashboard">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-chart-bar-32 text-primary"></i>
</div>
<div>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Plugins</h6>
<span class="text-sm">Check how you can integrate our plugins</span>
</div>
</div>
</a>
</li>
<li class="nav-item list-group-item border-0 p-0">
<a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/argon-dashboard">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-settings text-primary"></i>
</div>
<div>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Utility Classes</h6>
<span class="text-sm">For those who want flexibility, use our utility classes</span>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="row d-lg-none">
<div class="col-md-12 g-0">
<a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-planet text-primary"></i>
</div>
<div>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Getting Started</h6>
<span class="text-sm">All about overview, quick start, license and contents</span>
</div>
</div>
</a>
<a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/colors/argon-dashboard">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-single-copy-04 text-primary"></i>
</div>
<div>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Foundation</h6>
<span class="text-sm">See our colors, icons and typography</span>
</div>
</div>
</a>
<a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/argon-dashboard">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-app text-primary"></i>
</div>
<div>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Components</h6>
<span class="text-sm">Explore our collection of fully designed components</span>
</div>
</div>
</a>
<a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/argon-dashboard">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-chart-bar-32 text-primary"></i>
</div>
<div>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Plugins</h6>
<span class="text-sm">Check how you can integrate our plugins</span>
</div>
</div>
</a>
<a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/argon-dashboard">
<div class="d-flex">
<div class="icon h-10 me-3 d-flex mt-1">
<i class="ni ni-settings text-primary"></i>
</div>
<div>
<h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Utility Classes</h6>
<span class="text-sm">All about overview, quick start, license and contents</span>
</div>
</div>
</a>
</div>
</div>
</div>
</li>
</ul>
<ul class="navbar-nav d-lg-block d-none">
<li class="nav-item">
<a href="https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-sm  bg-gradient-dark  mb-0 me-1" onclick="smoothToPricing('pricing-argon')">Buy Now</a>
</li>
</ul>
</div>
</div>
</nav>

</div>
</div>
</div>
<main class="main-content  mt-0">
<section>
<div class="page-header min-vh-100">
<div class="container">
<div class="row">
<div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
<div class="card card-plain">
<div class="card-body px-lg-5 py-lg-5 text-center">
<div class="text-center text-muted mb-4">
<h2>2-Step Verification</h2>
</div>
<div class="row gx-2 gx-sm-3">
<div class="col">
<div class="form-group">
<input type="text" class="form-control form-control-lg" maxlength="1" autocomplete="off" autocapitalize="off">
</div>
</div>
<div class="col">
<div class="form-group">
<input type="text" class="form-control form-control-lg" maxlength="1" autocomplete="off" autocapitalize="off">
</div>
</div>
<div class="col">
<div class="form-group">
<input type="text" class="form-control form-control-lg" maxlength="1" autocomplete="off" autocapitalize="off">
</div>
</div>
<div class="col">
<div class="form-group">
<input type="text" class="form-control form-control-lg" maxlength="1" autocomplete="off" autocapitalize="off">
</div>
</div>
</div>
<div class="text-center">
<button type="button" class="btn btn-warning w-100">Send code</button>
<span class="text-muted text-sm">Haven't received it?<a href="javascript:;"> Resend a new code</a>.</span>
</div>
</div>
</div>
</div>
<div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
<div class="position-relative bg-gradient-warning h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/verification-ill.jpg');
          background-size: cover;">
<span class="mask bg-warning opacity-6"></span>
<h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
<p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<?php
  require '../inc/altfooter.php';
?>