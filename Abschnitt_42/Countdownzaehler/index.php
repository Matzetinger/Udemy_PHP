<?php

function validateDateTime($date, $format = "Y-m-d\TH:i"){
  $d = Datetime::createFromFormat($format, $date);
  return $d && $d->format($format) === $date;
}

function getDiff($userDate){
  $current_Date = new DateTime();
  $userDateObj = new DateTime($userDate);
  $diff = $userDateObj->diff($current_Date);

  return $diff;
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $userDate = $_POST["date"];

  if(validateDateTime($userDate)){
    $res = getDiff($userDate);
    var_dump($res);
  }else{
    echo "Error";
  }
}

?>


<!DOCTYPE html>
<html lang="de">
<head>
  <!-- Metatags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Matthias">
  <meta name="keywords" content="Countdown,Datum, Zähler ">
  <meta name="description" content="Übung wie man einen Datum Countdown Zähler mit PHP realisiert ">
  <meta name="robots" content="index, follow">
  <title>Datum Countdown Zähler</title>
  <!-- Ressourcen -->
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<?php
require_once("./forms/form.php");
?>

</body>
</html>