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
    <p><a href="../../Abschnitt_38/Video-Section/index.php">37</a></p>
    <h1>Abschnitt 39</h1>
    <p><a href="../../Abschnitt_40/Video-Section/index.php">39</a></p>
  </nav>
  <section id="0" class="section_index">
    <div>
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. Typedeklaration in Funktionen</a></li>
        <li><a href="#2">02. Sensitive Parameter</a></li>
        <li><a href="#3">03.</a></li>
        <li><a href="#4">04.</a></li>
        <li><a href="#5">05.</a></li>
        <li><a href="#6">06. </a></li>
        <li><a href="#7">07. </a></li>
        <li><a href="#8">08. </a></li>
        <li><a href="#9">09. </a></li>
        <li><a href="#10">10. </a></li>
        <li><a href="#11">11.</a></li>
        
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
        <li>39_Typedeklaration in Funktionen</li>
      </ul>
    </div>
  </section>

<!-- 01. Typedeklaration in Funktionen -->
  <section id="1" class="section">
    <div class="text-box">
      <h2>01. Typedeklaration in Funktionen</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
         $text = text(38, "Matthias");
        ?>
        <p>$text = text(38, "Matthias");</p>

        <h4>welchen Datentyp die function <br> zurückgeben erlaubt = doppelpunkt <span class="grün">:</span> und Typ</h4>
        <h4>Typdeklarationen</h4>
        <p><span class="rot">string</span> – Zeichenketten/Text (z. B. "Matthias")</p>
        <p><span class="rot">int</span> – Ganzzahlen (z. B. 38 oder -5)</p>
        <p><span class="rot">float</span> – Gleitkommazahlen (z. B. 3.8 oder 10.5)</p>
        <p><span class="rot">bool</span> – Wahrheitswerte (true oder false)</p>
        <p><span class="rot">array</span> – Listen von Daten</p>
        <p><span class="rot">object</span> – Instanzen von Klassen</p>
        <p><span class="rot">callable</span> – Funktionen oder Methoden (Callbacks)</p>
        <p><span class="rot">iterable</span> – Alles, was mit foreach durchlaufbar ist (Arrays/Generatoren)</p>
        <p><span class="rot">mixed</span> – Akzeptiert jeden Datentyp (PHP 8.0+)</p>
        <p><span class="rot">void</span> – Gibt absolut nichts zurück (nur als Rückgabetyp)</p>
        <p><span class="rot">never</span> – Bricht das Skript hart ab (nur als Rückgabetyp, PHP 8.1+)</p>
        <p><span class="rot">null</span> – Repräsentiert eine leere Variable</p>
        <p><span class="rot">false</span> – Kann als spezifischer Rückgabetyp genutzt werden (PHP 8.0+)</p>
       </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function text(int $alter, string $name) :string {
          return "Hallo, ich bin $alter und mein Name ist $name";
        }

            
        ?>

        <div class="code-container">
          <pre>
            function text(<span class="rot">int</span> $alter, <span class="rot">string</span> $name) <span class="grün">:</span><span class="rot">string</span>{
              return "Hallo, ich bin $alter und mein Name ist $name";
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
  
          <tr>
            <td class="noFlex"><p>echo $text</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $text
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 02. Sensitive Parameter -->
  <section id="2" class="section">
    <div class="text-box">
      <h2>02. Sensitive Parameter</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <h4>Variablen</h4>
      <p>$errorMessage = "";<br> $errorTrace = "";</p>
      <h4>Hinweis</h4>
      <p><span class="orange">Sensitiv</span> Parameter erscheinen nicht in der Fehlermeldung</p>
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function login(string $username, #[SensitiveParameter] string $password) {
          // Simuliere einen Fehler
          throw new Exception("Fehler beim Login");
        }

        try{
          login("benutzer", "geheim");
        } catch (Exception $e){
          $errorMessage = $e->getMessage() . "\n";
          $errorTrace = $e->getTraceAsString();
        }

            
        ?>

        <div class="code-container">
          <pre>
            function login(string $username, <span class="orange">#[SensitiveParameter]</span> string $password) {
              // Simuliere einen Fehler
              throw new Exception("Fehler beim Login");
            }

            try{
              login("benutzer", "geheim");
            } catch (Exception $e){
              $errorMessage = $e->getMessage() . "\n";
              $errorTrace = $e->getTraceAsString();
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
  
          <tr>
            <td class="noFlex"><p>echo $errorMessage;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $errorMessage;
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo $errorTrace;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $errorTrace;
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>
</body>
</html>