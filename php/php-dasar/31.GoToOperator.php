<?php

// goto adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
// cara penggunaan goto, kita harus membuat label
// dengan menggunakan nama label lalu diakhiri colon (:)

/*
goto a;
echo "Hello World!";

a:
echo "Hello Putra";
*/

// contoh penggunaan goto untuk menghentikan pengulangan
$counter = 1;
while(true){
    echo "this is $counter" . PHP_EOL;
    $counter++;
    if ($counter > 10){
        goto end;
    }
}

end:
echo "Counting is ended!"

?>