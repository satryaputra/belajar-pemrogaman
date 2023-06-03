<?php

require_once "data/Animal.php";

use Data\{Cat, Dog};

$cat = new Cat();
$cat->name = "Mimo";
$cat->run();

$dog = new Dog();
$dog->name = "Kichi";
$dog->run();

?>