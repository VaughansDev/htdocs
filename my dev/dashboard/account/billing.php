<?php
require '../inc/header.php';
?>
<main class="main-content max-height-vh-100 h-100">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl  position-sticky top-1 z-index-sticky" id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm">
            <a class="text-white" href="javascript:;">
              <i class="ni ni-box-2"></i>
            </a>
          </li>
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Account</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Billing</li>
        </ol>
        <h6 class="font-weight-bolder text-white">Billing</h6>
      </nav>
      <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none me-auto">
        <a href="javascript:;" class="nav-link text-body p-0">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line bg-white"></i>
            <i class="sidenav-toggler-line bg-white"></i>
            <i class="sidenav-toggler-line bg-white"></i>
          </div>
        </a>
      </div>
      <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
        <ul class="navbar-nav justify-content-end ms-auto">
          <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid mt-6">
    <div class="row align-items-center">
      <div class="col-lg-4 col-sm-8">
        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="https://demos.creative-tim.com/argon-dashboard-pro/examples/pages/account/settings.html" role="tab" aria-selected="true">
                Messages
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1  active " data-bs-toggle="tab" href="https://demos.creative-tim.com/argon-dashboard-pro/examples/pages/account/billing.html" role="tab" aria-selected="false">
                Social
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="https://demos.creative-tim.com/argon-dashboard-pro/examples/pages/account/invoice.html" role="tab" aria-selected="false">
                Notifications
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="https://demos.creative-tim.com/argon-dashboard-pro/examples/pages/account/security.html" role="tab" aria-selected="false">
                Backup
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid my-5 py-2">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-xl-6 mb-xl-0 mb-4">
            <div class="card bg-transparent shadow-xl">
              <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/card-visa.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <div class="card-body position-relative z-index-1 p-3">
                  <i class="fas fa-wifi text-white p-2"></i>
                  <h5 class="text-white mt-4 mb-5 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                  <div class="d-flex">
                    <div class="d-flex">
                      <div class="me-4">
                        <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                        <h6 class="text-white mb-0">Jack Peterson</h6>
                      </div>
                      <div>
                        <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                        <h6 class="text-white mb-0">11/22</h6>
                      </div>
                    </div>
                    <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                      <img class="w-60 mt-2" src="../../../assets/img/logos/mastercard.png" alt="logo">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header mx-4 p-3 text-center">
                    <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                      <i class="fas fa-landmark opacity-10"></i>
                    </div>
                  </div>
                  <div class="card-body pt-0 p-3 text-center">
                    <h6 class="text-center mb-0">Salary</h6>
                    <span class="text-xs">Belong Interactive</span>
                    <hr class="horizontal dark my-3">
                    <h5 class="mb-0">+$2000</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mt-md-0 mt-4">
                <div class="card">
                  <div class="card-header mx-4 p-3 text-center">
                    <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                      <i class="fab fa-paypal opacity-10"></i>
                    </div>
                  </div>
                  <div class="card-body pt-0 p-3 text-center">
                    <h6 class="text-center mb-0">Paypal</h6>
                    <span class="text-xs">Freelance Payment</span>
                    <hr class="horizontal dark my-3">
                    <h5 class="mb-0">$455.00</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-lg-0 mb-4">
            <div class="card mt-4">
              <div class="card-header pb-0 p-3">
                <div class="row">
                  <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Payment Method</h6>
                  </div>
                  <div class="col-6 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                  </div>
                </div>
              </div>
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-md-6 mb-md-0 mb-4">
                    <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                      <img class="w-10 me-3 mb-0" src="../../../assets/img/logos/mastercard.png" alt="logo">
                      <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                      <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                      <img class="w-10 me-3 mb-0" src="../../../assets/img/logos/visa.png" alt="logo">
                      <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                      <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Invoices</h6>
              </div>
              <div class="col-6 text-end">
                <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
              </div>
            </div>
          </div>
          <div class="card-body p-3 pb-0">
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                  <span class="text-xs">#MS-415646</span>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $180
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                  <span class="text-xs">#RV-126749</span>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $250
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                  <span class="text-xs">#FB-212562</span>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $560
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                  <span class="text-xs">#QW-103578</span>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $120
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                  <span class="text-xs">#AR-803481</span>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $300
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-7">
        <div class="card">
          <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Billing Information</h6>
          </div>
          <div class="card-body pt-4 p-3">
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-sm">Oliver Liam</h6>
                  <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Viking Burrito</span></span>
                  <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold"><a href="https://demos.creative-tim.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1e717277687b6c5e7c6b6c6c776a71307d7173">[email&#160;protected]</a></span></span>
                  <span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                </div>
                <div class="ms-auto text-end">
                  <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                  <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-sm">Lucas Harper</h6>
                  <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Stone Tech Zone</span></span>
                  <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold"><a href="https://demos.creative-tim.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fa968f999b89ba898e95949fd78e9f9992d4999597">[email&#160;protected]</a></span></span>
                  <span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                </div>
                <div class="ms-auto text-end">
                  <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                  <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-sm">Ethan James</h6>
                  <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Fiber Notion</span></span>
                  <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold"><a href="https://demos.creative-tim.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7613021e171836101f1413045815191b">[email&#160;protected]</a></span></span>
                  <span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                </div>
                <div class="ms-auto text-end">
                  <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                  <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-5 mt-md-0 mt-4">
        <div class="card h-100 mb-4">
          <div class="card-header pb-0 px-3">
            <div class="row">
              <div class="col-md-6">
                <h6 class="mb-0">Your Transaction's</h6>
              </div>
              <div class="col-md-6 d-flex justify-content-end align-items-center">
                <i class="far fa-calendar-alt me-2"></i>
                <small>23 - 30 March 2020</small>
              </div>
            </div>
          </div>
          <div class="card-body pt-4 p-3">
            <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6>
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Netflix</h6>
                    <span class="text-xs">27 March 2020, at 12:30 PM</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                  - $ 2,500
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Apple</h6>
                    <span class="text-xs">27 March 2020, at 04:30 AM</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                  + $ 2,000
                </div>
              </li>
            </ul>
            <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">Yesterday</h6>
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Stripe</h6>
                    <span class="text-xs">26 March 2020, at 13:45 PM</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                  + $ 750
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">HubSpot</h6>
                    <span class="text-xs">26 March 2020, at 12:30 PM</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                  + $ 1,000
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Creative Tim</h6>
                    <span class="text-xs">26 March 2020, at 08:30 AM</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                  + $ 2,500
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-exclamation"></i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Webflow</h6>
                    <span class="text-xs">26 March 2020, at 05:00 AM</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                  Pending
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
require '../inc/footer.php';
?>