<?php

class Data implements IteratorAggregate {
    var string $first = "var";
    public string $second = "public";
    protected string $third = "protected";
    private string $forth = "private";

    public function getIterator(): Traversable {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth
        ];

        return new ArrayIterator($array);
    }
}

$data = new Data();

foreach($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}


?>