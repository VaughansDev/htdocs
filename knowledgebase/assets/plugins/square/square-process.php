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

$data = json_decode(file_get_contents('php://input'), true);

if ($_ENV["USE_PROD"] == 'true') {
    $token =  getenv('PROD_ACCESS_TOKEN');
    $environment = 'Environment::PRODUCTION';
} else {
    $accesstokent =  getenv('SANDBOX_ACCESS_TOKEN');
    $environment = 'Environment::SANDBOX';
}

$client = new SquareClient([
    'accessToken' => $token,
    'environment' => $environment,
]);
?>
