<?php

// NULL adalah tipe data yang kosong
// bersifat insensitive case

$name = "Putra";
$name = null;

$age = NULL;

echo "Nama: ";
echo $name;

echo "\n";

echo "Umur: ";
echo $age;
echo "\n";
echo "\n";

// mengecek sebuah data bernilai null atau tidak
// menggunakan function is_null($variable)
// fuction ini mengembalikan nilai boolean
// 1 adalah true, 0 adalah false

echo "apakah nilai dari nama adalah kosong = ";
echo is_null($name);

echo "\n";
echo "\n";

// menghapus variable menggunakan function unset($variable);
$contoh = "hapus variable ini";
unset($contoh); 

// mengecek apakah variable sudah dibuat atau belum
// menggunakan function isset($variable), function ini mengembalikan nilai boolean
var_dump(isset($contoh));

echo "\n";
echo "\n";

echo $contoh; // akan tampil error dengan tulisan undefine, karena sudah dihapus menggunakan unset();

?>