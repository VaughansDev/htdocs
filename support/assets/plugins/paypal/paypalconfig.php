<?php
require_once 'vendor/autoload.php';

use Omnipay\Omnipay;

$_CONFIG['dbhost'] = 'localhost';
$_CONFIG['dbuser'] = 'khaosdev_user';
$_CONFIG['dbpass'] = 'fU6+IN)s~UmMhv;jNT';
$_CONFIG['dbname'] = 'khaosdev_main';

$dbcon = new mysqli($_CONFIG['dbhost'], $_CONFIG['dbuser'], $_CONFIG['dbpass'], $_CONFIG['dbname']);
if ($dbcon->connect_errno) {
  die("Connect failed: ". $db->connect_error);
}

define('CLIENT_ID', 'AeN0dme_TZjUilGYvXtlEpB9vNRlyJ9cjsSGRtpJR0MUs22R8YCKtYjUKgufCfaA0lkPFCVyfSfC3NK2');
define('CLIENT_SECRET', 'EP30X3afr_2OSND2krbEL4ZfN6PaTUbe3GD5B8PQOLGIOujo-lrFwSqLWt40uZ5j4m5k7kib8ghBbMX8');

define('PAYPAL_RETURN_URL', 'http://localhost/assets/plugins/paypal/paypalsuccess.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/assets/plugins/paypal/paypalcancel.php');
define('PAYPAL_CURRENCY', 'CAD');

$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true);
