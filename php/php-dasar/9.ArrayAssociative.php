<?php

// Array Associative biasanya juga bisa disebut sebagai Array Map
// Array ini tidak memiliki index dan value, namun memiliki key dan value
// Array bisa memiliki value dengan tipe data array juga 

$bambang = array(
    "id" => 1,
    "nama" => "Bambang Susilono",
    "umur" => 30
);

$riyadi = array(
    "id" => 2,
    "nama" => "Riyadi Riyaden",
    "umur" => 42,
    "alamat" => [
        "kecamatan" => "Papar",
        "desa" => "Ngampel"
    ]
);

var_dump($bambang);
echo "\n";
var_dump($bambang["umur"]);

echo "\n";
echo "\n";

var_dump($riyadi);
var_dump($riyadi["alamat"]["desa"]);


?>