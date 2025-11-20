<?php

$fruits = ["Apfel", "Banane", "Kirsche"];
$number = [1,2,3];
$matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];


for($i = 0; $i < count($fruits); $i++){
  echo "Die Frucht ist $fruits[$i]" . "<br>";
}


// Accumulator Pattern
$result = 0;
for($x = 0; $x < count($number); $x++){
  $result += $number[$x];
}
echo $result;


for($k = 0; $k < count($matrix); $k++){
  for($r = 0; $r < count($matrix[$k]); $r++){
    echo $matrix[$k][$r] . "<br>";
  }
}







?>







