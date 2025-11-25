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
    <h6><a href="../../Abschnitt_30/Video-Section/index.php">30</a></h6>
    <h1>Abschnitt 31</h1>
    <h6><a href="../../Abschnitt_32/Video-Section/index.php">32</a></h6>
  </nav>
  <section id="0" class="section">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. Strings Verbinden . </a></li>
        <li><a href="#2">02. Auf einzelne Zeichen von Strings zugreifen []</a></li>
        <li><a href="#3">03. Strings vergleichen</a></li>
        <li><a href="#4">04. Strings alphabetisch sortieren</a></li>
        <li><a href="#5">05. Stringlänge strlen</a></li>
        <li><a href="#6">06. Stringposition strpos - stripos</a></li>
        <li><a href="#7">07. Wort / Zahl ersetzen str_replace - str_ireplace</a></li>
        <li><a href="#8">08. </a></li>
        <li><a href="#9">09. </a></li>
        <li><a href="#10">10. </a></li>
        <li><a href="#11">11. </a></li>
        <li><a href="#12">12. </a></li>
        <li><a href="#13">13. </a></li>
        <li><a href="#14">14. </a></li>
      </ul>
      </div>
  </section>

  <!-- 1. String miteinander Verbinden -->
  <section id="1" class="section1">
    <div class="text-box">
      <h2>1. Strings Verbinden .</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- Strings Verbinden -->
      <div class="box">
        <h4>String Verbinden</h4>
        <?php 
          $var = "Vollkommen ist gleich ";
          $var2 = "34 Göttliche Protokolle"
        ?>
        <p>$var = "Vollkommen ist gleich"<br>$var2 = "34 Göttliche Protokolle" <br>echo $var . $var2 = <span><?= $var . $var2 ?></span></p>
      </div>
    </div>
  </section>

  <!-- 2. Auf einzelne Zeichen von Strings zugreifen -->
  <section id="2" class="section2">
    <div class="text-box">
      <h2>2. Auf einzelne Zeichen von Strings zugreifen []</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- Auf Zeichen zugreifen -->
      <div class="box">
        <h4>Auf einzelnes Zeichen zugreifen</h4>
        <?php 
          $zeichen = "Logik ";
        ?>
        <p>$zeichen = "Logik "<br> echo $zeichen[0]; = <span><?= $zeichen[0]; ?></span></p>
        <p>echo $zeichen[1]; = <span><?= $zeichen[1] ?></span></p>
        <p>echo $zeichen[2]; = <span><?= $zeichen[2] ?></span></p>
        <p>echo $zeichen[3]; = <span><?= $zeichen[3] ?></span></p>
        <p>echo $zeichen[4]; = <span><?= $zeichen[4] ?></span></p>
        <p>var_dump ($zeichen[5]); = <span><?php var_dump ($zeichen[5]); ?></span></p>
      </div>
    </div>
  </section>

  <!-- 3. Vergleichen von Strings -->
  <section id="3" class="section3">
    <div class="text-box">
      <h2>3. Vergleichen von Strings</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

    <!-- Strings Gleich -->
      <div class="box">
        <h4>Strings Gleich</h4>
        <?php 
        $string1 = "Gerechtigkeit";
        $string2 = "Gerechtigkeit";
          
        ?>
        <p>$string1 = "Gerechtigkeit"<br>$string2 = "Gerechtigkeit" <br> $string1 === $string2 ? "Gleich" : "Ungleich" = <span><?= $string1 === $string2 ? "Gleich" : "Ungleich";  ?></span></p>
        <p>Auch Leerzeichen werden Berücksichtigt</p>
      </div>

      <!-- Strings Ungleich -->
      <div class="box">
        <h4>Strings Ungleich</h4>
        <?php 
        $string3 = "Gerechtigkeit";
        $string4 = "Ungerechtigkeit";
          
        ?>
        <p>$string3 = "Gerechtigkeit"<br>$string4 = "Ungerechtigkeit" <br> $string3 === $string4 ? "Gleich" : "Ungleich" = <span><?= $string3 === $string4 ? "Gleich" : "Ungleich";  ?></span></p>
      </div>

      <!-- Lexikalisch Vergleichen -->
      <div class="box">
        <h4>Lexikalischer Vergleich</h4>
        <?php 
        $string5 = "A";
        $string6 = "Z";
        ?>
        <p>$string5 = "A" <br> $string6 = "Z"</p>
        <p>$string5 < $string6 ? "$string5 kommt vor $string6" : "$string5 kommt nach $string6" = <span><?= $string5 < $string6 ? "$string5 kommt vor $string6" : "$string5 kommt nach $string6";  ?></span></p>
        <p></p>
      </div>
    </div>
  </section>
  
  <!-- Strings alphabetisch sortieren -->
  <section id="4" class="section4">
    <div class="text-box">
      <h2>4. Strings alphabetisch sortieren</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
      <a href="https://www.charset.org/utf-8" target="_blank" rel="noopener noreferrer">Unicode UTF-8 - Zeichentabelle</a>
    </div>
    <div class="inhalt-container">

      <!-- Strings sortieren -->
      <div class="box">
        <h4>sort</h4>
        <?php 
          $array = ["F", "C", "B", "D", "E", "aaaa"];
          sort($array)
        ?>
        <p>$array = ["F", "C", "b", "D", "E", "A"]<br>sort($array)<br>var_export($array) = <span><?php var_export($array) ?></span></p>
        <p>Groß und kleinschreibung spielt eine Rolle</p>
      </div>

      <!-- Strings sortieren mit usort -->
      <div class="box">
        <h4>usort</h4>
        <?php 
          $array1 = ["F", "C", "B", "D", "E", "aaaa"];
          usort($array1, function($a, $b){
            return strtolower($a) <=> strtolower($b);
          });
          
        ?>
        <p>$array1 = ["F", "C", "b", "D", "E", "A"]<br>usort($array1, function($a, $b){return strtolower($a) <=> strtolower($b);});<br>var_export($array1) = <span><?php var_export($array1) ?></span></p>
        <p>strtolower = Zeichenkette in Kleinbuchstaben umwandeln</p>
      </div>
    </div>
  </section>

  <!-- 5. Stringlänge strlen -->
  <section id="5" class="section5">
    <div class="text-box">
      <h2>5. Stringlänge strlen</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- strlen -->
      <div class="box">
        <h4>strlen</h4>
        <?php 
          $string7 = "Stringlänge";
        ?>
        <p>$string7 = "Stringlänge"<br>echo strlen($string7) = <span><?= strlen($string7) ?></span></p>
        <p>Leerzeichen werden auch gezählt / Keine Indexzählung - heißt zählt ab 1</p>
      </div>
    </div>
  </section>

  <!-- 6. Stringposition strpos -->
  <section id="6" class="section6">
    <div class="text-box">
      <h2>6. Stringposition strpos - stripos</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- strpos -->
      <div class="box">
        <h4>strpos</h4>
        <?php 
          $message = "0123456789";
          $position = strpos($message, "3")
        ?>
        <p>$message = "0123456789"<br>$position = strpos($message, "3") <br>echo $position = <span><?= $position ?></span></p>
        <p> ----------------------------------------------------</p>
        <?php 
          $message1 = "Sei Gerecht auf alles";
          $position1 = strpos($message1, "Gerecht")
        ?>
        <p>$message1 = "Sei Gerecht auf alles"<br>$position1 = strpos($message1, "Gerecht") <br>echo $position1 = <span><?= $position1 ?></span></p>
        <p>echo $message1[4] = <span><?= $message1[4] ?></span></p>
        <p> ----------------------------------------------------</p>
        <p> ++ Leerzeichen werden auch gezählt / Indexwertung heißt ab 0 / Immer der Anfangsbuchstabe - Zahl wird gezeigt /Achtet auf Groß und kleinbuchstaben ++</p>
      </div>

      <!-- strpos offset -->
      <div class="box">
        <h4>strpos offset</h4>
        <?php 
          $message2 = "Sei Gerecht auf alles";
          $position2 = strpos($message2, "Gerecht",3)
        ?>
        <p>$message2 = "Sei Gerecht auf alles"<br>$position2 = strpos($message2, "Gerecht",3) <br> die 3 Bedeutet - Fängt bei index 3 zu suchen an <br>echo $position2 = <span><?= $position2 ?></span></p>
        
      </div>
      <!-- stripos offset -->
      <div class="box">
        <h4>stripos offset</h4>
        <?php 
          $message3 = "Sei Gerecht auf alles";
          $position3 = stripos($message3, "gerecht",3)
        ?>
        <p>$message3 = "Sei Gerecht auf alles"<br>$position3 = strpos($message3, "gerecht",3) <br> die 3 Bedeutet - Fängt bei index 3 zu suchen an <br>echo $position3 = <span><?= $position3 ?></span></p>
        <p>++ stripos - Ignoriert Groß und kleinbuchstaben ++</p>
        
      </div>
    </div>
  </section>

  <!-- 7. Wort ersetzen mit str_replace -->
  <section id="7" class="section7">
    <div class="text-box">
      <h2>7. Wort / Zahl ersetzen str_replace - str_ireplace</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- str_replace -->
      <div class="box">
        <h4>str_replace</h4>
        <?php 
          $nachricht = "Logik ist ein Wert von 12 Werten";
          $string = str_replace("Logik", "Gleichheit", $nachricht);
          
        ?>
        <p>$nachricht = "Logik ist ein Wert von 12 Werten" <br> $string = str_replace("Logik", "Gleichheit", $nachricht) <br>echo $string = <br> <span><?= $string ?></span></p>
        <p>++ Achtet auf Groß oder Kleinschreibung ++</p>
        
       </div>

       <!-- str_replace -->
      <div class="box">
        <h4>str_replace und zeige wieviele Ersetzungen</h4>
        <?php 
          $nachricht1 = "Logik ist ein Wert von 12 Werten";
          $string1 = str_replace("Logik", "Tapferkeit", $nachricht1, $count);
          
        ?>
        <p>$nachricht1 = "Logik ist ein Wert von 12 Werten" <br> $string1 = str_replace("Logik", "Tapferkeit", $nachricht1, $count) <br>echo $string1 . "br" . "Wieviel Wörter wurden ersetzt: " . $count = <br> <span><?= $string1 . "<br>" . "Wieviel Wörter wurden ersetzt: " .$count  ?></span></p>
        <p>++ Achtet auf Groß oder Kleinschreibung ++</p>
        
       </div>

       <!-- str_replace -->
      <div class="box">
        <h4>str_replace ( mehrere Wörter / Zahlen )</h4>
        <?php 
          $nachricht2 = "Logik ist ein Wert von 12 Werten";
          $string2 = str_replace(["Logik", "ein"], ["Selbsterkennung",1,], $nachricht2, $count1);
          
        ?>
        <p>$nachricht2 = "Logik ist ein Wert von 12 Werten" <br> $string2 = str_replace(["Logik", "ein"], ["Selbsterkennung",1,], $nachricht2, $count1) <br> necho $string2 . "br" . "Wieviel Wörter wurden ersetzt: " . $count = <br> <span><?= $string2 . "<br>" . "Wieviel Wörter wurden ersetzt: " .$count1  ?></span></p>
        <p>++ Achtet auf Groß oder Kleinschreibung ++</p>
        
       </div>

       <!-- str_ireplace -->
      <div class="box">
        <h4>str_ireplace</h4>
        <?php 
          $nachricht3 = "Logik ist ein Wert von 12 Werten";
          $string3 = str_ireplace("logik", "Tugend", $nachricht3);
          
        ?>
        <p>$nachricht3 = "Logik ist ein Wert von 12 Werten" <br> $string3 = str_ireplace("Logik", "Tugend", $nachricht3) <br> ++ i = Ignoriert Groß oder Kleinschreibung ++ <br> echo $string3 = <span><?= $string3 ?></span></p>
        
        
       </div>

    </div>
  </section>

  
</body>
</html>
