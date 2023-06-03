<?php

// Array adalah tipe data yang berisikan kosong atau banyak data
// penulisan array di PHP terdapat 2 cara, yaitu
// $variabel = array(value, value, value);
// $variabel = [value, value, value]


$contoh = array(10, "halo", 12.3, true);
var_dump($contoh);

echo "\n";
echo "\n";

$myName = ["Mohammad", "Eka", "Satrya", "Putra"];
var_dump($myName);

echo "\n";
echo "\n";

// Operasi Array
// $variable[index]; // mengakses data di array pada nomor index
// $variable[index] = value; // mengubah data di array pada nomor index dengan value baru
// $variable[] = value; // menambah data di array pada posisi paling belakang
// unset($variable[index]); // menghapus data di array, index otomatis hilang dari array
// count($variable); // mengambil total data di array

var_dump($myName[3]);

echo "\n";
echo "\n";

var_dump($myName[1] = "Eko");
var_dump($myName);

echo "\n";
echo "\n";

var_dump($myName[] = "Ganteng");
var_dump($myName);

echo "\n";
echo "\n";

unset($myName[1]);
var_dump($myName);

echo "\n";
echo "\n";

var_dump(count($myName));

?>