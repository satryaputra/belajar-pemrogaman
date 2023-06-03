<?php

class Zero {
    public function __call($name, $arguments) {
        $join = join(", ", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }
    
    public static function __callStatic($name, $arguments) {
        $join = join(", ", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->sayHello("Satrya", "Putra");
Zero::sayGoodBye("Eko", "Asep");

?>