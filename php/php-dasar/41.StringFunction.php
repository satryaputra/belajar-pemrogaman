<?php

/*

join() / implode() -> menggabungkan array menjadi string
explode() -> memecah string menjadi array
strtolower() -> mengubah string menjadi lower case
strtoupper() -> mengubah string menjadi upper case
trim() -> menghapus whitespace di depan dan di belakang string
substr() -> mengambil sebagian string

*/

var_dump(join(',', [1,2,3,4,5,6,7,8]));
var_dump(explode(" ", "Mohammad Eka Satrya Putra"));
var_dump(strtoupper("mohammad eka satrya putra"));
var_dump(strtolower("MOHAMMAD EKA SATRYA PUTRA"));
var_dump(trim("           putra          "));
var_dump(substr("Mohammad Eka Satrya Putra", 0, 3));

?>