<?php
// String
// Tipe data String adalah representasi dari teks
// String bisa mengandung kosong atau banyak karakter

// Single Quote
echo 'Nama: ';
echo 'Mohammad Eka Satrya Putra';

echo "\n";
echo "\n";

// Double Quote
// Kelebihan menggunakan double quote adalah kita bisa menggunakan escape sequence
// contohnya \n untuk ENTER, \t untuk TAB, dll
echo "Nama: ";
echo "\tMohammad \tEka \tSatrya \tPutra";

echo "\n";
echo "\n";

// Multiline String
// Heredoc & Nowdoc

// Heredoc
// mirip Double Quote
echo <<<PUTRA
Halo, nama saya adalah
Mohammad Eka Satrya Putra
"Saya akan Sukses".
Saya menulis ini menggunakan Heredoc.
PUTRA;

echo "\n";
echo "\n";

// Nowdoc
// mirip Single Quote
echo <<<'PUTRA'
Halo, nama saya adalah
Mohammad Eka Satrya Putra
"Saya akan Sukses".
Saya menulis ini menggunakan Nowdoc.
PUTRA;

?>