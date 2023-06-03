<?php

// Syntax Alternative ini berlaku untuk percabangan dan pengulangan
// contoh di switch yang biasanya block menggunakan kurung kurawal 
// dan diganti dengan colon (":") untuk diawal dan syntax endswitch untuk di akhir block

switch($nilai) :
    case "A":
        echo "Anda lulus dengan sangat baik." . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus." . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus." . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan." . PHP_EOL;
        break;
endswitch;

?>