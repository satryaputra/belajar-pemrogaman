<?php

class Programmer {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
}

class FrontendProgrammer extends Programmer {

}

class BackendProgrammer extends Programmer {

}

class Company {
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer): void {
    if($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else if($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}

?>