<?php

require_once "data/Product.php";

$product = new Product("Apel", 20000);
$product2 = new ProductDummy("Grape", 30000);
$product2->newType("Fruit");

// echo $product->name;
// akan error karena mengakses private field

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

echo $product2->getType() .PHP_EOL;

?>