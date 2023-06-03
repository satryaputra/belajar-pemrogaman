<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
// $loginRequest->username = "putra";
// $loginRequest->password = "putra";


$loginRequest->username = " ";
$loginRequest->password = " ";

try {
    validationLoginRequest($loginRequest);
} catch(ValidationException | Exception $exception) {
    echo "Error: {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace());

    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "Error dan tidak error blok ini akan tetap di eksekusi!" . PHP_EOL;
}

echo "VALID" . PHP_EOL;


?>