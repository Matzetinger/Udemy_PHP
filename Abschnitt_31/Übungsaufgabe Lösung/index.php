<?php
// string_operations.php - Demonstration von String-Operationen in PHP

// Strings miteinander verbinden
$str1 = "Hallo";
$str2 = "Welt";
$combinedStr = $str1 . " " . $str2;
echo "Verkettung: " . $combinedStr . "<br>";

// Auf einzelne Zeichen von Strings zugreifen
echo "Erstes Zeichen: " . $combinedStr[0] . "<br>";
echo "Letztes Zeichen: " . $combinedStr[strlen($combinedStr) - 1] . "<br>";

// Vergleichen von Strings
echo "String-Vergleich (strcmp): " . strcmp($str1, $str2) . "<br>";
echo "String-Vergleich ohne Groß-/Kleinschreibung (strcasecmp): " . strcasecmp($str1, "hallo") . "<br>";

// Strings alphabetisch sortieren
$words = array("Banane", "Apfel", "Kirsche");
sort($words);
echo "Alphabetisch sortiert: " . implode(", ", $words) . "<br>";

// Stringlänge feststellen
echo "Länge des Strings: " . strlen($combinedStr) . "<br>";

// Position von Zeichen in Strings finden
echo "Position von 'Welt': " . strpos($combinedStr, "Welt") . "<br>";

// Ersetzen von Substrings
$newStr = str_replace("Welt", "PHP", $combinedStr);
echo "Ersetzter String: " . $newStr . "<br>";

// Substrings extrahieren
echo "Substring: " . substr($combinedStr, 6, 4) . "<br>";

// Groß- und Kleinschreibung umwandeln
echo "Kleinbuchstaben: " . strtolower($combinedStr) . "<br>";
echo "Großbuchstaben: " . strtoupper($combinedStr) . "<br>";

// Whitespace trimmen
$whitespaceStr = "   Hallo Welt!   ";
echo "Getrimmt: '" . trim($whitespaceStr) . "'<br>";
echo "Links getrimmt: '" . ltrim($whitespaceStr) . "'<br>";
echo "Rechts getrimmt: '" . rtrim($whitespaceStr) . "'<br>";

// Strings aufteilen und zusammenfügen
$csv = "Apfel,Banane,Kirsche";
$fruits = explode(",", $csv);
echo "Aufgeteilt: " . implode(", ", $fruits) . "<br>";

// Zählen von Wörtern und Substrings
echo "Anzahl der Wörter: " . str_word_count($combinedStr) . "<br>";
echo "Anzahl der 'l': " . substr_count($combinedStr, "l") . "<br>";
?>