<?php
// index.php - Hauptdatei

// Kommentare in PHP
// Diese Datei bindet andere Dateien ein und nutzt deren Funktionen und Variablen

// Inkludieren der Konfigurationsdatei
require_once 'config.php';

// Inkludieren der Funktionsdatei
include_once 'functions.php';

// Inkludieren der Datei mit Rückgabewert
$value = include 'data.php';

// Anzeigen der zurückgegebenen Werte
echo "<h1>Willkommen auf meiner PHP-Seite</h1>";
echo "<p>Konfiguration: $configValue</p>";
echo "<p>Funktionsergebnis: " . myFunction() . "</p>";
echo "<p>Datenwert: $value</p>";
?>