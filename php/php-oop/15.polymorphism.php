<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Putra");
var_dump($company);

$company->programmer = new FrontendProgrammer("Putra");
var_dump($company);

$company->programmer = new BackendProgrammer("Putra");
var_dump($company);

sayHelloProgrammer(new Programmer("Eko"));
sayHelloProgrammer(new FrontendProgrammer("Eko"));
sayHelloProgrammer(new BackendProgrammer("Eko"));

?>