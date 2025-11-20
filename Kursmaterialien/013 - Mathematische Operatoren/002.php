<?php


// Berechnet den absoluten Wert einer Zahl
echo abs(5);

// Runden
echo round(3.4);
echo round(3.5);
echo round(3.456, 2);


// Aufrundung

echo ceil(4.2);
echo ceil(9.1);


//Abrunden

echo floor(4.9);
echo floor(9.1);


// Square (Quadratwurzel)

echo sqrt(16);
echo sqrt(25);


// Potenz
echo pow(2,3);
echo pow(5,2);


//max & min
echo max(1,2,4,5,6);
echo min(1,2,4,5,6);


//PI
echo pi();


//sin(), cos(), tan()
echo sin(deg2rad(30));  // Ausgabe: 0.5 (Sinus von 30 Grad)
echo cos(deg2rad(60));  // Ausgabe: 0.5 (Kosinus von 60 Grad)
echo tan(deg2rad(45));  // Ausgabe: 1 (Tangens von 45 Grad)


//asin(), acos(), atan()
echo rad2deg(asin(0.5));  // Ausgabe: 30 (Arkussinus von 0.5 in Grad)
echo rad2deg(acos(0.5));  // Ausgabe: 60 (Arkuskosinus von 0.5 in Grad)
echo rad2deg(atan(1));    // Ausgabe: 45 (Arkustangens von 1 in Grad)

//log
echo log(10);
echo log10(100);


// Random Number
echo random_int(1, 100);

echo "<br>";

echo rand(1, 20);
echo mt_rand(1, 20);



?>











