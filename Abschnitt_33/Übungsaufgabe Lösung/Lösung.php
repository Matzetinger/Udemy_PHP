<?php
// Die for-Schleife
for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        continue; // Überspringe die Zahl 5
    }
    echo $i . "<br>";
}

// Die while-Schleife
$x = 100;
while ($x > 1) {
    echo $x . "<br>";
    $x /= 2; // Halbiere x in jeder Iteration
}

// Die do-while-Schleife
$z = 10;
do {
    echo $z . "<br>";
    $z--;
} while ($z > 0);

// break & continue
for ($j = 1; $j <= 20; $j++) {
    if ($j > 15) {
        break; // Beende die Schleife, wenn j größer als 15 ist
    }
    if ($j % 2 !== 0) {
        continue; // Überspringe ungerade Zahlen
    }
    echo $j . "<br>";
}
?>