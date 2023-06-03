<?php

require_once "data/Person.php";

$orang1 = new Orang("Budi", null);

echo $orang1->name . PHP_EOL;

$orang1->name = "Putra";

echo $orang1->name . PHP_EOL;

echo $orang1->address . PHP_EOL;
if(is_null($orang1->address)){
    echo "Alamatnya kosong" . PHP_EOL;
}

$orang1->address = "Indonesia";

echo $orang1->address . PHP_EOL;



?>