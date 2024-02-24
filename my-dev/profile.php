<?php
  require 'inc/pageloader.php';
?>

    <!-- header -->
    <header class="pt-10 p-relative">
      <div class="overlay br-n bs-c bp-r pe-n" data-parallax="scroll" data-z-index="1" data-image-src="assets/img/bg/bg_a.jpg"></div>
      <div class="position-relative zi-1 d-flex align-items-end flex-wrap h-100">
        <div class="release-subheader">
          <div class="release-container">
            <div class="pb-9 w-100 text-light text-center">
              <div class="img-xl position-relative br-n bp-c bs-c article-image ar-1_1 mx-auto rounded-circle border border-secondary mb-6" style="background-image: url(assets/img/avatar/2.jpg)">
                <span class="position-absolute b-0 r-0 text-secondary lead-3 d-block bg-success p-2 rounded-circle lh-1"><input type="file" class="custom-file-input position-absolute l-0 t-0 b-0 h-auto" id="customFile"><i class="far fa-image"></i></span>
              </div>
              <h3><?php echo $_SESSION['username']; ?></h3>
              <span class="d-flex align-items-center justify-content-center fw-500 text-shadow">Last login: <?php echo $_SESSION['lastlogin']; ?></span>
            </div>
          </div>
        </div>
        <div class="profile-nav w-100 border-top border-bottom border-secondary">
          <div class="container">
            <nav class="navbar navbar-expand-lg mnh-auto px-0 lh-1">
              <button class="navbar-toggler ml-auto py-5 pl-5 pr-0 pr-sm-5" type="button" data-toggle="collapse" data-target="#navbarProfile" aria-controls="navbarProfile" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars lead-3 text-success"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarProfile">
                <ul class="profile-tabs nav nav-tabs list-unstyled mb-0 d-flex justify-content-around w-100 flex-row" id="profile-tabs" role="tablist">

                  <li class="py-2 py-lg-0">
                    <a id="mp-2-02-tab" data-toggle="tab" href="#mp-2-02-c" role="tab" aria-controls="mp-2-02-c" aria-selected="true" class="profile-nav-link text-uppercase text-center active show">
                      <span class="pr-icon-nav ti-game lead-4 d-block mb-3"></span>
                      <span class="small-2 fw-400 ls-1">Products</span>
                    </a>
                  </li>
                  <li class="py-2 py-lg-0">
                    <a id="mp-2-03-tab" data-toggle="tab" href="#mp-2-03-c" role="tab" aria-controls="mp-2-03-c" aria-selected="false" class="profile-nav-link text-uppercase text-center">
                      <span class="pr-icon-nav ti-wallet lead-4 d-block mb-3"></span>
                      <span class="small-2 fw-400 ls-1">Wallet</span>
                    </a>
                  </li>
                  <li class="py-2 py-lg-0">
                    <a id="mp-2-04-tab" data-toggle="tab" href="#mp-2-04-c" role="tab" aria-controls="mp-2-04-c" aria-selected="false" class="profile-nav-link text-uppercase text-center">
                      <span class="pr-icon-nav ti-settings lead-4 d-block mb-3"></span>
                      <span class="small-2 fw-400 ls-1">Settings</span>
                    </a>
                  </li>
                  <li class="py-2 py-lg-0">
                    <a id="mp-2-06-tab" data-toggle="tab" href="#mp-2-06-c" role="tab" aria-controls="mp-2-06-c" aria-selected="false" class="profile-nav-link text-uppercase text-center">
                      <span class="pr-icon-nav ti-user lead-4 d-block mb-3"></span>
                      <span class="small-2 fw-400 ls-1">Groups</span>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- /.header -->

    <!-- main content -->
    <main class="main-content position-relative">

      <!-- overlay -->
      <div class="bg-theme overlay pe-n zi-1">
        <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets/img/bg/bg_shape.png);"></div>
      </div>
      <!-- /.overlay -->

      <!-- content area -->
      <div class="content-section position-relative text-light zi-2">
        <div class="container">
          <!-- tab panes -->
          <div id="profile-tabs-content" class="tab-content position-relative w-100">
            <!-- tab item -->
            <div class="tab-pane fade active show" id="mp-2-02-c" role="tabpanel" aria-labelledby="mp-2-02-tab">
              <div class="mb-9">
                <header class="header mb-4">
                  <h3>Top Played Games</h3>
                  <hr class="w-5 border-top-2 mt-5 mb-5 ml-0 mr-auto border-success">
                </header>
                <div class="owl-carousel-spotlight carousel-spotlight ig-carousel">
                  <div class="owl-carousel gs-carousel" data-carousel-items="1, 3, 3, 4" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                    <!-- item -->
                    <div class="item">
                      <div class="item-cont">
                        <figure class="owl_item_review">
                          <div>
                            <div class="position-relative overflow-hidden">
                              <img class="m-0-auto" src="assets/img/content/cont/cg_02.jpg" alt="Games Store">
                            </div>
                            <div>
                              <h5 class="owl_item_title text-lt"><a href="">Shadow Leap</a></h5>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Last played</span>
                                <span class="text-success float-right">
                                  Jul 27
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Time played</span>
                                <span class="text-success float-right">
                                  15 <span class="d-md-none">Hrs</span><span class="d-none d-md-inline">Hours</span>
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-2">
                                <span>Achievements</span>
                                <span class="text-success float-right">
                                  48%
                                </span>
                              </div>
                              <div class="profile-progress progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </figure>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="item">
                      <div class="item-cont">
                        <figure class="owl_item_review">
                          <div>
                            <div class="position-relative overflow-hidden">
                              <img class="m-0-auto" src="assets/img/content/cont/cg_01.jpg" alt="Games Store">
                            </div>
                            <div>
                              <h5 class="owl_item_title text-lt"><a href="">Creature 2020</a></h5>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Last played</span>
                                <span class="text-success float-right">
                                  Jul 27
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Time played</span>
                                <span class="text-success float-right">
                                  17 <span class="d-md-none">Hrs</span><span class="d-none d-md-inline">Hours</span>
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-2">
                                <span>Achievements</span>
                                <span class="text-success float-right">
                                  68%
                                </span>
                              </div>
                              <div class="profile-progress progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </figure>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="item">
                      <div class="item-cont">
                        <figure class="owl_item_review">
                          <div>
                            <div class="position-relative overflow-hidden">
                              <img class="m-0-auto" src="assets/img/content/cont/cg_03.jpg" alt="Games Store">
                            </div>
                            <div>
                              <h5 class="owl_item_title text-lt"><a href="">MechaOne: New Gen.</a></h5>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Last played</span>
                                <span class="text-success float-right">
                                  Jul 29
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Time played</span>
                                <span class="text-success float-right">
                                  11 <span class="d-md-none">Hrs</span><span class="d-none d-md-inline">Hours</span>
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-2">
                                <span>Achievements</span>
                                <span class="text-success float-right">
                                  78%
                                </span>
                              </div>
                              <div class="profile-progress progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </figure>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="item">
                      <div class="item-cont">
                        <figure class="owl_item_review">
                          <div>
                            <div class="position-relative overflow-hidden">
                              <img class="m-0-auto" src="assets/img/content/cont/cg_05.jpg" alt="Games Store">
                            </div>
                            <div>
                              <h5 class="owl_item_title text-lt"><a href="">ONI Deluxe Edition</a></h5>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Last played</span>
                                <span class="text-success float-right">
                                  Jul 29
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Time played</span>
                                <span class="text-success float-right">
                                  16 <span class="d-md-none">Hrs</span><span class="d-none d-md-inline">Hours</span>
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-2">
                                <span>Achievements</span>
                                <span class="text-success float-right">
                                  78%
                                </span>
                              </div>
                              <div class="profile-progress progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </figure>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="item">
                      <div class="item-cont">
                        <figure class="owl_item_review">
                          <div>
                            <div class="position-relative overflow-hidden">
                              <img class="m-0-auto" src="assets/img/content/cont/cg_04.jpg" alt="Games Store">
                            </div>
                            <div>
                              <h5 class="owl_item_title text-lt"><a href="">Death Stranding: Golden Mask</a></h5>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Last played</span>
                                <span class="text-success float-right">
                                  Jul 27
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-1">
                                <span>Time played</span>
                                <span class="text-success float-right">
                                  12 <span class="d-md-none">Hrs</span><span class="d-none d-md-inline">Hours</span>
                                </span>
                              </div>
                              <div class="relative small-1 fw-600 mb-2">
                                <span>Achievements</span>
                                <span class="text-success float-right">
                                  82%
                                </span>
                              </div>
                              <div class="profile-progress progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </figure>
                      </div>
                    </div>
                    <!-- /.item -->
                  </div>
                </div>
              </div>
              <div>
                <header class="header mb-4">
                  <div class="row">
                    <div class="col-10 col-lg-11">
                      <h3>Library</h3>
                      <hr class="w-5 border-top-2 mt-5 mb-5 ml-0 mr-auto border-success">
                    </div>
                    <div class="col-2 col-lg-1 text-right">
                      <a href="#" class="lead-1 text-success"><i class="fas fa-plus"></i></a>
                    </div>
                  </div>
                </header>
                <div class="row">
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.php" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/store/h-08.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Journey of the Solarcity</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-success small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-success fw-600">25</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-success fw-600">July 27</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.php" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/store/h-09.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Exploration Memories</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-success small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-success fw-600">21</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-success fw-600">July 29</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.php" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/store/h-01.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Creature 2020</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-success small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-success fw-600">22</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-success fw-600">July 21</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.php" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/store/h-10.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Explosive: Blast</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-success small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-success fw-600">26</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-success fw-600">July 29</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.php" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/store/h-02.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Shadow Leap</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-success small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-success fw-600">24</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-success fw-600">July 24</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="store-product.php" class="product-item">
                      <div class="border border-secondary">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-md-block">
                            <img class="profile-glib img bl-3 text-primary" src="assets/img/content/store/h-07.jpg" alt="Games Store">
                          </div>
                          <div class="item_content flex-1 flex-grow pl-4 pl-sm-6 pr-6 py-4">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-2">Haku RE</h6>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                            <div class="position-relative">
                              <span class="item_genre text-success small fw-600">
                                Action, Adventure
                              </span>
                            </div>
                          </div>
                          <div>
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-light small-2 pr-4 pr-sm-6">
                                <span class="fw-500"><span class="text-success fw-600">27</span> hrs total</span><br>
                                <span class="fw-500">Last played <span class="text-success fw-600">July 22</span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <div class="col-12">
                    <!-- pagination -->
                    <nav class="mt-4 pt-4 border-top border-secondary" aria-label="Page navigation">
                      <ul class="pagination justify-content-end list-style-image">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span class="ti-angle-left small-7" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span class="ti-angle-right small-7" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <!-- /.pagination -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab item -->

            <!-- tab item -->
            <div class="tab-pane fade" id="mp-2-03-c" role="tabpanel" aria-labelledby="mp-2-03-tab">
              <div class="position-relative">
                <div class="row">
                  <div class="col-lg-7 mb-9 mb-lg-0">
                    <div class="mb-8">
                      <h4>Add funds to your Wallet</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-success">
                      <form class="input-transparent">
                        <div class="form-group input-group">
                          <input class="form-control" id="giftCard" type="text" name="giftCard" required="" placeholder="Gift Card">
                          <div class="input-group-append ml-3">
                            <button class="btn btn-success" type="button">Apply</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div>
                      <h4>Gift Card History</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-success">
                      <div>
                        <hr class="border-secondary mt-0 mb-4">
                        You haven't redeemed any Gift Cards yet
                        <hr class="border-secondary mb-0 mt-4">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="card bg-dark_A-20 border border-secondary">
                      <div class="px-5 pt-3"><span class="fw-600 ls-1 text-uppercase small-1"><span><i class="fas fa-user text-success mr-2"></i></span>Your account</span></div>
                      <div class="px-5 pt-3 pb-6">
                        <div class="mb-2">
                          <div class="row no-gutters">
                            <div class="col-4 d-flex align-items-center">
                              <span class="fw-600 lead-1">Balance</span>
                            </div>
                            <div class="col-8">
                              <div class="row align-items-center justify-content-end h-100 no-gutters">
                                <div class="text-right text-success fw-600 lead-1">
                                  $<?php echo $_SESSION['creditbalance']; ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-0">
                          <div class="row no-gutters">
                            <div class="col-12">
                              <a href="#" class="btn btn-sm btn-success">View details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab item -->

            <!-- tab item -->
            <div class="tab-pane fade" id="mp-2-04-c" role="tabpanel" aria-labelledby="mp-2-04-tab">
              <div class="position-relative">
                <div class="row">
                  <div class="col-lg-7 mb-9 mb-lg-0">
                    <div class="mb-8">
                      <h4><i class="ti-shopping-cart text-success mr-2"></i>Store</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-success">
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control mb-1">
                          <span>Wallet Balance: <span class="text-success fw-500">300$</span></span>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <a href="#" class="text-primary fw-500">View purchase history</a>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <span>Country: <span class="text-success"><i class="fas fa-globe mx-2"></i><span class="fw-500">United States (US)</span></span></span>
                        </div>
                        <div class="form-group custom-control mb-0">
                          <a href="#" class="text-primary fw-500">View licenses and product key activations</a>
                        </div>
                      </form>
                    </div>
                    <div class="mb-8">
                      <h4><i class="far fa-envelope text-success mr-2"></i>Email Preferences</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-success">
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control mb-1">
                          <span>Email address: <span class="text-success fw-500">wicodustheme@gmail.com</span></span>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <span>Status: <span class="text-success fw-500">Verified</span></span>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <a href="#" class="text-primary fw-500">Change my email address</a>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <span>Phone: <span class="text-success"><i class="fas fa-mobile-alt mx-2"></i><span class="fw-500">***35</span></span></span>
                        </div>
                        <div class="form-group custom-control w-100 border-bottom border-secondary pb-4 mb-1">
                          <a href="#" class="text-primary fw-500">Manage your phone number</a>
                        </div>
                        <div class="form-group custom-control custom-checkbox pt-4">
                          <input class="custom-control-input" type="checkbox" value="" id="dw_mailp" checked="">
                          <label class="custom-control-label" for="dw_mailp">
                            Send me an email when a discount applies to an item on my wish list.
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" value="" id="spb_mailp" checked="">
                          <label class="custom-control-label" for="spb_mailp">
                            Send to email when the a seasonal promotion is beginning.
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox mb-0">
                          <input class="custom-control-input" type="checkbox" value="" id="gse_mailp">
                          <label class="custom-control-label" for="gse_mailp">
                            Game-specific event notifications
                          </label>
                          <span class="d-block small o-80 pt-2 ml-6 pl-1">You can opt out of notifications from individual games by marking 'ignore' on their <a class="text-success text-underline" href="store.php">store page.</a></span>
                        </div>
                      </form>
                    </div>
                    <div class="mb-8">
                      <h4><i class="far fa-bell text-success mr-2"></i>Email Notifications</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-success">
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" value="" id="sDnotif">
                          <label class="custom-control-label" for="sDnotif">
                            Send me daily notifications
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox form-group custom-control w-100 border-bottom border-secondary pb-4 mb-0">
                          <input class="custom-control-input" type="checkbox" value="" id="sNUp">
                          <label class="custom-control-label" for="sNUp">
                            Send me the latest updates, competitions and news
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox pt-3 mb-0">
                          <span class="fw-500 o-70 small">You can specify a personal notification settings. Check the checkboxes in the required parameters.</span>
                        </div>
                      </form>
                    </div>
                    <div class="mb-8">
                      <h4><i class="fas fa-shield-alt text-success mr-2"></i>Account Security</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-success">
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control mb-1">
                          <span>Status: <span class="text-success fw-500"><i class="fas fa-shield-alt text-success mx-2"></i>Protected by Guard email</span></span>
                        </div>
                        <div class="form-group custom-control mb-1">
                          <a href="#" class="text-primary fw-500">Change my password</a>
                        </div>
                        <div class="form-group custom-control w-100 border-bottom border-secondary pb-4 mb-0">
                          <a href="#" class="text-primary fw-500">Learn more about Guard</a>
                        </div>
                        <div class="form-group custom-control pt-3 mb-0">
                          <span class="small o-70 fw-500">This is to protect your account from unauthorized access.</span>
                        </div>
                      </form>
                    </div>
                    <div class="mb-8">
                      <h4><i class="far fa-folder-open text-success mr-2"></i>Product Types</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-success">
                      <span class="d-block mb-5">Include the following types of products in my store:</span>
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" value="" id="show_early_access_titles">
                          <label class="custom-control-label" for="show_early_access_titles">
                            Show Early Access titles
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" value="" id="show_software">
                          <label class="custom-control-label" for="show_software">
                            Show Software
                          </label>
                        </div>
                        <div class="form-group custom-control custom-checkbox mb-0">
                          <input class="custom-control-input" type="checkbox" value="" id="show_vrc">
                          <label class="custom-control-label" for="show_vrc">
                            Show Virtual Reality content
                          </label>
                        </div>
                      </form>
                    </div>
                    <div>
                      <h4><i class="ti-truck text-success mr-2"></i>Payment Details</h4>
                      <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-success">
                      <span class="d-block mb-5">Include the following types of products in my store:</span>
                      <form class="input-transparent d-flex align-items-start flex-column bg-dark_A-20 border border-secondary px-5 py-4">
                        <div class="form-group custom-control custom-checkbox">
                          <span class="lead-1 fw-500"><i class="far fa-map text-success mr-2"></i>Billing Address</span>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <span>Street: <span class="text-success fw-600">3154 Doctors Drive</span></span>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <span>City: <span class="fw-600">Los Angeles</span></span>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <span>State Full: <span class="text-info fw-600">California</span></span>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                          <span>Zip Code: <span class="text-danger fw-600">90017</span></span>
                        </div>
                        <div class="form-group custom-control custom-checkbox mb-0">
                          <span>Phone Number: <span class="text-success fw-600">310-341-3767</span></span>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="card bg-dark_A-20 border border-secondary">
                      <div class="px-5 pt-3"><span class="fw-600 ls-1 text-uppercase small-1"><i class="fas fa-user text-success mr-2"></i>Profile Setting</span></div>
                      <div class="px-5 pt-3 pb-6">
                        <div class="mb-6">
                          <hr class="border-secondary mt-2 mb-4">
                          <span class="d-block fw-600 mb-5"><i class="fas fa-user-secret text-success mr-2"></i>Privacy Settings</span>
                          <form class="input-transparent mb-5">
                            <div class="form-row">
                              <div class="form-group col d-flex align-items-center">
                                <div class="form-group mb-0">
                                  <label class="small-2 text-success fw-600 mb-0" for="country">My profile:</label>
                                </div>
                              </div>
                              <div class="form-group col-md-5">
                                <select class="form-control form-control-sm" id="country">
                                  <option>Public</option>
                                  <option>Friends Only</option>
                                  <option>Private</option>
                                </select>
                              </div>
                            </div>
                            <div>
                              <span class="small-4 o-90">Your community profile includes your profile summary, friends list, badges, showcases, comments, and group membership.</span>
                            </div>
                          </form>
                          <form class="input-transparent mb-5">
                            <div class="form-row">
                              <div class="form-group col d-flex align-items-center">
                                <div class="form-group mb-0">
                                  <label class="small-2 text-success fw-600 mb-0" for="gameDetails">Game details:</label>
                                </div>
                              </div>
                              <div class="form-group col-md-5">
                                <select class="form-control form-control-sm" id="gameDetails">
                                  <option>Public</option>
                                  <option>Friends Only</option>
                                  <option>Private</option>
                                </select>
                              </div>
                            </div>
                            <div>
                              <span class="small-4 o-90">Your community profile includes your profile summary, friends list, badges, showcases, comments, and group membership.</span>
                            </div>
                          </form>
                          <form class="input-transparent">
                            <div class="form-row">
                              <div class="form-group col d-flex align-items-center">
                                <div class="form-group mb-0">
                                  <label class="small-2 text-success fw-600 mb-0" for="inventory">Inventory:</label>
                                </div>
                              </div>
                              <div class="form-group col-md-5">
                                <select class="form-control form-control-sm" id="inventory">
                                  <option>Public</option>
                                  <option>Friends Only</option>
                                  <option>Private</option>
                                </select>
                              </div>
                            </div>
                            <div>
                              <span class="small-4 o-90">Your community profile includes your profile summary, friends list, badges, showcases, comments, and group membership.</span>
                            </div>
                          </form>
                        </div>
                        <div>
                          <div>
                            <hr class="border-secondary mt-2 mb-5">
                            <span class="d-block fw-600 mb-5"><i class="fas fa-link text-success mr-2"></i>Connections</span>
                            <hr class="border-secondary mt-2 mb-5">
                          </div>
                          <!-- Connect Steam -->
                          <div class="mb-5 border-bottom border-secondary">
                            <div class="row mb-5">
                              <div class="col">
                                <div class="d-flex align-items-center">
                                  <i class="fab fa-steam lead-4 text-success mr-2"></i>
                                  <span class="fw-600">Steam<span class="profile-ttip small-8 ml-1" data-toggle="tooltip" data-placement="bottom" title="Connect the Steam and you can see your gameplay data."><i class="fas fa-question-circle"></i></span></span>
                                </div>
                              </div>
                              <div class="col-md-5 text-right">
                                <a href="#" class="btn btn-sm btn-success">Connect</a>
                              </div>
                            </div>
                            <div class="mb-5">
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Account Information</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchAccountInfo" checked="">
                                    <label class="custom-switch-label mb-0" for="SwitchAccountInfo"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="mb-5">
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Notifications</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchNotifications">
                                    <label class="custom-switch-label mb-0" for="SwitchNotifications"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.Connect Steam -->
                          <!-- Connect Twitch -->
                          <div class="mb-5 border-bottom border-secondary">
                            <div class="row mb-5">
                              <div class="col">
                                <div class="d-flex align-items-center">
                                  <i class="fab fa-twitch lead-4 text-success mr-2"></i>
                                  <span class="fw-600">Twitch<span class="profile-ttip small-8 ml-1" data-toggle="tooltip" data-placement="bottom" title="Connect the Twitch and you can see your gameplay data."><i class="fas fa-question-circle"></i></span></span>
                                </div>
                              </div>
                              <div class="col-md-5 text-right">
                                <a href="#" class="btn btn-sm btn-success">Connect</a>
                              </div>
                            </div>
                            <div class="mb-5">
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Account Information</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchAccountInfo_t" checked="">
                                    <label class="custom-switch-label mb-0" for="SwitchAccountInfo_t"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="mb-5">
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Notifications</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchNotifications_t" checked="">
                                    <label class="custom-switch-label mb-0" for="SwitchNotifications_t"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.Connect Twitch -->
                          <!-- Connect Facebook -->
                          <div>
                            <div class="row mb-5">
                              <div class="col">
                                <div class="d-flex align-items-center">
                                  <i class="fab fa-facebook lead-4 text-success mr-2"></i>
                                  <span class="fw-600">Facebook<span class="profile-ttip small-8 ml-1" data-toggle="tooltip" data-placement="bottom" title="Connect the Facebook and you can see your gameplay data."><i class="fas fa-question-circle"></i></span></span>
                                </div>
                              </div>
                              <div class="col-md-5 text-right">
                                <a href="#" class="btn btn-sm btn-success">Connect</a>
                              </div>
                            </div>
                            <div class="mb-5">
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Account Information</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchAccountInfo_f">
                                    <label class="custom-switch-label mb-0" for="SwitchAccountInfo_f"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex align-items-center">
                                    <span class="small-2">Show Notifications</span>
                                  </div>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                  <div class="custom-switch ml-auto">
                                    <input type="checkbox" class="custom-switch-input" id="SwitchNotifications_f" checked="">
                                    <label class="custom-switch-label mb-0" for="SwitchNotifications_f"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.Connect Facebook -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab item -->
            <!-- tab item -->
            <div class="tab-pane fade" id="mp-2-06-c" role="tabpanel" aria-labelledby="mp-2-06-tab">
              <div class="position-relative">

                <div class="row">
                  <div class="col-lg-8 mb-9 mb-lg-0">
                    <div class="row">
                      <div class="col-12">
                        <h3>Your Groups</h3>
                        <hr class="w-10 border-top-2 mt-5 mb-7 ml-0 mr-auto border-success">
                      </div>
                      <!-- item -->
                      <div class="col-md-12 mb-6 mb-lg-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.php">
                                <div class="gr-img aspect-ratio-1_1 bs-c bp-c br-n border border-secondary" style="background: url(assets/img/content/img_04.jpg);"></div>
                              </a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                              <a href="store-product.php" class="d-flex flex-wrap align-items-center lh-6 mb-0 mb-md-2"><span class="ls-1 lead-1 fw-500 text-uppercase">Convallis</span> <span class="small-3 fw-600 text-success"><span class="mx-1">-</span>Public</span></a>
                              <div class="d-none d-md-flex align-items-center lh-1 fw-500 small-3 mb-0">
                                <a href="#" class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-user d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i><span class="fw-600 mr-1">25</span>Members</a>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-gamepad d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i><span class="fw-600 mr-1">0</span>In-Game</span>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-circle d-none d-md-inline d-lg-none d-xl-inline text-success small-7 mr-2"></i><span class="fw-600 mr-1">4</span>Online</span>
                                <a href="#" class="d-flex align-items-center"><i class="fas fa-comment d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i>0 In Group Chat</a>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <a href="#" class="fw-500">Leave group</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-6 mb-lg-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.php">
                                <div class="gr-img aspect-ratio-1_1 bs-c bp-c br-n border border-secondary" style="background: url(assets/img/content/img_05.jpg);"></div>
                              </a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                              <a href="store-product.php" class="d-flex flex-wrap align-items-center lh-6 mb-0 mb-md-2"><span class="ls-1 lead-1 fw-500 text-uppercase">Aenean 3</span> <span class="small-3 fw-600 text-success"><span class="mx-1">-</span>Public</span></a>
                              <div class="d-none d-md-flex align-items-center lh-1 fw-500 small-3 mb-0">
                                <a href="#" class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-user d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i><span class="fw-600 mr-1">25</span>Members</a>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-gamepad d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i><span class="fw-600 mr-1">0</span>In-Game</span>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-circle d-none d-md-inline d-lg-none d-xl-inline text-success small-7 mr-2"></i><span class="fw-600 mr-1">4</span>Online</span>
                                <a href="#" class="d-flex align-items-center"><i class="fas fa-comment d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i>0 In Group Chat</a>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <a href="#" class="fw-500">Leave group</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-6 mb-lg-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.php">
                                <div class="gr-img aspect-ratio-1_1 bs-c bp-c br-n border border-secondary" style="background: url(assets/img/content/img_06.jpg);"></div>
                              </a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                              <a href="store-product.php" class="d-flex flex-wrap align-items-center lh-6 mb-0 mb-md-2"><span class="ls-1 lead-1 fw-500 text-uppercase">Morbi vitae</span> <span class="small-3 fw-600 text-success"><span class="mx-1">-</span>Public</span></a>
                              <div class="d-none d-md-flex align-items-center lh-1 fw-500 small-3 mb-0">
                                <a href="#" class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-user d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i><span class="fw-600 mr-1">25</span>Members</a>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-gamepad d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i><span class="fw-600 mr-1">0</span>In-Game</span>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-circle d-none d-md-inline d-lg-none d-xl-inline text-success small-7 mr-2"></i><span class="fw-600 mr-1">4</span>Online</span>
                                <a href="#" class="d-flex align-items-center"><i class="fas fa-comment d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i>0 In Group Chat</a>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <a href="#" class="fw-500">Leave group</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-6 mb-lg-4">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.php">
                                <div class="gr-img aspect-ratio-1_1 bs-c bp-c br-n border border-secondary" style="background: url(assets/img/content/img_07.jpg);"></div>
                              </a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                              <a href="store-product.php" class="d-flex flex-wrap align-items-center lh-6 mb-0 mb-md-2"><span class="ls-1 lead-1 fw-500 text-uppercase">Tellus</span> <span class="small-3 fw-600 text-danger"><span class="mx-1">-</span>Private</span></a>
                              <div class="d-none d-md-flex align-items-center lh-1 fw-500 small-3 mb-0">
                                <a href="#" class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-user d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i><span class="fw-600 mr-1">25</span>Members</a>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-gamepad d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i><span class="fw-600 mr-1">0</span>In-Game</span>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-circle d-none d-md-inline d-lg-none d-xl-inline text-success small-7 mr-2"></i><span class="fw-600 mr-1">4</span>Online</span>
                                <a href="#" class="d-flex align-items-center"><i class="fas fa-comment d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i>0 In Group Chat</a>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <a href="#" class="fw-500">Leave group</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-0">
                        <div class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <a href="store-product.php">
                                <div class="gr-img aspect-ratio-1_1 bs-c bp-c br-n border border-secondary" style="background: url(assets/img/content/img_01.jpg);"></div>
                              </a>
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                              <a href="store-product.php" class="d-flex flex-wrap align-items-center lh-6 mb-0 mb-md-2"><span class="ls-1 lead-1 fw-500 text-uppercase">Finibus nerfed</span> <span class="small-3 fw-600 text-success"><span class="mx-1">-</span>Public</span></a>
                              <div class="d-none d-md-flex align-items-center lh-1 fw-500 small-3 mb-0">
                                <a href="#" class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-user d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i><span class="fw-600 mr-1">25</span>Members</a>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-gamepad d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i><span class="fw-600 mr-1">0</span>In-Game</span>
                                <span class="d-flex align-items-center border-right border-secondary mr-3 pr-3"><i class="fas fa-circle d-none d-md-inline d-lg-none d-xl-inline text-success small-7 mr-2"></i><span class="fw-600 mr-1">4</span>Online</span>
                                <a href="#" class="d-flex align-items-center"><i class="fas fa-comment d-none d-md-inline d-lg-none d-xl-inline text-success mr-2"></i>0 In Group Chat</a>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <a href="#" class="fw-500">Leave group</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.item -->
                    </div>
                    <!-- pagination -->
                    <nav class="mt-7 pt-4 border-top border-secondary" aria-label="Page navigation">
                      <ul class="pagination justify-content-end list-unstyled">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span class="ti-angle-left small-7" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span class="ti-angle-right small-7" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <!-- /.pagination -->
                  </div>
                  <div class="col-lg-4">
                    <div class="rounded mb-6">
                      <form class="input-group border-0 input-transparent bg-transparent">
                        <input class="form-control border border-secondary border-right-0" type="search" placeholder="Search groups by name" aria-label="Search">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-success text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                      </form>
                    </div>
                    <div class="filters card border border-secondary p-4">
                      <ul class="sidebar-nav-light-hover list-unstyled list-style-image mb-0 text-unset small-3 fw-600">

                        <li class="nav-item text-light transition mb-2 active">
                          <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                            <span class="p-collapsing-title"><i class="fas fa-users text-success mr-2"></i>Your Groups</span>
                          </a>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                            <span class="p-collapsing-title"><i class="fas fa-search text-success mr-2"></i>Find a Group</span>
                          </a>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                            <span class="p-collapsing-title"><i class="fas fa-plus-square text-success mr-2"></i>Create Group</span>
                          </a>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                            <span class="p-collapsing-title"><i class="fas fa-envelope text-success mr-2"></i>Pending Invites</span>
                          </a>
                        </li>
                        <li class="nav-item text-light transition mb-2">
                          <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                            <span class="p-collapsing-title"><i class="fas fa-ban text-success mr-2"></i>Blocked</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab item -->
          </div>
        </div>
      </div>
      <!-- /.content area -->

    </main>

<?php
  require 'inc/footer.php';
?>
