<?php
// inkludierte funktionen
include ("config.php");
include_once ("config.php");
require("functions.php");
require_once("functions.php");


?>

<?php
// Inkludiertes return mit gepeicherter variable

$rückgabewert = require_once("./rueckgabe/data.php");

echo $rückgabewert;


?>

