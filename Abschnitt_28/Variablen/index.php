<?php
$a = "Hallo Teilnehmer! ";
$b = 22 . "!";
$c = "Alter: " . 22;

echo $a . "Mein Alter ist " . $b;

$a = "Tschüss Teilnehmer! ";
echo "<br>" . $a;

$A = "Moinsen Teilnehmer!";
echo "<br>" . $A; 
echo "<br>" . $a;

$d = $a;
echo "<br>" . $d;


$f = "<br>" . "$a";
echo $f;
$g = "<br>" . '$a';
echo $g;

#escaping
$h = "$a Ich bin \"33\" Jahre alt";
echo "<br>" . $h;

$i = '$a . Ich bin "33 $a" Jahre alt';
echo "<br>" . $i;

$gruß = "Hallo Leute! ";
$myName = "Ich heiße Matthias ";
$myAge = "und bin " . 38 . " Jahre!";

$bio = $gruß . $myName . $myAge;

echo "<br>" . $bio;
?>