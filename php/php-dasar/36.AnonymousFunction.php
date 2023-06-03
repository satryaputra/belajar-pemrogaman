<?php

// Di PHP Anonymous Function(function tanpa nama) disebut dengan Closure
// biasanya digunakan sebagai argument atau sebagai value dari variable 
// Dengan anonymous function, kita bisa mengirim function sebagai argument di function lainnya

// anonymous function ke variable
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};
$sayHello("Putra");


function sayGoodBye (string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

$filterFunction = function (string $name) : string {
    return strtoupper($name);
};
sayGoodBye("Satrya", $filterFunction);

// anonymous function sebagai argument
sayGoodBye("Satrya", function (string $name) {
    return strtoupper($name) . PHP_EOL;
});

// Secara default, anonymous function (closure) tidak dapat mengakses variable diluar function
// Jika kita ingin menggunakan variable diluar closure
// Kita perlu secara eksplisit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin kita gunakan

$firstName = "Satrya";
$lastName = "Putra";

$sayHelloSatrya = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloSatrya();

?>