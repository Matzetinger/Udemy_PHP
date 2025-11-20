<?php

function calc($num1 = 0, $num2 = 0){
  $res = $num1 + $num2;
  return $res;
}


function text($greets, $name = "Unknown"){
  return "$greets $name";
}


echo text("Hello", "Stefanie");




?>











