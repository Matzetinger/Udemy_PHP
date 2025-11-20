<?php

$numbers = [1, 2, 3, 4, 5];


function double($n){
  return $n * 2;
}

$newArray = array_map("double", $numbers);

var_dump($newArray)






?>







