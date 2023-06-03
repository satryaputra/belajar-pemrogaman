<?php

/*

Di PHP kita bisa membuat variable di manapun kita mau

Scope variable adalah bagian mana saja sebuah variable bisa diakses

PHP memiliki tiga jenis variable scope:
> global
> local
> static

Global Scope
- variabel yang dibuat di luar function memiliki scope global
- variable dari scope global hanya bisa diakses di luaar function
- artinya di dalam function, kita tidak bisa mengakses variable di global scope

Local Scope
- variable yang dibuat di dalam function memiliki scope local
- variable scope local hanya bisa diakses di dalam function itu sendiri
- artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain

global Keyword
- namun jika kita ingin mengakses variable di luar function (global scope) dari dalam function, kita bisa menggunakan kata kunci global
- dengan menggunakan kata kunci global, maka kita bisa mengakses variable yang ada di global scope dari dalam function

$GLOBAL variable
- selain menggunakan global keyword, setiap variable yang dibuat di global scope, secara otomatis akan disimpan di dalam array $GLOBAL oleh PHP
- jadi kita bisa menggunakan $GLOBAL variable dengan key nama variablenya dari dalam function jika ingin mengakses global variable
- $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun

Static Scope
- secara default local variable itu siklus hidupnya sebatas functionnya dieksekusi
- jika sebuah function selesai dieksekusi, maka siklus hidup local variablenya sudah selesai
- PHP memiliki scope yang bernama static
- Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
- Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya

*/

?>