<?php
  require 'inc/header.php';
?>
<main class="main-content position-relative border-radius-lg ">
<div class="container-fluid py-4">
<div class="row min-vh-80">
<div class="d-none d-lg-block">
<div class="col-lg-10">
<div class="position-absolute p-3 border-radius-xl blur shadow-xl perspective-right z-index-3 mt-7">
<a class="w-100" href="default-2.html">
<img class="w-100 border-radius-lg" src="<?php echo $_CONFIG['url']; ?>/assets/img/default.jpg" alt="default page">
</a>
</div>
<div class="position-absolute p-3 border-radius-xl blur shadow-xl perspective-right-sm z-index-2 mt-3">
<img class="w-100 border-radius-lg" src="<?php echo $_CONFIG['url']; ?>/assets/img/automotive.jpg" alt="default page">
</div>
<div class="position-absolute p-3 border-radius-xl blur shadow-xl perspective-right-xs z-index-1">
<img class="w-100 border-radius-lg" src="<?php echo $_CONFIG['url']; ?>/assets/img/crm.jpg" alt="default page">
</div>
</div>
</div>
<div class="d-lg-none d-none d-md-block">
<div class="col-lg-10">
<div class="p-3 border-radius-xl blur shadow-xl z-index-3 mt-5">
<img class="w-100 border-radius-lg" src="<?php echo $_CONFIG['url']; ?>/assets/img/default.jpg" alt="default page">
</div>
<div class="p-3 border-radius-xl blur shadow-xl z-index-2 mt-4">
<img class="w-100 border-radius-lg" src="<?php echo $_CONFIG['url']; ?>/assets/img/automotive.jpg" alt="default page">
</div>
</div>
</div>
<div class="d-lg-none d-md-none">
<div class="col-lg-10">
<div class="p-3 border-radius-xl blur shadow-xl z-index-3 mt-5">
<img class="w-100 border-radius-lg" src="<?php echo $_CONFIG['url']; ?>/assets/img/default.jpg" alt="default page">
</div>
<div class="p-3 border-radius-xl blur shadow-xl z-index-2 mt-4">
<img class="w-100 border-radius-lg" src="<?php echo $_CONFIG['url']; ?>/assets/img/automotive.jpg" alt="default page">
</div>
<div class="p-3 border-radius-xl blur shadow-xl z-index-1 mt-4">
<img class="w-100 border-radius-lg" src="<?php echo $_CONFIG['url']; ?>/assets/img/crm.jpg" alt="default page">
</div>
</div>
</div>
</div>
</div>
</main>

<script src="<?php echo $_CONFIG['url']; ?>/assets/js/core/popper.min.js"></script>
<script src="<?php echo $_CONFIG['url']; ?>/assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo $_CONFIG['url']; ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?php echo $_CONFIG['url']; ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>

<script src="<?php echo $_CONFIG['url']; ?>/assets/js/plugins/dragula/dragula.min.js"></script>
<script src="<?php echo $_CONFIG['url']; ?>/assets/js/plugins/jkanban/jkanban.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>



<script src="<?php echo $_CONFIG['url']; ?>/assets/js/argon-dashboard.min9c7f.js?v=2.0.5"></script>
</body></html>