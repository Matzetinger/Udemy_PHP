
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
        <li><a href="#2">02. date() und seine Formate</a></li>
        <li><a href="#3">03. Objektorientierte Version mit DateTime</a></li>
        <li><a href="#4">04. Zeitstempel (Timestamp) mit time() + damit rechnen</a></li>
        <li><a href="#5">05. Objektorientiert mit DateTime->getTimestamp()</a></li>
        <li><a href="#6">06. Datum von String umwandeln zu Timestamp oder Datum</a></li>
        <li><a href="#7">07. checkdate</a></li>
        <li><a href="#8">08. Deutsches Datum mit DateTime</a></li>
        
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
      
      <h4>Hinweise FORMATE</h4>
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

  <!-- 04. Zeitstempel (Timestamp) mit time() + damit rechnen -->
  <section id="4" class="section">
    <div class="text-box">
      <h2>04. Zeitstempel (Timestamp) mit time() + damit rechnen</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
         $current_time_stamp = time();
         
         $newTime = $current_time_stamp + 3600;

         $timestamp_set = 1773457657;

         
        ?>
        <p>$current_time_stamp = <span class="orange">time()</span>;</p>
        <p>$newTime = <span class="türkis">$current_time_stamp + 3600</span>;</p>
        <p>$timestamp_set = <span class="lila">17757657</span>;</p>
        
      <!-- Hinweise-->
      <h4>Hinweise</h4>
      <p>Timestamp ist die Sekundenanzahl die seid dem 1. Januar 1970 um 00:00 Uhr vergangen sind </p>
      <p><span class="türkis">3600</span> sec = 1 Std / <span class="türkis">86400</span> sec = 1 Tag</p>
      <p> Mann kann Tage abziehen oder zb. dazurechnen: <br> 3 Tage = <span class="türkis">(3 * 86400)</span> oder 2 Wochen = <span class="türkis">(2 * 7 * 86400)</span> </p>
    </div>

    <div class="inhalt-container">
      <div class="box">

        <!-- Code und Ausgabe -->
        <h4>Code und Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo <span class="orange">$current_time_stamp</span> . "Sekunden";</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $current_time_stamp . " Sekunden";
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex">
            <p> echo "Date & Time: " . date("d. F Y - H:i:s", <span class="orange">time()</span>)</p>
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo "Date & Time: " . date("d. F Y - H:i:s", time());
              ?></span>
            </td>
          </tr>
          
          <tr>
            <td class="noFlex">
            <p> echo "Date + Time + 1 Std " . date("d. F Y - H:i:s", <span class="türkis">$newTime</span>)</p>
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo "Date + 1 Std " . date("d. F Y - H:i:s", $newTime);
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex">
            <p> echo "Date & Time_set: " . date("d. F Y - H:i:s", <span class="lila">$timestamp_set</span>)</p>
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo "Date & Time_set: " . date("d. F Y - H:i:s", $timestamp_set);
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 05. Objektorientiert mit DateTime->getTimestamp() -->
  <section id="5" class="section">
    <div class="text-box">
      <h2>05. Objektorientiert mit DateTime->getTimestamp()</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 

        $time = new DateTime();

        $curren_time_stamp = $time->getTimestamp();

        ?>

      <p><span class="orange">$time</span> = new DateTime();</p>
      <p>$curren_time_stamp = <span class="orange">$time</span>->getTimestamp();</p> 
      
        
      <!-- Hinweise-->
      <h4>Hinweise</h4>
    </div>

    <div class="inhalt-container">
      <div class="box">

        <!-- Code und Ausgabe -->
        <h4>Code und Ausgabe</h4>

        <table>
          
          <tr>
            <td class="noFlex">
            <p> echo "Date & Time: " . date("d. F Y - H:i:s", $curren_time_stamp)</p>
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo "Date & Time: " . date("d. F Y - H:i:s", $curren_time_stamp);
              ?></span>
            </td>
          </tr>

        </table>
      </div>
    </div>
  </section>

  <!-- 06. Datum von String umwandeln zu Timestamp oder Datum -->
  <section id="6" class="section">
    <div class="text-box">
      <h2>06. Datum von String umwandeln zu Timestamp oder Datum</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
        
        $date_string = "2026-04-09";
        
        $date_time_string = "2026-04-09 21:08:10";

        $date1 = new DateTime($date_time_string);

        $timestamp_setting = $date1->getTimestamp();

        ?>

      <p>$date_string = <span class="lila">"2026-04-09"</span>;</p> 
      <p>---------------------------------------</p>
      <p><span class="türkis">$date_time_string</span> = "2026-04-09 21:08:10";</p> 
      <p><span class="pink">$date1</span> = new DateTime(<span class="türkis">$date_time_string</span>);</p>
      <p>$timestamp_setting = <span class="pink">$date1</span>->getTimestamp();</p>
      
        
      <!-- Hinweise-->
      <h4>Hinweise</h4>
    </div>

    <div class="inhalt-container">
      <div class="box">

        <!-- Code und Ausgabe -->
        <h4>Code und Ausgabe</h4>

        <table>
          
          <tr>
            <td class="noFlex">
            <p>echo <span class="orange">strtotime</span>(<span class="lila">$date_string</span>);</p>
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo strtotime($date_string);
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex">
            <p>echo echo $timestamp_setting;</p>
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $timestamp_setting;
              ?></span>
            </td>
          </tr>
          
        </table>
      </div>
    </div>
  </section>

  <!-- 07. checkdate -->
  <section id="7" class="section">
    <div class="text-box">
      <h2>07. checkdate</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
        
        $month = 4;
        $day = 31;
        $year = 2026;

        ?>

      <p>$month = 4; <br> $day = 31; <br> $year = 2026;</p> 
     
      
        
      <!-- Hinweise-->
      <h4>Hinweise</h4>
      <p>Prüft ob es ein gültiges Datum ist.</p>
      <p>false wenn nicht - true wenn schon</p>
    </div>

    <div class="inhalt-container">
      <div class="box">

        <!-- Code und Ausgabe -->
        <h4>Code und Ausgabe</h4>

        <table>
          
          <tr>
            <td class="noFlex">
            <p>var_dump(checkdate($month, $day, $year));</p>
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                var_dump(checkdate($month, $day, $year));
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 08. Deutsches Datum mit DateTime -->
  <section id="8" class="section">
    <div class="text-box">
      <h2>08. Deutsches Datum mit DateTime</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $datum = new DateTime();

          $wochentag = [
            "Monday"    => "Montag",
            "Tuesday"   => "Dienstag",
            "Wednesday" => "Mittwoch",
            "Thursday"  => "Donnerstag",
            "Friday"    => "Freitag",
            "Saturday"  => "Samstag",
            "Sunday"    => "Sonntag"
          ];

          $monat = [
            "January"   => "Januar",
            "February"  => "Februar",
            "March"     => "März",
            "April"     => "April",
            "May"       => "Mai",
            "June"      => "Juni",
            "July"      => "Juli",
            "August"    => "August",
            "September" => "September",
            "October"   => "Oktober",
            "November"  => "November",
            "December"  => "Dezember"
          ];

          $wochentag = $wochentag[$datum->format("l")];
          $monat = $monat[$datum->format("F")];
          $tag = $datum->format("d");
          $jahr = $datum->format("Y");
        ?>
      <p><span class ="türkis">$datum</span> = new DateTime();</p>
      <p><span class ="orange">$wochentag</span> = [ <br>
            "Monday"    => "Montag", <br>
            "Tuesday"   => "Dienstag", <br>
            "Wednesday" => "Mittwoch", <br>
            "Thursday"  => "Donnerstag", <br>
            "Friday"    => "Freitag", <br>
            "Saturday"  => "Samstag", <br>
            "Sunday"    => "Sonntag" <br>
          ]; <br>  <br>

          <span class ="orange">$monat</span> = [ <br>
            "January"   => "Januar", <br>
            "February"  => "Februar", <br>
            "March"     => "März", <br>
            "April"     => "April", <br>
            "May"       => "Mai", <br>
            "June"      => "Juni", <br>
            "July"      => "Juli", <br>
            "August"    => "August", <br>
            "September" => "September", <br>
            "October"   => "Oktober", <br>
            "November"  => "November", <br>
            "December"  => "Dezember" <br>
          ];</p>
          <p>$wochentag = <span class ="orange">$wochentag</span>[<span class ="türkis">$datum</span>->format("l")]; </p>
          <p>$monat = <span class ="orange">$monat</span>[<span class ="türkis">$datum</span>->format("F")]; </p>
          <p>$tag = <span class ="türkis">$datum</span>->format("d");</p>
          <p>$jahr = <span class ="türkis">$datum</span>->format("Y");</p>
          <p><a href="#2"> Zu den Formaten</a></p>
     
      
        
      <!-- Hinweise-->
      <h4>Hinweise</h4>
      
    </div>

    <div class="inhalt-container">
      <div class="box">

        <!-- Code und Ausgabe -->
        <h4>Code und Ausgabe</h4>

        <table>
          
          <tr>
            <td class="noFlex">
            <p>echo "$wochentag den $tag. $monat $jahr";</p>
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo "$wochentag den $tag. $monat $jahr";
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>
</body>
</html>