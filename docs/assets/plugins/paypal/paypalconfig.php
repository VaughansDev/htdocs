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

define('CLIENT_ID', 'AWfTrzwDyxMHq0CBAIUUZ0VMlWy9aUkUW-IYZNNezGJUiZJuD-RwGmkovx1Dh8NyNCdJMODzY7KEQ9J2');
define('CLIENT_SECRET', 'ECPPJpj0XvLVAnrBmk5DgL-JPGlfogvNacxTWLFmB__Nb7ZATgqQ7uKJJaDdKpC11h3270HmVnSIY767');

define('PAYPAL_RETURN_URL', 'http://store.khaosdevelopment.com/assets/plugins/paypal/paypalsuccess.php');
define('PAYPAL_CANCEL_URL', 'http://store.khaosdevelopment.com/assets/plugins/paypal/paypalcancel.php');
define('PAYPAL_CURRENCY', 'CAD');

$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true);
