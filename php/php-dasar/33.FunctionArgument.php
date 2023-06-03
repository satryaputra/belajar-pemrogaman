<?php

// Function Argument
// argument == parameter

// kita bisa mengirim informasi ke function yang ingin kita panggil
// Untuk melakukan hal tersebut kita perlu menambahkan argument atau parameter di function yang telah kita buat
// Cara membuat argument sama seperti cara membuat variabel
// Argument ditempatkan di dalam kurung di deklarasi function 
// Argument bisa lebih dari satu, jika lebih dari satu, harus dipisah dengan tanda koma

// PHP mendukung default argument value
// Ketika kita memanggil function tidak memasukkan parameter, kita bisa menetukan data defaultnya apa

// Kesalahan default argument value 
// Default argument value bisa disimpan di argument manapun
// Namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter awal, maka itu kurang berguna

// Sama seperti variabel, argument di PHP bisa kita masukan data yang dinamis
// Kadang terlalu dinamis juga menyulitkan jika ternyata kita ingin membuat function yang menggunakan argument dengan tipe data tertentu
// Untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
// Jika tipe data value tidak sesuai, maka akan terjadi error
// Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe data int, tapi kita mengirim string, maka PHP akan otomatis mengkonversi string tersebut menjadi int
// Valid types in PHP: class / interface, self, array, callable, bool, float, int, string, interable, object

// Variable-length Argument List
// kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
// secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual untuk mengirim array ke functionnya
// hanya bisa dilakukan di argument posisi paling akhir
// gunakan tanda ... (titik tiga kali) sebelum nama argument, untuk membuatnya
// contoh

function sum (int ...$numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    echo "Total " . implode(' + ', $numbers) . " = $total" . PHP_EOL;
}

sum(1,2,3,4);

// input array ke Variable-length Argument List
$numbers = [1,2,3,4,5];
sum(...$numbers)







?>