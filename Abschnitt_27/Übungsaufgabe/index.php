<?php
$name = "Matthias";
$art = "Hybriden";
$integer = 42;
$float = 99.99;
$object = (object) $array;

// echo 
echo "Ich bin ein echo <br>";
$text = "ich bin der text der festgelegten Variable aus Zeile 7";

// print

$text_print = print "Ich bin ein print mit rückgabe Wert";
echo $text_print;

// heredoc

$text1 = <<<TEXT
<br> Ich bin ein heredoc mit text und kann auch eine variable ausgeben: $text 
TEXT;

echo $text1;
echo "<br>";

// nowdoc

$text2 = <<<'TEXT2'
ich bin ein nowdoc und kann keine Variable 
ausgeben nur reinen text zeilenumbrüche im code Ignoriere 
ich bis ein br <br> gesetzt wurde
TEXT2;

echo $text2;
echo "<br>";

// printf

printf ("<br> Hallo mein name ist %s und sage das %.2f %% der Menschen %s sind <br>", $name, 99.99, $art);

echo "<br>";
/* 
%s: Zeichensätze
%d: oder %i: Ganzzahl
%f: Fließkommazahl (Standartmäßig 6 Dezimalstellen)
%x: Hexadezimalzahl (kleinbuchstaben)
%X: Hexadezimalzahl (GROßBUCHSTABEN)
%b: Binärzahl
%%: Ein Literal-Prozentzeichen
*/

//print_r
$array = ["Iosif", "Matthias", "Menschenort", [12,18,4], 34, true, false];

print_r ($array);

echo "<br>";
echo "<br>";

//var_dump

var_dump($art);
echo "<br>";
var_dump($text,$name,$text2);
echo "<br>";
var_dump($object);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($array);

echo "<br>";
echo "<br>";

//var_export

var_export($art);
echo "<br>";
var_export($text);
echo "<br>";
var_export($name);
echo "<br>";
var_export($text2);
echo "<br>";
var_export($object);
echo "<br>";
var_export($float);
echo "<br>";
var_export($array);
echo "<br>";
$value = var_export($array,true);
echo $value;
echo "<br>";
echo $value;
echo "<br>";

?>