<?php

// mirip while loop, perbedaannya hanya dalam pengecekan kondisi
// di while loop pengecekan kondisi dilakukan diawal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
// oleh karena itu di do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true 

$counter = 100;

do{
    echo "Hello while loop: $counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);

?>