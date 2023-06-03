<?php

use Data\AnimalFood;

require_once "data/AnimalShelter.php";

$catShelter = new Data\CatShelter();
$cat = $catShelter->adopt("Mimo");
$cat->eat(new Data\AnimalFood());

$dogShelter = new Data\DogShelter();
$dog = $dogShelter->adopt("Kichi");
$dog->eat(new Data\Food());

?>