<?php

$dateTime = new DateTime();
$dateTime->setDate(2005, 3, 28);
$dateTime->setTime(20, 2, 34, 0);

// menambahkan 1 tahun
$dateTime->add(new DateInterval("P1Y"));

// mengurangkan 2 bulan
$minusTwoMonth = new DateInterval("P2M");
$minusTwoMonth->invert = true;
$dateTime->add($minusTwoMonth);

var_dump($dateTime);



?>