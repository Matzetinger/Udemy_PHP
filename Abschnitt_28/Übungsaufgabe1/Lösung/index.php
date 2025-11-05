<?php
// variables.php - Demonstration von Variablen und Datentypen in PHP

// Kommentar: Definieren von Variablen mit verschiedenen Datentypen
$stringVar = "Dies ist ein String";
$intVar = 42;
$floatVar = 3.14;
$boolVar = true;
$arrayVar = array("Apfel", "Banane", "Kirsche");

// Kommentar: Den Datentyp einer Variable feststellen
echo "Datentypen feststellen:<br>";
echo gettype($stringVar) . "<br>";  // Ausgabe: string
echo gettype($intVar) . "<br>";     // Ausgabe: integer
echo gettype($floatVar) . "<br>";   // Ausgabe: double
echo gettype($boolVar) . "<br>";    // Ausgabe: boolean
echo gettype($arrayVar) . "<br>";   // Ausgabe: array

// Detaillierte Information über eine Variable
var_dump($arrayVar);
echo "<br>";

// Kommentar: Typkonvertierung
echo "Typkonvertierung:<br>";
$intVar = (float)$intVar; // Integer zu Float konvertieren
echo gettype($intVar) . " - " . $intVar . "<br>";  // Ausgabe: double

$floatVar = (int)$floatVar; // Float zu Integer konvertieren
echo gettype($floatVar) . " - " . $floatVar . "<br>";  // Ausgabe: integer

$stringToInt = "123";
$stringToInt = (int)$stringToInt; // String zu Integer konvertieren
echo gettype($stringToInt) . " - " . $stringToInt . "<br>";  // Ausgabe: integer

// Kommentar: Variablen prüfen
echo "Variablen prüfen:<br>";
$undefinedVar = null;
echo isset($stringVar) ? "stringVar ist gesetzt<br>" : "stringVar ist nicht gesetzt<br>";  // Ausgabe: stringVar ist gesetzt
echo empty($undefinedVar) ? "undefinedVar ist leer<br>" : "undefinedVar ist nicht leer<br>";  // Ausgabe: undefinedVar ist leer
echo is_null($undefinedVar) ? "undefinedVar ist null<br>" : "undefinedVar ist nicht null<br>";  // Ausgabe: undefinedVar ist null

// Kommentar: Variablen löschen
unset($intVar);
echo isset($intVar) ? "intVar ist gesetzt<br>" : "intVar ist nicht gesetzt<br>";  // Ausgabe: intVar ist nicht gesetzt

// Kommentar: Variable Variablen
$varName = "dynamicVar";
$$varName = "Dies ist eine dynamische Variable";
echo $dynamicVar . "<br>";  // Ausgabe: Dies ist eine dynamische Variable

// Kommentar: Variablen referenzieren
$originalVar = "Original";
$refVar = &$originalVar; // Referenz auf $originalVar
$refVar = "Verändert";
echo $originalVar . "<br>";  // Ausgabe: Verändert

?>