<?php

class Manager {
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager") {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void {
        echo "Hello $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class Employee extends Manager {
    // meng-override constructor
    public function __construct(string $name = "") {
        parent::__construct($name, "Employee"); // tidak wajib tapi direkomendasikan
    }

    // meng-override function
    function sayHello(string $name): void {
        echo "Hello $name, my name is Employee $this->name" . PHP_EOL;
    }
}

?>