<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Sample, Dummy};
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
$sample = new Sample();
$dummy = new Dummy();
help();
echo APP . PHP_EOL;

?>