<?php
/* 
for(init statement; kondisi; post statement) {
    blok pengulangan
}
*/

// Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi
// 1. init statement akan dieksekusi hanya sekali di awal sebelum perulangan
// 2. kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true pengulangan akan dilakukan, jika false perulangan akan berhenti
// 3. post statement akan dieksekusi setiap kali di akhir perulangan
// init statement, kondisi, post statement tidak wajib diisi, jika kondisi tidak diisi, berarti kondisi selalu bernilai true

// infinity loop menggunakan for loop
/* 
for (; ;) {
    echo "Ini adalah for loop" . PHP_EOL;
}
*/

// increment
// for($counter = 1; $counter <= 10; $counter++){
//     echo "Ini adalah for loop ke-$counter" . PHP_EOL; 
// }

// decrement + syntax alternative
for($counter = 10; $counter >= 1; $counter--):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL; 
endfor;



?> 