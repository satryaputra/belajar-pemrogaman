<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

// use tidak bisa menggunakan nama class yang sama meskipun namespacenya berbeda
use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
helpMe();
echo APPLICATION . PHP_EOL;

?>