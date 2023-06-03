<?php

require_once "data/Manager.php";

$budi = new Manager("Budi");
$budi->sayHello("Rahmat");

$eko = new Employee("Eko");
$eko->sayHello("Rahmat");


?>