<?php


$fruits = ["Apfel", "Banane", "Kirsche", "Dattel"];



$index = array_search("Pizza", $fruits);


if($index !== false){
  echo "Wurde gefunden an index: $index";
}else {
  echo "Wurde nicht gefunden!";
}








?>







