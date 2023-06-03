<?php

class Person {
    const AUTHOR = "satryaptr";

    var string $name;
    var ?string $gender = null;
    var string $country = "Indonesia";

    function sayHello(string $name) {
        echo "Hello {$name}." . PHP_EOL;
    }

    function sayHelloThis(?string $name) {
        if(is_null($name)) {
            echo "Hello {$this->name}, Welcome." . PHP_EOL;
        } else {
            echo "Hello $name." . PHP_EOL;
        }
    }

    function __destruct() {
        echo "Object {$this->name} has successfully deleted." . PHP_EOL;
    }
}

class Orang {
    var string $name;
    var ?string $address;

    public function __construct(string $nama, ?string $alamat) {
        $this->name = $nama;
        $this->address = $alamat;
    }
}

?>