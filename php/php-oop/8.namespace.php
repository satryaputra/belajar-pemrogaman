<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new Data\One\Conflict();
$conflict1 = new Data\Two\Conflict();

Helper\helpMe();
echo Helper\APPLICATION . PHP_EOL;

?>