<?php

class Product {
    private string $name;
    private int $price;
    protected string $type;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // kalau mau mengakses field private harus membuat fungsi terpisah
    // seperti ini contohnya

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function newType(string $type) {
        return $this->type = $type;
    }
}

class ProductDummy extends Product {
    public function getType(): string {
        return $this->type;
    }
}

?>