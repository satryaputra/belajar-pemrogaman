<?php

// break digunakan untuk menghentikan seluruh perulangan 
// continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya

// break

// $counter = 1;

// while (true){
//     echo "Perulangan ke-$counter" . PHP_EOL;
//     $counter++;

//     if ($counter > 10){
//         break;
//     }

// }

// continue

for ($counter = 1 ; $counter <= 100; $counter++){
    
    // Skip bilangan ganjil
    if ($counter % 2 == 1){
        continue;
    }
    
    echo $counter . PHP_EOL;
}

?>