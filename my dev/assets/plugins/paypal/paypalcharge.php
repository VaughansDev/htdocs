<?php
require_once 'paypalconfig.php';

if (isset($_POST['submit'])) {
  try {
    $response = $gateway->purchase(array(
      'amount' => $_POST['amount'],
      'currency' => PAYPAL_CURRENCY,
      'returnUrl' => PAYPAL_RETURN_URL,
      'cancelUrl' => PAYPAL_CANCEL_URL,
      'items' => array(
        array(
          'name' => $_POST['itemname'],
          'price' => $_POST['itemprice'],
          'description' => $_POST['itemdescription'],
          'quantity' => $_POST['itemquantity']
        )
      )
    ))->send();

    if ($response->isRedirect()) {
      $response->redirect();
    } else {
      echo $response->getMessage();
    }

  } catch(Exception $e) {
    echo $e->getMessage();
  }
}
