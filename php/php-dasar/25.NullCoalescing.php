<?php

// Null Coalescing adalah pengecekan apakah sebuah variabel sudah pernah dibuat atau belum
// atau sebuah variable sudah memiliki value apa belum

$data = [
    "action" => "is there"
];

// if (isset($data['action'])) {
//     echo $data['action'];
// } else {
//     echo "nothing";
// }

// Shorthand version

$cekData = $data["action"] ?? "nothing";
echo $cekData;

?>