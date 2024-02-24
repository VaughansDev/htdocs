<?php
require '../../inc/header.php';
?>
<main class="main-content position-relative border-radius-lg ">

  <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm">
            <a class="text-white" href="javascript:;">
              <i class="ni ni-box-2"></i>
            </a>
          </li>
          <li class="breadcrumb-item text-sm text-white"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Order Details</li>
        </ol>
        <h6 class="font-weight-bolder mb-0 text-white">Order Details</h6>
      </nav>
      <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
        <a href="javascript:;" class="nav-link p-0">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line bg-white"></i>
            <i class="sidenav-toggler-line bg-white"></i>
            <i class="sidenav-toggler-line bg-white"></i>
          </div>
        </a>
      </div>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <div class="input-group">
            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control" placeholder="Type here...">
          </div>
        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="../../authentication/signin/illustration.html" class="nav-link text-white font-weight-bold px-0" target="_blank">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Sign In</span>
            </a>
          </li>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
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
            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
              <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="javascript:;">
                  <div class="d-flex py-1">
                    <div class="my-auto">
                      <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 " alt="user image">
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
                      <img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
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
                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                      <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>credit-card</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
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

  <div class="container-fluid py-4">
    <div class="row mb-lg-5">
      <div class="col-lg-8 mx-auto">
        <div class="card my-5">
          <div class="card-header p-3 pb-0">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h6>Order Details</h6>
                <p class="text-sm mb-0">
                  Order no. <b>241342</b> from <b>23.02.2021</b>
                </p>
                <p class="text-sm">
                  Code: <b>KF332</b>
                </p>
              </div>
              <a href="javascript:;" class="btn bg-gradient-secondary ms-auto mb-0">Invoice</a>
            </div>
          </div>
          <div class="card-body p-3 pt-0">
            <hr class="horizontal dark mt-0 mb-4">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="d-flex">
                  <div>
                    <img src="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/smartwatch.jpg" class="avatar avatar-xxl me-3" alt="product image">
                  </div>
                  <div>
                    <h6 class="text-lg mb-0 mt-2">Smart Watch</h6>
                    <p class="text-sm mb-3">Order was delivered 2 days ago.</p>
                    <span class="badge badge-sm bg-gradient-success">Delivered</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 my-auto text-end">
                <a href="javascript:;" class="btn bg-gradient-info mb-0">Contact Us</a>
                <p class="text-sm mt-2 mb-0">Do you like the product? Leave us a review <a href="javascript:;">here</a>.</p>
              </div>
            </div>
            <hr class="horizontal dark mt-4 mb-4">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-12">
                <h6 class="mb-3">Track order</h6>
                <div class="timeline timeline-one-side">
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="ni ni-bell-55 text-secondary"></i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">Order received</h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 AM</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="ni ni-html5 text-secondary"></i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">Generate order id #1832412</h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:21 AM</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="ni ni-cart text-secondary"></i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">Order transmited to courier</h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 8:10 AM</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="ni ni-check-bold text-success text-gradient"></i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">Order delivered</h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 4:54 PM</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 col-12">
                <h6 class="mb-3">Payment details</h6>
                <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                  <img class="w-10 me-3 mb-0" src="../../../assets/img/logos/mastercard.png" alt="logo">
                  <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                  <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" title data-bs-original-title="We do not store card details">
                    <i class="fas fa-info" aria-hidden="true"></i>
                  </button>
                </div>
                <h6 class="mb-3 mt-4">Billing Information</h6>
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="mb-3 text-sm">Oliver Liam</h6>
                      <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-2">Viking Burrito</span></span>
                      <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-2 font-weight-bold"><a href="https://demos.creative-tim.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="721d1e1b04170032100700001b061d5c111d1f">[email&#160;protected]</a></span></span>
                      <span class="text-xs">VAT Number: <span class="text-dark ms-2 font-weight-bold">FRB1235476</span></span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-12 ms-auto">
                <h6 class="mb-3">Order Summary</h6>
                <div class="d-flex justify-content-between">
                  <span class="mb-2 text-sm">
                    Product Price:
                  </span>
                  <span class="text-dark font-weight-bold ms-2">$90</span>
                </div>
                <div class="d-flex justify-content-between">
                  <span class="mb-2 text-sm">
                    Delivery:
                  </span>
                  <span class="text-dark ms-2 font-weight-bold">$14</span>
                </div>
                <div class="d-flex justify-content-between">
                  <span class="text-sm">
                    Taxes:
                  </span>
                  <span class="text-dark ms-2 font-weight-bold">$1.95</span>
                </div>
                <div class="d-flex justify-content-between mt-4">
                  <span class="mb-2 text-lg">
                    Total:
                  </span>
                  <span class="text-dark text-lg ms-2 font-weight-bold">$105.95</span>
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
              © <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
              <script>
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
</main>
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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"84a5f637be8dc334","b":1,"version":"2024.1.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/ecommerce/orders/details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 05:44:32 GMT -->

</html>