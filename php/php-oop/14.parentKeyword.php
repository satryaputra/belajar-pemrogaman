<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;

$parentRectangle = new Rectangle();
echo $parentRectangle->getParentCorner() . PHP_EOL;

?>