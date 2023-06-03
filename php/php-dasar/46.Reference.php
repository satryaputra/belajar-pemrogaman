<?php

// Reference adalah mengakses variable yang sama dengan nama variable yang berbeda
// Reference di PHP tidak sama dengan reference di bahasa pemrograman seperti C / C++ yang memiliki fitur pointer
// Analogi reference itu seperti file, jika variable adalah file, dan valuenya adalah isi filenya, maka reference adalah membuat shortcut (di Windows) atau alias (di Linux / Mac) terhadap file yang sama
// saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinyapun berubah
// Untuk membuat reference terhadap variable, kita bisa menggunakan karakter &

// Assign by Reference 
// Pertama PHP reference bisa memungkinkan kita bisa membuat beberapa variable menuju ke value yang sama
$name = "Putra";

$otherName = &$name;
$otherName = "Budi";

echo $name . PHP_EOL;

// Pass by Reference
// Selanjutnya yang bisa dilakukan PHP adalah, mengirim data ke function dengan reference
function incerement(int &$value) {
    $value++;
}

$counter = 1;
incerement($counter);

echo $counter . PHP_EOL;


// Returning Refenrences
// PHP juga bisa mengembalikan reference pada funtion
// Namun hati-hati, gunakan fitur ini jika memang ada alasannya, karena fitur ini bisa membingungkan
function &getValue() {
    static $value = 100;
    return $value;
}

$a = &getvalue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;

?>