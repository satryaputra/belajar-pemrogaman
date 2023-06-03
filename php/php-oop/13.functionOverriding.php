<?php

require_once "data/Manager.php";

$manager = new Manager("Joko");
$manager->sayHello("Budi");

$employee = new Employee("Budi");
$employee->sayHello("Joko");

?>