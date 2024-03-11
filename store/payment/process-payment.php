<?php
require 'assets/plugins/square-php-sdk/vendor/autoload.php';

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

$chars = '1234567890abcefghijklmnopqrstuvwxyz';
$idempotencyKey = substr(str_shuffle($chars), 0, 10).'-'.substr(str_shuffle($chars), 0, 4).'-'.substr(str_shuffle($chars), 0, 4).'-'.substr(str_shuffle($chars), 0, 4).'-'.substr(str_shuffle($chars), 0, 12);

$formattedamount = str_replace('.', '', '97.99');

$square_client = new SquareClient([
  'accessToken' => 'EAAAlzQbywdmmB1zTn_ObsKPZoSdOzw8W1Gnh6H-_-oUbrae08CQ-TUl4DGrUOCD',
  'environment' => Environment::SANDBOX,
]);

$payments_api = $client->getPaymentsApi();

$amount_money = new Money();
$amount_money->setAmount(9799);
$amount_money->setCurrency("CAD");


$body = new CreatePaymentRequest($data['sourceId'], $idempotencyKey);
$body->setAmountMoney($amount_money);

$api_response = $payments_api->createPayment($body);

if ($api_response->isSuccess()) {
    $result = $api_response->getResult();
} else {
    $errors = $api_response->getErrors();
}
