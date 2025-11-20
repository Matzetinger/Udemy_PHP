<?php


function findePerson(?string $name): ?array {
  $personen = [
      "Markus" => ["name" => "Markus", "alter" => 30],
      "Anna" => ["name" => "Anna", "alter" => 25]
  ];
  
  if ($name === null || !isset($personen[$name])) {
      return null;
  }
  
  return $personen[$name];
}


var_dump(findePerson("Markus"));




?>











