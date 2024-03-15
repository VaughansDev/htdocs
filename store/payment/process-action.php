<?php
require '../assets/plugins/square/vendor/autoload.php';

use Square\SquareClient;
use Square\LocationsApi;
use Square\Exceptions\ApiException;
use Square\Http\ApiResponse;
use Square\Models\ListLocationsResponse;
use Square\Environment;
use Square\Models\Money;
use Square\Models\CreatePaymentRequest;
use Square\Models\CreatePayment;

$data = json_decode(file_get_contents('php://input'), true);

$square_client = new SquareClient ([
    'accessToken' => 'EAAAlzQbywdmmB1zTn_ObsKPZoSdOzw8W1Gnh6H-_-oUbrae08CQ-TUl4DGrUOCD',
    'environment' => Environment::SANDBOX,
]);

$payments_api = $square_client->getPaymentsApi();

$money = new Money();
$money->setAmount(5000);
$money->setCurrency("CAD");

$orderId = uniqid();
$create_payment_request = new CreatePaymentRequest($data['sourceId'], $orderId);
$create_payment_request->setAmountMoney($money);

$response = $payments_api->createPayment($create_payment_request);

if ($response->isSuccess()) {
    echo json_encode($response->getResult());
    session_start();
    $_SESSION['sqapiresult'];
    header("location: ../success.php");
} else {
    echo json_encode($response->getErrors());
    session_start();
    $_SESSION['sqapierrors'];
    header("location: ../error.php");
}