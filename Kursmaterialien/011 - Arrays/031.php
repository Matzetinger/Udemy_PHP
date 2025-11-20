<?php


function add(...$numbers){
  for($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i];
  }
}
add(2,5,6,2,5);





$arr1 = [1,3,4,7];
$arr2 = ["hallo", "peder"];



$combined = [...$arr1, ...$arr2, "Döner", 1, "add"];

$combined[8](1,2,3)










?>







