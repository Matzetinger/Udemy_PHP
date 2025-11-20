<?php


$greets = "";

$num =3;

if($num > 10){
  echo "Die Zahl ist größer als 10";
} elseif( $num > 5){

  // Verschachtelte If-Anweisung
  if($greets){
    echo $greets . "Markus";
  }else {
    echo "Kein Greets gesetzt <br>";
  }

  echo "Die Zahl ist größer als 5 <br>";
} else {
  echo "Die Zahl ist 5 oder kleiner";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>
<body>

  <?php if ($num > 5): ?>
    <p> Die Zahl ist größer als 5. </p>
    <?php else: ?>
    <p> Die Zahl ist NICHT größer als 5. </p>
  <?php endif; ?>
  
</body>
</html>




