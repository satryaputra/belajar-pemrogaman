<?php

require_once "data/Person.php";

$person1 = new Person();

$person1->sayHello("Putra");

// function this keyword
$person1->name = "Putra";

$person1->sayHelloThis(null);

?>