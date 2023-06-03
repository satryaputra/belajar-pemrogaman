<?php

$now = new DateTime();
var_dump($now);

$wita = new DateTime();
$wita->setTimeZone(new DateTimeZone("Asia/Makassar"));
var_dump($wita);



?>