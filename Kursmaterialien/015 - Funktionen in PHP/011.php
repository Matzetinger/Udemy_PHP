<?php


function getName(){
  $name = "Stefan";
  echo $name;
}



$sayName = "getName";
$sayName();


$name = "Ahyem";

$greets = function() use ($name){
  echo "Hello World $name";
};

$greets();




?>











