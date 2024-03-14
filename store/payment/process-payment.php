<?php
require '/assets/plugins/square/vendor/autoload.php';

use Square\SquareClient;
use Square\LocationsApi;
use Square\ExceptionsApi;
use Square\Http\ApiResponse;
use Square\Exceptions\ApiException;
use Square\Models\ListLocationsResponse;
use Square\Environment;
use Square\Models\Money;
use Square\Models\CreatePaymentRequest;
use Square\Models\createPayment;

/*$json = file_get_contents('php://input');
$data = json_decode($json);
$token = $data->token;*/

$data = json_decode(file_get_contents('php://input'), true);

session_start();
$idempotencyKey = $_SESSION['idempotencyKey'];

$formattedamount = str_replace('.', '', '97.99');

$square_client = new SquareClient([
  'accessToken' => 'EAAAlzQbywdmmB1zTn_ObsKPZoSdOzw8W1Gnh6H-_-oUbrae08CQ-TUl4DGrUOCD',
  'environment' => Environment::SANDBOX,
]);

$payments_api = $square_client->getPaymentsApi();

$amount_money = new Money();
$amount_money->setAmount(9799);
$amount_money->setCurrency("CAD");


$body = new CreatePaymentRequest($data['sourceId'], $idempotencyKey);
$body->setAmountMoney($amount_money);

$api_response = $payments_api->createPayment($body);

session_start();
if ($api_response->isSuccess()) {
    $result = $api_response->getResult();
    $_SESSION['sqapiresult'] = $result;
    header("location: ../success.php");
} else {
    $errors = $api_response->getErrors();
    $_SESSION['sqapierrors'] = $errors;
    header("location: ../error.php");
}
