<?php

require_once "data/Car.php";

use Data\{Car, Avanza};

$avanza = new Avanza();
$avanza->drive();
echo $avanza->getBrand() . PHP_EOL;
echo "Maintenance: {$avanza->isMaintenance()}" . PHP_EOL;
?>