<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lösung</title>
</head>
<body style="display: flex; gap: 2rem;">
    
    <div>
 <p><a href="../../Abschnitt_38/Video-Section/index.php">Zurück zu Abschnitt 38</a></p>   
<h2>// Funktion deklarieren und verwenden</h2> 
<p>function displayWelcome() {<br>
    echo "Willkommen auf unserer Website!< br >";<br>
}<br>
displayWelcome();</p>

<h2>// Parameter und Standardwerte</h2>
<p>function sumNumbers($number1, $number2 = 10) {<br>
    echo "Summe: " . ($number1 + $number2) . "< br >";<br>
}<br>
sumNumbers(5); // Ausgabe: Summe: 15</p>

<h2>// Splat-Operator und benannte Parameter</h2>
<p>function listIngredients(...$ingredients) {<br>
    echo "Zutaten: " . implode(", ", $ingredients) . "< br >";<br>
}<br>
listIngredients("Tomaten", "Käse", "Basilikum");</p>

<h2>// Gültigkeit von Variablen - global & local</h2>
<p>$globalVar = 100;<br>
function testGlobal() {<br>
    global $globalVar;<br>
    echo "Globale Variable innerhalb der Funktion: $globalVar< br >";<br>
}<br>
testGlobal();</p>

<h2>// Statische Variablen in Funktionen</h2>
<p>function counter() {<br>
    static $count = 0;<br>
    $count++;<br>
    echo "Funktionsaufruf: $count< br >";<br>
}</p>
<p>counter();</p>
<p>counter();</p>
<p>counter();</p>

</body>
</html>
</div>
<div>
<?php
echo "<h2> Ausgabe </h2>";
echo "<h2>Funktion deklarieren und verwenden</h2>";
function displayWelcome() {
    echo "Willkommen auf unserer Website!<br><br>";
}
displayWelcome();

echo "<h2>Parameter und Standardwerte</h2>";
function sumNumbers($number1, $number2 = 10) {
    echo "Summe: " . ($number1 + $number2) . "<br><br>";
}
sumNumbers(5); // Ausgabe: Summe: 15

echo "<h2>Splat-Operator und benannte Parameter </h2>";
function listIngredients(...$ingredients) {
    echo "Zutaten: " . implode(", ", $ingredients) . "<br>";
}
listIngredients("Tomaten", "Käse", "Basilikum");

echo "<h2>Gültigkeit von Variablen - global & local </h2>";
$globalVar = 100;
function testGlobal() {
    global $globalVar;
    echo "Globale Variable innerhalb der Funktion: $globalVar<br><br>";
}
testGlobal();

echo "<h2>Statische Variablen in Funktionen </h2>";
function counter() {
    static $count = 0;
    $count++;
    echo "Funktionsaufruf: $count<br>";
}
counter();
counter();
counter();
?></div>