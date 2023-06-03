<?php

class Zero {
    private array $properties = [];

    public function __get($name) {
        return $this->properties[$name];
    }

    public function __set($name, $value) {
        return $this->properties[$name] = $value;
    }

    public function __isset($name) {
        return isset($this->properties[$name]);
    }

    public function __unset($name) {
        unset($this->properties[$name]);
    }
}

$zero = new Zero();
$zero->mainName = "Putra";
$zero->secondaryName = "Satrya";

echo "My main name is $zero->mainName" . PHP_EOL;
echo "My secondary name is $zero->secondaryName" . PHP_EOL;


?>