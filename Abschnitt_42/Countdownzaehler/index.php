<?php

$years = $month = $days = $hours = $minutes = $seconds = null;

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

function isFutureDate($date){
  $now = new DateTime();
  $inputDate = new DateTime($date);
  return $inputDate > $now;
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $userDate = $_POST["date"];

  if(validateDateTime($userDate)){
    if(isFutureDate($userDate)){
      $diff = getDiff($userDate);

      $years = $diff->y;
      $month = $diff->m;
      $days = $diff->d;
      $hours = $diff->h;
      $minutes = $diff->i;
      $seconds = $diff->s;
    }else{
      echo "Date is not in the future";
    }

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

<div class="card-container">
  <div class="title-container">
    <h1>Wie viele Tage</h1>
  </div>
  <div class="time-container">
    <div class="time-section">
      <p class="time-title">Jahre</p>
      <p class="time-count"><?php echo sprintf("%02d", $years)  ?> </p>
    </div>
    <div class="time-section">
      <p class="time-title">Monate</p>
      <p class="time-count"><?php echo sprintf("%02d", $month) ?></p>
    </div>
    <div class="time-section">
      <p class="time-title">Tage</p>
      <p class="time-count"><?php echo sprintf("%02d", $days) ?> </p>
    </div>
    <div class="time-section">
      <p class="time-title">Stunden</p>
      <p class="time-count"><?php echo sprintf("%02d", $hours) ?> </p>
    </div>
    <div class="time-section">
      <p class="time-title">Minuten</p>
      <p class="time-count"><?php echo sprintf("%02d", $minutes) ?> </p>
    </div>
    <div class="time-section">
      <p class="time-title">Sekunden</p>
      <p class="time-count"><?php echo sprintf("%02d", $seconds) ?> </p>
    </div>
  </div>
  <div class="form-container">
    <?php require_once("./src/forms/form.php");?>
    <small class="err">Fehler</small>
  </div>
</div>




</body>
</html>