<?php

// Function adalah blok kode program yang akan berjalan saat kita panggil
// function == method
// pembuatan function di php sangat fleksible, bahkan bisa dibuat di dalam if statement

function sayHello(){
    echo "Hello for you" . PHP_EOL;
}

sayHello();
sayHello();
sayHello();


echo "\n";

$hadiah = true;

if ($hadiah) {
    function giveHadiah(){
        echo "This is for you" . PHP_EOL;
    }
} else {
    echo "Sorry, this not for you";

}

giveHadiah()

?>