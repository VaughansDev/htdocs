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
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Product Page</li>
        </ol>
        <h6 class="font-weight-bolder mb-0 text-white">Product Page</h6>
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
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="mb-4">Product Details</h5>
            <div class="row">
              <div class="col-xl-5 col-lg-6 text-center">
                <img class="w-100 border-radius-lg shadow-lg mx-auto" src="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb.jpg" alt="chair">
                <div class="my-gallery d-flex mt-4 pt-2" itemscope itemtype="http://schema.org/ImageGallery">
                  <figure class="ms-2 me-3" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-1.jpg" itemprop="contentUrl" data-size="500x600">
                      <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow" src="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-1.jpg" alt="Image description" />
                    </a>
                  </figure>
                  <figure class="me-3" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-2.jpg" itemprop="contentUrl" data-size="500x600">
                      <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow" src="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-2.jpg" itemprop="thumbnail" alt="Image description" />
                    </a>
                  </figure>
                  <figure class="me-3" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-3.jpg" itemprop="contentUrl" data-size="500x600">
                      <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow" src="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-3.jpg" itemprop="thumbnail" alt="Image description" />
                    </a>
                  </figure>
                  <figure class="me-3" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-4.jpg" itemprop="contentUrl" data-size="500x600">
                      <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow" src="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-4.jpg" itemprop="thumbnail" alt="Image description" />
                    </a>
                  </figure>
                  <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-5.jpg" itemprop="contentUrl" data-size="500x600">
                      <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow" src="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-5.jpg" itemprop="thumbnail" alt="Image description" />
                    </a>
                  </figure>
                </div>

                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                  <div class="pswp__bg"></div>

                  <div class="pswp__scroll-wrap">


                    <div class="pswp__container">
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                    </div>

                    <div class="pswp__ui pswp__ui--hidden">
                      <div class="pswp__top-bar">

                        <div class="pswp__counter"></div>
                        <button class="btn btn-white btn-sm pswp__button pswp__button--close">Close (Esc)</button>
                        <button class="btn btn-white btn-sm pswp__button pswp__button--fs">Fullscreen</button>
                        <button class="btn btn-white btn-sm pswp__button pswp__button--arrow--left">Prev
                        </button>
                        <button class="btn btn-white btn-sm pswp__button pswp__button--arrow--right">Next
                        </button>


                        <div class="pswp__preloader">
                          <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                              <div class="pswp__preloader__donut"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                      </div>
                      <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 mx-auto">
                <h3 class="mt-lg-0 mt-4">Apple Bundle</h3>
                <div class="rating">
                  <i class="fas fa-star" aria-hidden="true"></i>
                  <i class="fas fa-star" aria-hidden="true"></i>
                  <i class="fas fa-star" aria-hidden="true"></i>
                  <i class="fas fa-star" aria-hidden="true"></i>
                  <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                </div>
                <br>
                <h6 class="mb-0 mt-3">Price</h6>
                <h5>$1,419</h5>
                <span class="badge badge-success">In Stock</span>
                <br>
                <label class="mt-4">Description</label>
                <ul>
                  <li>The most beautiful curves of this swivel stool adds an elegant touch to any environment</li>
                  <li>Memory swivel seat returns to original seat position</li>
                  <li>Comfortable integrated layered chair seat cushion design</li>
                  <li>Fully assembled! No assembly required</li>
                </ul>
                <div class="row mt-4">
                  <div class="col-lg-5 mt-lg-0 mt-2">
                    <label>Frame Material</label>
                    <select class="form-control" name="choices-material" id="choices-material">
                      <option value="Choice 1" selected>Wood</option>
                      <option value="Choice 2">Steel</option>
                      <option value="Choice 3">Aluminium</option>
                      <option value="Choice 4">Carbon</option>
                    </select>
                  </div>
                  <div class="col-lg-5 mt-lg-0 mt-2">
                    <label>Color</label>
                    <select class="form-control" name="choices-colors" id="choices-colors">
                      <option value="Choice 1" selected>White</option>
                      <option value="Choice 2">Gray</option>
                      <option value="Choice 3">Black</option>
                      <option value="Choice 4">Blue</option>
                      <option value="Choice 5">Red</option>
                      <option value="Choice 6">Pink</option>
                    </select>
                  </div>
                  <div class="col-lg-2">
                    <label>Quantity</label>
                    <select class="form-control" name="choices-quantity" id="choices-quantity">
                      <option value="Choice 1" selected>1</option>
                      <option value="Choice 2">2</option>
                      <option value="Choice 3">3</option>
                      <option value="Choice 4">4</option>
                      <option value="Choice 5">5</option>
                      <option value="Choice 6">6</option>
                      <option value="Choice 7">7</option>
                      <option value="Choice 8">8</option>
                      <option value="Choice 9">9</option>
                      <option value="Choice 10">10</option>
                    </select>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-lg-5">
                    <button class="btn btn-primary mb-0 mt-lg-auto w-100" type="button" name="button">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12">
                <h5 class="ms-3">Other Products</h5>
                <div class="table table-responsive">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Review</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Availability</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-1.jpg" class="avatar avatar-md me-3" alt="table image">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Christopher Knight Home</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm text-secondary mb-0">$89.53</p>
                        </td>
                        <td>
                          <div class="rating ms-lg-n4">
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                          </div>
                        </td>
                        <td class="align-middle text-sm">
                          <div class="progress mx-auto">
                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-sm">230019</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-2.jpg" class="avatar avatar-md me-3" alt="table image">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Bar Height Swivel Barstool</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm text-secondary mb-0">$99.99</p>
                        </td>
                        <td>
                          <div class="rating ms-lg-n4">
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                          </div>
                        </td>
                        <td class="align-middle text-sm">
                          <div class="progress mx-auto">
                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-sm">87120</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-3.jpg" class="avatar avatar-md me-3" alt="table image">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Signature Design by Ashley</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm text-secondary mb-0">$129.00</p>
                        </td>
                        <td>
                          <div class="rating ms-lg-n4">
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                          </div>
                        </td>
                        <td class="align-middle text-sm">
                          <div class="progress mx-auto">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-sm">412301</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-thumb-4.jpg" class="avatar avatar-md me-3" alt="table image">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Modern Square</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm text-secondary mb-0">$59.99</p>
                        </td>
                        <td>
                          <div class="rating ms-lg-n4">
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                          </div>
                        </td>
                        <td class="align-middle text-sm">
                          <div class="progress mx-auto">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-sm">001992</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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
<script src="../../../assets/js/plugins/choices.min.js"></script>
<script src="../../../assets/js/plugins/photoswipe.min.js"></script>
<script src="../../../assets/js/plugins/photoswipe-ui-default.min.js"></script>
<script>
  if (document.getElementById('choices-quantity')) {
    var element = document.getElementById('choices-quantity');
    const example = new Choices(element, {
      searchEnabled: false,
      itemSelectText: ''
    });
  };

  if (document.getElementById('choices-material')) {
    var element = document.getElementById('choices-material');
    const example = new Choices(element, {
      searchEnabled: false,
      itemSelectText: ''
    });
  };

  if (document.getElementById('choices-colors')) {
    var element = document.getElementById('choices-colors');
    const example = new Choices(element, {
      searchEnabled: false,
      itemSelectText: ''
    });
  };

  // Gallery Carousel
  if (document.getElementById('products-carousel')) {
    var myCarousel = document.querySelector('#products-carousel')
    var carousel = new bootstrap.Carousel(myCarousel)
  }


  // Products gallery

  var initPhotoSwipeFromDOM = function(gallerySelector) {

    // parse slide data (url, title, size ...) from DOM elements
    // (children of gallerySelector)
    var parseThumbnailElements = function(el) {
      var thumbElements = el.childNodes,
        numNodes = thumbElements.length,
        items = [],
        figureEl,
        linkEl,
        size,
        item;

      for (var i = 0; i < numNodes; i++) {

        figureEl = thumbElements[i]; // <figure> element
        // include only element nodes
        if (figureEl.nodeType !== 1) {
          continue;
        }

        linkEl = figureEl.children[0]; // <a> element

        size = linkEl.getAttribute('data-size').split('x');

        // create slide object
        item = {
          src: linkEl.getAttribute('href'),
          w: parseInt(size[0], 10),
          h: parseInt(size[1], 10)
        };

        if (figureEl.children.length > 1) {
          // <figcaption> content
          item.title = figureEl.children[1].innerHTML;
        }

        if (linkEl.children.length > 0) {
          // <img> thumbnail element, retrieving thumbnail url
          item.msrc = linkEl.children[0].getAttribute('src');
        }

        item.el = figureEl; // save link to element for getThumbBoundsFn
        items.push(item);
      }

      return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
      return el && (fn(el) ? el : closest(el.parentNode, fn));
    };

    // triggers when user clicks on thumbnail
    var onThumbnailsClick = function(e) {
      e = e || window.event;
      e.preventDefault ? e.preventDefault() : e.returnValue = false;

      var eTarget = e.target || e.srcElement;

      // find root element of slide
      var clickedListItem = closest(eTarget, function(el) {
        return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
      });

      if (!clickedListItem) {
        return;
      }

      // find index of clicked item by looping through all child nodes
      // alternatively, you may define index via data- attribute
      var clickedGallery = clickedListItem.parentNode,
        childNodes = clickedListItem.parentNode.childNodes,
        numChildNodes = childNodes.length,
        nodeIndex = 0,
        index;

      for (var i = 0; i < numChildNodes; i++) {
        if (childNodes[i].nodeType !== 1) {
          continue;
        }

        if (childNodes[i] === clickedListItem) {
          index = nodeIndex;
          break;
        }
        nodeIndex++;
      }



      if (index >= 0) {
        // open PhotoSwipe if valid index found
        openPhotoSwipe(index, clickedGallery);
      }
      return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
      var hash = window.location.hash.substring(1),
        params = {};

      if (hash.length < 5) {
        return params;
      }

      var vars = hash.split('&');
      for (var i = 0; i < vars.length; i++) {
        if (!vars[i]) {
          continue;
        }
        var pair = vars[i].split('=');
        if (pair.length < 2) {
          continue;
        }
        params[pair[0]] = pair[1];
      }

      if (params.gid) {
        params.gid = parseInt(params.gid, 10);
      }

      return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
      var pswpElement = document.querySelectorAll('.pswp')[0],
        gallery,
        options,
        items;

      items = parseThumbnailElements(galleryElement);

      // define options (if needed)
      options = {

        // define gallery index (for URL)
        galleryUID: galleryElement.getAttribute('data-pswp-uid'),

        getThumbBoundsFn: function(index) {
          // See Options -> getThumbBoundsFn section of documentation for more info
          var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
            rect = thumbnail.getBoundingClientRect();

          return {
            x: rect.left,
            y: rect.top + pageYScroll,
            w: rect.width
          };
        }

      };

      // PhotoSwipe opened from URL
      if (fromURL) {
        if (options.galleryPIDs) {
          // parse real index when custom PIDs are used
          // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
          for (var j = 0; j < items.length; j++) {
            if (items[j].pid == index) {
              options.index = j;
              break;
            }
          }
        } else {
          // in URL indexes start from 1
          options.index = parseInt(index, 10) - 1;
        }
      } else {
        options.index = parseInt(index, 10);
      }

      // exit if index not found
      if (isNaN(options.index)) {
        return;
      }

      if (disableAnimation) {
        options.showAnimationDuration = 0;
      }

      // Pass data to PhotoSwipe and initialize it
      gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
      gallery.init();
    };

    // loop through all gallery elements and bind events
    var galleryElements = document.querySelectorAll(gallerySelector);

    for (var i = 0, l = galleryElements.length; i < l; i++) {
      galleryElements[i].setAttribute('data-pswp-uid', i + 1);
      galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if (hashData.pid && hashData.gid) {
      openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
    }
  };

  // execute above function
  initPhotoSwipeFromDOM('.my-gallery');
</script>

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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"84a5f633dc99c334","b":1,"version":"2024.1.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/ecommerce/products/product-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2024 05:44:28 GMT -->

</html>