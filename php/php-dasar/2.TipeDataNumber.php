<?php

echo "Int: ";
var_dump(1234);

echo "\n";

echo "Octal: ";
var_dump(01234);

echo "\n";

echo "Hexadecimal: ";
var_dump(0x1A);

echo "\n";

echo "Binary: ";
var_dump(0b111);

echo "\n";

echo "Underscore in number: ";
var_dump(1_234_234_234);

echo "\n";

echo "Floating point: ";
var_dump(1.234);

echo "\n";

echo "Floating point dengan E notation Plus (1.2 x 1000): ";
var_dump(1.2e3);

echo "\n";

echo "Floating point dengan E notation Minus (7 x 0.001): ";
var_dump(7e-3);

echo "\n";

echo "Underscore di Floating point: ";
var_dump(1_234.56);

echo "Integer Overflow: "; // batas maksimum integer di sebuah operasi 64bit, jika melebihi akan diubah menjadi floting point.
var_dump(PHP_INT_MAX+1);



?>