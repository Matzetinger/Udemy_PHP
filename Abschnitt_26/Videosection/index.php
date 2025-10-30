<!DOCTYPE html>
<html lang="de">
<head>
  <!-- Metatags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Name des Autors">
  <meta name="keywords" content="Schlüsselwörter, kommasepariert">
  <meta name="description" content="Beschreibung der Webseite">
  <meta name="robots" content="index, follow">
  <title>Test Projekt</title>
  <!-- Ressourcen -->
  <link rel="stylesheet" href="#" type="text/css">
</head>
<body>
  <p>Html p Element</p>
  <!-- Html kommentar -->
  <?php
    echo"<h5>Hallo PHP Anweisung</h5>" 
      // einzelne kommentar Zeile in php

      /* 
        Block kommentare in php
      */ 
  ?>

  <?php 
    echo"2te PHP Anweisung mit eingebundner Datei: Ich werde ausgegeben mit befehl <u><b>echo</b></u>";

    include("./test.php");
    require_once("./test.php");
    require_once("./test.php");
 
  ?>

  <?php 
    echo"3te PHP Anweisung Returns";

  $greet = require_once("./rueckgabe.php");

    echo $greet;

  ?>



</body>
</html>