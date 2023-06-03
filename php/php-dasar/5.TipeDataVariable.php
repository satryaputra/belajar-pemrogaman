<?php

// Variabel
// tempat menyimpan data agar kita bisa gunakan di kode program selanjutnya
// variable di php sifatnya mutable, artinya bisa dirubah
// variable tidak boleh ada spasi

$name = "Putra";
$age = 18;

echo "Nama: ";
echo $name;
echo "\n";
echo "Umur: ";
echo $age;

echo "\n";
echo "\n";

// Variable Variables
// membuat nama variable dengan value variable yang dideklarasi
// penulisannya di awali dengan $$
// disarankan untuk tidak digunakan

$contoh = "putra";
$$contoh = "satrya";

echo "\$contoh = ";
echo $contoh;
echo "\n";
echo "\$putra(adalah nama variable yang dibuat dari value \$contoh) = ";
echo $putra;

?>