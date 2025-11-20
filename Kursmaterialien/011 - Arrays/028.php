<?php

setlocale(LC_COLLATE, 'DE');

$data = ["img2.png", "img10.png", "img1.png", "Äpfel", "Banane", "dattel", "Kirsche", 1, "2", 10];


$regular = $data;
sort($regular, SORT_REGULAR);
echo "SORT_REGULAR <br>";
print_r($regular);

echo "<br>";
echo "<br>";


$numeric = $data;
sort($numeric, SORT_NUMERIC);
echo "SORT_NUMERIC<br>";
print_r($numeric);

echo "<br>";
echo "<br>";


$string = $data;
sort($string, SORT_STRING);
echo "SORT_STRING<br>";
print_r($string);

echo "<br>";
echo "<br>";


$local = $data;
sort($local, SORT_LOCALE_STRING);
echo "SORT_LOCALE_STRING<br>";
print_r($local);

echo "<br>";
echo "<br>";


$case = $data;
sort($case, SORT_NATURAL | SORT_FLAG_CASE);
echo "SORT_FLAG_CASE<br>";
print_r($case);







?>







