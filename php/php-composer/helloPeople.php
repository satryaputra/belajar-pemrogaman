<?php

require_once __DIR__ .  "/vendor/autoload.php";

use SatryaPutra\Data\People;

$people = new People("Budi");
$people->sayHello("Arif");

?>