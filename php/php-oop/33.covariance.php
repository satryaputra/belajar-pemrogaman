<?php

require_once "data/AnimalShelter.php";

$catShelter = new Data\CatShelter();
$cat = $catShelter->adopt("Mimo");

$dogShelter = new Data\DogShelter();
$dog = $dogShelter->adopt("Kichi");

?>