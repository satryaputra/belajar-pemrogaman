<?php

$macthes = [];
$result = preg_match_all("/ammad|Satr|utR/i", "Mohammad Eka Satrya Putra", $macthes);
var_dump($result);
var_dump((bool)$result);
var_dump($macthes);

$result = preg_replace("/anjing|Bangsat/i", "*****", "Dasar lu bangsat lu anjing");
var_dump($result);

$result = preg_split("/[\s,-]/", "Ya halo, nama saya J-Genk");
var_dump($result);

// untuk pattern yang lebih detail ada di 
// https://www.php.net/manual/en/pcre.pattern.php

?>