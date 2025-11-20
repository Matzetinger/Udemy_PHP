<?php


$color = "grün";

$day = "Dienstsag";


switch($color){
  case "red":
    echo "Die Farbe ist rot <br>";
    break;
  case "blau":
    echo "Die Farbe ist blau <br>";
    break;
    default:
      echo "Keine Farbe trifft zu! <br>";
}


switch ($day) {
  case 'Samstag':
  case "Sonntag":
    echo "Es ist Wochenende <br>";
    return 1;

  case 'Montag':
  case "Dienstag":
  case "Mittwoch":
  case "Donnerstag":
  case "Freitag":
    echo "Es ist Zeit zu Arbeiten <br>";
    return 2;
  
  default:
    echo "Den Tag gibt es nicht!";
    return 3;
}






?>







