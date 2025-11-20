<?php

$name = "Melanie"; // globale Variable

function getName(){
  $names = "Thorsten"; //locale  Variable
  return $names;
}


function returnName(){
  global $name;
  echo $name;
}

returnName();
echo getName();





?>











