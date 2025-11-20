<?php

$fruits = ["Apfel", "Banane", "Kirsche"];
$number = [1,2,3];
$matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];

$people = [
  "Markus" => [ 
      "Alter" => 30,
      "Stadt" => "Berlin"
  ],
  "Anna" => [ 
      "Alter" => 25,
      "Stadt" => "München"
  ]
];


foreach ($fruits as $fruit) {
  echo "Die Frucht ist $fruit" . "<br>";
};

foreach($matrix as $row){
  foreach($row as $element){
    echo $element . "<br>";
  }
}


foreach($people as $name => $details){
  echo $name;
  foreach ($details as $detail => $value) {
    echo $value;
  };
  echo "<br>";
}




?>







