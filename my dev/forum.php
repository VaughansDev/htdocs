<?php
  require 'inc/pageloader.php';
?>

    <!-- main content -->
    <main class="main-content gradient-lg position-relative">

      <!-- overlay -->
      <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets/img/bg/bg_shape.png);"></div>
      <!-- /.overlay -->

      <!-- content area -->
      <div class="content-section news-section carousel-spotlight ig-carousel text-light">
        <div class="container">
          <header class="header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb-product breadcrumb breadcrumb-nowrap breadcrumb-angle bg-transparent pl-0 pr-0 mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Forum</li>
              </ol>
            </nav>
            <h2 class="mb-6">Forum</h2>
            <hr class="w-10 border-top-2 mt-5 mb-5 ml-0 mr-auto border-success">
          </header>
          <div class="position-relative">
            <div class="mb-4">
              <span class="lead-1">Become a part of the community and start a discussion</span>
            </div>
            <div class="row">
              <div class="col-lg-8 mb-8 mb-lg-0">
                <!-- form -->
                <div class="mb-6">
                  <form action="#" class="input-transparent pb-8 border-bottom border-secondary">
                    <div class="form-row">
                      <div class="form-group col-2 col-xl-1">
                        <div class="img-md position-relative br-n bp-c bs-c article-image ar-1_1 mx-auto rounded-circle border border-secondary mb-6" style="background-image: url(assets/img/avatar/2.jpg)">
                          <span class="position-absolute b-0 r-0 text-success small d-block rounded-circle lh-1"><i class="fas fa-circle"></i></span>
                        </div>
                      </div>
                      <div class="form-group col-10 col-xl-11 pl-2">
                        <div class="mb-2">
                          <input type="text" class="form-control" id="TitleFormControlInput" placeholder="Title">
                        </div>
                        <div>
                          <textarea class="form-control form-control" rows="4" placeholder="Body text" name="text" required=""></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                      <div class="d-flex align-items-center mr-4">
                        <div class="text-nowrap mr-2">Post In:</div>
                        <select class="form-control form-control-sm">
                          <option>General</option>
                          <option>Games</option>
                          <option>News</option>
                          <option>Blog</option>
                          <option>PC</option>
                        </select>
                      </div>
                      <div><button class="btn btn-success" type="submit">Post</button></div>
                    </div>
                  </form>
                </div>
                <!-- /.form -->
                <!-- forum -->
                <div class="border border-secondary">
                  <div class="bg-light_A-10 px-4 py-1">
                    <div class="row align-items-center no-gutters">
                      <div class="col-9">
                        <div class="d-flex align-items-center fw-500 lead-1">Topic
                          <a href="#" class="d-flex flex-column small-5 ml-2 o-50 lh-1">
                            <span class="mb--1"><i class="fas fa-sort-up"></i></span>
                            <span class="mt--1"><i class="fas fa-sort-down"></i></span>
                          </a>
                        </div>
                      </div>
                      <div class="col-3 d-none d-sm-block">
                        <div class="d-flex align-items-center justify-content-end fw-500">
                          Last Message
                          <a href="#" class="d-flex flex-column small-5 ml-2 o-50 lh-1">
                            <span class="mb--1"><i class="fas fa-sort-up"></i></span>
                            <span class="mt--1"><i class="fas fa-sort-down"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- forum-list -->
                  <div class="forum-list row text-light">
                    <!-- item -->
                    <div class="forum-topic-item col-md-12">
                      <div class="forum-topic-inner item px-4">
                        <div class="row align-items-center no-gutters">
                          <div class="col-1 d-none d-sm-block">
                            <img class="img" src="assets/img/avatar/2.jpg" alt="User">
                          </div>
                          <div class="col-sm-8 pl-0 pl-sm-4 pr-4">
                            <div class="ls-1 small-4 fw-400 mb-1">
                              <a href="profile.php">Lukeg1209</a>
                            </div>
                            <div class="mb-0">
                              <a href="forum-topic.php">
                                <h6 class="lead-1 fw-600 mb-2">
                                  Autoclicker Tool Release
                                </h6>
                              </a>
                            </div>
                            <div class="position-relative small-5">
                              <span class="mr-2"><i class="mr-1 fas fa-comment-alt text-success"></i><span>14</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-thumbs-up text-success"></i><span>1,627</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-eye text-success"></i><span>51,258</span></span>
                              <span><i class="mr-1 fas fa-tag text-success"></i><span>General</span></span>
                            </div>
                          </div>
                          <div class="d-none d-sm-block col-sm-3">
                            <div class="d-flex align-items-center justify-content-end">
                              <div class="pr-2">
                                <img class="img img-xs rounded" src="assets/img/avatar/3.jpg" alt="User">
                              </div>
                              <div class="small">
                                <a href="profile.php" class="d-block small-1 text-lt"><i class="fas fa-user small-5 text-success mr-1"></i>mfuad</a>
                                <span class="small-5"><i class="fas fa-clock text-success mr-1"></i>Sep 27, 2021</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="forum-topic-item col-md-12">
                      <div class="forum-topic-inner item px-4">
                        <div class="row align-items-center no-gutters">
                          <div class="col-1 d-none d-sm-block">
                            <img class="img" src="assets/img/avatar/1.jpg" alt="User">
                          </div>
                          <div class="col-sm-8 pl-0 pl-sm-4 pr-4">
                            <div class="ls-1 small-4 fw-400 mb-1">
                              <a href="profile.php">Buhlaine</a>
                            </div>
                            <div class="mb-0">
                              <a href="forum-topic.php">
                                <h6 class="lead-1 fw-600 mb-2">
                                  Wicodus Patch Releases
                                </h6>
                              </a>
                            </div>
                            <div class="position-relative small-5">
                              <span class="mr-2"><i class="mr-1 fas fa-comment-alt text-success"></i><span>14</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-thumbs-up text-success"></i><span>1,627</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-eye text-success"></i><span>51,258</span></span>
                              <span><i class="mr-1 fas fa-tag text-success"></i><span>General</span></span>
                            </div>
                          </div>
                          <div class="d-none d-sm-block col-sm-3">
                            <div class="d-flex align-items-center justify-content-end">
                              <div class="pr-2">
                                <img class="img img-xs rounded" src="assets/img/avatar/4.jpg" alt="User">
                              </div>
                              <div class="small">
                                <a href="profile.php" class="d-block small-1 text-lt"><i class="fas fa-user small-5 text-success mr-1"></i>mfuad</a>
                                <span class="small-5"><i class="fas fa-clock text-success mr-1"></i>Sep 27, 2021</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="forum-topic-item col-md-12">
                      <div class="forum-topic-inner item px-4">
                        <div class="row align-items-center no-gutters">
                          <div class="col-1 d-none d-sm-block">
                            <img class="img" src="assets/img/avatar/3.jpg" alt="User">
                          </div>
                          <div class="col-sm-8 pl-0 pl-sm-4 pr-4">
                            <div class="ls-1 small-4 fw-400 mb-1">
                              <a href="profile.php">P-Jawahar</a>
                            </div>
                            <div class="mb-0">
                              <a href="forum-topic.php">
                                <h6 class="lead-1 fw-600 mb-2">
                                  Wicodus 2021.4 LTS is now available
                                </h6>
                              </a>
                            </div>
                            <div class="position-relative small-5">
                              <span class="mr-2"><i class="mr-1 fas fa-comment-alt text-success"></i><span>14</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-thumbs-up text-success"></i><span>1,627</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-eye text-success"></i><span>51,258</span></span>
                              <span><i class="mr-1 fas fa-tag text-success"></i><span>General</span></span>
                            </div>
                          </div>
                          <div class="d-none d-sm-block col-sm-3">
                            <div class="d-flex align-items-center justify-content-end">
                              <div class="pr-2">
                                <img class="img img-xs rounded" src="assets/img/avatar/1.jpg" alt="User">
                              </div>
                              <div class="small">
                                <a href="profile.php" class="d-block small-1 text-lt"><i class="fas fa-user small-5 text-success mr-1"></i>mfuad</a>
                                <span class="small-5"><i class="fas fa-clock text-success mr-1"></i>Sep 27, 2021</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="forum-topic-item col-md-12">
                      <div class="forum-topic-inner item px-4">
                        <div class="row align-items-center no-gutters">
                          <div class="col-1 d-none d-sm-block">
                            <img class="img" src="assets/img/avatar/2.jpg" alt="User">
                          </div>
                          <div class="col-sm-8 pl-0 pl-sm-4 pr-4">
                            <div class="ls-1 small-4 fw-400 mb-1">
                              <a href="profile.php">Lukeg1209</a>
                            </div>
                            <div class="mb-0">
                              <a href="forum-topic.php">
                                <h6 class="lead-1 fw-600 mb-2">
                                  Sketchfab on the forums!
                                </h6>
                              </a>
                            </div>
                            <div class="position-relative small-5">
                              <span class="mr-2"><i class="mr-1 fas fa-comment-alt text-success"></i><span>14</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-thumbs-up text-success"></i><span>1,627</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-eye text-success"></i><span>51,258</span></span>
                              <span><i class="mr-1 fas fa-tag text-success"></i><span>General</span></span>
                            </div>
                          </div>
                          <div class="d-none d-sm-block col-sm-3">
                            <div class="d-flex align-items-center justify-content-end">
                              <div class="pr-2">
                                <img class="img img-xs rounded" src="assets/img/avatar/3.jpg" alt="User">
                              </div>
                              <div class="small">
                                <a href="profile.php" class="d-block small-1 text-lt"><i class="fas fa-user small-5 text-success mr-1"></i>mfuad</a>
                                <span class="small-5"><i class="fas fa-clock text-success mr-1"></i>Sep 27, 2021</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="forum-topic-item col-md-12">
                      <div class="forum-topic-inner item px-4">
                        <div class="row align-items-center no-gutters">
                          <div class="col-1 d-none d-sm-block">
                            <img class="img" src="assets/img/avatar/4.jpg" alt="User">
                          </div>
                          <div class="col-sm-8 pl-0 pl-sm-4 pr-4">
                            <div class="ls-1 small-4 fw-400 mb-1">
                              <a href="profile.php">Buhlaine</a>
                            </div>
                            <div class="mb-0">
                              <a href="forum-topic.php">
                                <h6 class="lead-1 fw-600 mb-2">
                                  Wicodus Patch Releases
                                </h6>
                              </a>
                            </div>
                            <div class="position-relative small-5">
                              <span class="mr-2"><i class="mr-1 fas fa-comment-alt text-success"></i><span>14</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-thumbs-up text-success"></i><span>1,627</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-eye text-success"></i><span>51,258</span></span>
                              <span><i class="mr-1 fas fa-tag text-success"></i><span>General</span></span>
                            </div>
                          </div>
                          <div class="d-none d-sm-block col-sm-3">
                            <div class="d-flex align-items-center justify-content-end">
                              <div class="pr-2">
                                <img class="img img-xs rounded" src="assets/img/avatar/2.jpg" alt="User">
                              </div>
                              <div class="small">
                                <a href="profile.php" class="d-block small-1 text-lt"><i class="fas fa-user small-5 text-success mr-1"></i>mfuad</a>
                                <span class="small-5"><i class="fas fa-clock text-success mr-1"></i>Sep 27, 2021</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="forum-topic-item col-md-12">
                      <div class="forum-topic-inner item px-4">
                        <div class="row align-items-center no-gutters">
                          <div class="col-1 d-none d-sm-block">
                            <img class="img" src="assets/img/avatar/5.jpg" alt="User">
                          </div>
                          <div class="col-sm-8 pl-0 pl-sm-4 pr-4">
                            <div class="ls-1 small-4 fw-400 mb-1">
                              <a href="profile.php">nateliv</a>
                            </div>
                            <div class="mb-0">
                              <a href="forum-topic.php">
                                <h6 class="lead-1 fw-600 mb-2">
                                  Modpack Keeps Crashing
                                </h6>
                              </a>
                            </div>
                            <div class="position-relative small-5">
                              <span class="mr-2"><i class="mr-1 fas fa-comment-alt text-success"></i><span>14</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-thumbs-up text-success"></i><span>1,627</span></span>
                              <span class="mr-2"><i class="mr-1 fas fa-eye text-success"></i><span>51,258</span></span>
                              <span><i class="mr-1 fas fa-tag text-success"></i><span>General</span></span>
                            </div>
                          </div>
                          <div class="d-none d-sm-block col-sm-3">
                            <div class="d-flex align-items-center justify-content-end">
                              <div class="pr-2">
                                <img class="img img-xs rounded" src="assets/img/avatar/4.jpg" alt="User">
                              </div>
                              <div class="small">
                                <a href="profile.php" class="d-block small-1 text-lt"><i class="fas fa-user small-5 text-success mr-1"></i>mfuad</a>
                                <span class="small-5"><i class="fas fa-clock text-success mr-1"></i>Sep 27, 2021</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                  </div>
                  <!-- /.forum-list -->
                </div>
                <!-- /.forum -->
                <!-- pagination -->
                <nav class="mt-6" aria-label="Page navigation">
                  <ul class="pagination justify-content-end mb-0">
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
                <div class="rounded mb-4">
                  <form class="input-group border-0 input-transparent bg-transparent">
                    <input class="form-control border border-secondary border-right-0" type="search" placeholder="Type something.." aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-success text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                  </form>
                </div>
                <div class="filters border border-secondary rounded p-4 mb-4">
                  <ul class="sidebar-nav-light-hover list-unstyled mb-0 text-unset small-3 fw-600">
                    <li class="nav-item text-light transition mb-2 active">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">All</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">My Feed</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">General</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">Games</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">Introductions</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">News</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">Blog</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">PC</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">Free-to-play</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">Retro</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">Off-Topic</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="#" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">Mobile Gaming</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="archive border border-secondary rounded">
                  <div class="bg-secondary px-4 py-1"><span class="fw-600 ls-1 text-uppercase small">Community Rules</span></div>
                  <div class="p-4">
                    <ul class="list-unstyled small-2 mb-0">
                      <li><a href="#">Abusive Language</a></li>
                      <li><a href="#">Warnings and Bans</a></li>
                      <li><a href="#">Respect</a></li>
                      <li><a href="#">Trolling</a></li>
                      <li><a href="#">Reporting Other Users</a></li>
                      <li><a href="#">Moderating Controversial Posts</a></li>
                      <li><a href="#">Inappropriate Images</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content area -->

    </main>

<?php
  require 'inc/footer.php';
?>
