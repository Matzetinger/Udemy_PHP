<?php


function getFruits(){
  return ["Apfel", "Birne", "Kirsche"];
}


echo getFruits()[0];



echo ["Tomate", "Kebab", "Salat"][0];



echo array_reverse(getFruits())[2];


function getPerson() {
  return [
      "name" => "Markus",
      "age" => 30,
      "city" => "Berlin"
  ];
}

echo getPerson()["name"];










?>







