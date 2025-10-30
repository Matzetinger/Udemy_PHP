<?php


require_once("config.php");
include_once 'function.php';
$data1 = include 'data.php';

echo "<h1>Eine weitere Übung</h1>";
echo "<h2>Konfiguration: <u>$config1</u> und <u>$config2</u> </h2>";
echo "<h2>Datenwert mit geänderter variable in index.php: <u>$data1</u></h2>";

echo "<h2>Funktionsergebnis: <u>". namederfunktion() ."</u>";

?>