<?php


function calc($a, $b, $c){
  return $a + $b + $c;
}

$zahlen = [1,2,3];
echo calc(...$zahlen);


function add(...$numbers){
  return array_sum($numbers);
}


echo add(1,2,3,4,5);



?>











