<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// $location = new Location(); // ERROR
$city = new City();
$province = new Province();
$country = new Country();

// akan error karena abstract class tidak bisa di instansiate, harus di turunkan terlebih dahulu
// $location = new Location();

// $location->name = "Rumah";
// echo $location->name;

?>