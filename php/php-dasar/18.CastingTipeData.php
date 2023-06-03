<?php

$valueString = "100";
$stringToInt = (int)$valueString;
var_dump($stringToInt);

$intToFloat = (float)$stringToInt;
var_dump($intToFloat);

$backToString = (string)$intToFloat;
var_dump($backToString);

?>