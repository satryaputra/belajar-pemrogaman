<?php

// untuk lebih detailnya ada di
// https://www.php.net/manual/en/book.reflection.php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();

// ValidationUtil::validate($request);
ValidationUtil::validateReflection($request);

?>