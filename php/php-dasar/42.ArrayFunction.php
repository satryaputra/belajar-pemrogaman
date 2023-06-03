<?php

/*

array_keys() -> mengambil semua keys milik array
array_values() -> Mengambil semua values milik array
array_map() -> Mengubah semua data array dengan callback
sort() -> Mengurutkan array
rsort() -> Mengurutkan array terbalik
shuffle() -> Mengubah posisi data array menjadi random

*/

$data = [1,2,3,4,5];
var_dump(array_map(fn(int $value) => $value * 10, $data));

rsort($data);
var_dump($data);

?>