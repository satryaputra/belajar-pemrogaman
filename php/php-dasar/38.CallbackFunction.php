<?php

// Callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan di argument
// Hal ini sebenarnya sudah kita lakukan di materi Variable Function dan Anonymous Function
// Namun di PHP ada cara lain untuk implementasi callback, yaitu dengan menggunakan tipe data callable
// Dan untuk memanggil function tersebut, kita bisa menggunakan function call_user_func(callable, arguments)

function sayHello (string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Putra", function ($name) {
    return strtoupper($name);
});
sayHello("Putra", fn($name) => strtoupper($name));
sayHello("Putra", "strtoupper")

?>