<?php



$person1 = array(
  "Name" => "Markus",
  "Alter" => 30,
  "Stadt" => "Berlin"
);


$person2 = [
  "Name" => "Benjamin",
  "Alter" => 25,
  "Stadt" => "München",
];

$person2["Beruf"]  = "Webdev";



unset($person2["Alter"]);


var_dump($person2);






?>







