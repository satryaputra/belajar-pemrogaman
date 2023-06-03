<?php

// Recursive Function adalah kemampuan function memanggil function dirinya sendiri
// Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya kasus factorial

// factorial menggunakan looping
function factorialLoop(int $value): int {
    $total = 1;
    for($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }   
    return $total;
}
echo factorialLoop(5) . PHP_EOL;

// factorial menggunakan recursive function
function factorialRecursive(int $value): int {
    if($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}
echo factorialLoop(5) . PHP_EOL;

// Problem dengan Recursive
// Walaupun recursive function itu sangat menarik, namun kita perlu berhati-hati
// Jika recursive terlalu dalam, maka akan ada kemungkinan terjadi memory overflow, yaitu error dimana memory terlalu banyak digunakan di PHP
// Kenapa problem ini bisa terjadi? Karena ketika kita memanggil function, PHP akan menyimpannya dalam stack, jika function tersebut memanggil function lain, maka stack akan menumpuk terus, dan jika terlalu banyak, maka akan membutuhkan konsumsi memory besar, jika sudah melewati batas, maka akan terjadi error memory

?>