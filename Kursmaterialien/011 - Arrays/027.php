<?php


$fruits = ["Apfel", "Banane", "Kirsche", "Apfel", "Dattel"];

$person = [
  "Name" => "Markus",
  "Age" => 25,
  "Email" => "test@test.de"
];


$randIndex = array_rand($fruits, 2);



echo "Hallo dein Obst ist " . $fruits[$randIndex[0]] . " und dein zweites Obst ist " . $fruits[$randIndex[1]];








?>







