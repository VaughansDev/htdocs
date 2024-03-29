<?php
session_start();
require_once 'paypalconfig.php';

if (array_key_exists('paymentId', $_GET) && array_key_exists('PayerID', $_GET)) {
  $transaction = $gateway->completePurchase(array(
    'payer_id'             => $_GET['PayerID'],
    'transactionReference' => $_GET['paymentId'],
  ));

  $response = $transaction->send();

  if ($response->isSuccessful()) {
    $arr_body = $response->getData();

    $payment_id = $arr_body['id'];
    $payer_id = $arr_body['payer']['payer_info']['payer_id'];
    $payer_email = $arr_body['payer']['payer_info']['email'];
    $amount = $arr_body['transactions'][0]['amount']['total'];
    $currency = PAYPAL_CURRENCY;
    $payment_status = $arr_body['state'];
    $account_id = $_SESSION['accountid'];

    $dbcon->query("INSERT INTO paypal_payments(payment_id, payer_id, payer_email, amount, currency, payment_status, account_id) VALUES('". $payment_id ."', '". $payer_id ."', '". $payer_email ."', '". $amount ."', '". $currency ."', '". $payment_status ."', '". $account_id ."')");

    header("location: ".$_CONFIG['storeurl']."/inc/createlicense.php?");
    echo "Payment successful. Your transaction id is: ". $payment_id;
  } else {
    echo $response->getMessage();
  }
} else {
  echo 'Transaction is declined';
}
