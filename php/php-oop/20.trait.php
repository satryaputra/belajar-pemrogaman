<?php

require_once "data/SayGoodBye.php";

use Data\Traits\Person;

$person = new Person();
$person->goodBye("Putra");
$person->hello("Satrya");

$person->name = "Eka";
var_dump($person);

$person->run();

?>