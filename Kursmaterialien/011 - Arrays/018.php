<?php

$numbers = [1, 2, 3, 4, 5];


function double(&$n, $key){
  $n *= 2;
}

array_walk($numbers, "double");

var_dump($numbers)






?>







