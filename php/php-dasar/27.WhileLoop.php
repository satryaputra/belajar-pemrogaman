<?php

// While loop adalah perulangan yang lebih sederhana dibandingkan for loop
// Di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement

$counter = 1;
while($counter <= 10){
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
}

?>