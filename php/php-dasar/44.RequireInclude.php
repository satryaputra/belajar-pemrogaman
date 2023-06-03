<?php

// Saat membuat aplikasi, ada baiknya tidak membuat dalam satu file
// Lebih baik dipisah ke beberapa file agar kode program tidak terlalu bertumpuk di satu file
// PHP memiliki functin require dan include yang bisa kita gunakan menagambil file php lain
// Lantas apa bedanya require dan include
// Pada require, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
// Pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap dilanjutkan

// require_once dan include_once
// Function require dan include akan selalu mengambil file yang kita inginkan
// Jika kita beberapa kali menggunakan require dan include file yang sama, maka file tersebut akan berkali-kali pula kita ambil
// Hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definisi function, jika kita ambil berkali-kali akan menyebabkan error redeclare function
// Untungnya di PHP terdapat function require_once dan include_once, function ini bisa mendekteksi jika kita sebelumnya pernah mengambil file yang sama, maka tidak akan diambil lagi 

?>