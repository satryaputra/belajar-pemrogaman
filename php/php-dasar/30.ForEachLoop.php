<?php

// digunakan untuk mengakses seluruh data array secara otomatis

$names = ["Mohammad", "Eka", "Satrya", "Putra"];

foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

echo "\n";

// with index
foreach ($names as $index =>$name) {
    echo "Data {$index} : $name" . PHP_EOL;
}

// for each dengan array association (map)
$person = [
    "first" => "Gugun",
    "second" => "Lala",
    "third" => "Cipung"
];

echo "\n";

foreach ($person as $key => $people){
    echo "Hello $key person, {$people}!" . PHP_EOL;
}


?>