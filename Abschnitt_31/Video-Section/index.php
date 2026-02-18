<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Strings</title>
</head>
<body>
  <nav>
    <p><a href="../../Abschnitt_30/Video-Section/index.php">30</a></p>
    <h1>Abschnitt 31</h1>
    <p><a href="../../Abschnitt_32/Video-Section/index.php">32</a></p>
  </nav>
  <section id="0" class="section_index">
    <div>
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. Strings Verbinden . </a></li>
        <li><a href="#2">02. Auf einzelne Zeichen von Strings zugreifen []</a></li>
        <li><a href="#3">03. Strings vergleichen ===</a></li>
        <li><a href="#4">04. sort/usort = Strings alphabetisch sortieren</a></li>
        <li><a href="#5">05. strlen = Stringlänge</a></li>
        <li><a href="#6">06. strpos / stripos = Stringposition</a></li>
        <li><a href="#7">07. str_replace / str_ireplace = Substring ersetzen</a></li>
        <li><a href="#8">08. substr = Stringteile ausschneiden</a></li>
        <li><a href="#9">09. strtolower und strtoupper = Klein und Großschreibung</a></li>
        <li><a href="#10">10. trim = Stringleerzeichen / Zeichen entfernen</a></li>
        <li><a href="#11">11. explode = Array/Strings Strings trennen</a></li>
        <li><a href="#12">12. implode = Array/Strings zusammenfügen</a></li>
        <li><a href="#13">13. str_split = String in Teile aufteilen</a></li>
        <li><a href="#14">14. strtok = String in einzelne Teile brechen ohne array</a></li>
        <li><a href="#15">15. strcmp / strcasecmp = Strings Alphabetisch vergleichen</a></li>
        <li><a href="#16">16. nl2br = Konsolezeilenumbruch \n für Hmtl < br > Umwandeln</a></li>
        <li><a href="#17">17. str_word_count = Wörter Zählen</a></li>
        <li><a href="#18">18. substr_count = Gleiche Wörter in einem String zählen</a></li>
        <li><a href="#19">19. strstr = Ausgabe ab einen gewissen Wort</a></li>
        <li><a href="#20">20. str_contains = Prüft ob gewisser Substring im string enthalten ist</a></li>
        <li><a href="#21">21. str_starts_with und str_ends_with = Prüft wie ein Substring anfängt oder endet</a></li>
      </ul>
      </div>
      <div class="box_abschnitte">
      <h2>Abschnitte</h2>
      <ul>
        <li><a href="../../Abschnitt_30/Video-Section/index.php">30_Operatoren in PHP</a></li>
        <li>31_Arbeiten mit String</li>
        <li><a href="../../Abschnitt_32/Video-Section/index.php">32_Fallunterscheidung</a></li>
        <li><a href="../../Abschnitt_33/Video-Section/index.php">33_Schleifen in PHP</a></li>
        <li><a href="../../Abschnitt_34/Video-Section/index.php">34_Arrays in PHP</a></li>
        <li><a href="../../Abschnitt_35/Video-Section/index.php">35_Superglobale Arrays</a></li>
        <li><a href="../../Abschnitt_36/Video-Section/index.php">36_Mathematische Funktionen</a></li>
        <li><a href="../../Abschnitt_37/Video-Section/index.php">37_Zufallszahlen generieren</a></li>
      </ul>
    </div>
  </section>

  <!-- 1. String miteinander Verbinden -->
  <section id="1" class="section">
    <div class="text-box">
      <h2>1. Strings Verbinden .</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

      <!-- Strings Verbinden -->
      <div class="box">
        <h4>String Verbinden</h4>
        <?php 
          $var = "Vollkommen ist gleich ";
          $var2 = "34 Göttliche Protokolle";
        ?>
        <p>$var = "Vollkommen ist gleich"<br>$var2 = "34 Göttliche Protokolle" <br>echo $var . $var2 = <span><?= $var . $var2 ?></span></p>
      </div>
    </div>
  </section>

  <!-- 2. Auf einzelne Zeichen von Strings zugreifen -->
  <section id="2" class="section">
    <div class="text-box">
      <h2>2. Auf einzelne Zeichen von Strings zugreifen []</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
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
  <section id="3" class="section">
    <div class="text-box">
      <h2>3. Vergleichen von Strings</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
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
  <section id="4" class="section">
    <div class="text-box">
      <h2>4. Strings alphabetisch sortieren</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
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
        <p>$array = ["F", "C", "B", "D", "E", "aaaa"]<br>sort($array)<br>var_export($array) = <span><?php var_export($array) ?></span></p>
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
        <p>$array1 = ["F", "C", "B", "D", "E", "aaaa"]<br>usort($array1, function($a, $b){return strtolower($a) <=> strtolower($b);});<br>var_export($array1) = <span><?php var_export($array1) ?></span></p>
        <p>strtolower = Zeichenkette in Kleinbuchstaben umwandeln</p>
      </div>
    </div>
  </section>

  <!-- 5. Stringlänge strlen -->
  <section id="5" class="section">
    <div class="text-box">
      <h2>5. Stringlänge strlen</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
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
  <section id="6" class="section">
    <div class="text-box">
      <h2>6. Stringposition strpos - stripos</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
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
        <p>$message3 = "Sei Gerecht auf alles"<br>$position3 = stripos($message3, "gerecht",3) <br> die 3 Bedeutet - Fängt bei index 3 zu suchen an <br>echo $position3 = <span><?= $position3 ?></span></p>
        <p>++ stripos - Ignoriert Groß und kleinbuchstaben ++</p>
      </div>
    </div>
  </section>

  <!-- 7. Wort ersetzen mit str_replace -->
  <section id="7" class="section">
    <div class="text-box">
      <h2>7. Wort / Zahl ersetzen str_replace - str_ireplace</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
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
        <p>$nachricht1 = "Logik ist ein Wert von 12 Werten" <br> $string1 = str_replace("Logik", "Tapferkeit", $nachricht1, $count) <br>echo $string1 . "br" . "Wieviel Wörter wurden ersetzt: " . $count = <br> <span><?= $string1 . "<br>" . "Wieviel Wörter wurden ersetzt: " . $count  ?></span></p>
        <p>++ Achtet auf Groß oder Kleinschreibung ++</p>
      </div>

       <!-- str_replace -->
      <div class="box">
        <h4>str_replace ( mehrere Wörter / Zahlen )</h4>
        <?php 
          $nachricht2 = "Logik ist ein Wert von 12 Werten";
          $string2 = str_replace(["Logik", "ein"], ["Selbsterkennung",1,], $nachricht2, $count1);
          
        ?>
        <p>$nachricht2 = "Logik ist ein Wert von 12 Werten" <br> $string2 = str_replace(["Logik", "ein"], ["Selbsterkennung",1,], $nachricht2, $count1) <br> echo $string2 . "br" . "Wieviel Wörter wurden ersetzt: " . $count = <br> <span><?= $string2 . "<br>" . "Wieviel Wörter wurden ersetzt: " .$count1  ?></span></p>
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

  <!-- 8. Stringteile ausschneiden substr-->
  <section id="8" class="section">
    <div class="text-box">
      <h2>8. Stringteile ausschneiden substr</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

      <!-- substr -->
      <div class="box">
        <h4>substr</h4>
        <?php 
          $nachricht8 = "Glückseligkeit ist ein Wert von 12 Werten";
          $part = substr($nachricht8, 0,15);
        ?>
        <p>$nachricht8 = "Glückseligkeit ist ein Wert von 12 Werten" <br> $part = substr($nachricht8, 0, 15) <br> -------------------------------------- <br> Beginnt bei 0 bis zeichen 15 (15 wegen dem ü) <br>echo $part = <span><?= $part ?></span></p>
      </div>

      <!-- substr -->
      <div class="box">
        <h4>substr von hinten ("-" Wert)</h4>
        <?php 
          $message8 = "Wahrheit ist ein Wert von 12 Werten";
          $part1 = substr($message8, -18, 4);
        ?>
        <p>$message8 = "Wahrheit ist ein Wert von 12 Werten" <br> $part1 = substr($message8, -18, 4) <br> -------------------------------------- <br> von hinten -18 zeichen und 4 Zeichen nach vorne <br> echo $part1 = <span><?= $part1 ?></span></p>
      </div>
    </div>
  </section>

  <!-- 9. Groß und Kleinschreibung strtolower und strtoupper -->
  <section id="9" class="section">
    <div class="text-box">
      <h2>9. Klein und Großschreibung strtolower und strtoupper</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

      <!-- strtolower -->
      <div class="box">
        <h4>strtolower</h4>
        <?php 
          $nachricht9 = "Der Unrechtsstaat ist klein";
          $klein = strtolower($nachricht9);
          $nachricht10 = "Der Unrechsstaat ist kleiner wie eine Bakterie";
        ?>
        <p>$nachricht9 = "Der Unrechtsstaat ist klein" <br> $klein = strtolower($nachricht9) <br> -------------------------------------- <br>echo $klein = <span><?= $klein ?></span></p>
        <p> -------------------------------------- </p>
        <p>$nachricht10 = "Der Unrechsstaat ist kleiner wie eine Bakterie" <br> echo strtolower($nachricht10) = <span><?= strtolower($nachricht10) ?></span> </p>
      </div>

      <!-- strtoupper -->
      <div class="box">
        <h4>strtoupper</h4>
        <?php 
          $nachricht11 = "Der Vollkommene Mann zeigt Größe";
          $groß = strtoupper($nachricht11);
          $nachricht12 = "Der Vollkommene Mann ist Iosif"
        ?>
        <p>$nachricht11 = "Der Vollkommene Mann zeigt Größe" <br> $groß = strtoupper($nachricht11) <br> -------------------------------------- <br>echo $groß = <span><?= $groß ?></span></p>
        <p> -------------------------------------- </p>
        <p>$nachricht11 = "Der Vollkommene Mann ist Iosif" <br> echo strtoupper($nachricht12) = <span><?= strtoupper($nachricht12) ?></span> </p>
      </div>

    </div>
  </section>

  <!-- 10. Stringzeichen entfernen mit trim -->
  <section id="10" class="section">
    <div class="text-box">
      <h2>10. Stringleerzeichen / Zeichen entfernen mit trim - ltrim - rtrim</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

      <!-- trim -->
      <div class="box">
        <h4>trim</h4>
        <?php 
          $mitLeerzeichen = " Ethik ist ein Wert von 12 Werten ";
          $ohneLeerzeichen = trim($mitLeerzeichen);
        ?>
        <p>$mitLeerzeichen = " Ethik ist ein Wert von 12 Werten " <br> $ohneLeerzeichen = trim($mitLeerzeichen); <br> -------------------------------------- <br> var_dump($ohneLeerzeichen) = <span><?php var_dump($ohneLeerzeichen); ?></span></p>
        <p>var_dump($mitLeerzeichen) = <span><?php var_dump($mitLeerzeichen); ?></span></p>
        <p>Für Datenbanken um leerzeichen zu vermeiden</p>
      </div>

      <!-- trim Zeichen-->
      <div class="box">
        <h4>trim Zeichen</h4>
        <?php 
          $mitZeichen = "!?Ethik ist ein Wert von 12 Werten!! %";
          $ohneZeichen = trim($mitZeichen,"?!% ");
        ?>
        <p>$mitZeichen = "!?Ethik ist ein Wert von 12 Werten!! %" <br> $ohneZeichen = trim($mitZeichen,"?!% "); <br> -------------------------------------- <br> var_dump($ohneZeichen) = <span><?php var_dump($ohneZeichen); ?></span></p>
        <p>var_dump($mitZeichen) = <span><?php var_dump($mitZeichen); ?></span></p>
        
      </div>

      <!-- ltrim Vorne ohne Zeichen-->
      <div class="box">
        <h4>ltrim left ohne Zeichen</h4>
        <?php 
          $mitZeichen1 = "!?Ethik ist ein Wert von 12 Werten!! %";
          $vorneOhneZeichen = ltrim($mitZeichen1,"?!% ");
        ?>
        <p>$mitZeichen1 = "!?Ethik ist ein Wert von 12 Werten!! %" <br> $vorneOhneZeichen = ltrim($mitZeichen1,"?!% "); <br> -------------------------------------- <br> var_dump($mitZeichen1) = <span><?php var_dump($mitZeichen1); ?></span> </p>
        <p>var_dump($vorneOhneZeichen) = <span><?php var_dump($vorneOhneZeichen); ?></span></p>
        
      </div>

      <!-- rtrim Hinten ohne Zeichen-->
      <div class="box">
        <h4>rtrim right ohne Zeichen</h4>
        <?php 
          $mitZeichen2 = "!?Ethik ist ein Wert von 12 Werten!! %";
          $hintenOhneZeichen = rtrim($mitZeichen2,"?!% ");
        ?>
        <p>$mitZeichen2 = "!?Ethik ist ein Wert von 12 Werten!! %" <br> $hintenOhneZeichen = rtrim($mitZeichen2,"?!% "); <br> -------------------------------------- <br> var_dump($mitZeichen2) = <span><?php var_dump($mitZeichen2); ?></span> </p>
        <p>var_dump($hintenOhneZeichen) = <span><?php var_dump($hintenOhneZeichen); ?></span></p>
        
      </div>
    </div>
  </section>

  <!-- 11. String miteinander Verbinden -->
  <section id="11" class="section">
    <div class="text-box">
      <h2>11. Strings trennen mit explode</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

      <!-- explode -->
      <div class="box">
        <h4>explode</h4>
        <?php 
          $werte = "Harmonie,Gleichheit,Gerechtigkeit,Tapferkeit,Glückseligkeit,Logik,Ethik";
          $trennen = explode(",",$werte);

        ?>
        <p>$werte = "Harmonie,Gleichheit,Gerechtigkeit,Tapferkeit,Glückseligkeit,Logik,Ethik"<br>$trennen = explode(",",$werte) <br> var_export($trennen) = <span><?php var_export($trennen);  ?></span></p>
      </div>

      <!-- explode Index -->
      <div class="box">
        <h4>explode index abrufen []</h4>
        <?php 
          $werte1 = "Harmonie,Gleichheit,Gerechtigkeit,Tapferkeit,Glückseligkeit,Logik,Ethik";
          $trennen1 = explode(",",$werte1);

        ?>
        <p>$werte1 = "Harmonie,Gleichheit,Gerechtigkeit,Tapferkeit,Glückseligkeit,Logik,Ethik"<br>$trennen1 = explode(",",$werte1) <br> var_export($trennen1[2]) = <span><?php var_export($trennen1[2]);  ?></span></p>
      </div>

      <!-- explode Anzahl der Trennungen -->
      <div class="box">
        <h4>explode Anzahl der Trennungen</h4>
        <?php 
          $werte2 = "Harmonie,Gleichheit,Gerechtigkeit,Tapferkeit,Glückseligkeit,Logik,Ethik";
          $trennen2 = explode(",",$werte2, 3);

        ?>
        <p>$werte2 = "Harmonie,Gleichheit,Gerechtigkeit,Tapferkeit,Glückseligkeit,Logik,Ethik"<br>$trennen2 = explode(",",$werte2, 3) <br> var_export($trennen2) = <span><?php var_export($trennen2);  ?></span></p>
      </div>
    </div>
  </section>

  <!-- 12. Array zusammenfügen mit implode -->
  <section id="12" class="section">
    <div class="text-box">
      <h2>12. Zusammenfügen mit implode</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

      <!-- implode -->
      <div class="box">
        <h4>implode</h4>
        <?php 
          $werte7 = "Harmonie,Gleichheit,Gerechtigkeit,Tapferkeit,Glückseligkeit,Logik,Ethik";
          $trennen3 = explode(",",$werte7);
          $verbinden = implode("/",$trennen3)

        ?>
        <p>$werte7 = "Harmonie,Gleichheit,Gerechtigkeit,Tapferkeit,Glückseligkeit,Logik,Ethik"<br>$trennen3 = explode(",",$werte7) <br> var_export($trennen3) = <span><?php var_export($trennen3);  ?></span></p>
        <p>--------------------------------------</p>
        <p>$verbinden = implode("/",$trennen3) <br> var_dump($verbinden) = <span><?php var_dump($verbinden); ?></span></p>
      </div>

      <!-- implode -->
      <div class="box">
        <h4>implode</h4>
        <?php 
          $array2 = [0,1,6,"eins"];
          
          $verbinden1 = implode("",$array2)

        ?>
        <p>$array2 = [0,1,6,"eins"]<br>$verbinden1 = implode("",$array2)</p>
        <p>var_dump($array2) = <span><?php var_dump($array2) ?></span></p>
        <p> var_dump($verbinden1) = <span><?php var_dump($verbinden1);  ?></span></p>
        
      </div>

    </div>
  </section>

  <!-- 13. String in Teile aufteilen str_split -->
  <section id="13" class="section">
    <div class="text-box">
      <h2>13. String in Teile aufteilen str_split</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

      <!-- str_split mit Aufteilung -->
      <div class="box">
        <h4>str_split mit Aufteilung</h4>
        <?php 
          $werte3 = "Gunst,Freiheit,Aesthetik";
          $split = str_split($werte3,5);
        ?>

        <p>$werte3 = "Gunst,Freiheit,Ästhetik"<br>$split = str_split($werte3, 5) <br>str_split($werte3, Zeichenanzahl für Aufteilung) <br> var_dump($split)<span><?php var_dump($split);  ?></span></p>
       </div>

       <!-- str_split gleichegroße Aufteilung -->
      <div class="box">
        <h4>str_split gleichegroße Aufteilung</h4>
        <?php 
          $werte4 = "Logik,Gunst";
          $split1 = str_split($werte4);
        ?>

        <p>$werte4 = "Logik,Gunst" <br>$split1 = str_split($werte4) <br> var_export($split1)<span><?php var_export($split1);  ?></span></p>
       </div>

    </div>
  </section>

  <!-- 14. String in einzelne Teile brechen mit strtok  -->
  <section id="14" class="section">
    <div class="text-box">
      <h2>14. String in einzelne Teile brechen ohne array mit strtok</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

      <!-- strtok -->
      <div class="box">
        <h4>strtok</h4>
        <?php 
          $werte5 = "Gunst,Freiheit,Logik,Wahrheit";
  
        ?>

        <p>$werte5 = "Gunst,Freiheit,Logik,Wahrheit"<br> echo strtok($werte5, ",") = <span><?= strtok($werte5, ",");  ?></span></p>
        <p>echo strtok(",") = <span><?= strtok(",")  ?></span></p>
        <p>echo strtok(",") = <span><?= strtok(",")  ?></span></p>
        <p>echo strtok(",") = <span><?= strtok(",")  ?></span></p>
        
       </div>

      <!-- strtok in Variablen Speichern -->
      <div class="box">
        <h4>strtok in Variablen Speichern</h4>
        <?php 
          $werte5 = "Gunst,Freiheit,Logik,Wahrheit";
          $wort = strtok($werte5, ",");
          $wort1 = strtok(",");
          $wort2 = strtok(",");
          $wort3 = strtok(",");
  
        ?>
        <p>$werte5 = "Gunst,Freiheit,Logik,Wahrheit"<br> $wort = strtok($werte5, ",") <br> $wort1 = strtok(",") <br> $wort2 = strtok(",") <br> $wort3 = strtok(",") </p>
        <p>echo $wort . " " . $wort1 . " " . $wort2 . " " . $wort3 = <span><?= $wort . " " . $wort1 . " " . $wort2 . " " . $wort3  ?></span></p>
      </div>

    </div>
  </section>

  <!-- 15. Strings Alphabetisch vergleichen strcmp / strcasecmp  -->
  <section id="15" class="section">
    <div class="text-box">
      <h2>15. Strings Alphabetisch vergleichen strcmp / strcasecmp</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <a href="https://www.charset.org/utf-8" target="_blank" rel="noopener noreferrer">Unicode UTF-8 - Zeichentabelle</a>
    </div>
    <div class="inhalt-container">

      <!-- strcmp -->
      <div class="box">
        <h4>strcmp Ausgabe -1</h4>
        <?php 
          $str1 = "Menschen";
          $str2 = "Ort";
          $vergleich = strcmp($str1,$str2);
        ?>

        <p>$str1 = "Menschen"<br> $str2 = "Ort" <br> $vergleich = strcmp($str1,$str2) <br> echo $vergleich = <span><?= $vergleich  ?></span></p>
        <p>-1 da der erste Wert kleiner ist als der Zweite</p>
        <p>Alphabetisch ist kleiner zb. M ist kleiner als O da laut der Tabelle M=77 und O=79 ist.</p>
      </div>

      <!-- strcmp -->
      <div class="box">
        <h4>strcmp Ausgabe 0 </h4>
        <?php 
          $str3 = "Menschen";
          $str4 = "Menschen";
          $vergleich0 = strcmp($str3,$str4);
        ?>

        <p>$str3 = "Menschen"<br> $str4 = "Menschen" <br> $vergleich0 = strcmp($str3,$str4) <br> echo $vergleich0 = <span><?= $vergleich0  ?></span></p>
        <p>0 da beide Werte Gleich sind</p>
      </div>

      <!-- strcmp -->
      <div class="box">
        <h4>strcmp Ausgabe 1</h4>
        <?php 
          $str5 = "A";
          $str6 = "Z";
          $vergleich1 = strcmp($str6,$str5);
        ?>

        <p>$str5 = "A"<br> $str6 = "Z" <br> $vergleich1 = strcmp($str6,$str5) <br> echo $vergleich1 = <span><?= $vergleich1  ?></span></p>
        <p>1 da der erste angegebene Wert größer ist als der Zweite</p>
        <p>Alphabetisch ist Größer zb. Z ist größer als A da laut der Tabelle A=65 und Z=90 ist.</p>
      </div>

      <!-- strcasecmp -->
      <div class="box">
        <h4>strcasecmp Differenz</h4>
        <?php 
          $str7 = "A";
          $str8 = "Z";
          $vergleich2 = strcasecmp($str7,$str8);
        ?>

        <p>$str7 = "A"<br> $str8 = "Z" <br> $vergleich2 = strcasecmp($str7,$str8) <br> echo $vergleich2 = <span><?= $vergleich2  ?></span></p>
        <p>-25 Da die differenz Zwischen A und Z 25 zeichen sind. A=65 - Z=90 = -25</p>
      </div>

    </div>
  </section>

  <!-- 16. Konsolezeilenumbruch \n für Hmtl < br > Umwandeln nl2br  -->
  <section id="16" class="section">
    <div class="text-box">
      <h2>16. Konsolezeilenumbruch \n für Hmtl < br > Umwandeln nl2br </h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

    <!-- nl2br -->
      <div class="box">
        <h4>nl2br</h4>
        <?php 
          $text = "Zeilenumbruch\nBeginn neue Zeile";
        ?>

        <p>$text = "Zeilenumbruch\nBeginn neue Zeile" <br> echo nl2br($text) = <span><?= nl2br($text)  ?></span></p>
        
      </div>

      <!-- nl2br in Variable -->
      <div class="box">
        <h4>nl2br in variable Speichern</h4>
        <?php 
          $text1 = "Zeilenumbruch\nBeginn neue Zeile";
          $text2 = nl2br($text1);
        ?>

        <p>$text1 = "Zeilenumbruch\nBeginn neue Zeile"<br> $text2 = nl2br($text1); <br> echo $text2 = <span><?= $text2  ?></span></p>
        
      </div>
    </div>
  </section>

  <!-- 17. Wörter Zählen mit str_word_count  -->
  <section id="17" class="section">
    <div class="text-box">
      <h2>17. Wörter Zählen mit str_word_count</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

    <!-- str_word_count -->
      <div class="box">
        <h4>str_word_count</h4>
        <?php 
          $text3 = "Dieser String hat 4 Woerter";
          $word = str_word_count($text3);

        ?>
        <p>$text3 = "Dieser String hat 4 Woerter"<br> $word = str_word_count($text3) <br> var_dump($word) = <span><?php var_dump($word); ?></span></p>
        </div>

      <!-- str_word_count -->
      <div class="box">
        <h4>str_word_count Array</h4>
        <?php 
          $text4 = "Dieser String hat 4 Woerter";
          $word1 = str_word_count($text4,1);

        ?>
        <p>$text4 = "Dieser String hat 4 Woerter"<br> $word1 = str_word_count($text4,1) (1 = gibt ein Array zurück mit allen Wörtern) <br> var_dump($word1) = <span><?php var_dump($word1); ?></span></p>
        <p>Bei umlauten wie ÄÖÜ wird das Wort getrennt: Wörter = (W) (rter)</p>
      </div>

      <!-- str_word_count -->
      <div class="box">
        <h4>str_word_count Charlist</h4>
        <?php 
          $text5 = "Üben,Änderung,Öffnen";
          $word2 = str_word_count($text5,1, "ÖÜÄ");

        ?>
        <p>$text5 = "Üben,Änderung,Öffnen"<br> $word2 = str_word_count($text5,1, "ÜÄÖ") (1 = gibt ein Array zurück mit allen Wörtern),(ÜÄÖ = Charlist, welches er nicht entfernen soll)  <br> var_dump($word2) = <span><?php var_dump($word2); ?></span></p>
        <p>Groß und Kleinschreibung wird beachtet ÄÖÜäöü</p>
      </div>

    </div>
  </section>

  <!-- 18. Gleiche Wörter in einem String zählen mit substr_count  -->
  <section id="18" class="section">
    <div class="text-box">
      <h2>18. Gleiche Wörter in einem String zählen mit substr_count</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

    <!-- substr_count -->
      <div class="box">
        <h4>substr_count</h4>
        <?php 
          $string8 = "Wie oft oft kommt ein Wort in einem String vor";
          $count = substr_count($string8, "oft");

        ?>
        <p>$string8 = "Wie oft oft kommt ein Wort in einem String vor" <br>echo substr_count($string8, "oft") = <span><?php echo substr_count($string8, "oft") ?></span></p>
        <p>kann auch in einer Variable gespeichert werden <br> $count = substr_count($string8, "oft") <br> echo $count = <span><?php echo $count ?></span> </p>
      </div>

        <!-- substr_count -->
      <div class="box">
        <h4>substr_count Zeichenlänge</h4>
        <?php 
          $count1 = substr_count($string8, "oft" ,7);

        ?>
        <p>$count1 = substr_count($string8, "oft" ,7) <br> ( 1. Argument = Variable , 2. Argument = welches Wort ich suche, 3. Argument = Startindex ab Zeichenlänge) <br> echo $count1 = <span><?php echo $count1 ?></span></p>
      </div>

    </div>
  </section>

  <!-- 19. Ausgabe ab einen gewissen Wort (needle) mit strstr  -->
  <section id="19" class="section">
    <div class="text-box">
      <h2>19. Ausgabe ab einen gewissen Wort (needle) mit strstr</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

    <!-- strstr nach dem Needle -->
      <div class="box">
        <h4>strstr nach dem Needle</h4>
        <?php 
          $str9 = "Ausgabe ab einen bestimmten Wort, Ab hier";
        ?>
        <p>$str9 = "Ausgabe ab einen bestimmten Wort, Ab hier" <br>(1. Argument = variable, 2.Argument = needle) <br> echo strstr($str9, "Ab") = <span><?php echo strstr($str9, "Ab") ?></span></p>
      </div>

      <!-- strstr vor dem Needle -->
      <div class="box">
        <h4>strstr vor dem Needle</h4>
        <?php 
          $str10 = "Ausgabe vor einen bestimmten Wort, Ab hier";
        ?>
        <p>$str10 = "Ausgabe vor einen bestimmten Wort, Ab hier" <br>(3. Argument = boolean ) <br> echo strstr($str10,"Ab", true) = <span><?php echo strstr($str10, "Ab", true) ?></span></p>
        <p>"true" = vor dem needle (needle wird nicht angezeigt) <br> "false" = nach dem needle(needle wird angezeigt)</p>
      </div>

    </div>
  </section>

  <!-- 20. Prüft ob gewisser Substring im string enthalten ist mit str_contains  -->
  <section id="20" class="section">
    <div class="text-box">
      <h2>20. Prüft ob gewisser Substring im string enthalten ist mit str_contains</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

    <!-- str_contains -->
      <div class="box">
        <h4></h4>
        <?php 
          $string9 = "Hallo String, ich suche nach dem Substring";
        ?>
        <p>$string9 = "Hallo String, ich suche nach dem Substring";<br>var_dump(str_contains($string9,"Substring")) = <span><?php var_dump(str_contains($string9,"Substring")); ?></span></p>
        <p>"true" wenn der gesuchte Substring im String vorhanden ist, ansonsten wird "false" ausgegeben</p>
        <p> case-sensitiv = Groß und Kleinschreibung wird beachtet</p>
      </div>
    </div>
  </section>

  <!-- 21. str_starts_with und str_ends_with -->
  <section id="21" class="section">
    <div class="text-box">
      <h2>21. Prüft wie ein Substring anfängt oder endet str_starts_with und str_ends_with </h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>
    <div class="inhalt-container">

    <!-- str_starts_with -->
      <div class="box">
        <h4>str_starts_with</h4>
        <?php 
          $string10 = "Hallo String, ich starte und ende mit hallo";
        ?>
        <p>$string10 = "Hallo String, ich starte und ende mit hallo";<br>var_dump(str_starts_with($string10,"Hallo")) = <span><?php var_dump(str_starts_with($string10,"Hallo")); ?></span></p>
        
      </div>

      <!-- str_ends_with -->
      <div class="box">
        <h4>str_ends_with</h4>
        <p>var_dump(str_ends_with($string10,"Hallo")) = <span><?php var_dump(str_ends_with($string10,"Hallo")); ?></span></p>
        <p>case-sensitiv deswegen "false" bei str_ends_with <br> bei "o" würde es "true" ausgeben</p>
       
      </div>
    </div>
  </section>

  
</body>
</html>
