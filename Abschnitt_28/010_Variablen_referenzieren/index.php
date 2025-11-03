<?php

$br = "<br>";
$var = "value";
$var2 = &$var;

$var = "was anderes";

var_dump($var2);

echo $br;

function addOne(&$num){
  $num++;
};

$zahl = 5;
addOne($zahl);

echo $zahl;

?>