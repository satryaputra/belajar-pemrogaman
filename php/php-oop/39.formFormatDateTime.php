<?php

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-20 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($date);

?>