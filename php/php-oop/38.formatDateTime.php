<?php

$now = new DateTime();
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string" . PHP_EOL;

?>