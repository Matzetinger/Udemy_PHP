<?php


$color = "rot";



$result = match($color){
  "rot" => "Die Farbe ist rot",
  "grün" => "Die Farbe ist grün",
  default => "Keine Farbe trifft zu!"
};


echo $result



?>







