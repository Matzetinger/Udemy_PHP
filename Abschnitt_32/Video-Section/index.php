<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <nav>
    <p><a href="../../Abschnitt_31/Video-Section/index.php">31</a></p>
    <h1>Abschnitt 32</h1>
    <p><a href="../../Abschnitt_33/Video-Section/index.php">33</a></p>
  </nav>
  <section id="0" class="section">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. if elseif else bedingung - Anweisung</a></li>
        <li><a href="#2">02. Switch bedingung - Anweisung </a></li>
        <li><a href="#3">03. Match bedingung - Anweisung </a></li>
      </ul>
    </div>
  </section>

  <!-- 1. if elseif else bedingung Anweisung -->
  <section id="1" class="section">
    <div class="text-box">
      <h2>1. if elseif else bedingung - Anweisung</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $alter = 18;
          $fsk = 18;
          $zahl = 10;
          $wort = "Weltrichter";
          $wort1 = "Protokolle";
          $greets = "Hallo ";
         ?>
        <p>$alter = 18;<br>$fsk = 18; <br>  $zahl = 10; <br> $wort = "Weltrichter" <br> $wort1 = "Protokolle" <br> $greets = "Hallo ";</p>
      
    </div>
    <div class="inhalt-container">

      <!-- if-else Anweisung -->
      <div class="box">
        <h4> if-else Anweisung </h4>
        <p><span class="rot">if</span>($alter >= $fsk){ <br> echo "Du kannst den Film sehen"; <br> } <br> <span class="rot">else</span> {echo "Du kannst den Film nicht sehen"; <br> } =
        <span>
          <?php 
          if ($alter >= $fsk){
            echo "Du kannst den Film sehen ";
          }
          else {
            echo "Du kannst den Film nicht sehen ";
          } ?>
        </span></p>
      </div>
      
      <!-- if elseif else Anweisung -->
      <div class="box">
        <h4>if elseif else Anweisung</h4>
        <p><span class="rot">if</span>($zahl < 8){ <br> echo "Die Zahl $zahl ist kleiner als 8"; <br> } <br> <span class="rot">elseif</span>($zahl === 8){ <br> echo "Die Zahl $zahl ist gleich 8"; <br> } <br> <span class="rot">else</span>{ <br> echo "die Zahl $zahl ist größer als 8"; <br> } = 
        <span>
          <?php 
          if($zahl < 8){
            echo "Die Zahl $zahl ist kleiner als 8";
          }
          elseif($zahl === 8){
            echo "Die Zahl $zahl ist gleich 8";}
          else{
            echo "Die Zahl $zahl ist größer als 8";
          } ?>
          </span></p>
      </div>

      <!-- if elseif else Anweisung Html -->
      <div class="box">
        <h4>if elseif else Anweisung mit HTML vermischt</h4>
        <p>php <span class="rot">if</span>($wort === $wort1): ?></p>
        <p>p> Die Variablenwerte sind gleich /p> </p>
        <p>php <span class="rot">else</span> : ?></p>
        <p> p> Die Variablenwerte sind nicht Gleich /p> </p>
        <p>?php <span class="rot">endif</span> ; ?> = </p>

        <?php if($wort === $wort1): ?>
          <p class="gelb">Die Variablenwerte sind gleich </p>
        <?php else : ?>
          <p class="gelb">Die Variablenwerte sind nicht Gleich</p>
        <?php endif ; ?>
      </div>

      <!-- if-else Anweisung verschachtelt -->
      <div class="box">
        <h4> if-else Anweisung verschachtelt </h4>
        <p><span class="rot">if</span> ($greets){ <br> echo  $greets . "Matthias "; <br><span class="rot">if</span> ($alter >= $fsk){<br>echo "Du kannst den Film anschauen ";}<br><span class="rot">else</span>{<br>echo "Du kannst den Film nicht sehen";<br>}<br>}<br>
            <span class="rot">else</span> {<br>echo "Greets nicht gesetzt ";<br><span class="rot">if</span> ($alter >= $fsk){<br>echo "Du kannst den Film anschauen ";}<br><span class="rot">else</span>{<br>echo "Du kannst den Film nicht sehen";<br>}<br>} = <br>
        <span>
          <?php 
          if ($greets){
            echo  $greets . "Matthias ";
            if ($alter >= $fsk){
              echo "Du kannst den Film anschauen ";}
            else{
              echo "Du kannst den Film nicht sehen";
              }
          }

          else {
            echo "Greets nicht gesetzt ";
            if ($alter >= $fsk){
              echo "Du kannst den Film anschauen ";}
            else{
              echo "Du kannst den Film nicht sehen";
              }
          } ?>
        </span></p>
      </div>

      <!-- Anweisung Kurz -->
      <div class="box">
        <h4> if Anweisung Kurz </h4>
        <p><span class="rot">if</span>($alter){ <br> echo "Alter wurde angegeben: " . $alter . " Jahre";} =
        <span>
          <?php 
          if ($alter){
            echo "Alter wurde angegeben: " . $alter . " Jahre";}
          ?>
        </span></p>
      </div>

    </div>
  </section>

  <!-- 2. Switch bedingung - Anweisung <br> Loser vergleich == -->
  <section id="2" class="section">
    <div class="text-box">
      <h2>2. Switch bedingung - Anweisung <br> Loser vergleich ==</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $color = "Gold";
          $color1 = "";
          $day = "Sonntag";
         ?>
        <p>$color = "Gold" <br> color1 = "" <br> $day = "Sonntag"</p>
    </div>
    <div class="inhalt-container">

      <!-- Switch Anweisung -->
      <div class="box">
        <h4>Switch $color</h4>
        <p><span class="rot">switch</span> ($color) { <br>
          <span class="rot">case</span> 'Gold': <br>
            echo "die Farbe ist Gold"; <br>
          <span class="rot">break</span>;<br>
          <span class="rot">case</span> 'Gelb':<br>
            echo "die Farbe ist Gelb";<br>
          <span class="rot">break</span>;<br>
          <span class="rot">case</span> 'Blau':<br>

          <span class="rot">default</span>:<br>
            echo "Farbe nicht gefunden";<br>
          <span class="rot">break</span>;<br>
          } =
        <span>
          <?php 
        switch ($color) {
          case 'Gold':
            echo "die Farbe ist Gold";
            break;
          case 'Gelb':
            echo "die Farbe ist Gelb";
            break;

          default:
            echo "Farbe nicht gefunden";
            break;
          }
          ?>
        </span></p>
        <p>Case-sensitiv</p>
        <p>Break = Beendet den switch </p>
        <p>Loser vergleich ==</p>
      </div>

      <!-- Switch Anweisung -->
      <div class="box">
        <h4>Switch $color1</h4>
        <p><span class="rot">switch</span> ($color1) { <br>
          <span class="rot">case</span> 'Gold': <br>
            echo "die Farbe ist Gold"; <br>
          <span class="rot">break</span>;<br>
          <span class="rot">case</span> 'Gelb':<br>
            echo "die Farbe ist Gelb";<br>
          <span class="rot">break</span>;<br>
          <span class="rot">case</span> 'Blau':<br>
          <span class="rot">default</span>:<br>
            echo "Farbe nicht gefunden";<br>
          <span class="rot">break</span>;<br>
          } = 
        <span>
          <?php 
        switch ($color1) {
          case 'Gold':
            echo "die Farbe ist Gold";
            break;
          case 'Gelb':
            echo "die Farbe ist Gelb";
            break;

          default:
            echo "Farbe nicht gefunden";
            break;
          }
          ?>
        </span></p>
        <p>Case-sensitiv</p>
        <p>Break = Beendet den switch </p>
        <p>Loser vergleich ==</p>
      </div>

      <!-- Switch Anweisung -->
      <div class="box">
        <h4>Switch $day</h4>
        <p><span class="rot">switch</span> ($day) { <br>
          <span class="rot">case</span> 'Samstag': <br>
          <span class="rot">case</span> 'Sonntag': <br>
            echo "Wochenende"; <br>
          <span class="rot">break</span>;<br>
          <span class="rot">case</span> 'Montag':<br>
          <span class="rot">case</span> 'Dienstag':<br>
          <span class="rot">case</span> 'Mittwoch':<br>
          <span class="rot">case</span> 'Donnerstag':<br>
          <span class="rot">case</span> 'Freitag':<br>
            echo "Werktag";<br>
          <span class="rot">break</span>;<br>
          <span class="rot">default</span>:<br>
            echo "Diesen Tag gibt es nicht";<br>
          <span class="rot">break</span>;<br>
          } =
        <span>
          <?php 
        switch ($day) {
          case 'Samstag':
          case 'Sonntag':
            echo "Wochenende";
            break;
          case 'Montag':
          case 'Dienstag':
          case 'Mittwoch':
          case 'Donnerstag':
          case 'Freitag':
            echo "Werktag";
            break;

          default:
            echo "Diesen Tag gibt es nicht";
            break;
          }
          ?>
        </span></p>
        <p>Case-sensitiv</p>
        <p>Break = Beendet den switch </p>
        <p>Loser vergleich ==</p>
      </div>
    </div>
  </section>

  <!-- 3. Match bedingung - Anweisung <br> Strikten vergleich === -->
  <section id="3" class="section">
    <div class="text-box">
      <h2>3. Match bedingung - Anweisung <br> Strikten vergleich ===</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $wert = "Logik";
         ?>
        <p>$wert = "Logik"</p>
    </div>
    <div class="inhalt-container">

      <!-- Match Anweisung -->
      <div class="box">
        <h4>Match</h4>
        <p>$auswertung = <span class="rot">match</span> ($wert){ <br>
            "Logik","Gleicheit","Tugend","Ethik","Tapferkeit" <span class="rot">=></span> "$wert ist im Wertsystem der 12 Werte", <br>
            "Staat" <span class="rot">=></span> "$wert ist Zerfallen und Schuldet den VOLLKOMMENEN MANN", <br>
            <span class="rot">default =></span> "$wert ist nicht im Wertsystem"}; <br>

            echo $auswertung =
        <span>
          <?php 
            $auswertung = match ($wert){
              "Logik","Gleicheit","Tugend","Ethik","Tapferkeit" => "$wert ist im Wertsystem der 12 Werte",
              "Staat" => "$wert ist Zerfallen und Schuldet den VOLLKOMMENEN MANN",
            default => "$wert ist nicht im Wertsystem"};

            echo $auswertung
          ?>
        </span></p>
        <p>Case-sensitiv</p>
        <p>Rückgabewert</p>
        <p>Strikten Vergleich ===</p>
      </div>
    </div>
  </section>

</body>
</html>
