<?php

$br = "<br>";

$zahl = "1.5";

var_dump(isset($zahl));
echo $br;

if (isset($zahl)){
  echo "Ist gesetzt";
}else{
  echo "Nicht gesetzt";
};


?>