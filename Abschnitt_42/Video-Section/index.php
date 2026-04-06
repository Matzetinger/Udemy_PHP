
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
    <p><a href="../../Abschnitt_40_u_41/Video-Section/index.php">40_u_41</a></p>
    <h1>Abschnitt 42</h1>
    <p><a href="../../Abschnitt_43/Video-Section/index.php">43</a></p>
  </nav>
  <section id="0" class="section_index">
    <div>
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. getdate()</a></li>
        <li><a href="#2">02. date()</a></li>
        <li><a href="#3">03. Objektorientierte Version mit DateTime</a></li>
        <li><a href="#4">04. </a></li>
        <li><a href="#5">05. </a></li>
        <li><a href="#6">06. </a></li>
        <li><a href="#7">07.</a></li>
        
      </ul>
    </div>
    <div class="box_abschnitte">
      <h2>Abschnitte</h2>
      <ul>
        <li><a href="../../Abschnitt_30/Video-Section/index.php">30_Operatoren in PHP</a></li>
        <li><a href="../../Abschnitt_31/Video-Section/index.php">31_Arbeiten mit String</a></li>
        <li><a href="../../Abschnitt_32/Video-Section/index.php">32_Fallunterscheidung</a></li>
        <li><a href="../../Abschnitt_33/Video-Section/index.php">33_Schleifen in PHP</a></li>
        <li><a href="../../Abschnitt_34/Video-Section/index.php">34_Arrays in PHP</a></li>
        <li><a href="../../Abschnitt_35/Video-Section/index.php">35_Superglobale Arrays</a></li>
        <li><a href="../../Abschnitt_36/Video-Section/index.php">36_Mathematische Funktionen</a></li>
        <li><a href="../../Abschnitt_37/Video-Section/index.php">37_Zufallszahlen generieren</a></li>
        <li><a href="../../Abschnitt_38/Video-Section/index.php">38_Funktionen in PHP</a></li>
        <li><a href="../../Abschnitt_38/Video-Section/index.php">39_Typedeklaration in Funktionen</a></li>
        <li><a href="../../Abschnitt_40_u_41/Video-Section/index.php">40_Das Arbeiten mit Formularen <br> 41_Formularvalidierung</a></li>
        <li>42_Datum & Uhrzeit</li>
      </ul>
    </div>
  </section>

<!-- 01. getdate()-->
  <section id="1" class="section">
    <div class="text-box">
      <h2>01. getdate()</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
         $date = getdate();
        ?>
        <p>$date = <span class="orange">getdate()</span>;</p>
    </div>

    <div class="inhalt-container">
      <div class="box">

        <!-- Code und Ausgabe -->
        <h4>Code und Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>print_r(<span class="orange">$date</span>);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                print_r($date);
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex">
            <pre>
              foreach (<span class="orange">$date</span> as $index => $wert) {
                echo $index . ": " . $wert . "< br >";
              };
            </pre>
            </td>

            <td class="noFlex"><p> = </p></td>

            <td class="noFlex">
              <span><?php 
                foreach ($date as $index => $wert) {
                  echo $index . ": " . $wert . "<br>";
                };
                
              ?></span>
            </td>
          </tr>
          
          <tr>
            <td class="noFlex">
              <p>
                echo "Es ist " . <span class="orange">$date["weekday"]</span> . " der " . <span class="orange">$date["mday"]</span> . ". " . <span class="orange">$date["month"]</span> . " " . <span class="orange">$date["year"]</span>;
              </p>
            </td>

            <td class="noFlex"><p> = </p></td>

            <td class="noFlex">
              <span><?php 
                echo "Es ist " . $date["weekday"] . " der " . $date["mday"] . ". " . $date["month"] . " " . $date["year"];
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 02. date()-->
  <section id="2" class="section">
    <div class="text-box">
      <h2>02. date()</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <h4>Hinweise</h4>
        <p><strong>Tag</strong><br>
        d = Tag des Monats, 2-stellig (01 bis 31)<br>
        D = Wochentag, kurz (Mon bis Sun)<br>
        j = Tag des Monats ohne führende Null (1 bis 31)<br>
        l = Wochentag lang (Monday bis Sunday)<br>
        N = ISO-8601 Wochentag (1 = Montag, 7 = Sonntag)<br>
        w = Wochentag numerisch (0 = Sonntag, 6 = Samstag)<br>
        z = Tag des Jahres (0 bis 365)
        </p>

        <p><strong>Monat</strong><br>
        F = Monat lang (January bis December)<br>
        m = Monat 2-stellig (01 bis 12)<br>
        M = Monat kurz (Jan bis Dec)<br>
        n = Monat ohne führende Null (1 bis 12)<br>
        t = Anzahl Tage im Monat
        </p>

        <p><strong>Jahr</strong><br>
        Y = Jahr, 4-stellig (2026)<br>
        y = Jahr, 2-stellig (26)
        </p>

        <p><strong>Stunden</strong><br>
        H = Stunde, 24h mit führender Null (00 bis 23)<br>
        h = Stunde, 12h mit führender Null (01 bis 12)<br>
        G = Stunde, 24h ohne führende Null (0 bis 23)<br>
        g = Stunde, 12h ohne führende Null (1 bis 12)<br>
        A = AM/PM Großbuchstaben<br>
        a = am/pm Kleinbuchstaben
        </p>

        <p><strong>Minuten & Sekunden</strong><br>
        i = Minuten (00 bis 59)<br>
        s = Sekunden (00 bis 59)<br>
        U = Unix-Timestamp (Sekunden seit 1.1.1970)
        </p>
    </div>

    <div class="inhalt-container">

      <!-- Code und Ausgabe -->
      <div class="box">
        <h4>Code und Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo date("d. F Y - H:i:s");</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo date("d. F Y - H:i:s");
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 03. Objektorientierte Version mit DateTime -->
  <section id="3" class="section">
    <div class="text-box">
      <h2>03. Objektorientierte Version mit DateTime</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
         $date = new DateTime();
         $setDate1 = new DateTime();
         
        ?>
        <p>$date = new DateTime();</p>
        <p>$setDate1 = new DateTime();</p>

      <h4>Hinweise</h4>
       <p><a href="http://php.net/manual/en/class.datetime.php" target="_blank" rel="noopener noreferrer">Date/Time in Php (Anleitung)</a></p>
       <p>Mit setDate und setTime kann ich die Zeit manuell setzen</p> 
    </div>

    <div class="inhalt-container">

      <!-- Date Format -->
      <div class="box">
      <h4>Date Format</h4>

        <?php 
          $formatDate = $date->format("D-F-Y H:i:s");
        ?>

        <div class="code-container">
          <pre>
          $formatDate = $date->format("D-F-Y H:i:s");
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>var_dump($date)</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
               var_dump($date);
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo $formatDate</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
               echo $formatDate;
              ?></span>
            </td>
          </tr>
        </table>
      </div>

      <!-- Set Date und Time -->
      <div class="box">
      <h4>Set Date und Time</h4>

        <?php 

          $setDate1->setDate(2029, 5, 11);
          $setDate1->setTime(6, 12, 36);

          $formatDate1 = $setDate1->format("D-F-Y H:i:s");
        ?>

        <div class="code-container">
          <pre>
            $setDate1->setDate(2029, 5, 11);
            $setDate1->setTime(6, 12, 36);

          $formatDate1 = $setDate1->format("D-F-Y H:i:s");
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo $formatDate1</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
               echo $formatDate1;
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>
</body>
</html>