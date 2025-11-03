<?php

$br = "<br>";

$value = "huhu";
$value1 = "huhu1";
$value2 = "huhu2";

var_dump($value);
echo $br;

unset($value, $value1);
var_dump($value, $value1, $value);


?>