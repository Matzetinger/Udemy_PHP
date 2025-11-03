<?php
$br = "<br>";


$zahl = "1.11";
var_dump((float)$zahl);
echo $br;


$array = ["Vollkommenheit", "IOSIF", 1];

$object = (object)$array;

var_dump ($object->{1});

echo $br;

var_dump(intval($zahl));
echo $br;
var_dump(strval($zahl));
echo $br;
var_dump(floatval($zahl));
echo $br;
settype($zahl, "string");
var_dump($zahl);

?>