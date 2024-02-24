<?php
switch ($_SERVER['PHP_SELF']) {

  case "/profile.php":
    $pagetitle = "Profile";
    $_CONFIG['pagelock'] = TRUE;
    break;

  default:
    $pagetitle = "default";
    $_CONFIG['pagelock'] = 'landing-page';
}
?>
