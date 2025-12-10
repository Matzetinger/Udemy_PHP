<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
// Match-Anweisung für den Wochentag
function getDayName($dayNumber) {
    return match($dayNumber) {
        1 => 'Montag',
        2 => 'Dienstag',
        3 => 'Mittwoch',
        4 => 'Donnerstag',
        5 => 'Freitag',
        6 => 'Samstag',
        7 => 'Sonntag',
        default => 'Ungültiger Tag'
    };
}

// Match-Anweisung für die Temperaturbewertung
function describeTemperature($temperature) {
    return match (true) {
        $temperature <= 0 => 'Es ist eiskalt.',
        $temperature <= 15 => 'Es ist kühl.',
        $temperature <= 25 => 'Es ist mild.',
        default => 'Es ist heiß.'
    };
}

// Match-Anweisung für die Bewertung einer Zahl
function evaluateNumber($number) {
    return match (true) {
        $number < 0 => 'Die Zahl ist negativ.',
        $number === 0 => 'Die Zahl ist null.',
        default => 'Die Zahl ist positiv.'
    };
}

?>
    <a href="..//Video-Section/index.php"> Zurück</a>
    <h4>// Match-Anweisung für den Wochentag</h4>
    <p>
      function getDayName($dayNumber) {<br />
      return match($dayNumber) {<br />
      1 => 'Montag',<br />
      2 => 'Dienstag',<br />
      3 => 'Mittwoch',<br />
      4 => 'Donnerstag',<br />
      5 => 'Freitag',<br />
      6 => 'Samstag',<br />
      7 => 'Sonntag',<br />
      default => 'Ungültiger Tag'<br />
      };<br />
      }
    </p>
    <p>echo  getDayName(3); = <b><u><?php echo  getDayName(3); ?></u></b></p>

    
    <h4>// Match-Anweisung für die Temperaturbewertung</h4>
    <p>
      function describeTemperature($temperature) {<br />
      return match (true) {<br />
      $temperature <= 0 => 'Es ist eiskalt.',<br />
      $temperature <= 15 => 'Es ist kühl.',<br />
      $temperature <= 25 => 'Es ist mild.',<br />
      default => 'Es ist heiß.'<br />
      };<br />
      }
    </p>
    <p>echo describeTemperature(-5) = <b><u><?php echo describeTemperature(-5);?></u></b></p>

    
    <h4> // Match-Anweisung für die Bewertung einer Zahl </h4>
    <p>
      function evaluateNumber($number) {<br />
      return match (true) {<br />
      $number < 0 => 'Die Zahl ist negativ.',<br />
      $number === 0 => 'Die Zahl ist null.',<br />
      default => 'Die Zahl ist positiv.'<br />
      };<br />
      }
    </p>
    <p>echo evaluateNumber(0) = <b><u><?php echo evaluateNumber(0);?></u></b></p>
    
  </body>
</html>
