<?php

// Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
// Dan di dalam blok function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin dihasilkan
// Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu

// Return type declarations
function sum (int ...$numbers): int {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    
    return $total;
}

$numbers = [1,2,3,4,5,6,7,8,9,10];

$total = sum(...$numbers);

echo "Total = $total" . PHP_EOL;

function getFinalValue(int $value): string {
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "Anda tidak lulus!";
    }
}

$test = getFinalValue(78);
echo "Your test: $test";

?>