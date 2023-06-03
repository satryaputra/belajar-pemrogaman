<?php

// Arrow function diperkenalkan di PHP 7.4 sebagai alternatif anonymous function yang lebih sederhana pembuatannya
// Secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama
// Hal yang membedakan di arrow function adalah, secara otomatis variable di luar closure bisa digunakan, tidak seperti anonymous function yang harus disebutkan manual menggunakan kata kunci use
// Pembuatan arrow function tidak menggunakan kata kunci function, melainkan fn
// Arrow function dikhususkan untuk pembuatan function yang sederhana

$firstName = "Satrya";
$lastName = "Putra";

$sayHelloSatrya = fn() => "Hello $firstName $lastName" . PHP_EOL;
echo $sayHelloSatrya();

?>