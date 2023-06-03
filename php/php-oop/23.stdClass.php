<?php

$array = [
    "firstName" => "Eka",
    "midName" => "Satrya",
    "lastName" => "Putra"
];

$object = (object) $array;
var_dump($object);

echo $object->firstName . PHP_EOL;
echo $object->midName . PHP_EOL;
echo $object->lastName . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "data/Person.php";
$person = new Orang("Putra", "Kediri");

$arrayPerson = (array) $person;
var_dump($arrayPerson);




?>