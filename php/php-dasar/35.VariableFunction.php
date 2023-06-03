<?php

// Variable Function adalah kemampuan memanggil sebuah function dari value di sebuah variable
// Untuk menggunakan Variable Function, kita bisa secara langsung memanggil $namaVariable(), jika ingin mmenamahkan argument, kita bisa menggunakan $namaVariable(argument)

// Konsep dasar variable function
function foo() {
    echo "FOO" . PHP_EOL;
}

function bar() {
    echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

// Contoh penggunaan
// Kurang lebih untuk mengoverride penggunaan parameter yang variable biasa menjadi function

function sayHello (string $name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction (string $name): string {
    return "sample $name";
}

sayHello("putra", "sampleFunction");
sayHello("putra", "strtoupper");

?>
