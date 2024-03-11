<?php
require_once 'vendor/autoload.php';

use Omnipay\Omnipay;

$_CONFIG['dbhost'] = 'localhost';
$_CONFIG['dbuser'] = 'root';
$_CONFIG['dbpass'] = '55d7218283f672edb3f0';
$_CONFIG['dbname'] = 'vaughansdev';

$dbcon = new mysqli($_CONFIG['dbhost'], $_CONFIG['dbuser'], $_CONFIG['dbpass'], $_CONFIG['dbname']);
if ($dbcon->connect_errno) {
  die("Connect failed: ". $db->connect_error);
}

define('CLIENT_ID', 'AVi7SRZM8m4l7cW0qcMnmVHx5dqr5j17jg_qZA3e4GzmB8wptCcJne8tMgE1uP0678rEKKaSxkOJ75BF');
define('CLIENT_SECRET', 'EADPa4N-LpwuuTRFIjsBldSwSZFj3UwuDExmTRWKR_SfvnoIIrKHtal2Fe51AyOC8u2gQkZWwYIiyvhR');

define('PAYPAL_RETURN_URL', 'http://localhost/assets/plugins/paypal/paypalsuccess.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/assets/plugins/paypal/paypalcancel.php');
define('PAYPAL_CURRENCY', 'CAD');

$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true);
