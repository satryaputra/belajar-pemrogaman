<?php

require_once "data/Person.php";

$person1 = new Person();

$person1->name = "Mohammad Eka Satrya Putra";
$person1->country = "Malaysia";
echo "Nama saya adalah {$person1->name}." . PHP_EOL;
echo $person1->country;

?>