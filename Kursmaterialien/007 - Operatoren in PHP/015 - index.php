<?php

function istPositiv($zahl) {
  echo "Überprüfe Zahl: $zahl <br>";
  return $zahl > 0;
}

$a = -3;
$b = 5;


if(istPositiv($a) && istPositiv($b)){
  echo "Beide Zahlen sind positiv";
}else{
  echo "Mindestens eine Zahl ist negativ";
}





?>
