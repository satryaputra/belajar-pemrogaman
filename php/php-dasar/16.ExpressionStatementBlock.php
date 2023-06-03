<?php

// ! Expression
// Bagian yang terpenting di dalam PHP, karena hampir semua kode yang kita tulis menggunakan expression
// Secara sederhana, expression adalah apapun yang memiliki nilai atau value
// Contoh expression 

$a = 5; // 5 adalah expression
$b = $a; // $a adalah expression
function getValue() {
    return 100;
}
$value = getValue(); // sebuah function getValue() adalah expression

// ! Statement
// adalah satu baris kode yang setiap akhit statement ada semicolon (;)
$name = "Mohammad Eka Satrya Putra"; // satu baris ini disebut statement
echo $name; // ini juga statement
$date = new DateTime(); // ini juga statement

// ! Block
// kumpulan statement yang terdiri dari nol atau lebih statement
// Block diawali dan diakhiri dengan kurung kurawal {}
function getValue2() {
    return 100;
} // ini adalah block
?>